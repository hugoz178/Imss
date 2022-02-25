<?php
include 'bt.php';
include 'php/conexion.php';


if (isset($_POST['registrar'])) 
{
  if (!empty($_POST['tar']) && !empty($_POST['tar2']) && !empty($_POST['tar3']) && !empty($_POST['tar4']))
  {
   
    $tarj=$_POST['tar'];
    $tarj2=$_POST['tar2'];
    $tarj3=$_POST['tar3'];
    $tarj4=$_POST['tar4'];

    $com = $tarj.'-'.$tarj2.'-'.$tarj3.'-'.$tarj4;

    mysqli_query($cnx,"INSERT into card (card) values
      ('$com')");

    header("location:tarjeta.php");
  }
}
?>





<!DOCTYPE html>
<html>
<head>
  <title></title>
  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
</head>
<body>


<form method="post">

  <input type="text" name="tar">
  <input type="text" name="tar2">
  <input type="text" name="tar3">
  <input type="text" name="tar4">  
  <input type="submit" name="registrar">

</form>


<table>
      <br>
       <tr>
        <?php
        $con=0;
        $sql = $cnx->query("SELECT * FROM card");
      while ($row=mysqli_fetch_array($sql)) {

?>
<td>
    <?php echo '<p>  '.$row['card'].'</p>';

?>
</td>
<?php
$con=$con+1;
if($con==1){
echo "</tr>
<tr>";
$con=0;
}
      }
      ?>  
      </tr>     
      </table>
</body>
</html>
