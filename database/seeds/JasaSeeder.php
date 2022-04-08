<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JasaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jasa')->insert(
            [
                [
                    'materi_jasa'         => 'Pemograman Dasar Arduino dengan Tinkercad',
                    'gambar_jasa'         => 'J-0000001.jpeg',
                    'keterangan_jasa'     => '4 Kali Pertemuan / 2 Jam',
                    'kategori_jasa'            => 'Elektronika',
                    'harga_jasa'            => '300000',
                    'instruktur_jasa'            => 'Anonymus',
                    'tanggal'            => '2022-04-08 21:39:2',
                ],

                [
                    'materi_jasa'         => 'Membuat Aplikasi Android dengan Kodular',
                    'gambar_jasa'         => 'J-0000002.jpeg',
                    'keterangan_jasa'     => '4 Kali Pertemuan / 2 Jam',
                    'kategori_jasa'            => 'Aplikasi Android',
                    'harga_jasa'            => '300000',
                    'instruktur_jasa'            => 'Anonymus',
                    'tanggal'            => '2022-04-08 21:39:2',
                ],
            ]
        );
    }
}
