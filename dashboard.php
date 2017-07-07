<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h1><a href= "logout.php">Log out</a></h1>

<div class="container">
  <h2><strong>Please Enter your Information.</strong></h2>
  <form class="form-horizontal" action="connection3.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">Username:</label>
      <div class="col-sm-10">
        <input type="username" class="form-control" id="name" placeholder="Enter username" name="username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">          
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email1">Email(optional):</label>
      <div class="col-sm-10">
        <input type="email1" class="form-control" id="email1" placeholder="Enter optional email" name="email1">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="pnum">Phone Number:</label>
      <div class="col-sm-10">
        <input type="pnum" class="form-control" id="pnum" placeholder="Enter Phone Number" name="pnum">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="pnum1">Phone Number(optional):</label>
      <div class="col-sm-10">
        <input type="pnum1" class="form-control" id="pnum1" placeholder="Enter optional Phone number" name="pnum1">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="wnum">Whatsapp Number:</label>
      <div class="col-sm-10">
        <input type="wnum" class="form-control" id="wnum" placeholder="Enter Whatsapp number" name="wnum">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="blood">Blood Group:</label>
      <div class="col-sm-10">
        <input type="blood" class="form-control" id="blood" placeholder="Enter Blood Group" name="blood">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="age">Age:</label>
      <div class="col-sm-10">
        <input type="age" class="form-control" id="age" placeholder="Enter age" name="age">
      </div>
    </div><div class="form-group">
      <label class="control-label col-sm-2" for="date">Last date of Donation:</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="history">Previous Medical History:</label>
      <div class="col-sm-10">
        <input type="history" class="form-control" id="history" placeholder="Enter here" name="history">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><strong>Save my changes</strong></button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
