<?php 

include('config/db_connect.php');
include("layouts/head.php");

// chpater deatils
$id = $_GET['id'];
$select_chapter_data = "SELECT * FROM chapters WHERE id = '$id'";
$select_chapter_data_result = mysqli_query($conn, $select_chapter_data);
$chapter_details = mysqli_fetch_assoc($select_chapter_data_result);
?>
<body>
 <?php include("layouts/navbar.php") ?>
 <?php include("layouts/header.php") ?>

<div class="container">
  <div class="row">
   <div class="col-lg-10">
    <h1>Chapter Detail</h1>

    <div class="card">
     <div class="card-header">
      <h3>Chapter list <span><a href="chapter_index.php" class="btn btn-primary btn-lg">Back</a></span></h3>
     </div>
     <div class="card-body">
      <table class="table">
       <tr>
        <th>ID</th>
        <td><?= $chapter_details['id']  ?></td>
       </tr>
       <tr>
        <th>Chapter Name</th>
        <td><?= $chapter_details['chapter_name']  ?></td>
       </tr>
       <tr>
        <th>Created At</th>
        <td><?= $chapter_details['created_at']  ?></td>
       </tr>

       <tr>
        <th>Updated At</th>
        <td><?= $chapter_details['updated_at']  ?></td>
       </tr>
      </table>
     </div>
</div>
   </div>
</div>
 <?php include("layouts/footer.php") ?>