<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesModel extends Model
{
    use HasFactory;

    public static function getConsignedStock(){
        $stocks = array(
            array(
                'name' => 'stock ' . rand(1,20),
                'quantity' => rand(1,20)
            ),
            array(
                'name' => 'stock ' . rand(1,20),
                'quantity' => rand(1,20)
            ),
            array(
                'name' => 'stock ' . rand(1,20),
                'quantity' => rand(1,20)
            ),
            array(
                'name' => 'stock ' . rand(1,20),
                'quantity' => rand(1,20)
            ),
            array(
                'name' => 'stock ' . rand(1,20),
                'quantity' => rand(1,20)
            )
        );
        return $stocks;
    }
}
