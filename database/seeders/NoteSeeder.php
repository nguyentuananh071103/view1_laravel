<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notes')->insert([
           ["category"=>"công việc", "title"=>"công việc của tôi", "content"=>"Đi làm vào lúc 8h sáng mỗi ngày"],
           ["category"=>"học tập", "title"=>"việc học của tôi", "content"=>"Đi học vào lúc 8h sáng mỗi ngày"],
        ]);
    }
}
