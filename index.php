<?php
  $db_port = 3306;
  $connection = mysqli_connect('localhost', 'root', '', 'hind_moter');

  if(mysqli_connect_errno()):
    printf("Connect failed: %s\n", mysqli_connect_errno());
    exit();
  endif;
  
$moter1 = $_POST['moter1'];
$moter2 = $_POST['moter2'];
$moter3 = $_POST['moter3'];
$moter4 = $_POST['moter4'];
$moter5 = $_POST['moter5'];
$moter6 = $_POST['moter6'];


if(isset($_POST['save'])){

    $my_query = "INSERT INTO table1(moter1, moter2, moter3, moter4, moter5, moter6) VALUES ('$moter1','$moter2','$moter3','$moter4','$moter5','$moter6')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past 1<br>";
    }
}else if(isset($_POST['on'])) {
    $my_query = "Update state set state= 1";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past 2<br>";
    }
}else if(isset($_POST['off'])) {
    $my_query = "Update state set state= 0";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past 3<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hind Motors WEBSITE!</title>
    
   <link rel="stylesheet" href="style.css">   

</head>

<body>
    <div class = "slideContainer">
    <h1>Hind Motors</h1>
        <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
        <form id="myForm" action="" method = "POST">
         <!--Motor1-->
        <h3>Motor1</h3>
        <div class = "motor1">
        <input type="range" min = "0" max = "180" value="0" id = "myRange1" class = "slider" name = "moter1">
        <p>Value: <span id = "value1"></span></p>
        </div>
        <br>
        <!--Motor2-->
        <h3>Motor2</h3>
        <div class = "motor2">
        <input type="range" min = "0" max = "180" value="0" id = "myRange2" class = "slider" name = "moter2">
        <p>Value: <span id = "value2"></span></p>
</div>
        <br>
        <!--Motor3-->
        <h3>Motor3</h3>
        <div class = "motor3">
        <input type="range" min = "0" max = "180" value="0" id = "myRange3" class = "slider" name = "moter3">
        <p>Value: <span id = "value3"></span></p>
        </div>
        <br>
        <!--Motor4-->
        <h3>Motor4</h3>
        <div class = "motor4">
        <input type="range" min = "0" max = "180" value="0" id = "myRange4" class = "slider" name = "moter4">
        <p>Value: <span id = "value4"></span></p>
        </div>
        <br>
        <!--Motor5-->
        <h3>Motor5</h3>
        <div class = "motor5">
        <input type="range" min = "0" max = "180" value="0" id = "myRange5" class = "slider" name = "moter5">
        <p>Value: <span id = "value5"></span></p>
        </div>
        <br>
        <!--Motor6-->
        <h3>Motor6</h3>
        <div class = "motor6">
        <input type="range" min = "0" max = "180" value="0" id = "myRange6" class = "slider" name = "moter6">
        <p>Value: <span id = "value6"></span></p>
        </div>
        <table class="blueTable">
<tbody>
<tr>
        <td><input type="submit" value = "Save" name = save  style="font-size: 20px; background: pink; border-radius: 60px;" > </td>
        <td><input type="submit" value = "ON" name = on  style="font-size: 20px; background: pink; border-radius: 50px;" > </td>
        <td><input type="submit" value = "OFF" name = off  style="font-size: 20px; background: pink; border-radius: 50px;" > </td>
        </tr>
        </tbody>
        </table>

        <div class="controller">
        <br>
        <form action="" method="post">

        <table class="blueTable">
<tbody>
<tr>
<td></td>
  <td><button type="submit" value = "F" name="F" class="button" style="font-size: 20px; background: pink; border-radius: 60px;">FORWARD</button></td>
  <td></td>
  </tr>
<tr>
<td><button type="submit" value = "L" name="L" class="button" style="font-size: 20px; background: pink; border-radius: 60px;">LEFT</button></td>
  <td><button type="submit" value = "S" name="S"class="button" style="font-size: 20px; font-color:black; background: White; border-radius: 100px;">STOP</button></td>
  <td><button type="submit" value = "R" name="R" class="button" style="font-size: 20px; background: pink; border-radius: 60px;">RIGHT</button></td>
  </tr>
<tr>
<td></td>
  <td><button type="submit" value = "B" name="B" class="button" style="font-size: 20px; background: pink; border-radius: 60px;">Backward</button></td>
  <td></td>
  </tr>
</tbody>
</table>
        </form> 
       </div>
    </div> 
        </form>
    </div>
	
	<script>
  window.watsonAssistantChatOptions = {
      integrationID: "dd395c59-7d5a-4ec2-b9bc-2cdc5ba867c5", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "c3a050af-7701-49a0-9da4-5afac2bf02c4", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>
	
	</body>
<script src="main.js"></script>
</html>

<?php 

$conn = mysqli_connect('localhost', 'root', '', 'hind_moter');


if(!$conn){
	echo 'Connection error: '.mysqli_connect_error();
}
if (isset($_POST['B'])){
	echo "<p align=center>backward</p> ";
    $res = mysqli_query($conn,"INSERT INTO `table2` (`Backward`) values ('B');");
    if (!$res) {
        echo 'error ' . mysqli_error($conn);
    }
}

if (isset($_POST['F'])){
	echo "<p align=center>forward</p> ";
	$res = mysqli_query($conn,"INSERT into `table2` (`Farward`)  values ('F');");
    if (!$res) {
        echo 'error ' . mysqli_error($conn);
    }
}

if (isset($_POST['R'])){
	echo "<p align=center>right</p> ";
	$res = mysqli_query($conn,"INSERT into `table2`  (`Right`) values ('R');");
    if (!$res) {
        echo 'error ' . mysqli_error($conn);
    }
}

if (isset($_POST['L'])){
	echo "<p align=center>left</p> ";
	$res = mysqli_query($conn,"INSERT into `table2` (`Left`) values ('L');");
    if (!$res) {
        echo 'error ' . mysqli_error($conn);
    }
}
if (isset($_POST['S'])){
	echo "<p align=center>stop</p> ";
	$res = mysqli_query($conn,"INSERT into `table2` (`Stop`) values ('S');");
    if (!$res) {
        echo 'error ' . mysqli_error($conn);
    }
}



?>
