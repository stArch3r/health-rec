<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property int $paId
 * @property string $Name
 * @property int $age
 * @property string $gender
 * @property int $phoneNo
 * @property int $doctorId
 * @property string $disease
 * @property int $weight
 *
 * @property Doctors $doctor
 * @property Records[] $records
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'age', 'gender', 'phoneNo', 'doctorId', 'disease', 'weight'], 'required'],
            [['age', 'phoneNo', 'doctorId', 'weight'], 'integer'],
            [['gender', 'disease'], 'string'],
            [['Name'], 'string', 'max' => 255],
            [['doctorId'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::className(), 'targetAttribute' => ['doctorId' => 'doctorId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'paId' => 'Pa ID',
            'Name' => 'Name',
            'age' => 'Age',
            'gender' => 'Gender',
            'phoneNo' => 'Phone No',
            'doctorId' => 'Doctor ID',
            'disease' => 'Disease',
            'weight' => 'Weight',
        ];
    }

    /**
     * Gets query for [[Doctor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctors::className(), ['doctorId' => 'doctorId']);
    }

    /**
     * Gets query for [[Records]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Records::className(), ['patientId' => 'paId']);
    }
}
