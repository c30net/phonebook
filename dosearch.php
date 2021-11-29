<?php
include 'includes/header.php';
include 'database.php';
$item = $_POST['searchBox'];
$query = "SELECT *  FROM `persons` WHERE concat(firstname,lastname,numbers,groupname) LIKE '%$item%'";
$result = mysqli_query($connection, $query);
if (!$result) {
    echo 'Error to search data in database ' . mysqli_error($connection);
}

?>

<table border="1">
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




<?php include 'includes/footer.php'; ?>