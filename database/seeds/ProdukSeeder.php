<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(
            [
                [
                    'nama_produk'         => 'Arduino Uno R3',
                    'gambar_produk'         => 'P-00000001.jpeg',
                    'hargabeli_produk'     => '60000',
                    'hargajual_produk'            => '70000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Mikrokontroller',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Wemos D1 R1 ESP8266',
                    'gambar_produk'         => 'P-00000002.jpeg',
                    'hargabeli_produk'     => '70000',
                    'hargajual_produk'            => '80000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Mikrokontroller',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Nodemcu ESP8266',
                    'gambar_produk'         => 'P-00000003.jpeg',
                    'hargabeli_produk'     => '45000',
                    'hargajual_produk'            => '55000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Mikrokontroller',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Wemos D1 Mini',
                    'gambar_produk'         => 'P-00000004.jpeg',
                    'hargabeli_produk'     => '45000',
                    'hargajual_produk'            => '55000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Mikrokontroller',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'DHT 11',
                    'gambar_produk'         => 'P-00000005.jpeg',
                    'hargabeli_produk'     => '15000',
                    'hargajual_produk'            => '22000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Sensor',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'RFID RC-522',
                    'gambar_produk'         => 'P-00000006.jpeg',
                    'hargabeli_produk'     => '35000',
                    'hargajual_produk'            => '45000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Sensor',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Ultrasonic HC-SR04',
                    'gambar_produk'         => 'P-00000007.jpeg',
                    'hargabeli_produk'     => '35000',
                    'hargajual_produk'            => '45000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Sensor',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Soil Moisture Capacitive',
                    'gambar_produk'         => 'P-00000008.jpeg',
                    'hargabeli_produk'     => '30000',
                    'hargajual_produk'            => '40000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Sensor',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Dot Matrix MAX7219',
                    'gambar_produk'         => 'P-00000009.jpeg',
                    'hargabeli_produk'     => '80000',
                    'hargajual_produk'            => '90000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Output',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'LCD Display 16x2 I2C',
                    'gambar_produk'         => 'P-00000010.jpeg',
                    'hargabeli_produk'     => '45000',
                    'hargajual_produk'            => '55000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Output',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Relay 4 Channel',
                    'gambar_produk'         => 'P-00000011.jpeg',
                    'hargabeli_produk'     => '55000',
                    'hargajual_produk'            => '65000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Output',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
                [
                    'nama_produk'         => 'Water Flow',
                    'gambar_produk'         => 'P-00000012.jpeg',
                    'hargabeli_produk'     => '80000',
                    'hargajual_produk'            => '90000',
                    'stok_produk'            => '100',
                    'keterangan_produk'            => 'Sensor',
                    'tanggal_produk'            => '2022-04-08 21:39:2',
                ],
            ]
        );
    }
}
