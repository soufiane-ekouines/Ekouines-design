<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <title>Ekomsite</title>
</head>
<body>
    <!-- start header  -->
    <div class="header">
        <!-- start container  -->
        <div class="container">
                <a href="#" class="logo">
                    Ekomsite
                </a>
            <ul class="Links">
                <li> <a href="#article"> Articles </a> </li>
                <li> <a href="#gallery"> Gallery </a> </li>
                <li> <a href="#features"> Features </a> </li>
                <li>

                    <a class="O-links" href="#"> more skills </a>
                    <div class="mega-menu">
                        <div class="image">
                            <img src="{{asset('image/megamenu.png')}}" alt="">
                        </div>
                        <ul class="link">
                            <li><a href="#">PHP</a></li>
                            <li><a href="#">C#</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">UML</a></li>
                        </ul>
                        <ul class="link">
                            <li><a href="#">LARAVEL</a></li>
                            <li><a href="#">ADO.net</a></li>
                            <li><a href="#">bootstrap</a></li>
                            <li><a href="#">Merise</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- End container  -->
    </div>
    <!-- End header  -->

    <!-- start landing -->

    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome, To Ekomsite World</h1>
                <p>
                    We deliver web and mobile app development services to global businesses , with 100% project delivery success.
                </p>
            </div>
            <div class="image">
                <img src="{{asset('image/landing-image.png')}}" alt="">
            </div>
        </div>
        <!-- <a href="#articles" class="go-down"></a> -->
    </div>
    <!-- end landing  -->

    <!-- start article  -->
<div class="article" id="article">
    <h2 class="main-title">Articles</h2>
    <div class="container">
        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">Test title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>
    </div>
</div>

    <!-- End article  -->

    <!-- start gallery  -->
    <div class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('image/gallery-01.png')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/gallery-01.png')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/gallery-01.png')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/gallery-01.png')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/gallery-01.png')}}" alt="">
                </div>
            </div>

                       <div class="box">
                <div class="image">
                    <img src="{{asset('image/gallery-01.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- End gallery  -->

    <!-- start features -->
<div class="features" id="features">
    <h2 class="main-title">FEATURES</h2>
    <div class="container">
        <div class="box quality">
            <div class="image">
                <img src="{{asset('image/features-01.jpg')}}" alt="">
            </div>
            <div class="content">
                <h1>Quality</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sapiente provident</P>
                <a href="#">More</a>
            </div>
        </div>

        <div class="box time">
            <div class="image">
                <img src="{{asset('image/features-02.jpg')}}" alt="">
            </div>
            <div class="content">
                <h1>Time</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sapiente provident</P>
                <a href="#">More</a>
            </div>
        </div>

        <div class="box passion">
            <div class="image">
                <img src="{{asset('image/features-03.jpg')}}" alt="">
            </div>
            <div class="content">
                <h1>Passion</h1>
                <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero sapiente provident</P>
                <a href="#">More</a>
            </div>
        </div>
    </div>
</div>

    <!-- End features  -->
    {{-- start TESTIMONIALS --}}

<div class="Testimonials" id="Testimonials">
    <h2 class="main-title">TESTIMONIALS</h2>
    <div class="container">
        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Soufiane ekouines</h3>
            <span class="title">Full stack devloper</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Soufiane ekouines</h3>
            <span class="title">Full stack devloper</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Soufiane ekouines</h3>
            <span class="title">Full stack devloper</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Soufiane ekouines</h3>
            <span class="title">Full stack devloper</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Soufiane ekouines</h3>
            <span class="title">Full stack devloper</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Soufiane ekouines</h3>
            <span class="title">Full stack devloper</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus
            </p>
        </div>
    </div>
</div>
    {{-- End TESTIMONIALS --}}

    {{-- start TEAM MEMBERS --}}
    <div class="teams">
    <h2 class="main-title">TESTIMONIALS</h2>
        <div class="container">
            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                  </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>

            </div>

            <div class="box">
                <div class="content">
                <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                  </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>

            </div>

            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                  </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>

            </div>

            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                  </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>

            </div>

            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                  </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>

            </div>

            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                  </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>

            </div>

            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>

                    </div>

                </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>

            <div class="box">
                <div class="content">
                    <img src="{{asset('image/team-01.jpg')}}" alt="">

                     <div class="social">
                        <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                        <a href="#"> <i class="fab fa-twitter"></i> </a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                        <a href="#"> <i class="fab fa-youtube"></i> </a>
                    </div>
                   </div>
                <div class="info">
                    <h3>Name</h3>
                    <p>Simple Short Description</p>
                </div>
            </div>
        </div>
    </div>
    {{-- End TEAM MEMBERS --}}

    {{-- Start services --}}
    <div class="services" id="services">
        <h2 class="main-title">Services</h2>
        <div class="container">
          <div class="box">
            <i class="fas fa-laptop-code fa-4x"></i>
            <h3>Web Development</h3>
            <div class="info">
              <a href="#">Details</a>
            </div>
          </div>
          <div class="box">
            <i class="fas fa-palette fa-4x"></i>
            <h3>UI/UX Design</h3>
            <div class="info">
              <a href="#">Details</a>
            </div>
          </div>
          <div class="box">
            <i class="fas fa-map-marked-alt fa-4x"></i>
            <h3>AI / ML</h3>
            <div class="info">
              <a href="#">Details</a>
            </div>
          </div>
          <div class="box">
            <i class="fa-solid fa-mobile-screen-button fa-4x"></i>
            <h3>Mobile Apps</h3>
            <div class="info">
              <a href="#">Details</a>
            </div>
          </div>
          <div class="box">
            <i class="fas fa-bullhorn fa-4x"></i>
            <h3>Online Courses</h3>
            <div class="info">
              <a href="#">Design</a>
            </div>
          </div>
          <div class="box">
            <i class="fa-solid fa-chess-board fa-4x"></i>
            <h3>Gaming</h3>
            <div class="info">
              <a href="#">Details</a>
            </div>
          </div>
        </div>
      </div>

    {{-- End servises --}}

    {{-- start  HOW IT WORKS ? --}}
      <div class="work" id="work">
    <h2 class="main-title">TESTIMONIALS</h2>
          <div class="container">
                  <img src="{{ asset('image/work-steps.png') }}" alt="" class="image">
              <div class="info">
                  <div class="box">
                    <i class="fa-solid fa-chart-pie"></i>
                      <div class="text">
                          <h3>Discover</h3>
                          <p> We shape brands through exploration, applying in-depth research to challenge assumptions at every turn.</p>
                      </div>
                  </div>
                  <div class="box">
                    <i class="fa-solid fa-sitemap"></i>
                      <div class="text">
                          <h3>Design</h3>
                          <p> Our design approach is to simplify. We embrace the joy in creating something unique that is easy for end users.</p>
                      </div>
                  </div>
                  <div class="box">
                    <i class="fa-solid fa-file-code"></i>
                      <div class="text">
                          <h3>Build</h3>
                          <p> Using modern technologies, we build with efficiency and skill, creating flexible and scalable business-driven solutions.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    {{-- end HOW IT WORKS ? --}}

    {{-- start event --}}
  <!-- Start Events -->
  <div class="events" id="events">
    <div class="dots dots-up"></div>
    <div class="dots dots-down"></div>
    <h2 class="main-title">Latest Events</h2>
    <div class="container">
      <img src="image/events.png" alt="" />
      <div class="info">
        <div class="time">
          <div class="unit">
            <span>15</span>
            <span>Days</span>
          </div>
          <div class="unit">
            <span>08</span>
            <span>Hours</span>
          </div>
          <div class="unit">
            <span>45</span>
            <span>Minutes</span>
          </div>
          <div class="unit">
            <span>55</span>
            <span>Seconds</span>
          </div>
        </div>
        <h2 class="title">Tech Masters Event 2021</h2>
        <p class="description">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut adipisci quam
          ratione aliquam excepturi nulla in harum, veritatis porro
        </p>
      </div>
      <div class="subscribe">
        <form action="">
          <input type="email" placeholder="Enter Your Email" />
          <input type="submit" value="Subscribe" />
        </form>
      </div>
    </div>
  </div>
  <!-- End Events -->
    {{-- End event --}}
</body>
</html>
