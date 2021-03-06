<?php $title = "Create"; include("header.php")?>
    <div class="container mt-5">

        <form enctype="multipart/form-data" method="POST" action="php/Create.php">
            <div class="mb-3">
              <label for="shrine_name" class="form-label">Shrine Name</label>
              <input type="text" name="shrine_name" class="form-control" id="shrine_name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="shrine_name_japan" class="form-label">Shrine Name Japan</label>
              <input type="text" name="shrine_name_japan" class="form-control" id="shrine_name_japan">
            </div>
            <div class="mb-3">
                <label for="islands" class="form-label">Island</label>
                <select name="islands" id="" class="form-control">
                    <?php 
                      $islands = array("Hokkaido", "Touhoku", "Kantou", "Chuubu", "Kansai", "Chuugoku", "Shikoku", "Kyuushu"); 
                      
                      for($i = 0 ; $i < count($islands) ; $i++){
                    ?>
                      <option value="<?php echo $islands[$i]?>"><?php echo $islands[$i]?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
              <label for="shrine_image" class="form-label">Shrine Image</label>
              <input type="file" class="form-control" name="shrine_image" id="shrine_image">
            </div>
            <div class="mb-3">
              <label for="shrine_description" class="form-label">Shrine Description</label>
              <textarea name="shrine_description" id="" rows="10" class="form-control"></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

<?php include("footer.php")?>