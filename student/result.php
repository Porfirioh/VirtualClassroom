<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");
include 'head.php'?>
<div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><?php echo  $_SESSION[$_GET["class"]]; ?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="studentlist.php?class=<?php echo $_GET["class"]; ?>">Class Mates</a></li>
      <li><a href="about.php?class=<?php echo $_GET["class"]; ?>">About</a></li>
	  <li><a>Code: <?php echo $_GET["class"]; ?></a></li>
    </ul>
	<div class="navbar-form navbar-left">
       
		<form>
		<select name="type"  name="aa" onchange="report(this.value)"  class="form-control">
		<option value="">------<b>Select Class</b>------</option>
				<?php  include 'load_class.php';?>																															
		</select>
        </form>
		
</div>

  </div>
</nav>
</div>
<script>
function report( value){
	window.location.href = value;
	
}
</script>
<center>
<br>

<div style="width:100%">
<br>
<h2>Submit Assignment</h2>
<br>
<form class="form-inline" action="create_ass.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="code" value="<?php echo $_GET["class"]; ?>">
  <input type="hidden" name="aid" value="<?php echo $_GET["id"]; ?>">
  <label class="control-label" for="date">Upload and Attachment </label>
  <div class="form-group">
    <label class="btn btn-default">
    Browse File <input  name="fileToUpload" id="fileToUpload" type="file" required>
</label>
  </div>
  
  <button  type="submit" class="btn-info btn" >Submit Now</button>
</form>

</div>
</center>
<?php
//include 'load_result.php';
include 'footer.php';
?>