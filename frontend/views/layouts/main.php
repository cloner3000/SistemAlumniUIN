<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php 
    NavBar::begin([
        'brandLabel' => Html::img(Yii::$app->homeUrl.'assets/img/logo0.png', ['height' => '60', 'style' => 'float:left']),
        //'brandLabel' => '<img src="'.Yii::$app->homeUrl.'assets/img/logo.jpg" height=30 width=30>Sistem Alumni UIN SUSKA RIAU',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-default navbar-fixed-top', 
            'style' => 'background-color: #fff;',

        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']], 
        ['label' => 'Data Master',
                   'items' => [ 
                        ['label' => 'Alumni', 'url' => ['/alumni']], 
                        ['label' => 'Berita', 'url' => ['/berita']],
                        ['label' => 'Peluang Beasiswa', 'url' => ['/beasiswa']], 
                        ['label' => 'Perusahaan Mitra', 'url' => ['/Perusahaan Mitra']], 
                        ['label' => 'Import', 'url' => ['/alumni/formimport']],           
                    ], 
                    'visible' => Yii::$app->user->can('admin')
                ],
         ['label' => 'Data Master',
                   'items' => [
                        ['label' => 'Admin', 'url' => ['/site/registeradmin']],
                        ['label' => 'Alumni', 'url' => ['/alumni']], 
                        ['label' => 'Berita', 'url' => ['/berita']],
                        ['label' => 'Peluang Beasiswa', 'url' => ['/beasiswa']], 
                        ['label' => 'Perusahaan Mitra', 'url' => ['/Perusahaan Mitra']], 
                        ['label' => 'Import', 'url' => ['/alumni/formimport']],           
                    ], 
                    'visible' => Yii::$app->user->can('superadmin')
                ],
        ['label' => 'Info',
                   'items' => [ 
                        ['label' => 'Alumni', 'url' => ['/alumni']], 
                        ['label' => 'Berita', 'url' => ['/berita']],
                        ['label' => 'Peluang Beasiswa', 'url' => ['/beasiswa']], 
                        ['label' => 'Perusahaan Mitra', 'url' => ['/PerusahaanMitra']],           
                    ], 
                    'visible' => Yii::$app->user->can('alumni')
                ],
        ['label' => 'Alumni',
                   'items' => [
                       // ['label' => 'Register Alumni', 'url' => ['/site/signup']],
                        ['label' => 'Register Alumni', 'url' => ['alumni/konfirmasi']],
                        ['label' => 'Data Alumni', 'url' => ['/alumni']], 
                    ], 
                    'visible' => Yii::$app->user->can('admin')
                ],
        ['label' => 'Karir',
                   'items' => [
                        ['label' => 'Info Karir', 'url' => ['/karir']],
                        ['label' => 'Pelatihan-pelatihan', 'url' => ['/pelatihan']], 
                    ], 
                    'visible' => Yii::$app->user->can('admin')
                ],
        ['label' => 'Edit Profil', 'url' => ['/alumni/editprofil'],
            'visible' => Yii::$app->user->can('alumni')
        ], 
        
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Register Alumni', 'url' => ['alumni/konfirmasi']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link', 'style' => 'text-transform: none']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
 
    NavBar::end();
    ?>
    
    
    <div class="container">
        <?= Breadcrumbs::widget([
            'itemTemplate' => "<li><i>{link}</i></li>\n",
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l12 col m12 col s12">
                        <!-- Footer Button -->
                        <div class="footer-button center-align">
                            
                        </div>
                    </div>
  
                    <div class="col l12 col m12 col s12">
                        <div class="row" style="color: white">
                            
                            <!-- about -->
                            <div class="col-md-4">
                                <h3>KKN Online</h3>
                                <p style="color:white">KKN Online di bawah naungan LPPM UIN SUSKA sebagai aplikasi pendukung dalam pendaftaran KKN di lingkungan civitas akademik UIN SUSKA Riau</p>
                            </div>
                            <!-- ./about -->
                            
                            <!-- quick links -->
                            <div class="col-md-4">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="http://alumni.uin-suska.ac.id/">Home</a>                               
                                    <a href="http://uin-suska.ac.id">UIN SUSKA</a>
                                    <a href="http://lppm.uin-suska.ac.id/">LPPM</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                            <!-- contacts -->
                             <div class="col-md-4">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        Gedung Islamic Center UIN Suska Lantai Dasar<br> 
                                        Jl. Subrantas Km. 15, Pekanbaru, 28293 <br>                                         Telp : 0761-562223 
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                         0761-28293
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>LPPM UIN SUSKA</strong><br>
                                        <a href="mailto:pusdimas.lppm@uin-suska.ac.id">pusdimas.lppm@uin-suska.ac.id</a>
                                    </div>                                    
                                </div>
                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- Footer Bottom -->
            <div class="footer-copyright">
                <div class="container">
                    <div class="row">
                    <!-- Copyright Text -->
                    <div class="col l4 col m12 col s12">
                        &copy; UIN Suska <?= date('Y') ?>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </footer>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
