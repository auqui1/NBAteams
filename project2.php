<?php

$server="localhost";//server
$user="root";//username
$password="";//password
$database="projectdb";
//mysql_connect() is used to connect
$mycon = mysqli_connect($server,$user,$password,$database) or die("no connection");

?>

<html>
<head>

<!-- title for web page -->
<title>Top Five Oldest Teams</title>
<!-- link to external style sheet -->
<link href="project4.css" rel="stylesheet">

</head>
<body>

<?php

//select query

$sqlQuery="select * from projectdb_table ORDER by Year LIMIT 5";
$res=mysqli_query($mycon,$sqlQuery);

if(!$res)
{

die("Query Failed!!!");

}
?>

<table class="table">
<tr>
<td>Id</td>
<td>Team</td>
<td>Year</td>
</tr>

<?php
//mysql_fetch_array() will return result row by row

while($row=mysqli_fetch_array($res))
{

?>
<tr>

<!-- display Team ID -->

<td><?php echo $row{'Id'}?></td>
<!-- display Team Name -->
<td><?php echo $row{'Team'}?></td>
<!-- display Year -->
<td><?php echo $row{'Year'} ?></td>
</tr>

<?php }?>

</table>
<?php

// close the db connection

mysqli_close($mycon);

?>
<a href="project.html">Click to go back</a>

</body>
</html>
