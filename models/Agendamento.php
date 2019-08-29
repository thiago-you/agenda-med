<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "agendamento".
 *
 * @property int $id
 * @property int $medico_id
 * @property int $paciente_id
 * @property string $data_agendamento
 *
 * @property Medico $medico
 * @property Paciente $paciente
 */
class Agendamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'agendamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medico_id', 'paciente_id'], 'required'],
            [['medico_id', 'paciente_id'], 'integer'],
            [['data_agendamento'], 'safe'],
            [['medico_id'], 'exist', 'skipOnError' => true, 'targetClass' => Medico::className(), 'targetAttribute' => ['medico_id' => 'id']],
            [['paciente_id'], 'exist', 'skipOnError' => true, 'targetClass' => Paciente::className(), 'targetAttribute' => ['paciente_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medico_id' => 'Medico ID',
            'paciente_id' => 'Paciente ID',
            'data_agendamento' => 'Data Agendamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedico()
    {
        return $this->hasOne(Medico::className(), ['id' => 'medico_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Paciente::className(), ['id' => 'paciente_id']);
    }
}
