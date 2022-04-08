<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert(
            [
                [
                    'judul_artikel'         => 'Berpikir pola Algoritma',
                    'gambar_artikel'         => 'A-00000001.jpeg',
                    'kategori_artikel'     => 'IPTEK',
                    'keterangan_artikel'            => 'Berpikir Algoritma',
                    'penulis_artikel'            => 'Anonymus',
                    'isi_artikel'            => 'lorem ipsum sir dolor amet',
                    'tanggal'            => '2022-04-08 21:39:2',
                ],
            ]
        );
    }
}
