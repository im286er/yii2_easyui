<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%im_admin}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $nickname
 * @property string $name
 * @property string $phone
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%im_admin}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'string', 'max' => 30],
            [['password'], 'string', 'max' => 100],
            [['nickname'], 'string', 'max' => 50],
            [['name', 'phone'], 'string', 'max' => 20],
            [['phone'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'nickname' => 'Nickname',
            'name' => 'Name',
            'phone' => 'Phone',
        ];
    }
}
