<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Clm_list_time extends ActiveRecord {
    public static function tableName(){
        return 'clm_list_time';
    }
    public function rules()
    {
        return [
            [['id_worker', 'data','name','last_name','day_time'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'data' => 'Дата',
            'day_time' => 'Время',
        ];
    }

    public static function getTimeList()
    {

        $sql = 'select id_worker,name,last_name,sum(day_time) as work_time,sum(day_time)*17.5 as money
from clm_list_time group by id_worker,name,last_name';
        return Yii::$app->db->createCommand($sql)->queryAll();

    }

}
