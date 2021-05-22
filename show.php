<?php
$title="Show";
  include("header.php");
  include("config.php");
  $id = $_GET['id'];
  $query = "SELECT * FROM shrine WHERE id=$id";
  $show = mysqli_query($conn, $query);
  while($data = mysqli_fetch_assoc($show)){
?>
    <div class="container mt-5">
        <div class="text-center">
            <img src="images/<?php echo $data['shrine_image']?>" alt="" class="img img-thumbnail">
            <a href="edit.php?id=<?php echo $data['id']?>">Edit</a>
            <form action="php/Delete.php?id=<?php echo $data['id']?>" method="POST">
              <button type="submit">Delete</button>
            </form>
            <h3><?php echo $data['shrine_name']?></h3>
            <p class="text-secondary"> <?php echo $data['islands']?> </p>
        </div>
        <div>
            <p><?php echo $data['shrine_description']?></p>
        </div>
    </div>
<?php } ?>
<?php include("footer.php")?>