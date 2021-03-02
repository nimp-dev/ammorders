<?php
namespace app\models;

use Yii;
use app\models\Workers;
use yii\data\ActiveDataProvider;

class WorkersSearch extends Workers {

    public function rules() {
        return [
            /* другие правила */
            [['id'], 'integer'],
            [['name', 'accept','last_name','phone','status'], 'safe'],
        ];
    }
    function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Workers::scenarios();
    }

    public function search($params)
    {
        $query = Workers::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;

    }
}

