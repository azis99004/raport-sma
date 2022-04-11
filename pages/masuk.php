<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../img/logoSMA.png" rel="shortcut icon">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../dist/css/Adit.css">
    <title>SMA Mutiara Insan Nusantara</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="col-md-6 login-page">
                    <h2>SMA Mutiara Insan Nusantara</h2>
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="form-control" autofocus id="username" placeholder="Masukkan Username" required>
                        </div>
                        <div class="form-group">
                            <label for="username">Password</label>
                            <input type="password" name="password" minlength="8" maxlength="8" class="form-control" placeholder="Masukkan Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2" name="login">LOGIN</button>
                        <h6>
                            <br>
                            <center><b>Jika kamu lupa password hubungi Admin segera!<b> </center>
                        </h6>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>