<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property string $dateCreated
 * @property string $name
 * @property string $message
 * @property string $email
 * @property string $congrats
 * @property string $signature
 * @property string $address
 * @property integer $card
 */
class Messages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'messages';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dateCreated', 'email'], 'required'],
            [['dateCreated'], 'safe'],
            [['message', 'email', 'congrats', 'signature', 'address','link'], 'string'],
            [['card'], 'integer'],
            [['name'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dateCreated' => 'Date Created',
            'name' => 'Name',
            'message' => 'Message',
            'email' => 'Email',
            'congrats' => 'Congrats',
            'signature' => 'Signature',
            'address' => 'Address',
            'card' => 'Card',
            'link' => 'Link',
        ];
    }
}
