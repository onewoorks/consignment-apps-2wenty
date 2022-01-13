<?php

namespace App\Http\Controllers\Customers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private $menus = array();

    public function __construct(){
        $this->menus = $this->getMenus();
    }

    public function index(){
        $data['menu'] = $this->menus;
        $data['items'] = array();
        return view('pages.customers.index', $data);
    }
}
