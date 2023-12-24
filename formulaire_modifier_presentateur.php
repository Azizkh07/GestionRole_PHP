<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier presentateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form method='post' action='updatePresentateur.php'>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Modifier Presentateur</h2>
                    </div>
                    <form action="updatePresentateur.php" method="post">
                        <div class="form-group">
                            <label>Code Presentateur</label>
                            <input type="text" name="CodeP" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Nom Presentateur</label>
                            <input type="text" name="NomP" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Code Role</label>
                            <input type="text" name="CodeR" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        <input type="reset" class="btn btn-primary" name="Annuler" value="Annuler">
                    </form>
                </div>
            </div>        
        </div>
    </div>




</form>


    
</body>
</html>