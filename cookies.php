<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
    <title>Cookies.php</title>
</head>

<body>
<div class="container border border-3 rounded-4 mt-5 bg-light p-4 mb-3" id="form-container">
    <h1>Introduzca datos para crear una cookie</h1>
    <form  class="form-floating p-3" method=post>
        <div class="form-floating mb-3">
            <p><label for="cookieName" class="form-label">Cookie name:</label></p>
            <input type="cookieName" class="form-control" id="cookieName" aria-describedby="emailHelp">
          
        </div>
        <div class="form-floating mb-3">
            <p><label for="cookieValue" class="form-label">Cookie value:</label></p>
            <input type="cookieValue" class="form-control" id="cookieValue" aria-describedby="emailHelp">
           
        </div>
        <div class="form-floating mb-3">
            <p><label for="cookieExpirationSeconds" class="form-label">Cookie value:</label></p>
            <input type="cookieExpirationSeconds" class="form-control" id="cookieExpirationSeconds" aria-describedby="emailHelp">
            <div id="cookieExpirationSeconds" class="form-text">.</div>
        </div>
        <button type="submit" class="btn btn-primary">Añadir cookie</button>
    </form>
    </div>
    <div id="cookiesCreadas"class="container mb-3"> 
    </div>
    <div id="datosCookies" class="container mb-3">
    </div>
</body>

</html>
