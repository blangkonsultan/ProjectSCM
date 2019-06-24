<?php
/**
 * Created by PhpStorm.
 * User: miqdadyyy
 * Date: 24/06/19
 * Time: 22:54
 */

namespace App\Helpers;


use App\Pemesanan;

class Helper
{
    public static function generateOrderId()
    {
        $lastOrder = Pemesanan::orderBy('id_pemesanan', 'desc')->first();
        if (!$lastOrder) {
            $number = 0;
        } else {
            $number = substr($lastOrder->id_pemesanan, 3);
        }

        return 'ORD' . sprintf('%05d', intval($number) + 1);
    }
}