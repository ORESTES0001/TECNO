<?php
class Dashboard extends Controller
{
    public function __construct()
    {
        Auth::noAuth();
        Permisos::getPermisos(DASHBOARD);
        parent::__construct();
    }


    public function index()
    {
        $data['page_name'] = "Dashboard";
        $data['function_css'] = "inicio3.css";
        $data['function_js'] = "inicio1.js";
       $this->views->getView($this, 'index', $data);
       
    }
}
