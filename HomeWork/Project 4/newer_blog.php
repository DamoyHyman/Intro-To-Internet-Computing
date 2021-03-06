<!DOCTYPE html>
<html lang="en">

  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-110491194-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-110491194-1');
      </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GearHead Inc</title>
      <!-- Other CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/mycss1.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/blog-home.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>

  <body>
      

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">GearHead Blogs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              
                <!--- Display welcome for logged in user -->
              <?php
                     session_start();
                    if (isset($_SESSION['Username']) && isset($_SESSION['Mem_ID']))
                    {
                        echo '<li class="nav-item active">';
                        echo '<a class="nav-link" href="index.php">Welcome: ';
                        echo $_SESSION['Username'] ."!";
                        echo '<span class="sr-only">(current)</span>';
                        echo '</a>';
                        echo '</li>';
                    }
              ?>
              
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
              
              <?php
                if (!isset($_SESSION['Username']) && !isset($_SESSION['Mem_ID']))
                {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="login.php">MyAccount';
                    echo '</a>';
                    echo '</li>';
                }
              ?>
              
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
              
              <li class="nav-item">
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="write_new_blog_form.php">Post Blogs</a>
                        <a class="dropdown-item" href="#">List item for sale</a>
                        <a class="dropdown-item" href="#Parts Lists">Browse items for sale</a>
                        <a class="dropdown-item" href="#">Post Videos</a>
                        <a class="dropdown-item" href="#">Chat</a>
                          <?php
                          if (isset($_SESSION['Username']) && isset($_SESSION['Mem_ID']))
                          {
                              echo '<a class="dropdown-item" href="googleAnalytics.png">Google Analytics</a>';
                          }
                        ?>
                    </div>
                  </div>
              </li>
              
              <!--- Display logout for logged in user -->
               <?php
                if (isset($_SESSION['Username']) && isset($_SESSION['Mem_ID']))
                 {
                    
                        echo '<li class="nav-item active">';
                        echo '<a class="nav-link" href="logout.php">logout';
                        echo '<span class="sr-only">(current)</span>';
                        echo '</a>';
                        echo '</li>';
                }
              ?>
              
            <li class="nav-item">
              <!--<a class="nav-link" href="#">Contact</a>-->
                
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <h1 class="my-4"><em>The Latest and Greatest
            <small>Automobile Trends</small>
              </em></h1>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="myimg/tesla.jpg" style="width:729px; height:300px;" alt="2018 Aston Martin DB11 V8">
            <div class="card-body">
              <h2 class="card-title">Tesla faces lawsuit for racial harassment in its factories</h2>
              <p class="card-text">A new lawsuit brought by three former Tesla employees alleges that they were subject to constant racial discrimination and harassment in the electric car company's factories. The case, first reported by the Mercury News, was filed yesterday in the Alameda County Superior Court in California.The three plaintiffs in the suit are African American. The men describe the repeated use of racial slurs and use of racist drawings by coworkers and superiors. They claim they reported the multiple and repeated incidents to both the staffing agency that hired them and their supervisors at Tesla.</p>
              <a href="https://www.autoblog.com/2017/10/18/tesla-lawsuit-racial-harassment/?hcid=ab-around-ab-tile-1" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on October 18, 2017 on autobolg by
              <a href="#">Swapna Krishna</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="myimg/bugatti-chiron-engine-6-1200x700-1.jpg" alt="Card image cap" style="width:729px; height:300px;">
            <div class="card-body">
              <h2 class="card-title">This 1:4 scale Bugatti Chiron engine costs $10,000</h2>
              <p class="card-text">Ts $10,000 too much for a non-functioning powertrain? Amalgam, a company that specializes in high-end scale models of everything from cars to steering wheels has meticulously crafted a 1:4 scale replica of the 8.0-liter, 16-cylinder, 1,500-horsepower behemoth that powers the Bugatti Chiron. The model is so detailed that at first glance you'd swear it was the real thing, provided a banana isn't used for scale.</p>
              <a href="https://www.autoblog.com/2017/10/18/bugatti-chiron-engine-scale-model/?hcid=ab-around-ab-tile-2" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on October 18, 2017 on autobolg by
              <a href="http://www.roadandtrack.com/car-culture/car-accessories/a13045831/amalgam-bugatti-chiron-model-engine/">Amalgam via Road & Track</a>
            </div>
          </div>

          <!-- Blog Post -->
          <div class="card mb-4">
            <img class="card-img-top" src="myimg/audi.jpg" alt="2018 Honda Accord" style="width:729px; height:300px;">
            <div class="card-body">
              <h2 class="card-title">2017 Audi R8 V10 Spyder Drivers' Notes | The everyday supercar</h2>
              <p class="card-text">The second-generation Audi R8 V10 Spyder carries on all of the wonderful traits of the first model. It's both fast and comfortable, the kind of all-rounder than you could only dream about a decade or two ago. While some of us may miss the V8 and gated manual shifter, the 540 horsepower V10 and dual-clutch are still a wonderful combination.</p>
              <a href="https://www.autoblog.com/2017/10/18/2017-audi-r8-v10-spyder-drivers-notes-review-everyday-supercar/#slide-7127212" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on  October 18, 2017 on autobolg by
              <a href="https://www.autoblog.com/bloggers/autoblog-staff/">Autoblog Staff</a>
            </div>
          </div>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="index.php">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search Blogs</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>
            
            <div class="card my-4">
            <h5 class="card-header">Search Parts</h5>
            <div class="card-body">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
              <a name="Parts Lists"><h5 class="card-header">Parts Lists</h5></a>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Suspension</a>
                    </li>
                    <li>
                      <a href="#">Intake System</a>
                    </li>
                    <li>
                      <a href="#">Exhaust System</a>
                    </li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                      <a href="#">Interior Parts</a>
                    </li>
                    <li>
                      <a href="#">Exterior Parts</a>
                    </li>
                    <li>
                      <a href="#">Sound Systems</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Follow Us On Social Media</h5>
            <div class="card-body">
                <a class="fa fa-facebook" href="#"></a>
              <a class="fa fa-twitter" href="#"></a> 
              <a class="fa fa-instagram"></a>
              <a class="fa fa-snapchat-ghost" href="#"></a>  
              <a class="fa fa-youtube" href="#" ></a>
            </div>
          </div>

        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
          <h5 class="text-white">About Us:</h5>
          <a name ="About"><p class="m-0 text-left text-white">This website provides a service/community in which automotive enthusiast can come together and share their common interest in motor vehicles of any make of model, without ridicule. Not only will they be able to read blog post, but shared their common interest in motor vehicles, but be able to ask for help with certain aspect of their own cars. They can also, buy, sell and trade parts within this web service community that will be provided by this site.</p></a>
          <br>
        <p class="m-0 text-center text-white">Copyright &copy; GearHead Inc 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
