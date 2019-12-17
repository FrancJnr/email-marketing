<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MailingList;

/**
 * MailingListSearch represents the model behind the search form of `app\models\MailingList`.
 */
class MailingListSearch extends MailingList
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mailing_list_id', 'mailing_group_id', 'title_id', 'is_active', 'country_id', 'gender'], 'integer'],
            [['first_name', 'surname', 'other_names', 'details', 'email'], 'safe'],
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
        $query = MailingList::find();

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
            'mailing_list_id' => $this->mailing_list_id,
            'mailing_group_id' => $this->mailing_group_id,
            'title_id' => $this->title_id,
            'is_active' => $this->is_active,
            'country_id' => $this->country_id,
            'gender' => $this->gender,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'surname', $this->surname])
            ->andFilterWhere(['like', 'other_names', $this->other_names])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
