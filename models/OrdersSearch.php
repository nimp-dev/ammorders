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
            [['number', 'order_name', 'data', 'status'], 'string', 'max' => 255],
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
        $query->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'order_name', $this->order_name])
            ->andFilterWhere(['like', 'data', $this->data])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;

    }
}

