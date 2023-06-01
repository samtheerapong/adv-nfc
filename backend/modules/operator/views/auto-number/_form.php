<?php

use kartik\widgets\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\operator\models\AutoNumber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auto-number-form">

    <p>
        <?= Html::a('<i class="fa-solid fa-angle-left"></i> ' . Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-primary']) ?>
    </p>
    <div class="actions-form">
        <div class="card card-secondary">
            <div class="card-header">
                <div class="card-title"><?= $this->title ?></div>
            </div>
            <div class="card-body">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'group')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'number')->textInput() ?>

                <?= $form->field($model, 'optimistic_lock')->textInput() ?>


                <div class="form-group">
                    <?= Html::submitButton('<i class="fa-solid fa-save"></i> ' . Yii::t('app', 'Save'), ['class' => 'btn btn-success btn-lg btn-block']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>