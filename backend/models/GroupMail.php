<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "group_mail".
 *
 * @property int $group_mail_id
 * @property string|null $mail_title
 * @property string|null $mail_subject
 * @property string|null $mail_body
 * @property int|null $is_send
 * @property string|null $details
 * @property int|null $group_id
 * @property int|null $no_of_mail_recepients = 0
 */
class GroupMail extends \yii\db\ActiveRecord
{
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'group_mail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mail_body', 'details'], 'string'],
            [['is_send', 'group_id'], 'integer'],
            [['mail_title', 'mail_subject'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'group_mail_id' => 'Group Mail ID',
            'mail_title' => 'Mail Title',
            'mail_subject' => 'Mail Subject',
            'mail_body' => 'Mail Body',
            'group_id'=>'Group ID',
            'is_send' => 'Is Send',
            'details' => 'Details',
        ];
    }
}
