<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "titles".
 *
 * @property int $title_id
 * @property string|null $title
 * @property string|null $details
 */
class Titles extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'titles';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['details'], 'string'],
            [['title'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'title_id' => 'Title ID',
            'title' => 'Title',
            'details' => 'Details',
        ];
    }
}
