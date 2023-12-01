<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use Faker\Factory;

class MahasiswaSeeder extends Seeder
{

  public function run()
  {
    // use the factory to create a Faker\Generator instance
    $faker = Factory::create();
    $data = [];
    for ($i = 0; $i < 10; $i++) {
      $newData = [
        'nama' => $faker->name(),
        'npm'    => $faker->randomNumber(9, true),
        'prodi'    => 'Teknik Informatika',
        'minat'    => 'Web Developer',
        'domisili'    => $faker->city(),
        'jenis_kelamin'    => 'L',
        'image'    => "default.jpg",
        'created_at'    =>  $faker->date(),
      ];
      $data[] = $newData;
    }

    // Simple Queries
    // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

    // Using Query Builder
    $this->db->table('mahasiswa')->insertBatch($data);
  }
}
