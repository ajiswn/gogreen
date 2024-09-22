<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PengurusTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pengurus')->insert([
            [
                'foto'          =>'foto-pengurus\profil-1.jpg',
                'nama_lengkap'  =>'Julisa',
                'id_jabatan'    =>'1',
                'prodi'         =>'Agroekoteknologi',
                'angkatan'      =>'2021',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'foto'          =>'foto-pengurus\profil-2.jpg',
                'nama_lengkap'  =>'Tom Holland',
                'id_jabatan'    =>'2',
                'prodi'         =>'Agribisnis',
                'angkatan'      =>'2022',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'foto'          =>'foto-pengurus\profil-3.jpg',
                'nama_lengkap'  =>'Paul Walker',
                'id_jabatan'    =>'3',
                'prodi'         =>'Biologi',
                'angkatan'      =>'2021',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'foto'          =>'foto-pengurus\profil-4.jpg',
                'nama_lengkap'  =>'Vin Diesel',
                'id_jabatan'    =>'4',
                'prodi'         =>'Kimia Industri',
                'angkatan'      =>'2022',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'foto'          =>'foto-pengurus\profil-5.jpg',
                'nama_lengkap'  =>'Tyrese Gibson',
                'id_jabatan'    =>'5',
                'prodi'         =>'Teknik Lingkungan',
                'angkatan'      =>'2021',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'foto'          =>'foto-pengurus\profil-6.jpg',
                'nama_lengkap'  =>'Dobel Pernandes',
                'id_jabatan'    =>'6',
                'prodi'         =>'Sistem Informasi',
                'angkatan'      =>'2022',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
            [
                'foto'          =>'foto-pengurus\profil-7.jpg',
                'nama_lengkap'  =>'Aji Setiawan',
                'id_jabatan'    =>'7',
                'prodi'         =>'Sistem Informasi',
                'angkatan'      =>'2022',
                'status'        =>'aktif',
                'created_at'    => now(),
                'updated_at'    => now(),
            ],
        ]);
    }
}
