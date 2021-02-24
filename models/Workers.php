<?php
namespace app\models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use Yii;
use yii\db\Expression;
use yii\web\IdentityInterface;

/**
* This is the model class for table "category".
*
* @property string $id
* @property string $parent_id
* @property string $name
* @property string $last_name
* @property string $description
*/
class Workers extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    const SCENARIO_CREATE = 'create';

    public static function tableName()
    {
        return 'workers';
    }


    public function behaviors() {
        $behaviors = parent::behaviors();

        // auto fill timestamp columns.
        if ($this->hasAttribute('created_at') || $this->hasAttribute('updated_at')) {
            $behavior = [
                'class' => TimestampBehavior::class,
                'value' => new Expression('NOW()'),
            ];
            if ($this->hasAttribute('created_at')) {
                $behavior['createdAtAttribute'] = 'created_at';
            } else {
                $behavior['createdAtAttribute'] = null;
            }
            if ($this->hasAttribute('updated_at')) {
                $behavior['updatedAtAttribute'] = 'updated_at';
            } else {
                $behavior['updatedAtAttribute'] = null;
            }
            $behaviors[] = $behavior;
        }
        return $behaviors;
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
//            [['name'], 'required'],
//            [['accept'], 'string'],
            [['name', 'last_name', 'phone'], 'required', 'on' => self::SCENARIO_CREATE],
            [['name', 'last_name', 'phone', 'week_time','status'], 'string', 'max' => 255],
        ];
    }
    public function getStatusesList()
    {
        return [
            'inactive' => \Yii::t('app', 'Inactive'),
            'active'   => \Yii::t('app', 'Active'),
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
            'status' => 'статус'
        ];
    }

    /**
     * @return string
     */

    public function getFullName()
    {
        return trim(sprintf('%s %s', $this->name, $this->last_name));
    }
}
?>
