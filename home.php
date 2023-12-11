<?php
session_start();

if (isset($_SESSION['admin'])) {
    header('location: admin/home.php');
}

if (isset($_SESSION['voter'])) {
    header('location: home.php');
}

// Function to download the file content from Azure Blob Storage
function downloadAzureFile($url)
{
    $content = file_get_contents($url);
    if ($content === false) {
        // Handle error, e.g., log it or display a message
        die("Failed to download file from Azure Blob Storage");
    }
    return $content;
}

// Download header.php content
$headerContent = downloadAzureFile('https://mystorageaccou.blob.core.windows.net/mycontainer/header.php');

// Download scripts.php content
$scriptsContent = downloadAzureFile('https://mystorageaccou.blob.core.windows.net/mycontainer/scripts.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting System</title>
    <!-- Include downloaded header content -->
    <?php echo $headerContent; ?>
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <b>Voting System</b>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
            <form action="login.php" method="POST">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
        if (isset($_SESSION['error'])) {
            echo "
                <div class='callout callout-danger text-center mt20'>
                    <p>" . $_SESSION['error'] . "</p> 
                </div>
            ";
            unset($_SESSION['error']);
        }
        ?>
    </div>

    <!-- Include downloaded scripts content -->
    <?php echo $scriptsContent; ?>
</body>
</html>
