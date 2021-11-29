<?php
include 'includes/header.php';
?>

<form action="save.php" method="POST">
    <label>Firstname
        <input type="text" name="firstName" required>
    </label>
    <br>
    <label>Lastname
        <input type="text" name="lastName" required>
    </label>
    <br>
    <label>Phone Number
        <input type="text" name="phoneNumber" required>
    </label>
    <br>
    <label>Group Name
        <select name="groupName">
            <option value="family">Family</option>
            <option value="friend">Friend</option>
            <option value="acquintance">Acquintance</option>
            <option value="work">Work</option>
        </select>
    </label>
    <br>
    <input type="submit" value="Save">
    <input type="reset" value="Reset">
</form>




<?php include 'includes/footer.php'; ?>