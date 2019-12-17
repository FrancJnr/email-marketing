<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "email_templates".
 *
 * @property int $template_id
 * @property string|null $teplate_key
 * @property string|null $template_body
 */
class EmailTemplates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'email_templates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['template_body'], 'string'],
            [['teplate_key'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'template_id' => 'Template ID',
            'teplate_key' => 'Teplate Key',
            'template_body' => 'Template Body',
        ];
    }
}
