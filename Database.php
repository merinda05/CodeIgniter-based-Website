<html>
  <head>
    <?php
    include 'koneksi.php';
    ?>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <style type = "text/css">
    @import url(main.css);
    </style>

    <title>Institut Teknologi Kalimantan</title>
  </head>
  <body>
    <center> Database Mahasiswa</center>
    <div align = "left"><table width="500" border="5">
    <table class = "table_mahasiswa">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Program Studi</th>
        <th>Asal Kota</th>
      </tr>
      <?php
        $query = mysqli_query($conn,"SELECT * from mahasiswa");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
        <td><?php echo $data["NIM"];?></td>
        <td><?php echo $data["Nama"];?></td>
        <td><?php echo $data["Prodi"];?></td>
        <td><?php echo $data["Asal_Kota"];?></td>
      </tr>
    <?php } ?>
  </table>
</div>
    <br>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.tombol').click(function(){
				$('.menu').toggleClass("slide-menu-tampil");
			});
		});
	</script>

  </body>
</html>
