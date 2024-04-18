<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $first_name
 * @property string|null $last_name
 * @property string $dob
 * @property string|null $summary
 * @property int $city_id
 *
 * @property Cities $city
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
            [['first_name', 'last_name', 'summary', 'dob', 'city_id'], 'required'],
            [['dob'], 'date', 'format' => 'yyyy-MM-dd'],
            [['dob'], 'validateUserBirthDate'],
            [['city_id'], 'integer'],
            [['first_name', 'last_name',], 'string', 'max' => 255],
            [['summary'], 'string', 'max' => 1000],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::class, 'targetAttribute' => ['city_id' => 'id']],
        ];
    }
    
    public function validateUserBirthDate($attribute, $params) {
        $date = new \DateTime();
        date_sub($date, date_interval_create_from_date_string('12 years'));
        $minAgeDate = date_format($date, 'Y-m-d');
        date_sub($date, date_interval_create_from_date_string('100 years'));
        $maxAgeDate = date_format($date, 'Y-m-d');
        if ($this->$attribute > $minAgeDate) {
            $this->addError($attribute, 'Date is too small.');
        } elseif ($this->$attribute < $maxAgeDate) {
            $this->addError($attribute, 'Date is to big.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'dob' => 'DOB',
            'summary' => 'Summary',
            'city_id' => 'GN',
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::class, ['id' => 'city_id']);
    }
}
