<?php
namespace console\Controllers;

use Yii;
use yii\console\Controller;

class RbacController extends Controller{
	
	public function actionInit()
	{
		$rbac = Yii::$app->authManager;
		
		//tambah "pengajuan" permission
		$pengajuan = $rbac->createPermission('pengajuan');
		$pengajuan->description = 'pengajuan ukt oleh Mahasiswa';
		$rbac->add($pengajuan);
		
		//tambah "validasi" permission
		$validasi = $rbac->createPermission('validasi');
		$validasi->description = 'validasi pengajuan ukt oleh Bagian Keuangan';
		$rbac->add($validasi);
		
		//tambah "penentuan" permission
		$penentuan = $rbac->createPermission('penentuan');
		$penentuan->description = 'penentuan golongan ukt oleh kajur';
		$rbac->add($penentuan);
		
		//tambah "pengesahan" permission
		$pengesahan = $rbac->createPermission('pengesahan');
		$pengesahan->description = 'pengesahan golongan ukt oleh dekan';
		$rbac->add($pengesahan);
		
		//tambah "laporan" permission
		$laporan = $rbac->createPermission('laporan');
		$laporan->description = 'laporan hasil ukt untuk rektor';
		$rbac->add($laporan);
		
		//tambah "admin" permission
		$admin = $rbac->createPermission('admin');
		$admin->description = 'admin';
		$rbac->add($admin);
		
		
		//tambah "mahasiswa" role dan berikan role ini permission "pengajuan"
		$mahasiswa =$rbac->createRole('Mahasiswa');
		$rbac->add($mahasiswa);
		$rbac->addChild($mahasiswa, $pengajuan);
        
		
		//tambah "bagianKeuangan" role dan berikan role ini permission "validasi"
		$bagianKeuangan =$rbac->createRole('bagianKeuangan');
		$rbac->add($bagianKeuangan);
		$rbac->addChild($bagianKeuangan, $validasi);
	
		//tambah "kepalaJurusan" role dan berikan role ini permission "penentuan"
		$kepalaJurusan =$rbac->createRole('kepalaJurusan');
		$rbac->add($kepalaJurusan);
		$rbac->addChild($kepalaJurusan, $penentuan);
	
		//tambah "dekan" role dan berikan role ini permission "pengesahan"
		$dekan =$rbac->createRole('dekan');
		$rbac->add($dekan);
		$rbac->addChild($dekan, $pengesahan);
	
		//tambah "rektor" role dan berikan role ini permission "laporan"
		$rektor =$rbac->createRole('rektor');
		$rbac->add($rektor);
		$rbac->addChild($rektor, $laporan);
	
		//tambah "superAdmin" role dan berikan role ini permission "superadmin"
		//dan sebagaimana permission "bagianKeuangan", "kepalaJurusan", "dekan", dan "rektor"
		$superAdmin =$rbac->createRole('superAdmin');
		$rbac->add($superAdmin);
		$rbac->addChild($superAdmin, $admin);
		$rbac->addChild($superAdmin, $bagianKeuangan);
		$rbac->addChild($superAdmin, $kepalaJurusan);
		$rbac->addChild($superAdmin, $dekan);
		$rbac->addChild($superAdmin, $rektor);
		
		//tandai roles kepada user (dari table user), 	
		$rbac->assign($mahasiswa, 1);
		$rbac->assign($bagianKeuangan, 2);
		$rbac->assign($kepalaJurusan, 3);
		$rbac->assign($dekan, 4);
		$rbac->assign($rektor, 5);
		$rbac->assign($superAdmin, 6);
		 
	}
}
?>