<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\GroupMail;

/**
 * GroupMailSearch represents the model behind the search form of `app\models\GroupMail`.
 */
class GroupMailSearch extends GroupMail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['group_mail_id', 'is_send'], 'integer'],
            [['mail_title', 'mail_subject', 'mail_body', 'details'], 'safe'],
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
        $query = GroupMail::find();

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
            'group_mail_id' => $this->group_mail_id,
            'is_send' => $this->is_send,
        ]);

        $query->andFilterWhere(['like', 'mail_title', $this->mail_title])
            ->andFilterWhere(['like', 'mail_subject', $this->mail_subject])
            ->andFilterWhere(['like', 'mail_body', $this->mail_body])
            ->andFilterWhere(['like', 'details', $this->details]);

        return $dataProvider;
    }
}
