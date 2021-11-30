<?php

    include('db.php');
    $message = '';

    if (!empty($_POST['username']) && !empty($_POST['password'])) {

        $password = $_POST['password'];
        $user = $_POST['username'];
        
        $query = mysqli_query($conn,"SELECT * FROM usuarios WHERE usuario ='".mysqli_real_escape_string($conn, $user)."' AND pass ='".mysqli_real_escape_string($conn, $password)."' ");
        $num_rows= mysqli_num_rows($query);
        if($num_rows>0)
        {
            header("Location:home.php");
        }
        else{
            $message = 'Credenciales Inválidas';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./estilos/index.css" rel="stylesheet">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-3 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Inicio de Sesión</h2>
                                <br />
                                <form class="login100-form validate-form" method='post' action='index.php'>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="typeEmailX" class="form-control form-control-lg"
                                            id="username" name="username" placeholder="Usuario" />
                                        <label class="form-label">Usuario</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                            name="password" pattern="[A-Za-z0-9_-]{1,15}" requiered
                                            placeholder="Contraseña" />
                                        <label class="form-label" for="typePasswordX">Contraseña</label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>