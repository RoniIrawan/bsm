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
	    <div class="form-group-lg">	
			<div class="col-md-6 col-md-offset-3">
				<?= $form->field($model, 'kode')->textInput(['tabIndex'=>'1',
					'id'=>'kode',
					'placeholder'=>'masukan kode barang',
					'maxlength'=>'7',						
					'style'=>'text-align: center; text-transform: uppercase'
				])->label('') ?>
				<?= Html::submitButton('Cek Data Stok', ['class' => 'btn btn-primary']) ?>	
			</div>		    	
	    </div>	    
	<?php ActiveForm::end(); ?>
</div>