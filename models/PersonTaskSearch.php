<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PersonTask;

/**
 * PersonTaskSearch represents the model behind the search form of `app\models\PersonTask`.
 */
class PersonTaskSearch extends PersonTask
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'person_id', 'checkup'], 'integer'],
            [['reader_fix_date', 'reader_result_date', 'guidelines_date'], 'safe'],
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
        $query = PersonTask::find();

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
            'checkup' => $this->checkup,
            'reader_fix_date' => $this->reader_fix_date,
            'reader_result_date' => $this->reader_result_date,
            'guidelines_date' => $this->guidelines_date,
        ]);

        return $dataProvider;
    }
}
