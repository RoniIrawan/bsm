<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Tentang kami';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    
<legend>
	<p class="lead">Kepada semua mitra <b class="text-info">BASAMA GROUP</b> yang kami hormati,</p>
</legend>
<blockquote>
	<p>Web site ini kami sediakan sebagai media untuk memberikan informasikan ketersediaan/stok produk kami kepada semua pihak yang telah bekerja sama dengan kami.
    	<b>BSM 67 (BASAMA GROUP)</b> memiliki komitmen untuk selalu meningkatkan pelayanan dan kepuasan Anda.
    	Semoga informasi yang tersedia di dalam web site ini dapat bermanfaat bagi Anda.</p>
</blockquote>    
<p class="text-right lead">Terima kasih.</p><br>

<div class="row">
  <div class="col-sm-6 col-md-4">
    <a href="#" class="thumbnail">
      <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/soga2.jpg" width="200" height="75" alt="BSM SOGA">      
    </a>
    <h3><p class="text-center"><span class="label label-primary">BSM SOGA</span></p></h3>
  </div>
  <div class="col-sm-6 col-md-4">
    <a href="#" class="thumbnail">
      <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/java2.jpg" width="200" height="75" alt="JAVA SEVEN">
    </a>
    <h3><p class="text-center"><span class="label label-default">JAVA SEVEN</span></p></h3>
  </div>
  <div class="col-sm-6 col-md-4">
    <a href="#" class="thumbnail">
      <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/cbr2.jpg" width="200" height="75" alt="CBR SIX">
    </a>
    <h3><p class="text-center"><span class="label label-danger">CBR SIX</span></p></h3>
  </div>
</div>
    
</div>
