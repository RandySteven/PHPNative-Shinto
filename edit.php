<?php 
$title="Edit";
include("header.php");
include("config.php");
$id = $_GET['id'];
$query = "SELECT * FROM shrine WHERE id=$id";
$show = mysqli_query($conn, $query);
while($data = mysqli_fetch_assoc($show)){
?>
    <div class="container mt-5">

        <form enctype="multipart/form-data" method="POST" action="php/Update.php">
            <div class="mb-3">
            <input type="hidden" name="id" value="<?php echo $data['id']?>">
              <label for="shrine_name" class="form-label">Shrine Name</label>
              <input type="text" name="shrine_name" 
                class="form-control" id="shrine_name" 
                aria-describedby="emailHelp"
                value="<?php echo $data['shrine_name']?>"
              >
            </div>
            <div class="mb-3">
              <label for="shrine_name_japan" class="form-label">Shrine Name Japan</label>
              <input type="text" name="shrine_name_japan" 
                placeholder="<?php echo $data['shrine_name_japan']?>"
              class="form-control" id="shrine_name_japan">
            </div>
            <div class="mb-3">
                <label for="islands" class="form-label">Island</label>
                <select name="islands" id="" class="form-control">
                    <?php 
                      $islands = array("Hokkaido", "Touhoku", "Kantou", "Chuubu", "Kansai", "Chuugoku", "Shikoku", "Kyuushu"); 
                      
                      for($i = 0 ; $i < count($islands) ; $i++){
                    ?>
                      <option 
                      value="<?php echo $data['islands'] == $islands[$i] ? $data['islands'] : $islands[$i] ?>">
                      <?php echo $data['islands'] == $islands[$i] ? $data['islands'] : $islands[$i] ?>
                      </option>
                    <?php } ?>
                </select>
            </div>
            <div class="mb-3">
              <label for="shrine_image" class="form-label">Shrine Image</label>
              <input type="file" class="form-control" name="shrine_image" id="shrine_image">
            </div>
            <div class="mb-3">
              <label for="shrine_description" class="form-label">Shrine Description</label>
              <textarea name="shrine_description" id="" rows="10" class="form-control">
                        <?php print($data['shrine_description'])?>
              </textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    
    </div>
<?php } ?>
<?php include("footer.php")?>