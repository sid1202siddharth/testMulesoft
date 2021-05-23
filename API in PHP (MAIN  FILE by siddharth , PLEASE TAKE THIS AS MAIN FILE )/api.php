<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['roll'])){
        extract($_POST);
        $conn=mysqli_connect("localhost","root","");
        mysqli_select_db($conn,'Siddharth_api');
        $sql = "insert into student(name, email, roll) values('$name', '$email', $roll)";
        $result = mysqli_query($conn,$sql); 
        if($result)
        {
          ?>
          <script>
            alert('Inserted successfull');
            window.location.href="insert.php";
          </script>
          <?php
        }
    }
    else{
      ?>
      <script>
        alert('Parameter missing');
      </script>
      <?php
    }
}
else if($_SERVER['REQUEST_METHOD']=='GET'){
  $sql = "select * from student";
  $conn=mysqli_connect("localhost","root","");
  mysqli_select_db($conn,'Siddharth_api');
  $result = mysqli_query($conn,$sql); 
  $r = array();
  if($result){
    while($row = mysqli_fetch_array($result)){
      $row1 = array();
      $row1['id'] = $row['id'];
      $row1['name'] = $row['name'];
      $row1['email'] = $row['email'];
      $row1['roll'] = $row['roll'];
      array_push($r, $row1);
    }	
  }
  else{
    $r = array();
  }
  echo json_encode($r);
}
else{
  echo "Wrong method, please try again";
}
?>