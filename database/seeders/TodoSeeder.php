<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todos = [];

        for ($i = 1; $i <= 20; $i++) {
            $todos[] = [
                'name' => "Tarea $i",
                'desc' => "Descripción de la tarea número $i.",
                'due_date' => now()->addDays(rand(1, 30)),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('todos')->insert($todos);
    }
}