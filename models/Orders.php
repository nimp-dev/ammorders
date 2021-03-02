<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;
use Yii;



class Orders extends ActiveRecord
{

    const SCENARIO_CREATE = 'create';

    public function behaviors() {
            return [
                TimestampBehavior::className(),
                    'saveRelations' => [
                    'class'     => SaveRelationsBehavior::className(),
                    'relations' => [
                        'orders_count',
                        ],
                    ],
            ];
        }

    public function transactions()
    {
        return [
            self::SCENARIO_DEFAULT => self::OP_ALL,
        ];
    }


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
            [['name', 'last_name', 'start_at', 'end_at','status'], 'required', 'on' => self::SCENARIO_CREATE],
            [['name', 'last_name', 'start_at', 'end_at','status'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => '№',
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'start_at' => 'дата начала',
            'end_at' => 'дата здачи',
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
    public function getFullName()
    {
        return trim(sprintf('%s %s', $this->name, $this->last_name));
    }

}