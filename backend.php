<?php

$name = $_POST['username'];

$pass = $_POST['passkey'];



?>

<table border="3">
<thead>
<th>USERNAMES</th>
<th>PASSWORDS</th>
</thead>
<tbody>
<tr>
<td><?php echo $name ?> </td>
<td> <?php echo $pass ?> </td>
</tr>

</tbody>
</table>