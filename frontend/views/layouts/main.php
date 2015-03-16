<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="shortcut icon" href="<?php echo Yii::getAlias('@web'); ?>/favicon.ico" type="image/x-icon" />
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <img src="<?php echo Yii::getAlias('@web'); ?>/banner.JPEG" alt="">        
        <?php
            NavBar::begin([
                'brandLabel' => '<b style="color:white;">BASAMA</b>',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-custom navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                // ['label' => 'Beranda', 'url' => ['/site/index']],
                ['label' => 'Cek Stok', 'url' => ['/stok/index']],
                ['label' => 'Tentang kami', 'url' => ['/site/about']],
                // ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            // if (Yii::$app->user->isGuest) {                
            //     $menuItems[] = ['label' => 'Daftar', 'url' => ['/site/signup']];
            //     $menuItems[] = ['label' => 'Masuk', 'url' => ['/site/login']];
            // } else {
            //     $menuItems[] = ['label' => 'Hubungi kami', 'url' => ['/site/contact']];
            //     $menuItems[] = [
            //         'label' => 'Keluar (' . Yii::$app->user->identity->username . ')',
            //         'url' => ['/site/logout'],
            //         'linkOptions' => ['data-method' => 'post']
            //     ];                
            // }
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'homeLink' => [ 
                      'label' => Yii::t('yii', 'Beranda'),
                      'url' => Yii::$app->homeUrl,
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">Copyright &copy; <?= date('Y') ?> | <b style="color:blue;">BASAMA GROUP</b>.</p>
        <!-- <p class="pull-right"><?= Yii::powered() ?></p> -->
        <p class="pull-right"><b style="color:black;">JAVA SEVEN</b> | <b style="color:red;">CBR SIX</b> | <b style="color:purple;">BSM SOGA</b></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
