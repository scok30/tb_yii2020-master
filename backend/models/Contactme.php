<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contactme".
 *
 * @property string $id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $content_time
 * @property string $feedback
 */
class Contactme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contactme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'phone', 'email', 'content_time', 'feedback'], 'required'],
            [['id'], 'string', 'max' => 20],
            [['name', 'email', 'feedback'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['content_time'], 'string', 'max' => 30],
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
            'phone' => 'Phone',
            'email' => 'Email',
            'content_time' => 'Content Time',
            'feedback' => 'Feedback',
        ];
    }
}
