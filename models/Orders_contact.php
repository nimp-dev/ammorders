<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;



class Orders_contact extends ActiveRecord
{
    public static function tableName(){
        return 'orders_contact';
    }

    public function getOrders(){
        return $this->hasOne(Orders::className(), ['id'=>'id_orders']);
    }

    public function rules()
    {
        return [
            [['id','id_orders'], 'integer'],
//            [['name'], 'required'],
//            [['accept'], 'string'],
            [['phone', 'addr', 'name', 'last_name','patron_name'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'id_orders' => '№ заказа',
            'phone' => 'телефон',
            'addr' => 'Адрес',
            'name' => 'Имя',
            'last_name' => 'фамилия',
            'patron_name' => 'отчество'
        ];
    }

}