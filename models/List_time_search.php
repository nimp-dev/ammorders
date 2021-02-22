<?php
namespace app\models;

use Yii;
use app\models\Clm_list_time;
use yii\data\ActiveDataProvider;


class List_time_search extends Clm_list_time {



    public function rules() {
	   return [
	    /* другие правила */
            [['id'], 'integer'],
	    	[['id_worker', 'data','name','last_name','day_time'], 'safe'],
		];
	}

    function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Clm_list_time::scenarios();
    }

    public function search($params)
    {
        $query = Clm_list_time::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

            $query->andFilterWhere(['id' => $this->id]);
            $query->andFilterWhere(['like', 'name', $this->name])
                ->andFilterWhere(['like', 'last_name', $this->last_name])
                ->andFilterWhere(['like', 'data', $this->data]);

            return $dataProvider;

    }

}