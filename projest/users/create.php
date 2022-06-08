<?php include("../layouts/head.php") ?>
<body>
 <?php include("../layouts/navbar.php") ?>
 <?php include("../layouts/header.php") ?>

<div class="container">
  <div class="row">
   <div class="col-lg-8">
    <h1>User Create <span><a href="index.php" class="btn btn-primary">Back</a></span></h1>
    <div class="card">
      <div class="card-header">
        <h5>User Create</h5>
      </div>
      <div class="card-body">
        <form action="../actions/user_create.php" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="username" placeholder="Enter name">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
          </div>
          <div class="form-group">
            <label for="Phone">Phone</label>
            <input type="text" class="form-control" id="password" name="phone" placeholder="Enter Phone">
          </div>
          <div class="form-group">
    </div>
  </div>
</div>



 <?php include("../layouts/footer.php") ?>