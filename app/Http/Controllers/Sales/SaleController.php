<?php

namespace App\Http\Controllers\Sales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\SalesModel as Sales;

class SaleController extends Controller
{
    private $menus  = array();
    private $data   = array();

    public function __construct(){
        $this->menus    = $this->getMenus();
        $this->data['menu']     = $this->menus;
    }

    public function index(){
        $data       = $this->data;
        $data['items']  = array();
        return view('pages.sales.index', $data);
    }

    public function addNewSale(){
        $data = $this->data;
        $data['consigned_stocks'] = Sales::getConsignedStock();
        return view('pages.sales.add-new', $data);
    }

    public function getGeneratedSales($sales_id){
        $data = $this->data;
        return view('pages.sales.sales-generated', $data);
    }
}
