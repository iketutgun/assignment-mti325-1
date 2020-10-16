<!DOCTYPE html>
<html>
<head>  
<body>
  <div  class="title">
  </div>
	<title>MT325 - Archer</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
</head>
<body>

     <?php
		// INI ADALAH FILE KONEKSI HARAP TIDAK DIHAPUS
     include ("../config/koneksi-archer.php");
//       if (!$dbconn) {
//         echo "DB Connection Problem.\n";
//       }else { 
//         echo "Coming Soon\n";
//       }
      // QUERY STRING CREATE TABLE MAHASISWA
       $sql =  "CREATE TABLE mahasiswa_ur_dwi (
       id             serial,
       nama_lengkap   varchar(50),
       nim            int PRIMARY KEY,
       jenis_kelamin  char(1),
       email          varchar(50),
       alamat         varchar(100) )";
       

//       echo "Query 2: " + $sql + "\n" ;

//       $result = pg_query($dbconn, $sql);
//       if(!$result) {
//         echo  "\nERROR " + pg_last_error($dbconn) + "\n";
//       } else {
//         echo "\nTable created successfully\n";
//       }  
     ?>


  
  
<div class="container" style="margin-top: 20px">
    <div class="row">
        <div class="col-md-12">         
            <h1><marquee direction="right">Selamat Datang</marquee></h1>
            <h2 style="text-align: center;margin-bottom: 30px">Data Mahasiswa Advanced Database System</h2>
          <button type="button" class="btn btn-primary btn-sm" data-toggle="model" data-target="examplemodel">
            Tambah Data
          </button>
            <table id="table_id" class="table table-striped table-bordered" border="1" cellpadding="8" cellspacing="1" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Nim</th>
                  <th>Jenis Kelamin</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th style="width:100px;">Aksi
                  </th>
              </tr>
              </thead>
              <body>
                       <tr>
                         <td>1</td>
                           <td>I Ketut Gunawan</td>
                           <td>2012528923</td>
                           <td>M</td>
                           <td>iketut@raharja.info</td>
                           <td>Perumnas Karawaci, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                           </td>
                         </td>
                       </tr>
                       <tr>
                         <td>2</td>
                           <td>Abdullah Dwi Srenggini</td>
                           <td>2012528903</td>
                           <td>M</td>
                           <td>abdullah.dwi@raharja.info</td>
                           <td>Dasana Indah Blok RK.1 No.1, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
                     <tr>
                        <td>3</td>
                           <td>Henry Riyadi</td>
                           <td>2012532789</td>
                           <td>M</td>
                           <td>hendryriyadi@raharja.info</td>
                           <td>Curug, Legok</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
                     <tr>
                       <td>4</td>
                           <td>Tri Wahyuningsih</td>
                           <td>2012531295</td>
                           <td>F</td>
                           <td>triwahyuningsih@raharja.info</td>
                           <td>Banjarnegara, Purwokerto</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
                     <tr>
                       <td>5</td>
                           <td>Aferda Yuriah</td>
                           <td>1921424904</td>
                           <td>F</td>
                           <td>aferda@raharja.info</td>
                           <td>Cikokol, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>6</td>
                           <td>Indah Choirunnisa</td>
                           <td>1821499101</td>
                           <td>F</td>
                           <td>indah.choiru@raharja.info</td>
                           <td>Perumnas I, Karawaci Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
                     <tr>
                       <td>7</td>
                           <td>Ahmad Fahriyansyah</td>
                           <td>1921420754</td>
                           <td>M</td>
                           <td>fahriyansyah@raharja.info</td>
                           <td>Kotabumi 3, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
                     <tr>
                       <td>8</td>
                           <td>Adam Faturahman</td>
                           <td>2012529742</td>
                           <td>M</td>
                           <td>adam.faturahman@raharja.info</td>
                           <td>Poris Cikokol, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>9</td>
                           <td>Achmad Badrianto</td>
                           <td>2012532836</td>
                           <td>M</td>
                           <td>achmad.badrianto@raharja.info</td>
                           <td>Perumnas III, Karawaci Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>10</td>
                           <td>Nuke Puji Lestari Santoso</td>
                           <td>2012529947</td>
                           <td>F</td>
                           <td>nuke@raharja.info</td>
                           <td>Villa Tomang Baru II, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
                     <tr>
                       <td>11</td>
                           <td>Alfiah Khoirunisa</td>
                           <td>2012526473</td>
                           <td>F</td>
                           <td>alfiah.khoirunisa@raharja.info</td>
                           <td>Pojok Sejahtera, Kotabumi, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>12</td>
                           <td>Zaenal Ramadhan</td>
                           <td>2012528794</td>
                           <td>M</td>
                           <td>zaenal@raharja.info</td>
                           <td>Cimone, Karawaci Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>13</td>
                           <td>Efana Rahwanto</td>
                           <td>2012530368</td>
                           <td>M</td>
                           <td>efana@raharja.info</td>
                           <td>Perumahan, Simpung Poris, Blok E2 No.8, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>14</td>
                           <td>Ratna Komala</td>
                           <td>2012532784</td>
                           <td>F</td>
                           <td>ratna.komala@raharja.info</td>
                           <td>STPI Curug, Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr> 
                     <tr>
                       <td>15</td>
                           <td>Dadang Nugraha</td>
                           <td>201227962</td>
                           <td>M</td>
                           <td>dadang@raharja.info</td>
                           <td>Kp. Gintung Sukadiri, Kab. Tangerang</td>
                           <td style="text-align: center;">
                                <button class="btn btn-sm btn-primary" onclick="edit_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="delete_book(<?php echo $buku->id;?>)"><i class="glyphicon glyphicon-trash"></i></button>
                            </td>
                       </td>
                     </tr>
              </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#table_id').DataTable();
  } );
</script>

</body>
</html>
