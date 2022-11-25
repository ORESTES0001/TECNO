<?php
class Usuarios extends Controller
{

    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(USUARIOS);
        parent::__construct();
    }

    public function index()
    {
        if (empty($_SESSION['permisosMod']['r'])) {
            header('Location:' . base_url . '/dashboard');
        }

        $data['page_name'] = "Usuarios";
        $data['function_css'] = "Usuarios.css";
        $data['function_js'] = "Usuarios.js";
        $data['function1_js'] = "inicio1.js";
        $this->views->getView($this, 'index', $data);
    }

    public function all()
    {
        $arrJson = [];
        $users=DB::SQL("SELECT u.id_usuarios, r.id, r.nombre as rol, u.nombre as nombre_usuarios, u.email, u.is_activo FROM usuarios u INNER JOIN roles r ON u.id_rol = r.id");
        if(empty($users)){
            $arrJson = ['msg'=> 'No se encontraron registros'];
        }else{
            $arrJson = $users;
        }
        echo json_encode($arrJson, JSON_UNESCAPED_UNICODE);
    }

    public function nuevo()
    {
        $data['page_name'] = "Nuevo Usuario";
        $data['function_js'] = "Usuarios.js";
        $this->views->getView($this, 'nuevo', $data);
    }

    public function editar()
    {
        $data['page_name'] = "Editar Usuario";
        $data['function_js'] = "Usuarios.js";
        $this->views->getView($this, 'editar', $data);
    }
}
