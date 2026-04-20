<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'isbn' => '978-4-8156-3594-7',
            'title' => '개정신판 지금부터 시작하는 React 실전입문',
            'price' => 3828,
            'publisher' => 'SB크리에이티브',
            'published' => '2025-09-12',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'isbn' => '978-4-297-14598-9',
            'title' => 'Rails 애플리케이션 프로그래밍',
            'price' => 3960,
            'publisher' => '기술평론사',
            'published' => '2024-12-07',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('books')->insert([
            'isbn' => '978-4-7981-4262-4',
            'title' => 'Laravel 퀵스타트 가이드',
            'price' => 3630,
            'publisher' => '한빛미디어',
            'published' => '2025-01-23',
            'sample' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
