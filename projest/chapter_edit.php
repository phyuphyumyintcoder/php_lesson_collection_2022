<?php 

include('config/db_connect.php');
include("layouts/head.php");

include("class/Chapter.php");

// chpater deatils
$id = $_GET['id'];
$select_chapter_data = "SELECT * FROM chapters WHERE id = '$id'";
$select_chapter_data_result = mysqli_query($conn, $select_chapter_data);
$chapter_details = mysqli_fetch_assoc($select_chapter_data_result);

// Chapter update
if (isset($_POST['chapter_update_data'])) {

    $data = [
        'id' => $_GET['id'],
        'chapter_name' => $_POST['chapter_name']
    ];
   $table = new Chapter();
   $chapters = $table->update_data_chapter($conn, $data);
    if ($chapters) {
        header("Location: chapter_index.php");
    }else{

        echo "Failed to insert data";
    } 
}
?>
<body>
 <?php include("layouts/navbar.php") ?>
 <?php include("layouts/header.php") ?>

<div class="container">
  <div class="row">
   <div class="col-lg-10">
    <h1>Chapter Update</h1>

    <div class="card">
     <div class="card-header">
      <h3>Chapter list <span><a href="chapter_index.php" class="btn btn-primary btn-lg">Back</a></span></h3>
     </div>
     <div class="card-body">
      <form action="#" method="POST">
       <div class="form-group">
        <label for="">Chapter Name</label>
        <input type="text" name="chapter_name" class="form-control" value="<?= $chapter_details['chapter_name']  ?>">
       </div>
       <div class="form-group mt-5">
        <input type="submit" name="chapter_update_data" class="btn btn-primary" value="Update">
       </div>
      </form>
     </div>
</div>
   </div>
</div>
 <?php include("layouts/footer.php") ?>