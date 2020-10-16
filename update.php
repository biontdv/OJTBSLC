<?php
include("header.html");
include("connection.php");

$id=$_GET['id'];

$query="select * from users where ID=$id";
$result=$conn->query($query);
$data=$result->fetch_assoc();
?>

<form action ="Controller/doUpdate.php" method = "post">
    <input type="hidden" name='id' value="<?php echo $id;?>">
    <div class="form-group">
    <label for="Nama">Name</label>
    <input type="text" class="form-control" id="Nama" name="name" value="<?php echo $data['NAME']?>">
  </div>
  <div class="form-group">
    <label for="NIMAnda">NIM</label>
    <input type="text" class="form-control" id="NIMAnda" name = "nim" value="<?php echo $data['NIM']?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="email" value="<?php echo $data['EMAIL']?>">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>