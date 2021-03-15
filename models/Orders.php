<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;



class Orders extends ActiveRecord
{




    public static function tableName(){
        return 'orders';
    }

    public function getOrders_contact(){
        return $this->hasMany(Orders_contact::className(), ['id_orders'=>'id']);
    }

    public function getOrders_count(){
        return $this->hasMany(Orders_count::className(), ['id_orders'=>'id']);
    }

    public function rules()
    {
        return [
            [['id'], 'integer'],
//            [['name'], 'required'],
//            [['accept'], 'string'],
            [['number', 'order_name', 'data','status'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'number' => '№ заказа',
            'order_name' => 'название',
            'data' => 'дата внесения',
            'status' => 'статус'
        ];
    }

    public function getStatusesList()
    {
        return [
            'inactive' => \Yii::t('app', 'Inactive'),
            'active'   => \Yii::t('app', 'Active'),
        ];
    }
    
    // public function getFullName()
    // {
    //     return trim(sprintf('%s %s', $this->name, $this->last_name));
    // }

}