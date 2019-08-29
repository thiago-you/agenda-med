<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paciente".
 *
 * @property int $id
 * @property string $nome
 * @property string $data_nascimento
 * @property string $telefone
 *
 * @property Agendamento[] $agendamentos
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paciente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'data_nascimento', 'telefone'], 'required'],
            [['data_nascimento'], 'safe'],
            [['nome'], 'string', 'max' => 45],
            [['telefone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'data_nascimento' => 'Data Nascimento',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendamentos()
    {
        return $this->hasMany(Agendamento::className(), ['paciente_id' => 'id']);
    }
}
