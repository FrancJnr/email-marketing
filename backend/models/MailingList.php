<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mailing_list".
 *
 * @property int $mailing_list_id
 * @property int|null $mailing_group_id
 * @property string|null $first_name
 * @property string|null $surname
 * @property string|null $other_names
 * @property int|null $title_id
 * @property int|null $is_active
 * @property int|null $country_id
 * @property int|null $gender
 * @property string|null $details
 * @property string|null $email
 */
class MailingList extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mailing_list';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mailing_group_id', 'title_id', 'is_active', 'country_id', 'gender'], 'integer'],
            [['details'], 'string'],
            [['first_name', 'surname', 'other_names'], 'string', 'max' => 120],
            [['email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'mailing_list_id' => 'Mailing List ID',
            'mailing_group_id' => 'Mailing Group ID',
            'first_name' => 'First Name',
            'surname' => 'Surname',
            'other_names' => 'Other Names',
            'title_id' => 'Title ID',
            'is_active' => 'Is Active',
            'country_id' => 'Country ID',
            'gender' => 'Gender',
            'details' => 'Details',
            'email' => 'Email',
        ];
    }
}
