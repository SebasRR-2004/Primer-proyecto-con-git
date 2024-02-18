<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/register.css">
        <title>Registrarse</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            <b id="register_tittle">Registrarse</b>
                        </div>
                        <div class="card-body">
                            <form action="register_post.php" method="post">
                                <label for="user">Nombre Ususario:</label>
                                <input class="form-control" type="text" name="name_user" id="user">

                                <br>

                                <label for="pswd">Contraeña:</label>
                                <input class="form-control" type="password" name="pswd" id="pswd">

                                <br>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-dark">Ingresar</button>
                                </div>

                                <br>

                                <div class="d-flex justify-content-center">
                                    <a href="login.php">Volver</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </body>
</html>