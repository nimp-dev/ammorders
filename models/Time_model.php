<?php

namespace app\models;

use yii\base\Model;

class Time_model extends Model
{
    public $data;

    public function rules()
    {
        return [
            [['data'], 'required'],
        ];
    }
}
