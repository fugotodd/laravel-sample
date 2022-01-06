<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    static private $nameList = [
        '綜合果汁',
        '香橙片',
        '香蕉',
        '葡萄',
        'Lemon',
        '葡萄留言板',
        '蘋果',
        '藍苺',
        '葡萄串',
        '橘子',
        '紅苺',
        '綜合水果盤',
        '草苺',
        '裝盤草苺',
        '3顆蘋果',
        '水果市集',
        '綜合苺果',
        '青蘋果',
        '水果沙拉',
        '水果盤'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++)
        {
            Product::create([
                'title' => self::$nameList[$i-1],
                'cover' => '/assets/images/products/'.$i.'.jpeg',
                'price' => rand(1, 12) * 100
            ]);
        }
    }
}
