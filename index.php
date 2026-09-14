<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SURYA HOTEL - HOME</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <?php require('inc/links.php'); ?>
    <style>
    .availabilty-form{
      margin-top: -50px;
      z-index: 2;
      position: relative;
    }

    @media screen and (max-width: 575px){
      .availabilty-form{
      margin-top: 25px;
      padding: 0 35px;
    } 
    }
  </style>
  </head>
  <body class="bg-light">

    <?php require('inc/header.php'); ?>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/1.png" class="w-100 d-block">
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/2.png" class="w-100 d-block">
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/3.png" class="w-100 d-block">
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/4.png" class="w-100 d-block">
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/5.png" class="w-100 d-block">
          </div>

          <div class="swiper-slide">
            <img src="images/carousel/6.png" class="w-100 d-block">
          </div>

        </div>
      </div>
    </div>

    <!-- Check availabilty form -->
    <div class="container availabilty-form">
      <div class="row">
        <div class="col-lg-12 bg-white shadow p-4 rounded">
          <h5 class="mb-4">Check Booking Availability</h5>
          <form>
            <div class="row align-items-end">
              <div class="col-lg-3 mb-3">
                <label class="form-label"
                  style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
              </div>

              <div class="col-lg-3 mb-3">
                <label class="form-label"
                  style="font-weight: 500;">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
              <div class="col-lg-3 mb-3">
                <label class="form-label"
                  style="font-weight: 500;">Adult</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-2 mb-3">
                <label class="form-label"
                  style="font-weight: 500;">Children</label>
                <select class="form-select shadow-none">
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col-lg-1 mb-lg-3 mt-2">
                <button type="submit"
                  class="btn text-white shadow-none custom-bg">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Our Rooms -->
    <h2 class="mt-5-pt mb-2 p-5 text-center fw-bold h-font">OUR ROOMS</h2>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 mt-1 col-md-6 my-3">
          <div class="card border-0 shadow"
            style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">rp.200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                <div class="facilities mt-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room heater
                  </span>
                </div>
                <div class="guests mt-3">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>

              <div class="d-flex justify-content-evenly mb-2">
                <a href="#"
                  class="btn btn-sm text-white custom-bg shadow-none">Book
                  Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More
                  Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-1 col-md-6 my-3">
          <div class="card border-0 shadow"
            style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">rp.200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                <div class="facilities mt-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room heater
                  </span>
                </div>
                <div class="guests mt-3">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>

              <div class="d-flex justify-content-evenly mb-2">
                <a href="#"
                  class="btn btn-sm text-white custom-bg shadow-none">Book
                  Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More
                  Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-1 col-md-6 my-3">
          <div class="card border-0 shadow"
            style="max-width: 350px; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">

            <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4">rp.200 per night</h6>
              <div class="features mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  3 Sofa
                </span>
                <div class="facilities mt-3">
                  <h6 class="mb-1">Facilities</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Wifi
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Television
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    AC
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    Room heater
                  </span>
                </div>

                <div class="guests mt-3">
                  <h6 class="mb-1">Guests</h6>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    5 Adults
                  </span>
                  <span class="badge rounded-pill bg-light text-dark text-wrap">
                    4 Children
                  </span>
                </div>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>

              <div class="d-flex justify-content-evenly mb-2">
                <a href="#"
                  class="btn btn-sm text-white custom-bg shadow-none">Book
                  Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More
                  Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12 text-center mt-5">
          <a href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More
            Rooms >>></a>
        </div>
      </div>
    </div>

    <!-- Our Facilities -->
    <h2 class="mt-5-pt mb-2 p-5 text-center fw-bold h-font">OUR FACILITIES</h2>

    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_43553.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_41622.svg" width="80px">
          <h5 class="mt-3">Television</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_47816.svg" width="80px">
          <h5 class="mt-3">MASSAGE</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_49949.svg" width="80px">
          <h5 class="mt-3">AC</h5>
        </div>
        <div
          class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
          <img src="images/facilities/IMG_96423.svg" width="80px">
          <h5 class="mt-3">TRANSPORTATION</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#"
            class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More
            Facilities >>></a>
        </div>
      </div>
    </div>

    <!-- Our Testimonials -->
    <h2 class="mt-5-pt mb-2 p-5 text-center fw-bold h-font">TESTIMONIALS</h2>

    <div class="container">
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-5">

          <div class="swiper-slide shadow bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/rating.svg" width="30px">
              <h6 class="m-0 ms-2">Random user 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              aspernatur dolor velit doloribus possimus! Obcaecati in vitae
              praesentium pariatur. Nesciunt!</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>

          <div class="swiper-slide shadow bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/rating.svg" width="30px">
              <h6 class="m-0 ms-2">Random user 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              aspernatur dolor velit doloribus possimus! Obcaecati in vitae
              praesentium pariatur. Nesciunt!</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>

          <div class="swiper-slide shadow bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/rating.svg" width="30px">
              <h6 class="m-0 ms-2">Random user 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              aspernatur dolor velit doloribus possimus! Obcaecati in vitae
              praesentium pariatur. Nesciunt!</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>

          <div class="swiper-slide shadow bg-white p-4">
            <div class="profile d-flex align-items-center mb-3">
              <img src="images/about/rating.svg" width="30px">
              <h6 class="m-0 ms-2">Random user 1</h6>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
              aspernatur dolor velit doloribus possimus! Obcaecati in vitae
              praesentium pariatur. Nesciunt!</p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div>
          </div>

        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <!-- Reach Us -->
    <h2 class="mt-5-pt mb-2 p-5 text-center fw-bold h-font">REACH US</h2>

    <div class="container">
      <div class="row shadow">
        <div class="col-lg-8 col-md-8 p-2 mb-lg-0 mb-2 bg-white rounded">
          <iframe class="w-100 rounded" height="370px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255314.40336477582!2d100.39126985!3d-0.9345836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b942e2b117bb%3A0xb8468cb5c3046ba5!2sPadang%2C%20Kota%20Padang%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1713241912025!5m2!1sid!2sid" loading="lazy"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4 shadow">
            <h5>Call Us</h5>
            <a href="tel: +6289527910471"
              class="d-inline-block mb-2 text-decoration-none text-dark"><i
                class="bi bi-telephone-fill me-1"></i> +6289527910471</a>
            <br>
            <a href="tel: +6289527910471"
              class="d-inline-block mb-2 text-decoration-none text-dark"><i
                class="bi bi-telephone-fill me-1"></i> +6289527910471</a>
          </div>
          <div class="bg-white p-4 rounded mb-4 shadow">
            <h5>Follow Us</h5>
            <a href="#"
              class="d-inline-block mb-3"><a href="https://twitter.com/Apa salah dan" target="_blank">
              <span class="badge bg-light text-dark fs-6 p-2"><i
                  class="bi bi-twitter-x me-1"></i> Twitter</span>
            </a>
            <br>
            <a href="#"
              class="d-inline-block mb-3"><a href="https://www.facebook.com/Starlet" target="_blank">
              <span class="badge bg-light text-dark fs-6 p-2"><i
                  class="bi bi-facebook me-1"></i> Facebook</span>
            </a>
            <br>
            <a href="#"
              class="d-inline-block"><a href="https://www.instagram.com/rai_han1007/" target="_blank">
              <span class="badge bg-light text-dark fs-6 p-2"><i
                  class="bi bi-instagram me-1"></i> Instagram</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->

    <?php require('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });

    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>
  </body>

</html>