<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Messages;

/**
 * MessagesSearch represents the model behind the search form about `app\modules\admin\models\Messages`.
 */
class MessagesSearch extends Messages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'card'], 'integer'],
            [['dateCreated', 'name', 'message', 'email', 'congrats', 'signature', 'address'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Messages::find();

        $query->orderBy(['dateCreated' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'dateCreated' => $this->dateCreated,
            'card' => $this->card,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'congrats', $this->congrats])
            ->andFilterWhere(['like', 'signature', $this->signature])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'address', $this->address]);

        return $dataProvider;
    }
}
