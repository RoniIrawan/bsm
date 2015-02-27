<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Cek Stok";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="text-center">
	<img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/basama.jpg" width="350" height="100" alt="BASAMA GROUP">	
	<?php $form = ActiveForm::begin(); ?>	    
	    <div class="form-group">
	        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
	    </div>
	<?php ActiveForm::end(); ?>
</div>
