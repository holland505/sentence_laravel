<?php

use Illuminate\Database\Seeder;

class SentencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param1 = [
            'id' => 1,
            'sentence' => 'Officials refused to say exactly who was r___ for the tragic accident before the investigation was complete.',
            'translation' => '当局は、その悲惨な事故は誰に責任があるのか、調査が完了するまでは明言するのを拒んだ。',
            'word' => 'responsible',
            'class1' => '形容詞',
            'translate1' => '責任のある、信頼できる',
            'class2' => '',
            'translate2' => '',
            'level' => '',
            'important' => 0,
            'source' => '',
            'created_at' => '2020/03/19 00:00:00',
            'updated_at' => '2020/03/19 00:00:00'
        ];
        DB::table('sentences')->updateOrInsert($param1);

        $param2 = [
            'id' => 2,
            'sentence' => 'Although the fans poured into the stadium with great enthusiasm, the game was p___ due to heavy rain.',
            'translation' => 'ファンが熱狂して球場に押し寄せたが、試合は豪雨のため延期された。',
            'word' => 'postponed',
            'class1' => '動詞',
            'translate1' => '延期する',
            'class2' => '',
            'translate2' => '',
            'level' => '',
            'important' => 0,
            'source' => '',
            'created_at' => '2020/03/19 00:00:00',
            'updated_at' => '2020/03/19 00:00:00'
        ];
        DB::table('sentences')->updateOrInsert($param2);


    }
}
