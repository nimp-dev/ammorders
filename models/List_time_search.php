<?php
namespace app\models;
use yii\db\ActiveRecord;
use app\models\Clm_list_time;
use Yii;


class List_time_search extends ActiveRecord {

	public $name;


	    public static function tableName(){
        return 'clm_list_time';
    }

    public function rules() {
	   return [
	    /* другие правила */
	    	[['id_worker', 'data','name','last_name','day_time'], 'safe'],
		];
	}

	public function search($params) {
    $query = Clm_list_time::find();
    $dataProvider = new ActiveDataProvider([
        'query' => $query,
    ]);


    $dataProvider->setSort([
        'attributes' => [
            'data',
            'name' => [
                'asc' => ['name' => SORT_ASC],
                'desc' => ['name' => SORT_DESC],
                'label' => 'name',
                'default' => SORT_ASC
            ],
            'last_name',
            'day_time',
        ]
    ]);


    // if (!($this->load($params) && $this->validate())) {
    //     return $dataProvider;
    // }

    // public function attributeLabels()
    // {
    //     return [
    //         'name' => 'Имя',
    //         'last_name' => 'Фамилия',
    //         'data' => 'Дата',
    //         'day_time' => 'дн.норма',
    //     ];
    // }

    $this->addCondition($query, 'data');
    $this->addCondition($query, 'name', true);
    $this->addCondition($query, 'last_name', true);
    $this->addCondition($query, 'day_time');

    $query->andWhere('first_name LIKE "%' . $this->fullName . '%" ' .
        'OR last_name LIKE "%' . $this->fullName . '%"'
    );

    return $dataProvider;

	}
}