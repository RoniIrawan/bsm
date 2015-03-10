<?php
/* @var $this yii\web\View */
$this->title = 'Selamat datang di BSM 67';
?>
<div class="site-index">



    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/slide/basama.jpg" alt="BASAMA GROUP">
          <div class="carousel-caption">
            BASAMA GROUP
          </div>
        </div>
        <div class="item">
          <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/slide/customer.jpg" alt="BASAMA GROUP">
          <div class="carousel-caption">
            Customer Satisfaction
          </div>
        </div>
        <div class="item">
          <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/slide/fashion_show.jpg" alt="BASAMA GROUP">
          <div class="carousel-caption">
            Fashion Show
          </div>
        </div>
        <div class="item">
          <img class="img-rounded" src="<?php echo Yii::getAlias('@web'); ?>/image/slide/shoes_factory.jpg" alt="BASAMA GROUP">
          <div class="carousel-caption">
            Shoes Factory
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Kembali</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Berikutnya</span>
      </a>
    </div>




</div>