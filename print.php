<?php 

include "db.php";
 if(isset($_GET['da'])){
 	$name=$_GET['da'];
 }

 if (isset($_GET['search'])) {
 	 $search=$_GET['search'];

 }


function name(){
	global $con;
	$user=$_REQUEST["n"]; 
     $id=$_GET['id'];

if ($id=="") {
if($user != ""){
$sql="INSERT INTO login (user) VALUES ('$user')";
mysqli_query($con,$sql);

}
}else{
	$sql="DELETE FROM login where id='$id' ";
	mysqli_query($con,$sql);
}
 
}




 function data1($search){
 	global $con;
 	$sql="SELECT * FROM login where user LIKE '%$search%' ";
    $res=mysqli_query($con,$sql);
    while ($row=mysqli_fetch_assoc($res)) {
	echo $row['user']."<br>";
   }
   exit();
 }
 global $name;
 if ($name== 1) {
	data1($search);
} 

 if ($name== 2) {
	name();
} 

$sql1="SELECT * FROM login";

$res=mysqli_query($con,$sql1);



while ($row=mysqli_fetch_assoc($res)) {
?>

 <tr>
	<td> <?php echo $row['id'];?></td>
	<td> <?php  echo $row['user'];?></td>
	<td> <button  onclick="sayName(<?php echo $row['id'];  ?>)" >Delete</button></td>
</tr>

<?php }?>
