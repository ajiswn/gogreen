<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PendaftaranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendaftarans')->insert([
            [
                'nama'          => 'Aji Setiawan',
                'nim'           => 'F1E122029',
                'prodi'         => 'Sistem Informasi',
                'fakultas'      => 'Sains dan Teknologi',
                'tempat_lahir'  => 'Jambi',
                'tgl_lahir'     => '2004/02/02',
                'angkatan'      => '2022',
                'email'         => 'aji@gogreen.com',
                'ktm'           => 'ktm-pendaftar\KTM_F1E122029.pdf',
                'twibbon'       => 'Sudah',
                'alasan'        => 'Gabut',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'nama'          => 'Rizky Al-Amin',
                'nim'           => 'F1E122031',
                'prodi'         => 'Sistem Informasi',
                'fakultas'      => 'Sains dan Teknologi',
                'tempat_lahir'  => 'Jambi',
                'tgl_lahir'     => '2004/03/03',
                'angkatan'      => '2022',
                'email'         => 'amin@gogreen.com',
                'ktm'           => 'ktm-pendaftar\KTM_F1E122031.pdf',
                'twibbon'       => 'Sudah',
                'alasan'        => 'Gabut',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            
        ]);
    }
}
