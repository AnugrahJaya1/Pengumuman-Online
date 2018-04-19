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

	$Judul=$row["Judul"];
	$des=$row["Deskripsi"];
	echo "
	<li class='bulletin'>
      	<article>
            $Judul
        </article> 
        <p> $des </p>
    </li> 
    ";
    
	

?>