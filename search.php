<?php
include 'includes/header.php';
?>
<p>Looking For</p>
<form action="doSearch.php" method="POST">
    <input type="search" name="searchBox">
    <br>
    <input type="submit" name="search" value="Search">
</form>
<?php include 'includes/footer.php'; ?>