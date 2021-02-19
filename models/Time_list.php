<?php
namespace app\models;
use yii\db\ActiveRecord;

class Time_list extends ActiveRecord{
    public function addToList($idworker, $time = null){
        $_SESSION['Time_list'][$idworker->id] = [
            'id' => $idworker->id,
            'week_time' => $time,
            'name' => $idworker->name,
            'last_name' => $idworker->last_name,
        ];
//        $_SESSION['Time_list.week_time'] = isset($_SESSION['Time_list.week_time']) ? $_SESSION['Time_list.week_time']
//            + $time : $time;
    }

    public function recalc($id){
        unset($_SESSION['Time_list'][$id]);
    }

    public function addtime($id,$time){
        $_SESSION['Time_list'][$id]['week_time'] = $time;
    }

}