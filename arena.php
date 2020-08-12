<?php
if(isset($_POST['name'])){

$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);


if(!$con){
    die("failed".mysqli_connect());
}
echo "sucess";
echo "<br>";
$fname = $_POST['name'];
$mobno = $_POST['mobno'];
$address= $_POST['address'];
$tamount = $_POST['tamount'];
$camount = $_POST['camount'];
$ramount=$tamount-$camount;


$sql="INSERT INTO `new`.`record` (`fname`, `mobno`, `address`, `tamount`, `camount`,`ramount`, `Date`) 
VALUES ('$fname', '$mobno', '$address', '$tamount', '$camount','$ramount',current_timestamp());";
echo $sql;


if($con->query($sql)==true){
        
        echo "success";

}
 else{
     echo "error: $sql <br> $con->error";

 }
 
 $con->close();
//</body>
//$echo "sucess";

}


?> 
<!DOCTYPE html>
<html>
<body>

<h1>Transaction Record system Trial</h1>
<div>

<button type="button" onclick="alert('Hello !')">Click Me!</button>
<form action="arena.php" method="post">
        <label for="fname">Full name:</label><br>
        <input type="text" id="fname" name="name" placeholder="enter" ><br>
        <label for="mobno">mob no.:</label><br>
        <input type="number"id="mobno" name="mobno" placeholder="enter" >
        <br>
        <label for="fname">address:</label>
   <br>
        <input type="text" id="address" name="address"placeholder="enter" ><br>
        <label for="fname">Total Amount:</label><br>
        <input type="number" id="tamount" name="tamount"placeholder="enter" ><br>
        <label for="fnae">Paid/current payment:</label><br>
        <input type="number" id="camount" name="camount" placeholder="enter">
        <input type="submit" value="Submit" >
        
        <h4>here to show/display the remaining amount to be paid</h4><br>
       
        
        Remaining amount :<input type="text" name="result" value="<?php echo  $ramount ;?>"><br>

 </form>

</div>

</html>
 