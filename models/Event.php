<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $excerpt
 * @property string|null $description
 * @property string|null $date_from
 * @property string|null $date_to
 * @property int|null $users_id
 * @property string $created_at
 *
 * @property UserAdmin $users
 * @property EventAttandance[] $eventAttandances
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['date_from', 'date_to', 'created_at'], 'safe'],
            [['users_id'], 'integer'],
            [['title', 'excerpt'], 'string', 'max' => 255],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => UserAdmin::className(), 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'description' => 'Description',
            'date_from' => 'Date From',
            'date_to' => 'Date To',
            'users_id' => 'Users ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(UserAdmin::className(), ['id' => 'users_id']);
    }

    /**
     * Gets query for [[EventAttandances]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEventAttandances()
    {
        return $this->hasMany(EventAttandance::className(), ['event_id' => 'id']);
    }
}
