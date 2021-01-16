<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "puanlama".
 *
 * @property int $id
 * @property int $puanlama_name
 * @property int $puanlama_surname
 * @property int $puanlama_ariza_yeri
 * @property int $puanlama_ariza_durum
 * @property int $puanlama_ariza_tip
 * @property int $puanlama_tel
 * @property int $puanlama_email
 */
class puanlama extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'puanlama';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['puanlama_name', 'puanlama_surname', 'puanlama_sikayet_yeri','puanlama_sikayet_durum','puanlama_sikayet_tip','puanlama_tel','puanlama_email'], 'required'],
            [['puanlama_tel'], 'integer'],
            [['puanlama_name','puanlama_surname', 'puanlama_sikayet_yeri','puanlama_sikayet_durum','puanlama_sikayet_tip','puanlama_email'],'string'],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'puanlama_name' => 'puanlama_name',
            'puanlama_surname' => 'puanlama_surname',
            'puanlama_ariza_yeri' => 'puanlama_sikayet_yeri',
            'puanlama_ariza_tip' => 'puanlama_sikayet_tip',
            'puanlama_ariza_durum' => 'puanlama_sikayet_durum',
            'puanlama_tel' => 'puanlama_tel',
            'puanlama_email' => 'puanlama_email',
        ];
    }
}
