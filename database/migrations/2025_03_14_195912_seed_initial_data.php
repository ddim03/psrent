<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'PlayStation 4',
                'price_per_session' => 30000.00,
                'session_duration' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PlayStation 5',
                'price_per_session' => 40000.00,
                'session_duration' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('units')->insert([
            [
                'name' => 'PS4 - Unit 1',
                'service_id' => 1,
                'status' => 'available',
                'image_path' => 'images/ps4.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PS4 - Unit 2',
                'service_id' => 1,
                'status' => 'available',
                'image_path' => 'images/ps4.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PS5 - Unit 1',
                'service_id' => 2,
                'status' => 'available',
                'image_path' => 'images/ps5.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PS5 - Unit 2',
                'service_id' => 2,
                'status' => 'available',
                'image_path' => 'images/ps5.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('time_slots')->insert([
            ['start_time' => '09:00:00', 'end_time' => '11:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['start_time' => '11:00:00', 'end_time' => '13:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['start_time' => '13:00:00', 'end_time' => '15:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['start_time' => '15:00:00', 'end_time' => '17:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['start_time' => '17:00:00', 'end_time' => '19:00:00', 'created_at' => now(), 'updated_at' => now()],
            ['start_time' => '19:00:00', 'end_time' => '21:00:00', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
};
