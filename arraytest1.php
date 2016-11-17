<?php
$person = array('Aas', 'Jajang', 'Dadan', 'Renra');
$pegawai = array('manajer'  => 'Aas',
				 'dirut' 	=> 'JaJang',
				 'Umum'     => 'Dadan',
				 'teknisi'  => 'Renra');
				 
		foreach($pegawai as $name){
			echo "Hallo, $name";
			echo "<br />";
		}
		echo '<br />';
		foreach($pegawai as $jabatan => $pejabat){
			echo "$jabatan yang dibeban oleh $pejabat\n";
			echo "<br />";
		}
?>
<br />
<?php
	$ketemu = 20;
	if ($ketemu < 21){
		echo "true";
	}
?>
//ini hanya percobaan github
//ini hanya percobaan github
//ini hanya percobaan github
//ini hanya percobaan github