<?php

namespace App\Traits\Akses;

trait Menu {

    public function getMenus() {
        $menu = array(
            [
                'title' => 'Home',
                'href' => '/',
                'description' => ''
            ], [
                'title' => 'Inventory',
                'href' => '/inventory',
                'description' => 'Item registered to be sold'
            ], [
                'title' => 'Customers',
                'href' => '/customers',
                'description' => 'List of customer registered'
            ], [
                'title' => 'Sales',
                'href' => '/sales',
                'description' => 'List of sales report'
            ], [
                'title' => 'Transport',
                'href' => '/transport',
                'description' => 'List of transportation records'
            ], [
                'title' => 'Settings',
                'href' => '/settings',
                'description' => 'Application settings'
            ], [
                'title' => 'Profile',
                'href' => '/profile',
                'description' => 'Profile information'
            ]

        );
        return $menu;
    }
}