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
// close the database

mysqli_close($mycon);
?>

<a href="project.html">Click to go back</a>
</body>
</html>
