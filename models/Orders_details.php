<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;



class Orders_details extends ActiveRecord
{
    public static function tableName(){
        return 'orders_details';
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
            [['item_name', 'profile', 'materials', 'executor'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'id_order' => '№ заказа',
            'item_name' => 'изделие',
            'profile' => 'габариты',
            'materials' => 'материалы',
            'executor' => 'исполнители'
        ];
    }


}