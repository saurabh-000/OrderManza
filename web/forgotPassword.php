<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Forgot Your Email?</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Type your Email Address</h4>
      </div>
      <form>
      <div class="modal-body">
        	<div class="form-group">
    
    <input type="email" class="form-control" id="email">
  </div>
        
      </div>
      <div class="modal-footer">
        <button type="Submit" class="btn btn-default" data-dismiss="modal">Submit</button>
      </div>
  </form>
    </div>

  </div>
</div>
</body>
</html>