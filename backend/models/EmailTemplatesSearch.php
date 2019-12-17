<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmailTemplates;

/**
 * EmailTemplatesSearch represents the model behind the search form of `app\models\EmailTemplates`.
 */
class EmailTemplatesSearch extends EmailTemplates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['template_id'], 'integer'],
            [['teplate_key', 'template_body'], 'safe'],
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
        $query = EmailTemplates::find();

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
            'template_id' => $this->template_id,
        ]);

        $query->andFilterWhere(['like', 'teplate_key', $this->teplate_key])
            ->andFilterWhere(['like', 'template_body', $this->template_body]);

        return $dataProvider;
    }
}
