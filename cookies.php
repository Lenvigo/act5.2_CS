<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies.php</title>
</head>

<body>
    <form method=post>
        <div class="mb-3">
            <p><label for="cookieName" class="form-label">Cookie name:</label></p>
            <input type="cookieName" class="form-control" id="cookieName" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
            <p><label for="cookieValue" class="form-label">Cookie value:</label></p>
            <input type="cookieValue" class="form-control" id="cookieValue" aria-describedby="emailHelp">
           
        </div>
        <div class="mb-3">
            <p><label for="cookieExpirationSeconds" class="form-label">Cookie value:</label></p>
            <input type="cookieExpirationSeconds" class="form-control" id="cookieExpirationSeconds" aria-describedby="emailHelp">
            <div id="cookieExpirationSeconds" class="form-text">.</div>
        </div>
        <button type="submit" class="btn btn-primary">Añadir cookie</button>
    </form>
</body>

</html>
