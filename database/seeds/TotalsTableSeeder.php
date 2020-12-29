<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TotalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['A', Carbon::parse('2020-4-1'), 10, 20, 30, 40],
            ['A', Carbon::parse('2020-4-2'), 10, 20, 30, 40],
            ['A', Carbon::parse('2020-4-3'), 10, 20, 30, 40],
            ['A', Carbon::parse('2020-4-4'), 10, 20, 30, 40],
            ['A', Carbon::parse('2020-4-5'), 10, 20, 30, 40],
            ['A', Carbon::parse('2020-4-6'), 10, 20, 30, 40],
            ['B', Carbon::parse('2020-4-1'), 11, 21, 31, 41],
            ['B', Carbon::parse('2020-4-2'), 11, 21, 31, 41],
            ['B', Carbon::parse('2020-4-3'), 11, 21, 31, 41],
            ['B', Carbon::parse('2020-4-4'), 11, 21, 31, 41],
            ['B', Carbon::parse('2020-4-5'), 11, 21, 31, 41],
            ['B', Carbon::parse('2020-4-6'), 11, 21, 31, 41],
            ['C', Carbon::parse('2020-4-1'), 12, 22, 32, 42],
            ['C', Carbon::parse('2020-4-2'), 12, 22, 32, 42],
            ['C', Carbon::parse('2020-4-3'), 12, 22, 32, 42],
            ['C', Carbon::parse('2020-4-4'), 12, 22, 32, 42],
            ['C', Carbon::parse('2020-4-5'), 12, 22, 32, 42],
            ['C', Carbon::parse('2020-4-6'), 12, 22, 32, 42],
            ['D', Carbon::parse('2020-4-1'), 13, 23, 33, 43],
            ['D', Carbon::parse('2020-4-2'), 13, 23, 33, 43],
            ['D', Carbon::parse('2020-4-3'), 13, 23, 33, 43],
            ['D', Carbon::parse('2020-4-4'), 13, 23, 33, 43],
            ['D', Carbon::parse('2020-4-5'), 13, 23, 33, 43],
            ['D', Carbon::parse('2020-4-6'), 13, 23, 33, 43],
          ];
  
          foreach($datas as $data) {
              DB::table('totals')->insert([
                  [
                      'teamName' => $data[0],
                      'date' => $data[1],
                      'areaKou' => $data[2],
                      'areaOtsu' => $data[3],
                      'areaHei' => $data[4],
                      'areaTei' => $data[5],
                  ],
              ]);
          }
    }
}
