<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Tps;
use App\Models\Dpt;
use App\Models\Paslon;
use App\Models\Polling;
use App\Models\Suara;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'password' => bcrypt('admin1234')
        ]);

        Tps::create([
            'nama' => 'Tps1',
            'lokasi' => 'Blok A'
        ]);
        Tps::create([
            'nama' => 'Tps2',
            'lokasi' => 'Blok B'
        ]);
        Tps::create([
            'nama' => 'Tps3',
            'lokasi' => 'Blok C'
        ]);
        Tps::create([
            'nama' => 'Tps4',
            'lokasi' => 'Blok D'
        ]);
        Tps::create([
            'nama' => 'Tps5',
            'lokasi' => 'Blok E'
        ]);
        Tps::create([
            'nama' => 'Tps6',
            'lokasi' => 'Blok F'
        ]);
        Tps::create([
            'nama' => 'Tps7',
            'lokasi' => 'Blok G'
        ]);
        Tps::create([
            'nama' => 'Tps8',
            'lokasi' => 'Blok H'
        ]);
        Tps::create([
            'nama' => 'Tps9',
            'lokasi' => 'Blok I'
        ]);
        Tps::create([
            'nama' => 'Tps10',
            'lokasi' => 'Blok J'
        ]);

        Paslon::create([
            'no_urut' => 1,
            'nama' => 'Dandi Riko',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Goa Boma',
            'kontak' => '-'
        ]);
        Paslon::create([
            'no_urut' => 2,
            'nama' => 'Vero',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Goa Boma',
            'kontak' => '-'
        ]);
        Paslon::create([
            'no_urut' => 3,
            'nama' => 'Dirli',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Goa Boma',
            'kontak' => '-'
        ]);

        Dpt::create([
            'tps_id' => 1,
            'dpt_perempuan' => 145,
            'dpt_laki' => 149,
        ]);
        Dpt::create([
            'tps_id' => 2,
            'dpt_perempuan' => 151,
            'dpt_laki' => 157,
        ]);
        Dpt::create([
            'tps_id' => 3,
            'dpt_perempuan' => 137,
            'dpt_laki' => 138,
        ]);
        Dpt::create([
            'tps_id' => 4,
            'dpt_perempuan' => 104,
            'dpt_laki' => 126,
        ]);
        Dpt::create([
            'tps_id' => 5,
            'dpt_perempuan' => 148,
            'dpt_laki' => 153,
        ]);
        Dpt::create([
            'tps_id' => 6,
            'dpt_perempuan' => 202,
            'dpt_laki' => 244,
        ]);
        Dpt::create([
            'tps_id' => 7,
            'dpt_perempuan' => 107,
            'dpt_laki' => 125,
        ]);
        Dpt::create([
            'tps_id' => 8,
            'dpt_perempuan' => 146,
            'dpt_laki' => 191,
        ]);
        Dpt::create([
            'tps_id' => 9,
            'dpt_perempuan' => 182,
            'dpt_laki' => 210,
        ]);
        Dpt::create([
            'tps_id' => 10,
            'dpt_perempuan' => 49,
            'dpt_laki' => 62,
        ]);

        Polling::create([
            'kode_polling' => 'T1P1',
            'tps_id' => 1,
            'paslon_id' =>1,
            'jumlah_suara' => 138
        ]);
        Polling::create([
            'kode_polling' => 'T1P2',
            'tps_id' => 1,
            'paslon_id' =>2,
            'jumlah_suara' => 2
        ]);
        Polling::create([
            'kode_polling' => 'T1P3',
            'tps_id' => 1,
            'paslon_id' =>3,
            'jumlah_suara' => 46
        ]);
        Polling::create([
            'kode_polling' => 'T2P1',
            'tps_id' => 2,
            'paslon_id' =>1,
            'jumlah_suara' => 135
        ]);
        Polling::create([
            'kode_polling' => 'T2P2',
            'tps_id' => 2,
            'paslon_id' =>2,
            'jumlah_suara' => 13
        ]);
        Polling::create([
            'kode_polling' => 'T2P3',
            'tps_id' => 2,
            'paslon_id' =>3,
            'jumlah_suara' => 86
        ]);
        Polling::create([
            'kode_polling' => 'T3P1',
            'tps_id' => 3,
            'paslon_id' =>1,
            'jumlah_suara' => 104
        ]);
        Polling::create([
            'kode_polling' => 'T3P2',
            'tps_id' => 3,
            'paslon_id' =>2,
            'jumlah_suara' => 0
        ]);
        Polling::create([
            'kode_polling' => 'T3P3',
            'tps_id' => 3,
            'paslon_id' =>3,
            'jumlah_suara' => 108
        ]);
        Polling::create([
            'kode_polling' => 'T4P1',
            'tps_id' => 4,
            'paslon_id' =>1,
            'jumlah_suara' => 97
        ]);
        Polling::create([
            'kode_polling' => 'T4P2',
            'tps_id' => 4,
            'paslon_id' =>2,
            'jumlah_suara' => 7
        ]);
        Polling::create([
            'kode_polling' => 'T4P3',
            'tps_id' => 4,
            'paslon_id' =>3,
            'jumlah_suara' => 75
        ]);
        Polling::create([
            'kode_polling' => 'T5P1',
            'tps_id' => 5,
            'paslon_id' =>1,
            'jumlah_suara' => 92
        ]);
        Polling::create([
            'kode_polling' => 'T5P2',
            'tps_id' => 5,
            'paslon_id' =>2,
            'jumlah_suara' => 22
        ]);
        Polling::create([
            'kode_polling' => 'T5P3',
            'tps_id' => 5,
            'paslon_id' =>3,
            'jumlah_suara' => 96
        ]);
        Polling::create([
            'kode_polling' => 'T6P1',
            'tps_id' => 6,
            'paslon_id' =>1,
            'jumlah_suara' => 145
        ]);
        Polling::create([
            'kode_polling' => 'T6P2',
            'tps_id' => 6,
            'paslon_id' =>2,
            'jumlah_suara' => 21
        ]);
        Polling::create([
            'kode_polling' => 'T6P3',
            'tps_id' => 6,
            'paslon_id' =>3,
            'jumlah_suara' => 142
        ]);
        Polling::create([
            'kode_polling' => 'T7P1',
            'tps_id' => 7,
            'paslon_id' =>1,
            'jumlah_suara' => 97
        ]);
        Polling::create([
            'kode_polling' => 'T7P2',
            'tps_id' => 7,
            'paslon_id' =>2,
            'jumlah_suara' => 7
        ]);
        Polling::create([
            'kode_polling' => 'T7P3',
            'tps_id' => 7,
            'paslon_id' =>3,
            'jumlah_suara' => 56
        ]);
        Polling::create([
            'kode_polling' => 'T8P1',
            'tps_id' => 8,
            'paslon_id' =>1,
            'jumlah_suara' => 117
        ]);
        Polling::create([
            'kode_polling' => 'T8P2',
            'tps_id' => 8,
            'paslon_id' =>2,
            'jumlah_suara' => 1
        ]);
        Polling::create([
            'kode_polling' => 'T8P3',
            'tps_id' => 8,
            'paslon_id' =>3,
            'jumlah_suara' => 110
        ]);
        Polling::create([
            'kode_polling' => 'T9P1',
            'tps_id' => 9,
            'paslon_id' =>1,
            'jumlah_suara' => 174
        ]);
        Polling::create([
            'kode_polling' => 'T9P2',
            'tps_id' => 9,
            'paslon_id' =>2,
            'jumlah_suara' => 3
        ]);
        Polling::create([
            'kode_polling' => 'T9P3',
            'tps_id' => 9,
            'paslon_id' =>3,
            'jumlah_suara' => 99
        ]);
        Polling::create([
            'kode_polling' => 'T10P1',
            'tps_id' => 10,
            'paslon_id' =>1,
            'jumlah_suara' => 47
        ]);
        Polling::create([
            'kode_polling' => 'T10P2',
            'tps_id' => 10,
            'paslon_id' =>2,
            'jumlah_suara' => 0
        ]);
        Polling::create([
            'kode_polling' => 'T10P3',
            'tps_id' => 10,
            'paslon_id' =>3,
            'jumlah_suara' => 12
        ]);

        Suara::create([
            'tps_id' => 1,
            'suara_tidak_sah' => 13,
            'golput' => 95
        ]);
        Suara::create([
            'tps_id' => 2,
            'suara_tidak_sah' => 2,
            'golput' => 72
        ]);
        Suara::create([
            'tps_id' => 3,
            'suara_tidak_sah' => 3,
            'golput' => 60
        ]);
        Suara::create([
            'tps_id' => 4,
            'suara_tidak_sah' => 0,
            'golput' => 51
        ]);
        Suara::create([
            'tps_id' => 5,
            'suara_tidak_sah' => 6,
            'golput' => 85
        ]);
        Suara::create([
            'tps_id' => 6,
            'suara_tidak_sah' => 3,
            'golput' => 135
        ]);
        Suara::create([
            'tps_id' => 7,
            'suara_tidak_sah' => 2,
            'golput' => 70
        ]);
        Suara::create([
            'tps_id' => 8,
            'suara_tidak_sah' => 4,
            'golput' => 105
        ]);
        Suara::create([
            'tps_id' => 9,
            'suara_tidak_sah' => 6,
            'golput' => 110
        ]);
        Suara::create([
            'tps_id' => 10,
            'suara_tidak_sah' => 1,
            'golput' => 51
        ]);
    }
}
