<?php
namespace app\models;
use yii\db\ActiveRecord;
use Yii;

/**
* This is the model class for table "category".
*
* @property string $id
* @property string $parent_id
* @property string $name
* @property string $keywords
* @property string $description
*/
class Workers extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workers';
    }

//public function getMenu(){
//return $this->hasOne(Menu::className(), ['id' => 'parent_id']);
//}

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name'], 'required'],
            [['accept'], 'string'],
            [['name', 'last_name', 'phone', 'week_time'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'name' => 'Имя',
            'last_name' => 'Фамилия',
            'phone' => 'телефон',
            'week_time' => 'робочее время',
        ];
    }
}
?>
