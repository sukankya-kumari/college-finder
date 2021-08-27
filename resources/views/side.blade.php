<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link  href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
      <section class="home">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-controls">
              <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" style="background-image: url('carous/hero.jpg')"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" style="background-image: url('carous/phot.jpg')"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" style="background-image: url('carous/img.jpg')"></li>
              </ol>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('carous/hero.jpg')"> 
             <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand ms-5" href="#"><h3 style="color: white">College Finder</h3></a>
                      <ul class="navbar-nav" style="margin-left: 50%">
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Colleges</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Courses</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">About</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Contact</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Help</a></li>
                      </ul>
                </nav>
              </div>
              <div class="container">
                <div class="box">
                  <form action="{{route('home')}}" class="d-flex" method="GET">
                    @csrf
                    <input class="rounded-0" type="text" name="search" placeholder="find college" size="60px" style="border: 1px solid white; margin-left:30%;"> 
                    <input type="submit" class="btn rounded-0" value="Search" style="background-color: white">
                  </form>
                </div>

                
                <p>Find College In India</p>
              </div>
            </div>
          
            <div class="carousel-item" style="background-image: url('carous/phot.jpg')">
              <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand ms-5" href="#"><h3 style="color: white">College Finder</h3></a>
                      <ul class="navbar-nav" style="margin-left: 50%">
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Colleges</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Courses</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">About</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Contact</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Help</a></li>
                      </ul>
                </nav>
              </div>
              <div class="container">
                <h2>Find Over 1000 Course in india</h2>
                <p>Best college To Study along with Personal development  </p>
              </div>
            </div>
            <div class="carousel-item" style="background-image: url('carous/img.jpg')">
              <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                  <a class="navbar-brand ms-5" href="#"><h3 style="color: white">College Finder</h3></a>
                      <ul class="navbar-nav" style="margin-left: 50%">
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Colleges</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Courses</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Home</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">About</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Contact</a></li>
                        <li class="nav-item"><a href="" class="nav-link me-4" style="color: white">Help</a></li>
                      </ul>
                </nav>
              </div>

              <div class="container">
                <h2>And Many More</h2>
                <p>Best college To Study along with Personal development  </p>
              </div>
            </div>
          </div>
          
        </div>
  
      </section>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      @yield('content')
    
</body>
</html>
