<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Agendamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agendamento-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medico_id')->textInput() ?>

    <?= $form->field($model, 'paciente_id')->textInput() ?>

    <?= $form->field($model, 'data_agendamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
