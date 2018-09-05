<?php

use Illuminate\Database\Seeder;
use App\Position;
class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
        	'name' => 'Ketua Rw'
        ]);

        Position::create([
        	'name' => 'Wakil Ketua 1'
        ]);

        Position::create([
        	'name' => 'Wakil Ketua 2'
        ]);

        Position::create([
        	'name' => 'Sekretaris 1'
        ]);

        Position::create([
        	'name' => 'Sekretaris 2'
        ]);

        Position::create([
        	'name' => 'Bendahara 1'
        ]);

        Position::create([
        	'name' => 'Bendahara 2'
        ]);

        Position::create([
        	'name' => 'Seksi Operasional 1'
        ]);

        Position::create([
        	'name' => 'Seksi Operasional 2'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Pendidikan dan Budaya'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Pendidikan dan Budaya'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Ketertiban dan Pemberdayaan Lingkungan'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Ketertiban dan Pemberdayaan Lingkungan'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Sosial dan Kemasyarakatan'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Sosial dan Kemasyarakatan'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Keagamaan Muslim'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Keagamaan Muslim'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Keagamaan Non Muslim'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Keagamaan Non Muslim'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Pembangunan'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Pembangunan'
        ]);

        Position::create([
        	'name' => 'Kepala Bidang Dana dan Usaha (Ekonomi)'
        ]);

        Position::create([
        	'name' => 'Anggota Bidang Dana dan Usaha (Ekonomi)'
        ]);
    }
}
