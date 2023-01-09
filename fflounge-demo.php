<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fly Frew</title>
    <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');

    body {
        font-family: 'Rubik', sans-serif;
    }

    .col-md-6, .col-md-4 , .col-md-3{
        padding-top: 15px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <!-- start of container-->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    
                    <div class="card-body">
                        <h5 class="card-title">WIFI</h5>
                        <p class="card-text">Network Name: FlyFrewDemo<br>Network Name: Thisisonlyademo</p>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <img src="images/lounge_demo_images/lounge_banner.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Order to Table</h5>
                        <p class="card-text">Order food and Drinks to your table</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Buy Duty Free</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Book a Service</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lounge Info</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lounge Info</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">lounge Info</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
</div>

        <!-- Footer Start -->
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <ul class="nav col-md-4 justify-content-start">
                <li class="nav-item"><a href="aboutus.php" class="nav-link px-2 text-muted">About Us</a></li>
                <li class="nav-item"><a href="news.php" class="nav-link px-2 text-muted">News</a></li>
            </ul>
            </br>
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-facebook fa-2xl "
                    style="padding-right: 5px;"></i> </a>
            <a href="https://www.w3schools.com"> <i class="fa-brands fa-twitter fa-2xl"
                    style="padding-right: 5px;"></i></a>
            <!-- Footer End -->
        </footer>
        <!-- end of container-->
    </div>
    <script>
    function myFunction() {
        // Get the text field
        var copyText = document.getElementById("myInput");

        // Select the text field
        copyText.select();
        copyText.setSelectionRange(0, 99999); // For mobile devices

        // Copy the text inside the text field
        navigator.clipboard.writeText(copyText.value);


    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>