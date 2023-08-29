<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\database\factories\NoteFactory;
use Database\Factories\NoteFactory as FactoriesNoteFactory;
use App\Models\note_user;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        note_user::factory()->count(10)->create();
    }
}
