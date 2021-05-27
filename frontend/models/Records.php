<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "records".
 *
 * @property int $recordId
 * @property int $patientId
 * @property string $diagnosis
 * @property string $date
 * @property int $doctorId
 *
 * @property Doctors $doctor
 * @property Patient $patient
 */
class Records extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'records';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['patientId', 'diagnosis', 'doctorId'], 'required'],
            [['patientId', 'doctorId'], 'integer'],
            [['diagnosis'], 'string'],
            [['date'], 'safe'],
            [['doctorId'], 'exist', 'skipOnError' => true, 'targetClass' => Doctors::className(), 'targetAttribute' => ['doctorId' => 'doctorId']],
            [['patientId'], 'exist', 'skipOnError' => true, 'targetClass' => Patient::className(), 'targetAttribute' => ['patientId' => 'paId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'recordId' => 'Record ID',
            'patientId' => 'Patient ID',
            'diagnosis' => 'Diagnosis',
            'date' => 'Date',
            'doctorId' => 'Doctor ID',
        ];
    }

    /**
     * Gets query for [[Doctor]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getDoctor()
    {
        return $this->hasOne(Doctors::className(), ['doctorId' => 'doctorId']);
    }

    /**
     * Gets query for [[Patient]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['paId' => 'patientId']);
    }

    /**
     * {@inheritdoc}
     * @return RecordsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new RecordsQuery(get_called_class());
    }
}
