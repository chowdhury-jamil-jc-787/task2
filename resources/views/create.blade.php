<!DOCTYPE html>
<html lang="en">
<head>
  <title>Customer Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="text-center">Customer | Add</h2>
  <br>
  <form action = "/store" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

  <label class="form-group">Branch Id:</label>
    <input type="text" class="form-control" placeholder="Branch Id" name="branch_id">
    <label>Last Name:</label>

    <label class="form-group">First Name:</label>
    <input type="text" class="form-control" placeholder="First Name" name="first_name">
    <label>Last Name:</label>
    <input type="text" class="form-control" placeholder="Last Name" name="last_name">
  <label>gender:</label>
  <select class="form-control" name="gender">
    <option value="M">M</option>
    <option value="F">F</option>
  </select>
<label>Email:</label>
    <input type="text" class="form-control" placeholder="Enter Email" name="email"><br>

    <label>phone:</label>
    <input type="text" class="form-control" placeholder="Enter phone" name="phone"><br>
    <button type="submit"  value = "Add student" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>