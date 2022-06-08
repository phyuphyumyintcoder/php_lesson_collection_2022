<?php 
include('../config/db_connect.php');
      include('user_function.php');
include("../layouts/head.php"); ?>
<body>
 <?php include("../layouts/navbar.php") ?>
 <?php include("../layouts/header.php") ?>

<div class="container">
  <div class="row">
   <div class="col-lg-12">
    <h1>User list <span><a href="create.php" class="btn btn-primary">User Create</a></span></h1>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php 
      
      $users_table_data = get_users_table_data($conn);
      foreach($users_table_data as $user) {
          echo "<tr>";
          echo "<td>" . $user['id'] . "</td>";
          echo "<td>" . $user['username'] . "</td>";
          echo "<td>" . $user['email'] . "</td>";
          echo "<td>" . $user['password'] . "</td>";
            echo "<td>";
            echo "<a href='edit.php?id=" . $user['id'] . "' class='btn btn-primary'>Edit</a>";
            echo "<a href='../actions/user_delete.php?id=" . $user['id'] . "' class='btn btn-danger'>Delete</a>";
          echo "</tr>";
      }
      ?>
      <tbody>
      </tbody>
    </table>
   </div>
  </div>
</div>



 <?php include("../layouts/footer.php") ?>