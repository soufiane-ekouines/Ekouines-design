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
                <li> <a href="#gallery"> Project </a> </li>
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
    <h2 class="main-title">Article</h2>
    <div class="container">
        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur</p>
            </div>
            <div class="info">
                <a href="#">Read more</a>
            </div>
        </div>

        <div class="box">
            <img src="{{asset('image/cat-01.jpg')}}" alt="">
            <div class="content">
                <h3 class="title">soon article</h3>
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
        <h2 class="main-title">Project</h2>
        <div class="container">
            <div class="box">
                <div class="image">
                    <img src="{{asset('image/G1.jpg')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/G2.jpg')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/G3.jpg')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/G4.jpg')}}" alt="">
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="{{asset('image/G3.jpg')}}" alt="">
                </div>
            </div>

                       <div class="box">
                <div class="image">
                    <img src="{{asset('image/G1.jpg')}}" alt="">
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
                <P>Hire our Quality Assurance (QA) experts who automatically test the functionality of web applications </P>
                <a href="#">More</a>
            </div>
        </div>

        <div class="box time">
            <div class="image">
                <img src="{{asset('image/features-02.jpg')}}" alt="">
            </div>
            <div class="content">
                <h1>Time</h1>
                <P>“Fully satisfied with the quick response time, in-house knowledge, communication.”
                </P>
                <a href="#">More</a>
            </div>
        </div>

        <div class="box passion">
            <div class="image">
                <img src="{{asset('image/features-03.jpg')}}" alt="">
            </div>
            <div class="content">
                <h1>Passion</h1>
                <P>We've helped businesses increase their revenue on an average by 90% in their first year with us!</P>
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
            <h3>shared growth</h3>
            <span class="title">Canada</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                 if you want someone who will work with you to create your perfect masterpiece. described in 3 words. Hardworking. Talented. Patient
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>omar kidir</h3>
            <span class="title">United Kingdom</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p title="Very happy with this sellers work. There were some issues to solve after the order was completed and he continued working with me until everything was correct.">
                Very happy with this sellers work. There were some issues to solve after the order was completed...
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Mouhamed kamal</h3>
            <span class="title">Hong Kong</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
            </div>
            <p>
                Very good, always adjusting a lot as we asked. Excellent job!
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>smail kozan</h3>
            <span class="title">Italy</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>
                it's fantastic, very Easy to speak with Ekomsite. a perfect job as I requested
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>amir colam</h3>
            <span class="title">Sri Lanka</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
            </div>
            <p>
                Great developers, excellent communication. Fast reply. I highly recommend
            </p>
        </div>

        <div class="box">
            <img src="{{asset('image/avatar-01.png')}}" alt="">
            <h3>Jahn willy</h3>
            <span class="title">United States</span>
            <div class="rate">
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="filled fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p title="  He was a pleasure to work with! We had a tight deadline and he translated our wireframes and flow into a proof of concept site which was really amazing.">
                He was a pleasure to work with! We had a tight deadline and he translated our wireframes and...
            </p>
        </div>
    </div>
</div>
    {{-- End TESTIMONIALS --}}

    {{-- start TEAM MEMBERS --}}
    <div class="teams">
    <h2 class="main-title">TEAM MEMBERS</h2>
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
                    <h3>Soufiane ekouines</h3>
                    <p>Full stack devloper</p>
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
                    <h3>omar alamrani</h3>
                    <p>Full stack devloper</p>
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
                    <h3>Mouhamed ashor</h3>
                    <p>Full stack devloper</p>
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
                    <h3>amin almardi</h3>
                    <p>Full stack devloper</p>
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
                    <h3>john willy</h3>
                    <p>Full stack devloper</p>
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
                    <h3>amina lmardia</h3>
                    <p>Full stack devloper</p>
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
                    <h3>souhail carmi</h3>
                    <p>Full stack devloper</p>
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
                    <h3>mourad boughida</h3>
                    <p>Full stack devloper</p>
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
        <h2 class="title">Tech Masters Event 2022</h2>
        <p class="description">
            To live life within boundaries, to limit your existence by fearing the unexpected, to make choices based on needs and not wants, that is humanity’s biggest failure.
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
