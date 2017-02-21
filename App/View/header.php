<!DOCTYPE html>
<html>
  <head>
    <title>Foundation Library</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='public/img/dd.png' rel='shortcut icon'>
      <link rel="stylesheet" href="public/css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Foundation</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
       <!--  <li class="active"><a href="index.php">Home</a></li> -->
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="list-group-item"><a href="#">login</a></li>
            <li class="list-group-item"><a href="#">data</a></li>
            <li class="list-group-item"><a href="#">tambah</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
          <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  <div class="container-fluid">     
    <div class="row">
      <div class="col-sm-3" >
        <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Menu</h3>
    </div>
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item"><a href="index.php?page=student">Data College Student</a></li>
          <li class="list-group-item"><a href="#">Data Books</a></li>
          <li class="list-group-item"><a href="#">Data Books Category</a></li>
          <li class="list-group-item"><a href="index.php?page=author">Data Author</a></li>
          <li class="list-group-item"><a href="#">Data Publisher</a></li>
          <li class="list-group-item"><a href="#">Data Return</a></li>
          <li class="list-group-item"><a href="#">Data Employee</a></li>
        </ul>
      </div>
    </div>
      </div>
      <div class="col-sm-9">
        <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Details Menu</h3>
        
      </div>
  </body>
</html>
