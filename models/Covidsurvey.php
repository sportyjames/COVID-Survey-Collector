<?php

namespace app\models;

use Yii;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "covidsurvey".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property int $fever
 * @property int $headache
 * @property int $cough
 * @property int $sorethroat
 * @property int $tasteloss
 * @property int $diarrhea
 * @property string|null $others
 * @property int|null $created_by
 *
 * @property User $createdBy
 */
class Covidsurvey extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'covidsurvey';
    }

    public function behaviors() 
    { 
        return [
            [
                'class' => BlameableBehavior::class,
                'updatedByAttribute' => false,
            ],
        ]; 
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'fever', 'headache', 'cough', 'sorethroat', 'tasteloss', 'diarrhea'], 'required'],
            [['fever', 'headache', 'cough', 'sorethroat', 'tasteloss', 'diarrhea', 'created_by'], 'integer'],
            [['firstname', 'lastname', 'others'], 'string', 'max' => 30],
            [['created_by'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['created_by' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'fever' => 'Fever',
            'headache' => 'Headache',
            'cough' => 'Cough',
            'sorethroat' => 'Sorethroat',
            'tasteloss' => 'Tasteloss',
            'diarrhea' => 'Diarrhea',
            'others' => 'Others',
            'created_by' => 'Created By',
        ];
    }

    /**
     * Gets query for [[CreatedBy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCreatedBy()
    {
        return $this->hasOne(User::className(), ['id' => 'created_by']);
    }
}
