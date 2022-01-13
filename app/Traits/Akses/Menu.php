<?php

namespace App\Traits\Akses;

trait Menu {

    public function getMenus() {
        $menu = array(
            [
                'title' => 'Home',
                'href' => '/',
            ], [
                'title' => 'Inventory',
                'href' => '/inventory',
            ], [
                'title' => 'Customer',
                'href' => '/customer',
            ], [
                'title' => 'Sales',
                'href' => '/sales',
            ], [
                'title' => 'Transport',
                'href' => '/transport',
            ],

        );
        return $menu;
    }
}