<?php
	include("connection/connectionMhs.php");
	//include("../connection/connectionMhs.php");
	//$mysqli=new mysqli("localhost","mahasiswa","","pengumuman online");
	session_start();
	$user=$_SESSION["user"];
	
	//query untuk mengambil pengumuman yang relevan dengan mahasiswa
	$sql="SELECT DISTINCT * 
		FROM tag_pengumuman 
		INNER JOIN tag_mahasiswa ON tag_pengumuman.IdTag=tag_mahasiswa.IdTag 
		WHERE tag_mahasiswa.Email='".$user."'";


	$start=0;
	$show=8;
	$pageCount=$mysqli->query($sql)->num_rows / $show;
	


	if(isset($_GET['start'])){
		$start=$_GET['start'];
	}

	$sql .=" LIMIT $start,$show";

	//looping untuk menampilkan pengumuman
	$temp="";
	$tags="";

	$Judul="";
	$des="";
	$tgl="";
	$author="";

	if($res=$mysqli->query($sql)){
		// $row=$res->fetch_array();
		// echo sizeof($row);
		$i=0;
		while($row=$res->fetch_array()){//looping sebanyak 3x
			if($temp==""){
				$temp=$row["Judul"];
				$tags .=$row["NamaTag"];
				$Judul=$row["Judul"];
				$des=$row["Deskripsi"];
				$tgl=$row["Tanggal"];
				$author=$row["Author"];
			}else{
				if($temp==$row["Judul"]){
					$tags .=",".$row["NamaTag"];
					$Judul=$row["Judul"];
					$des=$row["Deskripsi"];
					$tgl=$row["Tanggal"];
					$author=$row["Author"];
				}else{
					//echo $tags;
					echo "
						<li class='bulletin'>
							<h1>
								$Judul
							</h1> 
							<p> Date : $tgl </p>
							<p> Author : $author </P>
							<p> Tag : $tags. </p>
							<p> $des </p>
								
						</li> ";



					$tags="";
					$tags .=$row["NamaTag"];
					$Judul=$row["Judul"];
					$des=$row["Deskripsi"];
					$tgl=$row["Tanggal"];
					$author=$row["Author"];
					$temp=$row["Judul"];
				}
			}
		}
		echo "
			<li class='bulletin'>
				<h1>
					$Judul
				</h1> 
					<p> Date : $tgl </p>
					<p> Author : $author </P>						
					<p> Tag : $tags. </p>
					<p> $des </p>		
			</li> ";



		// for($i=0;$i<$res->num_rows;$i++){
			
			// if($temp=="" || $temp==$row["Judul"]){
			// 	$tags .=$row["NamaTag"].",";
			// 	$temp = $row["Judul"];
			// 	//echo $tags;
			// }else{
			// 	echo $tags;
			// 	$tags="";
			// 	$temp = $row["Judul"];
			// }
		// }
		//akhir untuk print pengumuman terakhir


		// while($row=$res->fetch_array()){
		// 	echo sizeof($row);
		// 	if($temp=="" || $temp==$row["Judul"]){
		// 		$tags .=$row["NamaTag"].",";
		// 		//echo $tags;
		// 	}else if($temp!="" || $temp!=$row["Judul"]){
		// 		echo $tags;
		// 		$temp="";
		// 		$tags="";
		// 	}



		// 	// if($temp!=$row["Judul"] || $temp==""){
		// 	// 	$Judul=$row["Judul"];
		// 	// 	$des=$row["Deskripsi"];
		// 	// 	$tgl=$row["Tanggal"];
		// 	// 	$author=$row["Author"];
		// 	// 	$tags .=$row['NamaTag'].".";
		// 	// 	echo "
		// 	// 	<li class='bulletin'>
		// 	// 		<h1>
		// 	// 			$Judul
		// 	// 		</h1> 
		// 	// 		<p> Date : $tgl </p>
		// 	// 		<p> Author : $author </P>
		// 	// 		<p> Tag : $tags </p>
		// 	// 		<p> $des </p>
						
		// 	// 	</li> 
		// 	// 	";
		// 	// 	$temp=$row['Judul'];
		// 	// 	//echo $temp;
		// 	// 	$tags="";
		// 	//  }else{
		// 	// //  	$tags.=$row['NamaTag'].",";
		// 	//  }	
		// }
		
	}

	echo "<br>";

	//paganition
	if($pageCount>1){
		for($i=0,$j=1;$i<$pageCount;$i++,$j++){
			$str=($i)*$show;
			$start=$str;
			echo "<a href=UserPage.php?start=$str>$j</a>";
		}
	}

?>