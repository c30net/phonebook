<?php
include 'database.php';
$query = "SELECT * FROM `persons`";
$result = mysqli_query($connection, $query);

?>

<table class="table table-bordered table-hover">
    <thead>
        <th>first name</th>
        <th>last name</th>
        <th>phone number</th>
        <th>Group Name</th>
    </thead>
    <tbody>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['numbers'] . "</td>";
            echo "<td>" . $row['groupname'] . "</td>";
            echo "</tr>";
        }
        ?>

    </tbody>
</table>
