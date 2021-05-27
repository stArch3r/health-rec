<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Patient;

/**
 * PatientSearch represents the model behind the search form of `frontend\models\Patient`.
 */
class PatientSearch extends Patient
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['paId', 'age', 'phoneNo', 'doctorId', 'weight'], 'integer'],
            [['Name', 'gender', 'disease'], 'safe'],
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
        $query = Patient::find();

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
            'paId' => $this->paId,
            'age' => $this->age,
            'phoneNo' => $this->phoneNo,
            'doctorId' => $this->doctorId,
            'weight' => $this->weight,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'disease', $this->disease]);

        return $dataProvider;
    }
}
