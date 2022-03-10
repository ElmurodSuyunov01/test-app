<?php

/** @var yii\web\View $this */
/** @var backend\models\PersonForm $model */

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;


$this->title = 'Formani toldiring';
?>
<div class="site-login">
    <div class="mt-5 offset-lg-3 col-lg-6">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Please fill out the following fields to login:</p>

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'first_name')->textInput() ?>
        <?= $form->field($model, 'last_name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email')->input('email')?>



        <div class="form-group">
            <?= Html::submitButton('submit', ['class' => 'btn btn-primary btn-block', 'name' => 'submit-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>