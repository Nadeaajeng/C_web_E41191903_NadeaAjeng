<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert([
            'name'=> 'Nadea Ajeng Safitri',
            'alamat'=> "Perum Sumbersari Kramat II , Jember",
            'jenis_kelamin'=> 1,
            'prodi'=> 1,
            'no_hp'=> "08121777571"
        ]);
        //
    }
}
