<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
    <title>Cookies.php</title>
</head>

<body>
    <div class="container border border-3 rounded-4 mt-5 bg-light p-4 mb-3" id="form-container">
        <h1>Introduzca datos para crear una cookie</h1>
        <form class="form-floating p-3" method=post>
            <div class="form-floating mb-3">
                <p><label for="cookieName" class="form-label">Cookie name:</label></p>
                <input type="text" class="form-control" id="cookieName" name="cookieName" aria-describedby="cookieName" required>

            </div>
            <div class="form-floating mb-3">
                <p><label for="cookieValue" class="form-label">Cookie value:</label></p>
                <input type="text" class="form-control" id="cookieValue" name="cookieValue" aria-describedby="cookieValue" required>

            </div>
            <div class="form-floating mb-3">
                <p><label for="cookieExpirationSeconds" class="form-label">Cookie expiration seconds:</label></p>
                <input type="number" class="form-control" pattern="^[1-9]\d*$" id="cookieExpirationSeconds" name="cookieExpirationSeconds"aria-describedby="cookieExpirationSeconds">
                <div id="cookieExpirationSeconds" class="form-text">.</div>
            </div>
            <button type="submit" class="btn btn-primary">Añadir cookie</button>
        </form>
    </div>
    <div id="cookiesCreadas" class="container mb-3">
        <h2>Cookies creadas</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
        <?php
        if (isset($_POST["cookieName"], $_POST["cookieValue"])){

            $cookieName = $_POST["cookieName"];
            $cookieValue  = $_POST["cookieValue"];
            //verificamos si se le  ha dado un valor  al campo expiracion o aplicamos su valor por defecto
            $cookieExpirationSeconds = isset ($_POST["cookieExpirationSeconds"])?(int)$_POST["cookieExpirationSeconds"] : 0;

          
            setcookie($cookieName, $cookieValue, time()+ $cookieExpirationSeconds);
        }

          // Mostrar cookies existentes
          foreach ($_COOKIE as $name => $value) {
            echo "<tr><td>$name</td><td>$value</td></tr>";
       
        }
        ?>
          </tbody>
        </table>
    </div>
    <div id="datosCookies" class="container mb-3">
    </div>


</body>

</html>