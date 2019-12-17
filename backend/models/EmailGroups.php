<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "email_groups".
 *
 * @property int $id
 * @property string|null $group_name
 * @property int|null $is_active
 * @property string|null $details
 */
class EmailGroups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_active'], 'boolean'],
            [['details'], 'string'],
            [['group_name'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'group_name' => 'Group Name',
            'is_active' => 'Active',
            'details' => 'Details',
        ];
    }
}
