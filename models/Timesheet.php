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
            [['1','2','3','4','5'] , 'safe'],
            [['6','7','8','9','10'] , 'safe'],
            [['11','12','13','14','15'] , 'safe'],
            [['16','17','18','19','20'] , 'safe'],
            [['21','22','23','24','25'] , 'safe'],
            [['26','27','28','29','30','31'] , 'safe'],

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