<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;



class Orders_count extends ActiveRecord
{

    public static function tableName(){
        return 'orders_count';
    }

    public function getOrders(){
        return $this->hasOne(Orders::className(), ['id'=>'id_orders']);
    }

    public function rules()
    {
        return [
            [['id','id_orders'], 'integer'],
            [['price', 'prepay', 'start_at', 'end_at'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => '№',
            'id_orders' => '№ заказа',
            'price' => 'цена',
            'prepay' => 'предоплата',
            'start_at' => 'дата начала',
            'end_at' => 'дата здачи'
        ];
    }

}