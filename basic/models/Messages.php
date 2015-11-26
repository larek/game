<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "messages".
 *
 * @property integer $id
 * @property string $dateCreated
 * @property string $name
 * @property string $message
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
            [['dateCreated', 'email', 'address', 'congrats'], 'required'],
            [['dateCreated'], 'safe'],
            [['congrats'], 'string'],
            [['signature'], 'string'],
            [['address'], 'string'],
            [['card'], 'string'],
            [['email'], 'string', 'max' => 250]
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
            'congrats' => 'congrats',
            'signature' => 'signature',
            'address' => 'address',
            'email' => 'email',
        ];
    }
}
