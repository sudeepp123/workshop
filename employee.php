<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MIS System</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
<link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="assets/css/fullcalendar.css" />
<link rel="stylesheet" href="assets/css/matrix-style.css" />
<link rel="stylesheet" href="assets/css/matrix-media.css" />
<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/jquery.gritter.css" />
<link href='css/googleapi.css' rel='stylesheet' type='text/css'>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<?php include 'subheader.php'; ?>
</head>
<body>
	
			<!--  Main-container-part-->


			<h1>Employee List</h1>
<form class="navbar-form navbar-right" role="search">

    <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
        <button type="submit" class="btn-success">GO<span class="icon-search"></span></button>
    </div>
    
    <br>
    <br>
    <a href="addemployee.jsp" class="btn btn-success pull-right">Add New Employee</a>
    <br>
</form>
<br>
<br/>
<table class="table table-responsive"border=1>
 <tr>
<td>Emp_ID</td> 
<td>First Name</td>
<td>Last Name</td>
<td>Username</td>
<td>Mobile Number</td>
<td>Joined Date</td>
<td>Action</td>
</tr>
<tr>
        <td>1.</td>
        <td>Sudeep</td>
        <td>Paudel</td>
        <td>sudeep.p123</td>
        <td>9847495109</td>
        <td>2017-05-3</td>
        <td>
          <a href="#" class="btn btn-primary"><span class="icon-edit"></span> Edit</a> 
          <a href="#"  class="btn btn-danger"><span class="icon-trash"></span> Delete</a>
            <a href="#"  class="btn btn-success"><span class="icon-user"></span> View Information</a>
            
        </td>
      </tr>

</table>





			<!--end-main-container-part-->

			<!-- including footer part -->
			<?php include 'footer.php'; ?>
</body>
</html>
