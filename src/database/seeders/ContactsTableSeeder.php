<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('ja_JP');
        $detailsByCategory = [
        1 => [
            '商品の配送状況について確認したいです。',
            '発送予定日を教えてください。',
            '配送先を変更したいです。',
        ],
        2 => [
            '商品の交換をお願いしたいです。',
            'サイズが合わなかったので交換希望です。',
            '不良品だったため交換したいです。',
        ],
        3 => [
            '商品に不具合があります。',
            '購入した商品が動作しません。',
            '破損して届いたため対応をお願いします。',
        ],
        4 => [
            'ショップについて質問があります。',
            '営業時間を教えてください。',
            '取り扱い商品について問い合わせです。',
        ],
        5 => [
            'その他の問い合わせです。',
            '別件で相談したいことがあります。',
            '質問がありますのでご対応お願いします。',
        ],
    ];
        for ($i = 0; $i < 5; $i++) {
            $categoryId = rand(1, 5);
            DB::table('contacts')->insert([
            'category_id' => rand(1, 5),
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'gender' => rand(1, 3),
            'email' => $faker->unique()->safeEmail,
            'tel' => $faker->numerify('0##-####-####'),
            'address' => $faker->address,
            'building' => $faker->optional()->secondaryAddress,
            'detail' => $faker->randomElement($detailsByCategory[$categoryId]),
            'created_at' => now(),
            'updated_at' => now(),
            ]);
        }
    }
}