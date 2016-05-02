<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
/* @var $this yii\web\View */
$this->title = 'Sistem Alumni UIN SUSKA RIAU';
$this->registerJs("$(document).ready(function() {
$('.pgwSlider').pgwSlider(displayList=false);
});", View::POS_END);
?>

<div class="site-index">
	<div class="container">
		<div class="row" style="margin-top:15px;">
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


        <div class="row">
        	<div class="col-lg-4" style="padding-left:0px">
	        	<div class="news vertical z-depth-1">
	                <!-- News Image -->
	              	<div class="news-image">
	              		<?= Html::img(Yii::$app->homeUrl."../uploads/berita/gambar/".$berita[0]->gambar, ['class' => 'responsive-img', 'height' => '200']) ?>
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
        	<div class="col-lg-5">
                <div class="sidbar-box z-depth-1" style="height: 400px">
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
          	<div class="col-lg-3" style="padding-right:0px;">
          		<div class="sidbar-box z-depth-1" style="height: 400px;">
          			<div class="sidebar-title">Komentar</div>
          			<ul>
	                    <?php foreach ($komentar as $komens): ?>
	                    <?php echo'
	                    <li style="list-style-type: none;">
	                    <a>
	                    <span class="glyphicon glyphicon-user"> ' . $komens->pengomentar . '</span>
	                    <span class="glyphicon glyphicon-calendar"> ' . $komens->tanggal . '</span>
	                    <br/> "' . $komens->komentar . '"
	                    </a>
	                    </li>
	                    ';?>
	                <?php endforeach ?>   
	                </ul>
	                </div>
          		</div>
        </div>

		<div class="row">
			<div class="card style-dark">
				<div class="card-body">
	          	<div class="col-lg-4">
	            	<div class="news vertical z-depth-1">
	              		<div class="news-image">
	                		<center><?= Html::img(Yii::$app->homeUrl."../scholarship.jpg", ['class'=>'responsive-img' ]);?></center>
	                	</div>
	                	<div class="news-description">
	                		<h2 align="center">Peluang Beasiswa</h2>
	                		<p><center><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></center></p>
	              		</div>
	            	</div>
	            </div><!--/span-->
		        <div class="col-lg-4">
		            <div class="news vertical z-depth-1">
		                <div class="news-image">
			                <center><?= Html::img(Yii::$app->homeUrl."../job.jpg", ['class'=>'responsive-img' ]);?></center>
			            </div>
			            <div class="news-description">
			            	<h2 align="center">Lowongan Kerja</h2>
			                <p><center><a class="btn btn-success" href="#" role="button">View details &raquo;</a></center></p>
		                </div>
		            </div>
		        </div><!--/span-->
		        <div class="col-lg-4">
	                <div class="news vertical z-depth-1">
	                  	<div class="news-image">
	                    	<center><?= Html::img(Yii::$app->homeUrl."../partner.jpg", ['class'=>'responsive-img' ]);?></center>
	                	</div>
	                	<div class="news-description">
	                		<h2 align="center">Perusahaan Mitra</h2>
	                    	<p><center><a class="btn btn-warning" href="#" role="button">View details &raquo;</a></center></p>
	                	</div>
		            </div>
		        </div><!--/span-->
		        </div>
		    </div>
        </div>
        <div class="row">
          	<div class="card" style="margin-bottom:0px">
            	<div class="card-body">
              		<h3>Alumni</h3>
              		  <?php $dataProvider->pagination->pageSize=10; ?>
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
</div>