<?php
/* @var $this yii\web\View */

use yii\captcha\Captcha;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<h1>Contact Me</h1>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

        <?= $form->field($model, 'name') ?>

        <?= $form->field($model, 'email')->input('email') ?>

        <?= $form->field($model, 'phone') ?>

        <?= $form->field($model, 'feedback')->textarea(['rows' => 6]) ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>