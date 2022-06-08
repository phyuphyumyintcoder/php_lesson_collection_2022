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
       </table> 
    </div>
   </div>
 </div>
</body>