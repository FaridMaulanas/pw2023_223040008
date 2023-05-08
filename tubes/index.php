<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Polosan.id</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">POLOSAN.ID</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#products">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
  <!-- carousel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/kaos oversize.png" class="d-block w-100" alt="oversize" />
        <div class="carousel-caption">
          <h5>POLOSAN.ID</h5>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint consectetur libero pariatur at tempora ratione quidem deserunt eum, magni non.
          </p>
          <p><a href="#products" class="btn btn-secondary mt-3">Shop Now</a></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carousel 2.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
      <div class="carousel-item">
        <img src="img/carousel 1.jpg" class="d-block w-100" alt="..." />
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- akhir carousel -->
  <!--about-->
  <section id="about" class="about section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
        </div>
      </div>
      <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
        <div class="about-text">
          <h2 data-aos="zoom-in-left" data-aos-duration="1000" style="color: #fff" class="text-secondary">POLOSAN.ID
          </h2>
          <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500" class="text-secondary">
            We are a clothing brand that is committed to presenting products with stylish designs, the best quality, and affordable prices. We believe that clothing is not just a functional item to cover the body, but also a part of one's identity and lifestyle.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir about -->
  <!--produk -->
  <section id="products" class="member section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section header text-center pb-5">
            <h2 data-aos="zoom-in" data-aos-duration="1000" class="text-secondary">
              Our Products
            </h2>
            <p data-aos="zoom-in-right" data-aos-duration="1000" class="text-secondary">
              Let us represent to you guys our products that you can buy
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/odsoversizedbasic-black1_600x.jpg" class="card-img-top" alt="forsaken" data-aos="fade-right" data-aos-duration="1000" />
            <div class="card-body">
              <h3 data-aos="fade-right" data-aos-duration="3000">Black Oversized Shirt</h3>
              <p class="card-text" data-aos="fade-right" data-aos-duration="3000">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit, odio laudantium animi magni itaque perferendis totam et soluta nisi fugiat, at architecto tempore aperiam reprehenderit blanditiis porro autem odit sed.
              </p>
              <button type="submit" class="btn btn-secondary">Buy Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/odsoversizedbasic-white1_600x.jpg" class="card-img-top" alt="Jinggg" data-aos="fade-up" data-aos-duration="1000" />
            <div class="card-body">
              <h3 data-aos="fade-up" data-aos-duration="3000">White Oversized Shirt</h3>
              <p class="card-text" data-aos="fade-up" data-aos-duration="3000">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A qui ullam aliquid voluptate eum nesciunt temporibus minima recusandae neque libero repellendus vel earum, aperiam dolores, eligendi, quae est unde corrupti!
              </p>
              <button type="submit" class="btn btn-secondary">Buy Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/odsoversizedbasic-darkgrey1_600x.jpg" class="card-img-top" alt="mindfreak" data-aos="fade-left" data-aos-duration="1000" />
            <div class="card-body">
              <h3 data-aos="fade-left" data-aos-duration="3000">Darkgrey Oversized Shirt</h3>
              <p class="card-text" data-aos="fade-left" data-aos-duration="3000">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat ullam voluptas, iste, mollitia assumenda magnam recusandae minus rerum tempore illo beatae quidem vitae totam, impedit asperiores ipsa libero facere molestiae?
              </p>
              <button type="submit" class="btn btn-secondary">Buy Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/jaket item.jpg" class="card-img-top" alt="benkai" data-aos="fade-right" data-aos-duration="3000" />
            <div class="card-body">
              <h3 data-aos="fade-right" data-aos-duration="3000">Black Oversized Hoodie</h3>
              <p class="card-text" data-aos="fade-right" data-aos-duration="3000">
                ESSENTIALS Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.
              </p>
              <button type="submit" class="btn btn-secondary">Buy Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/jaket putih.jpg" class="card-img-top" alt="cgrs" data-aos="fade-up" data-aos-duration="3000" />
            <div class="card-body">
              <h3 data-aos="fade-up" data-aos-duration="3000">White Oversized Hoodie</h3>
              <p class="card-text" data-aos="fade-up" data-aos-duration="3000">
                ESSENTIALS Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.
              </p>
              <button type="submit" class="btn btn-secondary">Buy Now</button>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="card">
            <img src="img/jaket beige.jpg" class="card-img-top" alt="d4v41" data-aos="fade-left" data-aos-duration="3000" />
            <div class="card-body">
              <h3 data-aos="fade-left" data-aos-duration="3000">Beige Oversized Hoodie</h3>
              <p class="card-text" data-aos="fade-left" data-aos-duration="3000">
                ESSENTIALS Hoodie in sweatshirt fabric made from a cotton blend. Relaxed fit with a jersey-lined, drawstring hood, a kangaroo pocket, long sleeves and wide ribbing at the cuffs and hem. Soft brushed inside.
              </p>

              <button type="submit" class="btn btn-secondary">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir produk -->
  <!-- contact -->
  <section id="contact">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <h2 class="text-secondary" data-aos="zoom-in" data-aos-duration="1500">
            Contact us
          </h2>
          <p class="text-secondary" data-aos="zoom-in-right" data-aos-duration="1500">
            For Partnership Purpose you can contact us
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label text-secondary">Full Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label text-secondary">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email" />
            </div>
            <div class="mb-3">
              <label for="message" class="form-label text-secondary">Message</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-secondary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <br /><br /><br /><br /><br /><br /><br /><br /><br />
  <!-- akhir Contact -->
  <!-- bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Akhir bootstrap -->
  <!-- aos -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>