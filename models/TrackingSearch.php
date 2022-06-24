<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tracking;

/**
 * TrackingSearch represents the model behind the search form of `app\models\Tracking`.
 */
class TrackingSearch extends Tracking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'person_id', 'status_id'], 'integer'],
            [['approve', 'approve_result_date', 'tracking', 'data_json', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tracking::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'person_id' => $this->person_id,
            'status_id' => $this->status_id,
            'approve' => $this->approve,
            'approve_result_date' => $this->approve_result_date,
            'tracking' => $this->tracking,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'data_json', $this->data_json]);

        return $dataProvider;
    }
}
