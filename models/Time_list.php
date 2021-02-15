<?php
namespace app\models;
use yii\db\ActiveRecord;

class Time_list extends ActiveRecord{
    public function addToList($idworker, $time = 1){
        echo 'worked';
    }
}