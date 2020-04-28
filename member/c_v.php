<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo  $_SESSION[$_GET["class"]]; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="studentlist.php?class=<?php echo $_GET["class"]; ?>">Student List</a></li>
      <li><a href="about.php?class=<?php echo $_GET["class"]; ?>">About</a></li>
	  <li><a>Code: <?php echo $_GET["class"]; ?></a></li>
    </ul>
	
	    <form class="navbar-form navbar-left">
		<select name="type" class="form-control" name="aa" onchange="report(this.value)" >
		<option value="">------<b>Select Class</b>------</option>
				<?php  include 'load_class.php';?>																															
		</select>
        </form>
		
	    <script>
        function report( value){
	    window.location.href = value;
	
}
</script>
	
  <form class="navbar-form navbar-left" method="GET" action="studentlist.php">
  <div class="input-group">
    <input type="hidden" name="class" value="<?php echo $_GET["class"]; ?>">
    <input type="text" name="q" class="form-control" placeholder="Search Student" required>
	
    <div class="input-group-btn">
      <button class="btn btn-default" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
  </form>

  </div>
</nav>
</div>

<center>
<div style="width:100%">
<br>
<h2>Create An Assignment</h2>
<br>
<form class="form-inline" action="create_ass.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="fn" value="<?php echo $_GET["class"]; ?>">
  <div class="form-group">
    <textarea class="form-control" style="margin: 0px; width: 300px;" placeholder="Title " rows="3" name="text" required></textarea>
  </div>
  <label class="control-label" for="date">Attachment </label>
  <div class="form-group">
    <label class="btn btn-default">
    Browse File <input  name="fileToUpload" id="fileToUpload" type="file" required>
</label>
  </div>
  
  <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Deadline</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text" required>
      </div>
  <button  type="submit" class="btn-info btn" >Create Now</button>
</form>

</div>
<br>
<h2>AssignMent Feeds</h2>
<br>
</center>

<div style="padding-left:10%;padding-right:10%;text-align:center;">
	
	<table class="table table-bordered">
    
    <tbody>
      <?php include 'load_assignmt.php'; ?>
    </tbody>
	
  </table>
			
		
</div>
