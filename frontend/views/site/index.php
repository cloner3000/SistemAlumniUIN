<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
/* @var $this yii\web\View */
$this->title = 'Sistem Alumni UIN SUSKA RIAU';
$this->registerJs("$(document).ready(function() {
$('.pgwSlider').pgwSlider(displayList='false');
});
", View::POS_END);
?>
<div class="site-index">
  
  <div class="container">
    <div class="row" style="margin-bottom: 5%">
      <div style="margin-top:0px; margin-bottom: 15%">
        <ul class="pgwSlider">
          <?php
          foreach ($berita as $key) {
          # code...
          echo '
          <li>
            <a href="'.Yii::$app->homeUrl.'berita/bacaberita?id='.$key->kode.'" target="_blank">
              '. Html::img(Yii::$app->homeUrl."../uploads/berita/gambar/$key->gambar", ['min-height' => '600', 'alt' => '<h2>'.$key->judul.'</h2>']) .'
            </a>
          </li>
          ';
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="row row-offcanvas row-offcanvas-right">
      <div class="col-lg-12">
        <p class="pull-right visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>
        <div class="row">
          <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <center><?= Html::img(Yii::$app->homeUrl."../icon_beasiswa.png", ['height' => '166' ]);?> <h2>Peluang Beasiswa</h2></center>
                <p><center><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></center></p>
              </div>
            </div>
            </div><!--/span-->
            <div class="col-lg-4">
              <div class="card">
                <div class="card-body">
                  <center><?= Html::img(Yii::$app->homeUrl."../icon_lowongan.png", ['height' => '166' ]);?> <h2>Lowongan Kerja</h2></center>
                  <p><center><a class="btn btn-success" href="#" role="button">View details &raquo;</a></center></p>
                </div>
              </div>
              </div><!--/span-->
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-body">
                    <center><?= Html::img(Yii::$app->homeUrl."../icon_perusahaan.png", ['height' => '166' ]);?><h2>Perusahaan Mitra</h2></center>
                    <p><center><a class="btn btn-warning" href="#" role="button">View details &raquo;</a></center></p>
                  </div>
                </div>
                </div><!--/span-->
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-4">
                    <div class="news vertical z-depth-1">
                      <!-- News Image -->
                      <div class="news-image">
                        <img class="responsive-img" src="http://localhost/mig/AlumniUin/frontend/web/assets/aa592616/css/graphics/bg.jpg" alt="news Image">
                      </div>
                      <!-- News Description -->
                      <div class="news-description">
                        <div class="news-time">
                          <i class="fa fa-clock-o"></i> 
                        </div>
                        <div class="news-title"> <a href="<?= Yii::$app->homeUrl.'berita/bacaberita?id='.$key->kode ?>"> <?= $berita[0]->judul ?> </a></div>
                        <div class="news-content"><p><?= $berita[0]->isi ?></p></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="sidbar-box z-depth-1">
                                <div class="sidebar-title">Terbaru</div>
                                <div class="news-sidebar">
                                <?php foreach ($berita as $key) {
                                  echo '
                                    <div class="news-box">
                                        <!-- News Sidebar Image -->
                                        <div class="image">
                                            '. Html::img(Yii::$app->homeUrl."../uploads/berita/gambar/$key->gambar", ['min-height' => '600' ]) .'
                                        </div>
                                        <!-- News Sidebar Detail -->
                                        <div class="news-detail">
                                            <div class="news-category">
                                                <a href="javascript:void(0);">'. Yii::$app->formatter->asRelativeTime(new \DateTime($key->tanggal_post.' '.$key->jam_post)) .'</a>
                                            </div>
                                            <div class="news-title">
                                                <a href="'.Yii::$app->homeUrl.'berita/bacaberita?id='.$key->kode.'">'. $key->judul .'</a>
                                            </div>
                                        </div>
                                    </div>';
                                  } ?>
                                </div>
                            </div>
                  </div>
                  </div>
                  <div class="col-lg-4">
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <h3>Alumni</h3>
                      <?= GridView::widget([
                      'dataProvider' => $dataProvider,
                      'filterModel' => $searchModel,
                      'showFooter'=>false,
                      'columns' => [
                      ['class' => 'yii\grid\SerialColumn'],
                      'nim',
                      'nama',
                      //'jenis_kelamin',
                      'tempat_lahir',
                      //'tanggal_lahir',
                      // 'nama_ayah',
                      // 'nama_ibu',
                      // 'alamat:ntext',
                      // 'alt_kelurahan_desa',
                      // 'alt_kecamatan',
                      // 'alt_kab_kota',
                      // 'alt_provinsi',
                      // 'alt_negara',
                      // 'nomor_telpon',
                      // 'asal_sekolah',
                      // 'asl_skl_kelurahan_desa',
                      // 'asl_skl_kecamatan',
                      // 'asl_skl_kab_kota',
                      // 'asl_skl_provinsi',
                      // 'asl_skl_negara',
                      // 'fakultas',
                      // 'jurusan_prodi',
                      // 'kons',
                      // 'semester',
                      // 'tanggal_lulus',
                      // 'ipk',
                      // 'prediket',
                      // 'pembimbing',
                      // 'judul_skripsi:ntext',
                      'fakultas_nama',
                      'jurusan_ket',
                      // 'jurusan_inggris',
                      // 'jenjang_program',
                      ],
                      ]); ?>

                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-6 col-sm-6 col-lg-6" style="margin-bottom: 20px; margin-above: 20px;">
                  <h2>Alumni</h2>
                  
                  </div><!--/span-->
                  
                  </div><!--/span-->
                  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
                    <div class="well">
                      <h4>Menu Link</h4>
                      <div class="list-group">
                        <a href="#" class="list-group-item active">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                        <a href="#" class="list-group-item">Link</a>
                      </div>
                    </div>
                    <div class="well">
                      <h4>Komentar</h4>
                      <?php foreach ($komentar as $komens): ?>
                      <?php echo'
                      <span class="glyphicon glyphicon-user"> ' . $komens->pengomentar . '</span>
                      <span class="glyphicon glyphicon-calendar"> ' . $komens->tanggal . '</span>
                      <br/> "' . $komens->komentar . '"
                      ';?>
                      <?php endforeach ?>
                      </div><!--/row-->
                    </div>
                    </div><!--/span-->
                    </div><!--/row-->
                    <hr>
                  </div>
                </div>