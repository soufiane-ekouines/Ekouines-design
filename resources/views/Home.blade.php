<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <title>Ekouines</title>
</head>
<body>
    <!-- start header  -->
    <div class="header">
        <!-- start container  -->
        <div class="container">
                <a href="#" class="logo">
                    Ekouines
                </a>
            <ul class="Links">
                <li> <a href="#articles"> Articles </a> </li>
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
                <h1>Welcome, To Ekouines World</h1>
                <p>
                    Here Iam gonna share everything about my life. Books Iam reading, Games Iam Playing, Stories and Events
                </p>
            </div>
            <div class="image">
                <img src="{{asset('image/landing-image.png')}}" alt="">
            </div>
        </div>
        <!-- <a href="#articles" class="go-down"></a> -->
    </div>
    <!-- end landing  -->
</body>
</html>
