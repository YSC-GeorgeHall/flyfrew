<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Fly Frew</title>
      <script src="https://kit.fontawesome.com/ea02caf681.js" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@1,500&display=swap" rel="stylesheet">
      <style> @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');
         body  {
         font-family: 'Rubik', sans-serif;
         }
      </style>
   </head>
   <body>
      <nav class="navbar navbar-expand-lg bg-light">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.php">FlyFrew</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
               <ul class="navbar-nav me-auto mb-2 mb-lg-0">
               </ul>
               <div class="d flex justify-content-end">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="aboutus.php">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="partners.php">Partners</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="news.php">News</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="getintouch.php">Get In Touch</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <!-- start of container-->
      <div class="container">
         <div class="jumbotron" style="padding-bottom: 15px;">
            <div class="row flex align-items-center">
               <div class="col-md-6">
                  <h1 style>FlyFrew Lounge</h1>
                  <div class="row">
                     <div class="col-md-12">
                        <h4>FlyFrew Airport using existing partners, moderisation, and gets to know the airport traveller, to increase satisifaction and revenue opportunities
                        </h4>
                        </br>
                        <a href="fflounge-demo.php" class="btn btn-outline-primary" role="button" aria-pressed="true">FlyFrew Airport Demo</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <img src="images/lounge.png" class="img-fluid" alt="Responsive image" style="height:400px; padding-top: 20px;">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <h2>Digital First</h2>
               <br>
               <p style="font: message-box;">Digital ordering, digital feedback, digital booking of in-lounge services will be available for all guests at their finger tips. Integrating with existing lounge systems, we are able to give staff the ability to understand the guests needs allowing them to give a hyper personalised experience.</p>
            </div>
            <div class="col-md-4">
               <h2>Increased Satisifaction</h2>
               <br>
               <p style="font: message-box;">Touchless, seemless, and integrated servies allow guests to explore the lounge and its services using their smart devices without leaving the comfort of their chair. Giving them ultimate options, unlimted choice and best in class digital experiences to give them a memorable lounge experience.</p>
            </div>
            <div class="col-md-4">
               <h2>Revenue Opportunities</h2>
               <br>
               <p style="font: message-box;">Using existing, non utilised data points, we can understand the lounge guest more. Understanding how guests interact with the lounge, and its services provides insights that allow revenue options that before were unknown.</p>
            </div>
         </div>
      <div class="card mb-12">
            <div class="row no-gutters">
               <div class="col-md-5">
                  <img src="images/getintouch.png" class="img-fluid" alt="Responsive image" style="height: 250px;">
               </div>
               <div class="col-md-7">
                  <div class="card-body">
                     <h5 class="card-title">Get In Touch</h5>
                     <p class="card-text">Provide your information for us to get in touch with you regarding our products</p>
                     <form method="post" action="insert.php" class="form-inline">
                        <div class="row">
  <div class="form-group col-md-6">
    <label for="first_name" class="sr-only">First Name:</label>
    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
  </div>
  <div class="form-group col-md-6">
    <label for="last_name" class="sr-only">Last Name:</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
  </div>
      </div>
      <div class="row">
  <div class="form-group col-md-6">
    <label for="company" class="sr-only">Company:</label>
    <input type="text" class="form-control" id="company" name="company" placeholder="Company">
  </div>
  <div class="form-group col-md-6">
    <label for="extra_details" class="sr-only">Extra Details:</label>
    <textarea class="form-control" id="extra_details" name="extra_details" placeholder="Extra Details"></textarea>
  </div>
      </div>
  <div class="row">
  <div class="form-group col-md-6">
    <input type="checkbox" id="airport" name="options[]" value="airport">
    <label for="airport">Airport</label>
    <input type="checkbox" id="lounge" name="options[]" value="lounge">
    <label for="lounge">Lounge</label>
    <input type="checkbox" id="transfers" name="options[]" value="transfers">
    <label for="transfers">Transfers</label>
    <input type="checkbox" id="corporate" name="options[]" value="corporate">
    <label for="corporate">Corporate</label>
  </div>
  <div class="form-group col-md-6">
    <input type="submit" class="btn btn-primary" value="Submit">
  </div>
  </div>
</form> 

                  </div>
               </div>

            </div>
         </div>














         <h3>See our other products</h3>
         <div class="row">
            <div class="col-md-3">
               <div class="card">
                  <img class="card-img-top" src="images/airport.png" class="img-fluid" alt="Responsive image" alt="Card image cap" style="height: 125px;">
                  <div class="card-body">
                     <h5 class="card-title">FlyFrew Airport</h5>
                     <p class="card-text">Seemless and integrated experiences offering travellers the ultimate airport experience, at their finger tips</p>
                     <a href="ffairport.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Learn more about FlyFrew Airport</a>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card">
                  <img class="card-img-top" src="images/lounge.png" class="img-fluid" alt="Responsive image" alt="Card image cap" style="height: 125px;">
                  <div class="card-body">
                     <h5 class="card-title">FlyFrew Lounge</h5>
                     <p class="card-text">Provide travllers with the ultimate in-lounge experience, giving them everything they need in the palm of their hands</p>
                     <a href="fflounge.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Learn more about FlyFrew Lounge</a>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card">
                  <img class="card-img-top" src="images/transfer.png" class="img-fluid" alt="Responsive image" alt="Card image cap" style="height: 125px;">
                  <div class="card-body">
                     <h5 class="card-title">FlyFrew Transfers</h5>
                     <p class="card-text">Travelling doesnt start at the airport, it starts at home, give your travellers the ultimate choice in getting to the airport</p>
                     <a href="fftransfers.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Learn more about FlyFrew Transfers</a>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="card">
                  <img class="card-img-top" src="images/corporate.png" class="img-fluid" alt="Responsive image" alt="Card image cap" style="height: 125px;">
                  <div class="card-body">
                     <h5 class="card-title">FlyFrew Corporate</h5>
                     <p class="card-text">Corporate travellers are vital to an airport ecosystem. Offer the corporate traveller the complete booking tool, from start to finish</p>
                     <a href="ffcorporate.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Learn more about FlyFrew Corporate</a>
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
            <a href ="https://www.w3schools.com">   <i class="fa-brands fa-facebook fa-2xl " style="padding-right: 5px;"></i> </a>
            <a href ="https://www.w3schools.com">     <i class="fa-brands fa-twitter fa-2xl" style="padding-right: 5px;"></i></a>
            <!-- Footer End -->
         </footer>
         <!-- end of container-->
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
   </body>
</html>