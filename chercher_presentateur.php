<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chercher presentateur</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form method='post' action='f_chercher_pres.php'>
<div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Chercher Presentateur</h2>
                    </div>
                    <form action='f_chercher_pres.php' method="post">
                       <div class="form-group">
                            <label>choisir critére :</label>
                            <select name="critere" class="form-control">
                        <option value="CodeP">Code Presentateur</option>
                        <option value="NomP">Nom de presentateur</option>
                        <option value="CodeR">code de role </option>
                        </select>
                        </div>
        
                        <div class="form-group">
                        <label>Donner valeur</label>
                            <input type="text" name="val" class="form-control">
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