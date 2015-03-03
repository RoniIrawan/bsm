<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Cek Stok";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="text-center">
<<<<<<< HEAD
	<img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/basama.jpg" width="350" height="100" alt="BASAMA GROUP">
	<?php $form = ActiveForm::begin(); ?>	    
	    <div class="form-group-lg">	    	
    		<?= $form->field($model, 'kode')->textInput(['tabIndex'=>'1',
					'id'=>'kode',
					'placeholder'=>'Silahkan masukan kode barang yang anda cari',
					'maxlength'=>'7',						
					'style'=>'text-align: center; text-transform: uppercase'
				])->label('') 
			?>
			<?= Html::submitButton('Cek Data Stok', ['class' => 'btn btn-primary']) ?>	    	
	    </div>	    
=======
	<img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/basama.jpg" width="350" height="100" alt="BASAMA GROUP">	
	<?php $form = ActiveForm::begin(); ?>	    
	    <div class="form-group">
	        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
	    </div>
>>>>>>> da400b0e9a3ee140402b43c02ef39cf165f71d57
	<?php ActiveForm::end(); ?>
</div>
