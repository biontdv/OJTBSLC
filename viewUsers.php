<?php
include("header.html");
include("connection.php");
?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

<?php
    $query="SELECT * FROM users";
    $result=$conn->query($query);
    $i=0;
    while($data=$result->fetch_assoc()){
        $i++
?>
    <tr>
      <th scope="row"><?php echo $i?></th>
      <td><?php echo $data['NAME']?></td>
      <td><?php echo $data['NIM']?></td>
      <td><?php echo $data['EMAIL']?></td>
      <td>
          <form action="Controller/doDelete.php" method="post">
          <input type="hidden" name="id" value="<?php echo $data['ID'];?>">
                <input type="submit" class="btn btn-danger" value="Delete">
          </form>

          <a href="update.php?id=<?php echo $data['ID'];?>">
          <button type="button" class="btn btn-primary">Update</button>
          </a>

        </td>
    </tr>

    <?php }?>
    
  </tbody>
</table>