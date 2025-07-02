<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
class PenulisSeeder extends Seeder{
    public function run()
    {
        //$data = [
        //    'nama' => 'Muhammad Azhar',
        //    'address' => 'Jl. Gus Dur No. 12 Jombang',
        //    'created_at' => Time::now(),
        //   'updated_at' => Time::now()
        //];
        $faker = \Faker\Factory::create('id_ID');
        for($i = 0; $i < 100; $i++){
            $data[] = [
                'name' => $faker->name,
                'address' => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now(),
                'citizen' => $faker->country,
                'born_date' => $faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d')
            ];
        }
        //$this->db->query("INSERT INTO penulis (nama, address, created_at, updated_at) VALUES(:nama:, :address:, :created_at:, :updated_at:)", $data);
        $this->db->table('penulis')->insertBatch($data);
    }
}