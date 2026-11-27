<?php

namespace Pbo\Marketplace;

require_once('./PropertyConstant.php');

use pbo\Marketplace\Produk;

class Jasa {

    use produk;

    public function payment($tipe) {

        return match($tipe){
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "pembayaran hanya bisa va dan qris"
        };

    }

}   