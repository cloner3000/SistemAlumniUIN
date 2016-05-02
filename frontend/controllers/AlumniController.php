<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Alumni;
use frontend\models\Pekerjaan;
use frontend\models\AlumniSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use frontend\models\Upload;
use yii\web\UploadedFile;
use common\models\User;
use frontend\models\SignupForm;
/**
 * AlumniController implements the CRUD actions for Alumni model.
 */
class AlumniController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Alumni models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AlumniSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Alumni model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'model2' => Pekerjaan::find()->where(['nim' => $id])->all(),
        ]);
    }

    /**
     * Creates a new Alumni model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Alumni();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $user = new User();
            $user->username = $model->nim;
            $user->email = $model->nim;
            $user->setPassword($model->nim);
            $user->generateAuthKey();
            $user->save();
            
            //role
            $auth = Yii::$app->authManager;
            $authorRole = $auth->getRole('alumni');
            $auth->assign($authorRole, $user->getId());
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Alumni model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionEditprofil()
    {
        $id = Yii::$app->user->identity->username;
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->nim]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Alumni model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }


    public function actionFormimport()
    {
        $model = new Upload();

        $model2 = new Alumni();

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                $namaFile = $model->imageFile->basename . '.' . $model->imageFile->extension;
                // file is uploaded successfully

                return $this->redirect(['import1', 'id' => $namaFile]);
            }
        }

        return $this->render('formImport',[
                'model' => $model
            ]);

    }
    public function actionImport1($id)
    { 
        echo  $file = '@frontend/uploads/' . $id;
        $fileName = Yii::getAlias($file); 
        $data = \moonland\phpexcel\Excel::import($fileName); // $config is an optional
        $data = $data[0];
    
       // echo '<pre>'. var_export($data, true ) .'</pre>'; 
        $jum = 0;
        foreach ($data as $key => $value) {
            # code...
             $model = new Alumni();
             $model->nim = $value['wis_NIM'];
             $model->nama = $value['wis_Nama'];
             $model->jenis_kelamin = $value['JK'];
             $model->tempat_lahir = $value['wis_TLahir'];
             $model->tanggal_lahir = $value['wis_TglLahir'];
             $model->nama_ayah = $value['wis_NAyah'];
             $model->nama_ibu = $value['wis_NIbu'];
             $model->alamat = $value['wis_Alamat'];
             $model->alt_kelurahan_desa = ' '.$value['wis_AlaKelDes'];
             $model->alt_kecamatan = ' '.$value['wis_AlaKec'];
             $model->alt_kab_kota = ' '.$value['wis_AlaKabKot'];
             $model->alt_provinsi = ' '.$value['wis_AlaProv'];
             $model->alt_negara = ' '.$value['wis_AlaNeg'];
             $model->nomor_telpon = '0'.$value['wis_NoTelp'];
             $model->asal_sekolah = ' '.$value['wis_AsSek'];
             $model->asl_skl_kelurahan_desa = ' '.$value['wis_AsSekKelDes'];
             $model->asl_skl_kecamatan = ' '.$value['wis_AsSekKec'];
             $model->asl_skl_kab_kota = ' '.$value['wis_AsSekKabKot'];
             $model->asl_skl_provinsi = ' '.$value['wis_AsSekProv']; 
             $model->asl_skl_negara = ' '.$value['wis_AsSekNeg'];
             $model->fakultas = ' '.$value['wis_Fak'];
             $model->jurusan_prodi = ' '.$value['wis_JurProd']; 
             $model->kons = ' '.$value['wis_Kons'];
             $model->semester = ' '.$value['wis_Sem'];
             $model->tanggal_lulus = ' '.$value['wis_TglLulus'];
             $model->ipk =  $value['wis_IPK'];
             $model->prediket = $value['wis_Prediket'];
             $model->pembimbing = $value['wis_Pemb']; 
             $model->judul_skripsi = $value['wis_JudSkripTe'];
             $model->fakultas_nama = $value['fak_nama'];
             $model->jurusan_ket = $value['jur_ket'];
             $model->jurusan_inggris = ' '.$value['jur_inggris'];
             $model->jenjang_program = $value['Jenjang_Program'];
             $model->save();
             $jum++;
        } 

        foreach ($data as $key => $value) {
            # code...
            $user = new User();
            $user->username = $value['wis_NIM'];;
            $user->email = $value['wis_NIM'].'@uin-suska.ac.id';
            $user->setPassword($value['wis_NIM']);
            $user->generateAuthKey();
            $user->save();
            
            //role
            $auth = Yii::$app->authManager;
            $authorRole = $auth->getRole('alumni');
            $auth->assign($authorRole, $user->getId());
 
        }
        Yii::$app->session->setFlash('success' , "Data Alumni sebanyak $jum telah berhasil di import!");
        return Yii::$app->getResponse()->redirect(array('/alumni'));
    }

    public function actionKonfirmasi()
    {
        $model = new Alumni();

        if ($_GET) {
            # code...
            $nim =  $_GET['Alumni']['nim'];

            $alumni =  Alumni::findOne($nim);
            $alumni = count($alumni);
            print_r($alumni);

            if ($alumni > 0) {
                # code...
                Yii::$app->session->setFlash('success' , "Lengkapi data anda dengan mengisi form dibawah ini!");
                return Yii::$app->getResponse()->redirect(array('/alumni/konfirmasi2', 'id' => $nim));
            }

        }
        else {
            return $this->render('formNim', [
                 'model' => $model,
            ]);
        }

       
    }

    public function actionKonfirmasi2($id)
    {
        $model = Alumni::findOne($id);

        if ($_POST) {  
            $namaAyah = $model->nama_ayah;
            $namaIbu = $model->nama_ibu;
            $namaAyah2 = $_POST['Alumni']['nama_ayah'];
            $namaIbu2 = $_POST['Alumni']['nama_ibu'];

            if ($namaAyah == $namaAyah2 && $namaIbu == $namaIbu2) { 
                echo 'sukses';
                Yii::$app->session->setFlash('success' , "Selamat, data yang anda isi sesuai, silahkan mengisi data akun anda!");
                return Yii::$app->getResponse()->redirect(array('/alumni/register', 'id' => $id));

            }
            else{
                Yii::$app->session->setFlash('danger' , "Data yang anda masukan tidak sesuai, silahkan ulangi!");
                return Yii::$app->getResponse()->redirect(array('/alumni/konfirmasi'));

            }

        }
        else {
             return $this->render('formNim2', [
            'model' => $model,
            ]);
        }
       
    }

    public function actionRegister($id)
    {
        $model = new SignupForm();
        $model2 = Alumni::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                } 
            }
            else {
                    Yii::$app->session->setFlash('success' , "Data Anda telah berhasil di Daftarkan. Silahkan Login!");
                    return Yii::$app->getResponse()->redirect(array('/site'));
           
            }
        }
        
        return $this->render('register',[
            'model' => $model,
            'model2' => $model2
            ]);
        
    }

    /**
     * Finds the Alumni model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Alumni the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Alumni::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
