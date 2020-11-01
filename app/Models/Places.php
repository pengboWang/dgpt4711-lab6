<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Letme',
            'Real name' =>'严君泽',
            'Age' =>'24',
            'Place' =>'HaiNan',
            'Game position' => 'TOP',
            'Common heroes' =>'ChoGath Vladimir Ornn',
            'image' => 'letme.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'MLXG',
            'Real name' =>'刘世宇',
            'Age' =>'24',
            'Place' =>'HuNan',
            'Game position' => 'JUG',
            'Common heroes' =>'Gragas LEESIN JarvanⅣ',
            'description' => '.',
            'image' => 'mlxg.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'Xiaohu',
            'Real name' =>'李元浩',
            'Age' =>'25',
            'Place' =>'HeNan',
            'Game position' => 'MID',
            'Common heroes' =>'Corki LeBlanc Ryze',
            'image' => 'xiaohu.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'Zz1tai',
            'Real name' =>'刘志豪',
            'Age' =>'23',
            'Place' =>'BeiJing',
            'Game position' => 'TOP',
            'Common heroes' =>'FIORA Vladimir Maokai',
            'image' => 'zitai.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'UZI',
            'Real name' =>'简自豪',
            'Age' =>'23',
            'Place' =>'HuBei',
            'Game position' => 'BOT',
            'Common heroes' =>'Sivir Tristana Xayah Kaisa',
            'image' => 'uzi.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Ming',
            'Real name' =>'史森明',
            'Age' =>'21',
            'Place' =>'GuangDong',
            'Game position' => 'SUP',
            'Common heroes' =>'Alistar Morgana Karma Rakan',
            'image' => 'ming.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
