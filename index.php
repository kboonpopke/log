<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="test.css" rel="stylesheet">
</head>

<body>
    
    <form action="check_login.php" method="post">
        <h4>LOGIN</h4>
        <!-- Email input -->
        <div data-mdb-input-init >
            <label class="form-label" for="user">User</label>
            <input type="text" id="user" name="user" class="form-control" />
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="pass1">Password 1</label>
            <input type="password" id="pass1" name="pass1" class="form-control" />
        </div>
      
        
        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>


        
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>