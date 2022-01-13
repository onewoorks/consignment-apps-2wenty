<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $menus = array();

    public function __construct(){
        $this->menus = $this->getMenus();
    }

    public function index(){
        $data['menu'] = $this->menus;
        return view('pages.home', $data);
    }
}
