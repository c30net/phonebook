<?php
include_once 'includes/header.php';
?>

<div class="container">

    <br>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Phonebook</h3>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a data-toggle="tab" role="tab" href="#new" aria-controls="new" aria-expanded="true">New user</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" href="#list" aria-controls="list" aria-expanded="false">List</a></li>
                        <li role="presentation"><a data-toggle="tab" role="tab" href="#search" aria-controls="search" aria-expanded="false">Search</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="new" class="tab-pane active" role="tabpanel">
                            <form method="post" action="save.php">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="firstName">

                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lastName">

                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" name="phoneNumber">

                                </div>
                                <div class="form-group">
                                    <label>group Name
                                    <select class="form-control" name="groupName">
                                        <option value="family">Family</option>
                                        <option value="friend">Friend</option>
                                        <option value="acquaintance">Acquaintance</option>
                                        <option value="work">Work</option>
                                    </select>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-info" type="submit" value="save">
                                </div>
                            </form>
                        </div>
                        <div id="list" class="tab-pane" role="tabpanel">
                            <?php include 'list.php'; ?>
                        </div>
                        <div id="search" class="tab-pane" role="tabpanel">
                            <?php include 'search.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>