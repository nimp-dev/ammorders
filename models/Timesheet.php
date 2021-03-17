<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Timesheet extends ActiveRecord {

    public static function tableName(){
        return 'timesheet';
    }
    public function rules()
    {
        return [
            [['id', 'data','full_name'], 'safe'],
            [['day1','day2','day3','day4','day5'] , 'safe'],
            [['day6','day7','day8','day9','day10'] , 'safe'],
            [['day11','day12','day13','day14','day15'] , 'safe'],
            [['day16','day17','day18','day19','day20'] , 'safe'],
            [['day21','day22','day23','day24','day25'] , 'safe'],
            [['day26','day27','day28','day29','day30','day31'] , 'safe'],

        ];
    }

    public function attributeLabels()
    {
        return [
        	'full_name' => 'имя',
            'data' => 'дата',
        ];
    }


}