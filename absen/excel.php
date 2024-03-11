<?php

include "koneksi.php";

$output = '';

if(isset($_POST["export"])){
   $no = 1;
   $query = "select * from mahasiswa,data_absen where mahasiswa.nama = data_absen.nama";

   $result = mysqli_query($conn, $query);

   if(mysqli_num_rows($result) > 0){

      $output .= '<table class="table" bordered="1"> 

            <th>NO</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Semester</th>
			<th>Tanggal</th>
			<th>Matkul</th>
			<th>Status</th>';

      while($row = mysqli_fetch_array($result)){

         $output .= '<tr> 

                       <td>'.$no++.'</td> 

                       <td>'.$row["nim"].'</td>
                       
                       <td>'.$row["nama"].'</td>

                       <td>'.$row["jurusan"].'</td>

                       <td>'.$row["semester"].'</td>

                       <td>'.$row["tanggal"].'</td>

                       <td>'.$row["matkul"].'</td>

                       <td>'.$row["status"].'</td>

                    </tr>';

         }

      $output .= '</table>';

      header('Content-Type: application/xls');

      header('Content-Disposition: attachment; filename=data_absen.xls');

      echo $output;

   }

}

?>