<?php
namespace app\models;
use yii\db\ActiveRecord;

class Time_list extends ActiveRecord{
    public function addToList($idworker, $time = 1){
        $_SESSION['Time_list'][$idworker->id] = [
            'id' => $idworker->id,
            'week_time' => $time,
            'name' => $idworker->name,
            'last_name' => $idworker->last_name,
        ];
        $_SESSION['Time_list.week_time'] = isset($_SESSION['Time_list.week_time']) ? $_SESSION['Time_list.week_time']
            + $time : $time;
    }
}