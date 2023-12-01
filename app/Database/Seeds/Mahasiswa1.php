<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
  public function run()
  {
    $data = [
      [
        'nama' => "Admin",
        'npm'    => "202020202020",
        'prodi'    => 'Teknik Informatika',
        'minat'    => 'Web Developer',
        'domisili'    => "Karawang",
        'jenis_kelamin'    => 'L',
        'image'    => "default.jpg",
        'created_at'    =>  "1999-01-01",
      ],
      [
        'nama' => "Admin2",
        'npm'    => "202020202010",
        'prodi'    => 'Sistem Informasi',
        'minat'    => 'Androidd Developer',
        'domisili'    => "Karawang",
        'jenis_kelamin'    => 'L',
        'image'    => "default.jpg",
        'created_at'    =>  "2000-01-01",
      ],
    ];

    // Using Query Builder
    $this->db->table('mahasiswa')->insertBatch($data);
  }
}
