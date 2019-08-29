<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medico".
 *
 * @property int $id
 * @property string $nome
 * @property string $especialidade
 * @property int $crm
 *
 * @property Agendamento[] $agendamentos
 */
class Medico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'especialidade', 'crm'], 'required'],
            [['crm'], 'integer'],
            [['nome', 'especialidade'], 'string', 'max' => 45],
            [['crm'], 'unique'],
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
            'especialidade' => 'Especialidade',
            'crm' => 'Crm',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgendamentos()
    {
        return $this->hasMany(Agendamento::className(), ['medico_id' => 'id']);
    }
}
