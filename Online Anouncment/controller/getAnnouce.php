<?php
	$mysqli=new mysqli("localhost","mahasiswa" ,"" ,"pengumuman online");
	if(isset($_COOKIE["user"])){
		$user=$_COOKIE["user"];
	}
	//echo $user;

	$sql="SELECT * FROM pengumuman INNER JOIN tagpengumuman ON pengumuman.IdPengumuman=tagpengumuman.IdPengumuman INNER JOIN pengumumanmahasiswa ON tagpengumuman.IdTag=pengumumanmahasiswa.IdTag";

	$res=$mysqli->query($sql);
	$row=$res->fetch_array();
	//echo sizeof($row)." ";
	//index 0 untuk atrribute paling awal
	// for($i=0;$i<(sizeof($row)/2)-1;$i++){
	// 	echo $row[$i]." " ;
	// }

	$Judul=$row["Judul"];
	$des=$row["Deskripsi"];
	$tgl=$row["Tanggal"];
	$author=$row["Author"];
	echo "
	<li class='bulletin'>
      	<article>
            $Judul
        </article> 
        <p> Date : $tgl Author : $author </p>
        <p> $des </p>
        
    </li> 
    ";
    
	

?>