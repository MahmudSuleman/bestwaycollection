<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon.png')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>BWC | @yield('title') </title>
</head>

<body>
<nav class="navbar navbar-expand-lg sticky-top nav-bar">
    <!-- site logo -->
    <a class="navbar-brand logo" href="/">
        <img src="{{asset('logo.jpg')}}" alt="site logo">
    </a>
    <button class="navbar-toggler toggle-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav nav-ul">
            <li class="nav-item active">
                <a class="nav-link nav-a" href="/">
                    <i class="fa fa-home"></i>
                    home
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-a" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-list"></i>
                    shop by category
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            <a class="dropdown-item sub-a" href="#">data category</a>
                            <a class="dropdown-item sub-a" href="#">data category</a>
                            <a class="dropdown-item sub-a" href="#">data category</a>



                </div>
            </li>
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link nav-a" href="--><?php //echo url_for('shop.php?search=clothes'); ?><!--">-->
            <!--                    <i class="fa fa-tshirt nav-fa"></i>-->
            <!--                    clothing-->
            <!--                </a>-->
            <!--            </li>-->
            <!--            <li class="nav-item">-->
            <!--                <a class="nav-link nav-a" href="--><?php //echo url_for('shop.php?search=shoes'); ?><!--">-->
            <!--                    <i class="fa fa-shoe-prints"></i>-->
            <!--                    shoes-->
            <!--                </a>-->
            <!--            </li>-->
            <li class="nav-item">
                <a class="nav-link nav-a" href="#">
                    <i class="fa fa-car"></i>
                    Pick And Drop Services
                </a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
<footer>
    <div class="container">
        <div class="row">

            <div class="col-md-3">

                <img src="img/logo.jpg" alt="">
                <p><span>address:</span> Kantamanto market, Accra, Ghana</p>
                <!--                <p><span>p.o.box:</span> 132, Tamale</p>-->

            </div>
            <div class="col-md-3 links">
                <h5>some link</h5>
                <p>privacy & policy</p>
                <p>terms & conditions</p>
                <p>return policy</p>
            </div>
            <div class="col-md-3 connect">
                <h5>learn more</h5>
                <p>about us</p>
                <p>
                    Bestwaycollection helps you find and purchase a wide selection of quality products direct from Local
                    market in Ghana. No matter where you are, get access to awesome features all from the comfort and
                    ease of our user friendly website .</p>
                <p>contact us</p>
                <p>
                    +233595530016</p>
                <p>affiliate</p>
            </div>
            <div class="col-md-3">
                <h5>connect with us</h5>
                <p>
                    <a href="https://www.facebook.com/Bestwaycollection-And-Delivery-Service-111859940673818/"><i
                            class="fab fa-facebook"></i>facebook</a>

                </p>
                <p>
                    <a href="https://instagram.com/best.waycollection?igshid=3mijyvkj7zkm"><i
                            class="fab fa-instagram"></i> instagram</a>

                </p>
                <!-- <p>
                    <i class="fab fa-twitter"></i>
                    twitter
                </p> -->
            </div>
        </div>
        <hr>
        <p>e-commerce site &copy; 2020. all rights reserved</p>
    </div>
</footer>




<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
</script>
<!-- js files -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<script src="js/main.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
</body>

</html>
