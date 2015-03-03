<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Hasil pencarian';
$this->params['breadcrumbs'][] = $this->title;
$kode;
?>

<?php foreach($model as $row): ?>
<?php $kode=$row->kode; ?>
<?php endforeach; ?>

<?php echo $kode; ?><br>
<img class="img-rounded" src="<?php echo Yii::getAlias('@web').'/image/produk/'.$kode.'.jpg'; ?>" width="350" height="275">
<div class="col-sm-3">
<ul class="list-group">
	<?php foreach($model as $data): ?>
	<li class="list-group-item">
		<span class="badge"><?php echo $data->qty; ?></span>
		<?php echo 'Ukuran <kbd>'.$data->size.'</kbd> Stok'; ?>
	</li>
	<?php endforeach; ?>	
</ul>	
</div>