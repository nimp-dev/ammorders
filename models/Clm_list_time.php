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

}
