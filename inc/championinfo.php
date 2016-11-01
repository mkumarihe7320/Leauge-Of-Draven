<?php
$name =$_POST['name'];

$query = "SELECT * FROM 'champions' WHERE 'name' ='$name'";
$run =mysql_query($query);
$row = mysql_fetch_array($run);
$id =$row['id'];
$name =$row['name'];
$role =$row['role'];
$srole =$row['srole'];
$attack =$row['attack'];
$health =$row['health'];
$ability =$row['ability'];
$difficulty =$row['difficulty']; ?>



Name: <?php echo $name; ?> <br>
Role: <?php echo $role; ?> <br>
Secondary Role: <?php echo $srole; ?> <br>
Attack: <?php echo $attack; ?> /100<br>
Health: <?php echo $health; ?> /100<br>
Ability: <?php echo $ability; ?> /100 <br>
Difficulty: <?php echo $difficulty; ?> /100 <br>
