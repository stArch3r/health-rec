<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Doctors;

/**
 * DoctorsSearch represents the model behind the search form of `frontend\models\Doctors`.
 */
class DoctorsSearch extends Doctors
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['doctorId'], 'integer'],
            [['docName', 'dept'], 'safe'],
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
        $query = Doctors::find();

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
            'doctorId' => $this->doctorId,
        ]);

        $query->andFilterWhere(['like', 'docName', $this->docName])
            ->andFilterWhere(['like', 'dept', $this->dept]);

        return $dataProvider;
    }
}
