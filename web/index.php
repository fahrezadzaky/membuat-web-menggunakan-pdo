<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">User Management</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2>User List</h2>
        </div>
        <div class="card-body">
            <?php include("process/process_display.php"); ?>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h2>Search</h2>
        </div>
        <div class="card-body">
            <form action="process/process_search.php" method="post">
                <div class="form-group">
                    <label for="searchKeyword">Keyword:</label>
                    <input type="text" class="form-control" name="searchKeyword" required>
                </div>
                <button type="submit" class="btn btn-info">Search</button>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h2>Update Account</h2>
        </div>
        <div class="card-body">
            <form action="process/process_update.php" method="post">
                <div class="form-group">
                    <label for="userId">User ID:</label>
                    <input type="text" class="form-control" name="userId" required>
                </div>
                <div class="form-group">
                    <label for="newUsername">New Username:</label>
                    <input type="text" class="form-control" name="newUsername" required>
                </div>
                <div class="form-group">
                    <label for="newEmail">New Email:</label>
                    <input type="email" class="form-control" name="newEmail" required>
                </div>
                <button type="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <h2>Delete Account</h2>
        </div>
        <div class="card-body">
            <form action="process/process_delete.php" method="post">
                <div class="form-group">
                    <label for="userIdDelete">User ID:</label>
                    <input type="text" class="form-control" name="userIdDelete" required>
                </div>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    <a href="logout.php" class="btn btn-secondary">Logout</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
