<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Task;

/**
 * TaskSearch represents the model behind the search form of `app\models\Task`.
 */
class TaskSearch extends Task
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'step_id', 'status', 'person_id', 'author'], 'integer'],
            [['note', 'director', 'basic', 'visit_date', 'meetting_date', 'reader_result', 'set_result_date'], 'safe'],
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
        $query = Task::find();

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
            'step_id' => $this->step_id,
            'status' => $this->status,
            'person_id' => $this->person_id,
            'author' => $this->author,
            'visit_date' => $this->visit_date,
            'meetting_date' => $this->meetting_date,
            'reader_result' => $this->reader_result,
            'set_result_date' => $this->set_result_date,
        ]);

        $query->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'director', $this->director])
            ->andFilterWhere(['like', 'basic', $this->basic]);

        return $dataProvider;
    }
}
