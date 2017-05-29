<html>
<body>
<title> Data Pengunjung</title>
<?php

<form name="form1" method="post" action="../inputdatapengunjung.php">
   <table width="390" height="283" border="1">
      <tr>
          <td width="159" height="29">Nama</td>
          <td width="215"><input name="nama" type="text" id="nama" value=""></td>
      </tr>
      <tr>
          <td>Alamat</td>
          <td><input name="alamat" type="text" id="alamat"></td>
      </tr>
      <tr>
          <td>Email</td>
          <td><input name="email" type="text" id="email"></td>
      </tr>
      <tr>
           <td colspan="2">Komentar : </td>
      </tr>
      <tr>
           <td colspan="2"><textarea name="komentar" cols="50" rows="10" id="komentar"></textarea></td>
      </tr>
      <tr>
           <td colspan="2">
               <input name="tombol" type="submit" value="kirim">
               <input name="reset" type="reset" id="reset" value="Reset">
               </p>
           </td>
       </tr>
  </table>
?>
</body>
</html>