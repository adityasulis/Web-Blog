<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <title>Aditya Blog | About</title>
</head>

<body>
@include('partials.navbar')
@include('partials.hero-about')

{{-- about me --}}
<div class="container mt-5 mb-6">
    <div class="row mb-5">
        <div class="col">
            <img src="/image/aditya.jpg" alt="aditya" width="250" class="img-thumbnail rounded-circle mx-auto d-block mb-3">
            <h3 class="text-center">{{ $name }} </h3>

            <p class="mt-5">ADITYA Blogs is Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit placeat est aut numquam ipsum harum, voluptatem voluptate a qui praesentium fuga aliquam veniam odio expedita dolore iure, repudiandae in tenetur architecto rerum corrupti corporis! Minima fugiat accusantium perspiciatis. Laboriosam, corporis labore aut officiis exercitationem iste, eligendi cupiditate vitae, odio fugiat a minima amet ratione molestiae corrupti? Harum veritatis, quasi velit saepe facere, quos quod, magnam sunt dolor sint ut earum? Autem at dicta voluptas ducimus doloribus. Itaque suscipit voluptatem alias officia omnis eius. Provident corrupti laudantium nam aliquid facere ullam tempora ea consectetur doloremque accusantium, voluptatem alias ex quisquam unde?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut voluptatibus facilis architecto? Nostrum, incidunt molestias ex deleniti fugiat libero animi dicta veritatis veniam, natus soluta illum officia vel illo quis iusto eos voluptatum possimus porro voluptatibus modi mollitia, eligendi perferendis autem? Sunt ipsum, quod ducimus aut illum sequi, reprehenderit accusamus iste magnam quas, tempora nesciunt excepturi sed repellat nihil voluptate asperiores. Corrupti numquam asperiores magni modi ea voluptas quos, nostrum commodi quis quisquam neque, voluptatum assumenda inventore? Amet inventore rerum harum, quae sunt officiis dignissimos quis dolor laborum soluta, nulla omnis quos eveniet iure, architecto quisquam tenetur. Quod libero earum non esse officiis voluptas, sapiente delectus dolorum, adipisci necessitatibus debitis est voluptates rerum commodi laudantium id praesentium molestiae facere asperiores ipsum aut. Cum nostrum explicabo dicta deserunt velit officia sint accusamus dignissimos incidunt sed a, recusandae reprehenderit consequatur eligendi numquam ab. Eligendi quam totam assumenda possimus omnis recusandae delectus corrupti.</p>
        </div>
    </div>
  </div>
</div>

{{-- our project --}}
<div class="bg-light mb-5" style="margin-bottom: 6vh;padding-bottom: 6vh;">
  <div class="container">
  <div class="row">
    <h1 class="text-center mt-5 mb-5">OUR PROJECT</h1>
      <div class="col-md-4 mb-3">
          <a href="#">
          <div class="card bg-light text-white">
              <img src="https://source.unsplash.com/250x250?model" class="img-thumbnail" alt="model">
            </div>
          </a>
      </div>
      <div class="col-md-4 mb-3">
          <a href="#">
          <div class="card bg-light text-white">
              <img src="https://source.unsplash.com/250x250?sport" class="img-thumbnail" alt="sport">
            </div>
          </a>
      </div>
      <div class="col-md-4 mb-3">
          <a href="#">
          <div class="card bg-light text-white">
              <img src="https://source.unsplash.com/250x250?music" class="img-thumbnail" alt="music">
            </div>
          </a>
      </div>
      <div class="col-md-4 mb-3">
          <a href="#">
          <div class="card bg-light text-white">
              <img src="https://source.unsplash.com/250x250?vintage-car" class="img-thumbnail" alt="car">
            </div>
          </a>
      </div>
      <div class="col-md-4 mb-3">
          <a href="#">
          <div class="card bg-light text-white">
              <img src="https://source.unsplash.com/250x250?fashion" class="img-thumbnail" alt="fashion">
             
            </div>
          </a>
      </div>
      <div class="col-md-4 mb-3">
          <a href="#">
          <div class="card bg-light text-white">
              <img src="https://source.unsplash.com/250x250?shoes" class="img-thumbnail" alt="shoes">
              
            </div>
          </a>
      </div>
    </div>
  </div>
</div>

<div class="container mb-5">
  <div class="text-center" style="margin-bottom: 7vh;">
      <h1 class="section-heading text-uppercase">OUR TEAM</h1>
  </div>
  <div class="row d-flex text-center">
      <div class="col-md-4">
          <div class="team-member">
              <img class="mx-auto rounded-circle" src="/image/aditya.jpg" width="250" alt="Aditya">
              <h4 class="mt-4">Aditya Sulistyo</h4>
              <p class="text-muted">Project Manager</p>
          </div>
      </div>
      <div class="col-md-4">
          <div class="team-member">
              <img class="mx-auto rounded-circle" src="https://source.unsplash.com/250x250?man-face" width="250" alt="jotaro">
              <h4 class="mt-4">Jotaro Kuujou</h4>
              <p class="text-muted">Programmer</p>
          </div>
      </div>
      <div class="col-md-4">
          <div class="team-member">
              <img class=" rounded-circle" src="https://source.unsplash.com/250x250?girl-face" width="250" alt="jolyne">
              <h4 class="mt-4">Jolyne Kuujou</h4>
              <p class="text-muted">Network Maintainer</p>
          </div>
      </div>
      <div class="text-center mt-5 mb-5">
        <h6 class="text-muted text-uppercase">together we strong. we strong together</h6>
      </div>
</div>
</div>




<!-- Footer -->
<footer class="text-center text-lg-start bg-danger text-white mt-5">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->
  
      <!-- Right -->
      <div>
        <a href="" class="me-4 text-light text-decoration-none">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset text-decoration-none">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>ADITYA Blog
            </h6>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim veritatis eveniet laboriosam cupiditate facilis vitae labore quidem, sequi, quasi qui nam blanditiis atque?
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="" class="text-reset text-decoration-none">Angular</a>
            </p>
            <p>
              <a href="" class="text-reset text-decoration-none">React</a>
            </p>
            <p>
              <a href="" class="text-reset text-decoration-none">Vue</a>
            </p>
            <p>
              <a href="" class="text-reset text-decoration-none">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="" class="text-reset text-decoration-none">Pricing</a>
            </p>
            <p>
              <a href="" class="text-reset text-decoration-none">Settings</a>
            </p>
            <p>
              <a href="" class="text-reset text-decoration-none">Orders</a>
            </p>
            <p>
              <a href="" class="text-reset text-decoration-none">Help</a>
            </p>
          </div>
          <!-- Grid column -->
  
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Wonosari Regency, Indonesia</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              aditya@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 62 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 62 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  
    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2022 Copyright:
      <a class="text-reset fw-bold" href="#">ADITYA Blog</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>