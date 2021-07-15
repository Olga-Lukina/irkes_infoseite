<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'name' => 'ООО ИРЕКС',
            'address' => 'ул. Щипок, д.18 стр.3',
            'city' => '115093, Москва',
            'hours' => '9:00am-6:00pm',
            'phone' => '+7 (495) 959-71-39, 959-71-40',
            'email' => 'ireks@ireks.ru',
            'latitude' => 55.723602,
            'longitude' => 37.633742,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'ООО ТРИЭР',
            'address' => 'Кавказский бульвар, д. 59, стр. 1',
            'city' => '115516, Москва',
            'hours' => '9:00am-6:00pm',
            'phone' => '+7 (495) 648-07-90, 980-70-90',
            'email' => 'trier_msk@trier.ru',
            'latitude' => 55.628861,
            'longitude' => 37.629682,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'ООО ТРИЭР-СПБ',
            'address' => 'ул. Смоленская, д. 33, литер А',
            'city' => '196084, Санкт-Петербург',
            'hours' => '9:00am-6:00pm',
            'phone' => 'тел.: +7 (812) 740-10-77, 740-10-76, 371-61-28, 371-61-41',
            'email' => 'info_spb@trier.ru',
            'latitude' => 59.904690,
            'longitude' => 30.328651,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'ООО ТРИЭР-СИБИРЬ',
            'address' => 'ул. Писарева, д. 38, к. 2',
            'city' => '630005, г. Новосибирск',
            'hours' => '9:00am-6:00pm',
            'phone' => 'тел.: +7 (383) 292-17-41, 224-23-51, 224-95-61, 224-98-44',
            'email' => 'trier-siberia@trier.ru',
            'latitude' => 55.048931,
            'longitude' => 82.923807,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
