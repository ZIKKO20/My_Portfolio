<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Rabiu Isaac | Web Developer</title>
  </head>

  <body id="home" data-spy="scroll" data-target="#main-nav">
    <nav
      class="navbar navbar-expand-md bg-secondary navbar-dark fixed-top py-2"
    id="main-nav">
      <div class="container">
        <a href="index.php" class="navbar-brand">
          <img src="img/logo.png" width="80" height="80" alt="Logo" />
        </a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="#home" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="#main-content" class="nav-link">Specialization</a>
            </li>
            <li class="nav-item">
              <a href="#about-main" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="#skills" class="nav-link">Skills</a>
            </li>
            <li class="nav-item">
              <a href="#contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- SHOWCASE SECTION -->
    <section id="showcase" class="py-5">
      <div class=" text-white">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-left showcase-head">
              <div class="my-icons">
                <a href="#" class="btn btn-outline-primary text-white mr-2"
                  ><i class="fab fa-facebook"></i
                ></a>
                <a href="#" class="btn btn-outline-primary text-white mr-2"
                  ><i class="fab fa-instagram"></i></i
                ></a>
                <a href="#" class="btn btn-outline-primary text-white mr-2"
                  ><i class="fab fa-twitter"></i
                ></a>
                <a href="#" class="btn btn-outline-primary text-white mr-2"
                  ><i class="fab fa-linkedin"></i
                ></a>
              </div>
              <h1 class="my-heading">I am <span class="txt-type" data-wait="3000" data-words='["a Developer","Designer"," Creator"]'></span></h1>
              <p class="lead mb-5">
                i,m Isaac, professional web developer with great experience
                in UI/UX Design,SASS Javascript, PHP etc...
              </p>
              <a href="#" class="btn btn-outline-primary btn-lg text-white"
                >My Portfolio</a
              >

              <a href="#" class="btn btn-primary btn-lg text-white ml-3"
                ><i class="fab fa-youtube fa-lg"></i
              ></a>
            </div>
            <div class="col-lg-6 showcase-img justify-content-center">
              <img
                src="img/man-01.png"
                alt="Picture"
                class="img-fluid d-none d-lg-block"
              />
            </div>
          </div>
        </div>
      </div>
    </section>


  <section id="main-content" class="py-5 text-white mb-4">
    <div class="container">

      <div class="row">
        <div class="main-text text-center">
          <h5 class="text-primary display-5 mb-4">CORE AREAS</h5>
          <h1 class="display-5 mb-4">My Specialty</h1>
          <p class="lead content-after">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptates quibusdam natus nisi explicabo debitis, qui aspernatur.
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 my_card">
          <div class="card bg-warning">
            <div class="card-body p-4">
              <i class="fab fa-codepen fa-3x"></i>
              <div class="card-title pt-3">
                <h5>UI/UX Design</h5>
              </div>
              <div class="card-text">
                <p class="lead">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur aliquam nulla voluptatibus.
                </p>
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-4">
        <div class="card bg-warning">
          <div class="card-body p-4">
            <i class="fab fa-apple fa-3x"></i>
            <div class="card-title pt-3">
              <h5>Web Design</h5>
            </div>
            <div class="card-text">
              <p class="lead">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur aliquam nulla voluptatibus.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card bg-warning">
          <div class="card-body p-4">
          <i class="fas fa-file-code fa-3x"></i>
            <div class="card-title pt-3">
              <h5>Web Development</h5>
            </div>
            <div class="card-text">
              <p class="lead">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nobis aspernatur aliquam nulla voluptatibus.
              </p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- ABOUT SECTION -->
<section id="about-main" class="text-center py-4 mb-5 bg-warning">
  <div class="container">
    <div class="row">
      <div class="main-text">
        <h1 class="display-5 mb-4">About Me</h1>
        <p class="lead content-after">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.<br> Voluptates quibusdam natus nisi explicabo debitis, qui aspernatur. Lorem ipsum <br>dolor sit, amet consectetur  adipisicing elit. Ad facilis beatae nulla 
        </p>
      </div>
  </div>
</section>
  <!-- ABOUT HEAD -->


  <section id="about py-5 text-center bg-warning">
      <div class="row">
      <div class="container">
        <div class="row">
          <div class="col md-5">
            <img src="img/me-01-alt.png" alt="My Picture" width="300" class="img-fluid">
          </div>
          <div class="col-md-7 about-text mt-2">
                <h1 class="display-6">Hi There </h1>
            <p class="lead">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero repudiandae laudantium similique reiciendis possimus.
            </p>
            <p class="lead">
              aliquam provident dicta totam odit fugiat. Earum modi ut eius eos iure, quam ullam ratione asperiores. A, eius pariatur?
            </p>

            <div class="row">
              <div class="col-md-6">
                <span class="label text-primary"><h5>Name:</h5></span>
                <p class="lead">Isaac Rabiu</p>
                <span class="label text-primary"><h5>Phone:</h5></span>
                <p class="lead">+44(0)7485250356</p>
              </div>
              <div class="col-md-6">
                <span class="label text-primary"><h5>Email:</h5></span>
                <p class="lead">info@isaacrabiu.com</p>
                <span class="label text-primary"><h5>LinkedIn:</h5></span>
                <p class="lead">Isaac Rabiu</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>

  <!-- SKILLS SECTION -->
  <section id="skills" class="py-5 bg-warning">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mt-5">
          <h6 class="display-6 text-primary">I'M EXPERT ON</h6>
          <H1>Let's Work Together</H1>
          <p class="lead">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi vitae qui velit, fuga, ipsum quasi illum voluptate voluptatem impedit aliquam iure atque quisquam omnis dolore? Quidem laudantium expedita voluptatibus deleniti. 
          </p>
          <a href="#" class="btn btn-outline-primary btn-lg text-white px-5"
                >Hire Me</a
              >
        </div>
        <div class="col-md-6 mt-5">
          <p class="text-right"><span class="badge badge-light">HTML5 95%</span></p>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
          </div> <br>
          <p class="text-right"><span class="badge badge-light">CSS3 75%</span></p>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div> <br>
          <p class="text-right"><span class="badge badge-light">PHP 70%</span></p>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
          </div> <br>
          <p class="text-right"><span class="badge badge-light">UI/UX 95%</span></p>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
          </div> <br>
          
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT SECTION -->

  <section id="contact" class="py-5 mt-5">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h6 class="display-6 text-primary">HAVE ANY QUESTION</h6>
          <H1>Contact Me</H1>
          <p class="lead">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br> illum voluptate voluptatem impedit aliquam iure atque quisquam.
          </p>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card boy bg-warning py-3">
            <i class="fas fa-map-marker-alt pl-3 fa-2x"> <span class="fa-text">Location</span></i>
              <p class="lead p-3">London, United Kingdom</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card boy bg-warning py-3">
              <i class="fas fa-phone-volume pl-3 fa-2x"> <span class="fa-text">Call Me</span></i>
              <p class="lead p-3"> +44(0)7485250356</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card boy bg-warning py-3">
              <i class="far fa-envelope pl-3 fa-2x"> <span class="fa-text">Email Me</span></i>
              <p class="lead p-3">London, United Kingdom</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Message Alert-->
      <?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

      $Msg ="";
      if(isset($_GET['error'])){
        $Msg = "Please Fill In the Blanks";
        echo ' <div class="alert alert-danger">'.$Msg.'</div>';
      }
      
      if(isset($_GET['success'])){
        $Msg = "Your Message Has Been Sent Successfully";
        echo ' <div class="alert alert-success">'.$Msg.'</div>';
      }

      ?>

      <div class="row">
        <div class="col">
          <form action="contact.php" method="post">
            <div class="form-row mb-4">
              <div class="col resp-sm">
                <label for="name">Your Name</label>
                <input id="Name" Name="Name" type="text" class="form-control" placeholder="First name" value="">
              </div>
              <div class="col resp-sm">
                <label for="email">Email address</label>
                <input id="Email" Name="Email" type="text" class="form-control" placeholder="Email" value="">
              </div>

            </div>
            <div class="form-group">
              <label for="subject">Subject</label>
              <input id="Subject" Name="Subject" type="text" class="form-control" placeholder="Subject" value="">
            </div>
            <div class="form-group">
              <label for="message">Your Message</label>
              <textarea class="form-control" id="message" Name="Message" id="" cols="30" rows="5"> </textarea>
            </div>
            <input type="Submit" Name="Submit" value="Submit" class="btn btn-primary btn-block btn-lg">
          </form>
        </div>
      </div>
    </div>
  </section>

  <section id="main-footer" class="py-5 bg-warning text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-6 mb-3">
          <div class="my-icons">
            <a href="#" class="btn btn-outline-primary text-white mr-2"
              ><i class="fab fa-facebook"></i
            ></a>
            <a href="#" class="btn btn-outline-primary text-white mr-2"
              ><i class="fab fa-instagram"></i></i
            ></a>
            <a href="#" class="btn btn-outline-primary text-white mr-2"
              ><i class="fab fa-twitter"></i
            ></a>
            <a href="#" class="btn btn-outline-primary text-white mr-2"
              ><i class="fab fa-linkedin"></i
            ></a>
          </div>
        </div>
        <div class="col-md-6 ml-auto">
          <p class="lead">
            copyright &copy; <span id="year"></span>  All Right Reserved
          </p>
        </div>
      </div>
    </div>
  </section>

  <script src="main.js"></script>

    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
    ></script>

    <script>
      // Get the current year for the copyright
      $("#year").text(new Date().getFullYear());

      //Initialize Scrollspy
      $('body').scrollspy({target:'#main-nav'});
      //Smooth Scrolling 
      $('#main-nav a').on('click',function(event){
        if(this.hash !==""){
          event.preventDefault();

          const hash =this.hash;

          $('html, body').animate({
            scrollTop:$(hash).offset().top
          },800,function(){
            window.location.hash = hash;
          });
        }
      });
    </script>
  </body>
</html>
