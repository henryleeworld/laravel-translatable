<?php

use App\Article;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'en' => [
                'title'     => 'Only English article example',
                'full_text' => 'Only English article example\'s text',
            ]
        ]);

        Article::create([
            'zh-TW' => [
                'title'     => '僅英文文章示例',
                'full_text' => '僅英文文章示例的文字',
            ],
        ]);

        Article::create([
            'en' => [
                'title'     => 'English and Lithuanian article example',
                'full_text' => 'English and Lithuanian article example\'s text',
            ],
            'zh-TW' => [
                'title'     => '英文和立陶宛文示例',
                'full_text' => '英文和立陶宛文示例的文字',
            ],
        ]);
    }
}