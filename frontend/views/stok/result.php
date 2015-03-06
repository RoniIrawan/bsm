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

<div class="row">
	<div class="col-sm-6 col-md-6">
		<div class="thumbnail">
			<img src="<?php echo Yii::getAlias('@web').'/image/produk/'.$kode.'.jpg'; ?>" alt="<?php echo $kode; ?>">      		
		</div>
	</div>
	<div class="col-sm-3 col-md-3">
		<div class="panel panel-info">
		  <!-- Default panel contents -->
		  <div class="panel-heading text-center"><b><?php echo $kode; ?></b></div>
		  <!-- List group -->
		  <ul class="list-group">
		  	<?php foreach($model as $data): ?>
		    <li class="list-group-item"></span>
				<?php echo 'Ukuran <span class="label label-danger">'.$data->size.'</span> Stok '; ?><span class="label label-success"><?php echo $data->qty; ?></span>
			</li>
			<?php endforeach; ?>
		  </ul>
		</div>
		<?= Html::a('<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Kembali', 
			['/stok/index'], 
			['class'=>'btn btn-warning']) 
		?>
	</div>
</div>