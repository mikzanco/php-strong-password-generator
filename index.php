<?php

var_dump($_GET);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="bg-dark text-white">
    <h1 class="pb-5">Strong password generator</h1>
    <div class="container container-big text-dark">
        <div class="row d-flex flex-column jusify-content-center">
            <div class="col-md-6 offset-md-3">
                <form action="index.php" method="GET" >
                    <div class="col d-flex flex-column justify-content-center">
                        <label class="heading p-3">SCEGLI IL NUMERO DI CARATTERI da 8 a 30</label>
                        <input name="name" type="number" class="form-comtrol w-80" >
                    </div>

                    <div class="col d-flex justify-content-center mt-3 ">
                    
                        <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="c-uguali" id="flexCheckDefault1">
                                <label class="form-check-label" for="flexCheckDefault">
                                    No caratteri uguali
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" value="" name="c-uguali" id="flexCheckChecked" checked>
                                <label class="form-check-label" for="flexCheckChecked">
                                    Caratteri uguali
                                </label>
                        </div>
                    </div>
                    <div class="col">

                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
</body>
</html>