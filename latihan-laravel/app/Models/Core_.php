<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

 class Core 
{
    private static $core=[
        [
            "title"=>"Huawei Freebuds",
            "namaBarang"=>"HUAWEI FreeBuds Pro",
            "slug"=>"huawei-freebuds-pro",
            "harga"=>"Rp 1.999.000",
            "gambar"=>"freebuds.jpg"
        ],
        [
            "title"=>"Huawei Mateview",
            "namaBarang"=>"HUAWEI MateView Monitor",
            "slug"=>"huawei-mateview-monitor",
            "harga"=>"Rp10.499.000",
            "gambar"=>"mateview.jpg"
        ]
        ];
        public static function all(){
            return collect(self::$core);
        }

        public static function find($slug){
            $items=static::all();
            return $items->firstWhere('slug',$slug);
        }
}
