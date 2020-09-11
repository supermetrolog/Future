<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $text
 * @property string|null $date
 */
class Comment extends \yii\db\ActiveRecord
{
    public const LIMIT = 10;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text', 'name'], 'required', 'message' => 'Пожалуйста заполните поле'],
            [['text'], 'string', 'max' => 255],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 33],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'text' => 'Text',
            'date' => 'Date',
        ];
    }
}
