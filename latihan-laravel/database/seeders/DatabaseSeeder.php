<?php

namespace Database\Seeders;

use App\Models\Core;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory(10)->create();
        // User::create([
        //     'name'=>'Sinar Abadi',
        //     'email'=>'sinarabadi@gmail.com',
        //     'password'=>bcrypt('admin')
        // ]);

        // User::create([
        //     'name'=>'Cahaya Makmur',
        //     'email'=>'cahayamakmur@gmail.com',
        //     'password'=>bcrypt('habsi')
        // ]);

        // User::create([
        //     'name'=>'Sumber Makmur',
        //     'email'=>'sumbermakmur@gmail.com',
        //     'password'=>bcrypt('damar')
        // ]);
        Category::create([
            'name'=>'Mouse',
            'slug'=>'mouse'
        ]);
            
            Category::create([
            'name'=>'Keyboard',
            'slug'=>'keyboard'
            ]);
            
            Category::create([
            'name'=>'Laptop',
            'slug'=>'laptop'
            ]);
            
            Category::create([
            'name'=>'Earphone',
            'slug'=>'earphone'
            ]);

            

            Core::create([
                'namaBarang'=>'Logitech POP Keys Keyboard Wireless Mechanical Compact','harga'=>1369000,
                'slug'=>'logitech-pop-keys-keyboard-wireless-mechanical-compact',
                'category_id'=>2,
                'user_id'=>1,
                'excerpt'=>'Biarkan kepribadianmu menghiasi ruang mejamu dan sekitarnya dengan POP Keys. Keyboard mechanical baru yang memikat dari Logitech dilengkapi dengan 8 tombol emoji yang dapat dipertukarkan dan tombol menu emoji, semuanya dapat disesuaikan melalui software Logitech.',
                'description'=>'<p>Biarkan kepribadianmu menghiasi ruang mejamu dan sekitarnya dengan POP Keys. Keyboard mechanical baru yang memikat dari Logitech dilengkapi dengan 8 tombol emoji yang dapat dipertukarkan dan tombol menu emoji, semuanya dapat disesuaikan melalui software Logitech.</p><p>Pilih sebuah estetika yang sesuai dengan estetikamu sendiri dan nikmati pengalaman seperti mesin tik retro, dengan konektivitas multi perangkat (via Bluetooth atau Receiver USB Logi Bolt) dan serangkaian shortcut baru yang keren.</p><p>Bentuk POP Keys yang ringkas menghemat ruang meja dan mendukung postur tubuh yang lebih baik. Plus, dengan daya tahan baterai maksimal tiga tahun* dan daya tahan maksimal 50 juta keystroke, keyboard ini akan menemanimu untuk waktu yang lama.</p><p>Pairing dengan POP Mouse untuk pengalaman ekspresi diri lengkap.</p><p>* Daya tahan baterai mungkin bervariasi berdasarkan kondisi pengguna dan komputasi.</p>']);
                
                Core::create([
                'namaBarang'=>'HUAWEI FreeBuds Pro','harga'=>1999000,
                'slug'=>'huawei-freebuds-pro',
                'excerpt'=>'Biarkan kepribadianmu menghiasi ruang mejamu dan sekitarnya dengan POP Keys. Keyboard mechanical baru yang memikat dari Logitech dilengkapi dengan 8 tombol emoji yang dapat dipertukarkan dan tombol menu emoji, semuanya dapat disesuaikan melalui software Logitech.',
                'category_id'=>4,
                'user_id'=>2,
                'description'=>'<p>Biarkan kepribadianmu menghiasi ruang mejamu dan sekitarnya dengan POP Keys. Keyboard mechanical baru yang memikat dari Logitech dilengkapi dengan 8 tombol emoji yang dapat dipertukarkan dan tombol menu emoji, semuanya dapat disesuaikan melalui software Logitech.</p><p>Pilih sebuah estetika yang sesuai dengan estetikamu sendiri dan nikmati pengalaman seperti mesin tik retro, dengan konektivitas multi perangkat (via Bluetooth atau Receiver USB Logi Bolt) dan serangkaian shortcut baru yang keren.</p><p>Bentuk POP Keys yang ringkas menghemat ruang meja dan mendukung postur tubuh yang lebih baik. Plus, dengan daya tahan baterai maksimal tiga tahun* dan daya tahan maksimal 50 juta keystroke, keyboard ini akan menemanimu untuk waktu yang lama.</p><p>Pairing dengan POP Mouse untuk pengalaman ekspresi diri lengkap.</p><p>* Daya tahan baterai mungkin bervariasi berdasarkan kondisi pengguna dan komputasi.</p>']);
                
                Core::create([
                'namaBarang'=>'Logitech MX Master 3 Wireless Mouse',
                'harga'=>1300000,
                'slug'=>'logitech-mx-master-3-mouse-wireless-bluetooth',
                'category_id'=>1,
                'user_id'=>1,
                'excerpt'=>'MX Master 3 adalah presisi instan dan potensi tak terbatas. Ini adalah mouse Master Series tercanggih yang pernah ada. Jika Anda bisa memikirkannya, Anda bisa menguasainya.',
                'description'=>'<p>MX Master 3 adalah presisi instan dan potensi tak terbatas. Ini adalah mouse Master Series tercanggih yang pernah ada. Jika Anda bisa memikirkannya, Anda bisa menguasainya.</p><h3>SCROLL 1.000 BARIS DALAM 1 DETIK</h3><p>Kami menciptakan kembali scroll wheel. Scroll elektromagnetik MagSpeed yang serba baru memiliki presisi untuk berhenti pada satu piksel dan cukup cepat untuk menggulir 1.000 baris dalam satu detik. Oh, dan itu hampir sunyi.</p><h3>MULTI- KOMPUTER, SATU MX MASTER 3</h3><p>Kendalikan beberapa komputer secara mulus dengan MX Master 3 yang mendukung Flow hanya dengan menggerakkan kursor ke tepi layar. MX Master 3 mengalir bersama Anda, bahkan antar sistem operasi Windows dan macOS.Memindahkan teks, gambar, dan file antar komputer dengan mudah</p>']);

                Core::factory(20)->create();
                
    }
}
