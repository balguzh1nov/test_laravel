<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run()
    {
        DB::table('clients')->insert([
            [
                'phone_number' => '+79161234567',
                'full_name' => 'Иван Иванов',
                'accumulated_points' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79261234567',
                'full_name' => 'Петр Петров',
                'accumulated_points' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79361234567',
                'full_name' => 'Сергей Сергеев',
                'accumulated_points' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79461234567',
                'full_name' => 'Алексей Алексеев',
                'accumulated_points' => 30,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79561234567',
                'full_name' => 'Николай Николаев',
                'accumulated_points' => 40,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79661234567',
                'full_name' => 'Дмитрий Дмитриев',
                'accumulated_points' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79761234567',
                'full_name' => 'Андрей Андреев',
                'accumulated_points' => 60,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79861234567',
                'full_name' => 'Михаил Михайлов',
                'accumulated_points' => 70,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79961234567',
                'full_name' => 'Артем Артемов',
                'accumulated_points' => 80,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'phone_number' => '+79061234567',
                'full_name' => 'Владимир Владимиров',
                'accumulated_points' => 90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
