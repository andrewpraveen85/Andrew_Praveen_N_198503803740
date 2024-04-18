<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Users $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="row mt-1 mb-2">
        <div class="col-6"><?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?></div>
        <div class="col-6"><?= $form->field($model, 'city_id')->dropDownList($citys, ['class'=>'form-control mb-2', 'prompt'=>'Select',]) ?></div>
    </div>
    
    <div class="row mb-2">
        <div class="col-6"><?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?></div>
        <div class="col-6"><?= $form->field($model, 'dob')->textInput(['type'=> 'date', 'max'=>date("Y-m-d")]) ?></div>
    </div>
    
    <div class="row mb-2">
        <div class="col-12"><?= $form->field($model, 'summary')->textarea(['rows' => '3']) ?></div>
    </div>

    <div class="row mb-2">
        <div class="col-12">
            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
