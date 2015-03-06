<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\VStok */
/* @var $form ActiveForm */
?>
<div class="cari">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'qty') ?>
        <?= $form->field($model, 'kode') ?>
        <?= $form->field($model, 'size') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- _cari -->
