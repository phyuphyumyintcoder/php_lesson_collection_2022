<?php 

include('config/db_connect.php');
include('class/Chapter.php');

$data_table = new Chapter();
$chapters = $data_table->get_chapters($conn);
include("layouts/head.php"); 
// echo "<pre>";
// print_r($chapters);
// echo "</pre>";
?>


<body>
 <?php include("layouts/navbar.php") ?>
 <?php include("layouts/header.php") ?>

<div class="container">
  <div class="row">
   <div class="col-lg-10">
    <h1>Chapter List</h1>

    <div class="card">
     <div class="card-header">
      <h3>Chapter list <span><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Chapter
</button></span></h3>
     </div>
     <div class="card-body">
      <table class="table">
       <thead>
        <th>ID</th>
        <th>Chapter Name</th>
        <th>Created_At</th>
        <th>Action</th>
       </thead>
        <tbody>
          <?php 
        $i = 1;
        foreach($chapters as $chapter) {
         ?>
         <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $chapter['chapter_name']; ?></td>
          <td><?php echo $chapter['created_at']; ?></td>
          <td><?php echo $chapter['updated_at']; ?></td>
          <td>
           <a href="chapter_show.php?id=<?php echo $chapter['id']; ?>" class="btn btn-primary">View</a>
           <a href="chapter_edit.php?id=<?php echo $chapter['id']; ?>" class="btn btn-warning">Edit</a>
           <a href="actions/chapter_delete.php?id=<?php echo $chapter['id']; ?>" class="btn btn-danger">Delete</a>
          </td>
         </tr>
         <?php 
          $i++;
        }
       ?>
        </tbody>
      </table>
     </div>
    </div>
    
   </div>
   <!-- bootstrap modal box  -->

   <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chapter Create</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="actions/chapter_create.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Chapter Name</label>
    <input type="text" class="form-control" name="chapter_name">
  </div>
  
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Save changes">
      </div>
</form>
      </div>
      
    </div>
  </div>
</div>

   
</div>



 <?php include("layouts/footer.php") ?>