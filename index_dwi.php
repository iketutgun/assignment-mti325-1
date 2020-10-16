<!DOCTYPE html>
<html>
<head>  
<body>
  <div  class="title">
    <h3>Advanced Database System 2020 - A.Dwi.S</h3>
  </div>
  <br/>
  <br/>
	<title>MT325 - Archer</title>
</head>
<body>
  
 
		<?php
		// INI ADALAH FILE KONEKSI HARAP TIDAK DIHAPUS
     include ("../config/koneksi-archer.php");
      if (!$dbconn) {
        echo "DB Connection Problem.\n";
      }else { 
        echo "Coming Soon\n";
      }
      // QUERY STRING CREATE TABLE MAHASISWA
      // P.KEY= MAHASISWA DWI DT TYPE INT, NOT NULL
      // CHAR= LENGTH 20 & 50
       $sql =  "CREATE TABLE MAHASISWA_DWI (ID INT PRIMARY KEY     NOT NULL,
        NAMA            TEXT    NOT NULL,
        TANGGAL_LAHIR   DATE,
        TEMPAT_LAHIR    CHAR(20),
        FAKULTAS        CHAR(20),
        PRODI           CHAR(20),
        NO_HP           INT,
        EMAIL           CHAR(50),
        ALAMAT_RUMAH    CHAR(50))";


      echo "Query 2: " + $sql + "\n" ;

      $result = pg_query($dbconn, $sql);
      if(!$result) {
        echo  "\nERROR " + pg_last_error($dbconn) + "\n";
      } else {
        echo "\nTable created successfully\n";
      }
    
    
    ?>
  

</body>
</html>
