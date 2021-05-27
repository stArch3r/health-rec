<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "doctors".
 *
 * @property int $doctorId
 * @property string $docName
 * @property string $dept
 *
 * @property Patient[] $patients
 * @property Records[] $records
 */
class Doctors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'doctors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['docName', 'dept'], 'required'],
            [['docName'], 'string', 'max' => 100],
            [['dept'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'doctorId' => 'Doctor ID',
            'docName' => 'Doc Name',
            'dept' => 'Dept',
        ];
    }

    /**
     * Gets query for [[Patients]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPatients()
    {
        return $this->hasMany(Patient::className(), ['doctorId' => 'doctorId']);
    }

    /**
     * Gets query for [[Records]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRecords()
    {
        return $this->hasMany(Records::className(), ['doctorId' => 'doctorId']);
    }
}
