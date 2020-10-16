<?php
// buka koneksi dengan mysql
include("connection.php");
include("header.html");
?>
    <h1>Insert</h1>
    <form action ="Controller/insertController.php" method = "post">
    <div class="form-group">
    <label for="Nama">Name</label>
    <input type="text" class="form-control" id="Nama" name="name">
  </div>
  <div class="form-group">
    <label for="NIMAnda">NIM</label>
    <input type="text" class="form-control" id="NIMAnda" name = "nim">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name ="email" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>


