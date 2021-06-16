<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $username
 * @property string|null $fullname
 * @property string|null $password
 * @property string|null $usia
 * @property string|null $alamat
 * @property string|null $sekolah
 * @property string $created_at
 *
 * @property EventAttandance[] $eventAttandances
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['username', 'fullname', 'password', 'usia', 'alamat', 'sekolah'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'fullname' => 'Fullname',
            'password' => 'Password',
            'usia' => 'Usia',
            'alamat' => 'Alamat',
            'sekolah' => 'Sekolah',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[EventAttandances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEventAttandances()
    {
        return $this->hasMany(EventAttandance::className(), ['users_id' => 'id']);
    }
}
