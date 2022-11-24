<?php
class Register extends Controller
{
  public function __construct()
  {
    if (isset($_SESSION['login'])) {
      header('Location:' . base_url . '/dashboard');
    }
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Registrarse al sistema';
    $data['function_js'] = 'Register.js';
    $this->views->getView($this, 'register', $data);
  }

  public function save()
  {
    $data = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      // validar
      $val = new Validations();
      $val->name('nombre')->value(limpiar($_POST['nombre']))->required();
      $val->name('email')->value(limpiar($_POST['email']))->pattern('email')->required();
      $val->name('password')->value(limpiar($_POST['password']))->min(5)->max(20)->pattern('alphanum')->equal(limpiar($_POST['rep_password']))->required();

      if($val->isSuccess()){
        $passHash = hash("sha256", limpiar($_POST['password']));
  
        $data = [
          'nombre'   => limpiar($_POST['nombre']),
          'email'    => limpiar($_POST['email']),
          'password' => $passHash,
        ];
        $idInsert = RegisterModel::insert('usuarios', $data);
        $data = ['status' => true, 'msg' => 'Registro guardado'];
      }else{
        $data = ['error' => $val->getErrors()];

      }

     
    }

    echo json_encode($data, JSON_UNESCAPED_UNICODE);
  }

  public function ingresar()
  {
    $arrJson = [];

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $val = new Validations();
      $val->name('email')->value(limpiar($_POST['email']))->pattern('email')->required();
      $val->name('password')->value(limpiar($_POST['password']))->min(5)->max(20)->pattern('alphanum')->required();


      // si todo esta bien se logea
      if ($val->isSuccess()) {
        // logearse
        $usuario = RegisterModel::login(limpiar($_POST['email']), hash("sha256", limpiar($_POST['password'])));

        if (empty($usuario)) {
          $arrJson = ['error' => 'Estas credenciales no exiten en nuestro sistema o el usuario no existe'];
        } else {
          // crear nuestras sessiones
          $_SESSION['iduser'] = $usuario['id_usuarios'];
          $_SESSION['nombre'] = $usuario['nombre'];
          $_SESSION['email'] = $usuario['email'];
          $_SESSION['login'] = true;
          Auth::sessionUser($_SESSION['iduser']);
          $arrJson = ['msg' => 'El usuario se ha logeado'];
        }
      } else {
        $arrJson = ['error' => $val->getErrors()];
      }
    }




    echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
  }
}
