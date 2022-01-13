<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Traits\Akses\Menu;

class ItemsController extends Controller
{
    use Menu;
    private $menus = array();

    public function __construct(){
        $this->menus = $this->getMenus();
    }

    public function index(){
        $items = array();
        for($i=0;$i<20;$i++){
            $items[] = (object) array(
                'product_name' => "Product name item " . rand(0,100),
                'unit_price' => number_format(rand(0,20),2,'.',','),
                'quantity' => rand(0,99) 
            );
        }
        $data['menu']   = $this->menus;
        $data['items']  = (object) $items;
        return view('pages.inventory.index', $data );
    }
}
