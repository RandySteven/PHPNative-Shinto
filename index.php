<?php $title="Shrine" ; include("header.php")?>

    <div class="container mt-5">
    <?php
      include("config.php");
      $query = "SELECT * FROM shrine";
      $show = mysqli_query($conn, $query);
      while($data = mysqli_fetch_array($show)) {
    ?>
      <div class="card mb-3 w-auto border-2 border-dark">
        <div class="row g-0">
          <div class="col-md-2">
            <img src="images/<?php echo $data['shrine_image']?>" class="mx-2 my-5 rounded-1" width="200" height="179" alt="...">
          </div>
          <div class="col-md-10">
            <div class="card-body mx-5">
              <h3 class="card-title"> <?php echo $data['shrine_name']?> , <?php echo $data['shrine_name_japan']?> </h3>
              <p class="card-text"><small class="text-muted"><?php echo $data['islands']?></small>, <small class="text-muted">Hokkaido</small></p>
              <p class="card-text"><?php echo $data['shrine_description']?></p>
              <!-- GET -->
              <p class="card-text">
                <a href="show.php?id=<?php echo $data['id']?>" 
                class="form-control btn btn-danger text-white">
                  Read More
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
      

    </div>

<?php include("footer.php")?>