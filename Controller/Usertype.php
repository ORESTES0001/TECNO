<?php
class Usertype extends Controller
{

    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(USERTYPE);
        parent::__construct();
    }

    public function index()
    {
        if (empty($_SESSION['permisosMod']['r'])) {
            header('Location:' . base_url . '/dashboard');
        }

        $data['page_name'] = "tipo de usuario";
        $data['function_css'] = "UserType.css";
        $data['function_js'] = "UserType.js";
        $data['function1_js'] = "UserType.js";
        $this->views->getView($this, 'index', $data);
    }
 }