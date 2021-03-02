<?php
namespace app\models;

use Yii;
use app\models\Orders;
use yii\data\ActiveDataProvider;

class OrdersSearch extends Orders {

    public function rules()
    {
        return [
            [['id'], 'integer'],
//            [['name'], 'required'],
            [['status'], 'safe'],
            [['name', 'last_name', 'start_at', 'end_at'], 'string', 'max' => 255],
        ];
    }
    function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Orders::scenarios();
    }

    public function search($params)
    {
        $query = Orders::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'start_at', $this->start_at])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'end_at', $this->end_at]);

        return $dataProvider;

    }
}

