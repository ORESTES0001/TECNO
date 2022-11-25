<?php
class Cicloestral extends Controller
{

    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(CICLOESTRAL);
        parent::__construct();
    }

    public function index()
    {
        if (empty($_SESSION['permisosMod']['r'])) {
            header('Location:' . base_url . '/dashboard');
        }

        $data['page_name'] = "Cicloestral";
        $data['function_css'] = "Cicloestral.css";
        $data['function_js'] = "Cicloestral1.js";
        $data['function1_js'] = "Cicloestral2.js";
        $this->views->getView($this, 'index', $data);
    }
 }