@extends('layouts.master')
@section('title', ' Home')
@section('content')
    <div>
        <section class="slider_container">

            <div class="slider">

                <div id="slides" class="carousel slide" data-ride="carousel">
                    <ul class="carousel-indicators">
                        <li data-target="#slides" data-slide-to="0" class="active"></li>
                        <li data-target="#slides" data-slide-to="1"></li>
                        <li data-target="#slides" data-slide-to="2"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="slide_one"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="slide_two"></div>
                        </div>

                        <div class="carousel-item">
                            <div class="slide_three"></div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- featured cat -->
        <section class="featured-cat">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{asset('img/f5.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/f11.jpeg')}}" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('img/f4.jpeg')}}" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- new arrival products -->
        <!--do not display anything at all in the new arrival section if there are no products available.-->
        <section id="new_arrival">

            <div class="container">



                <div class="title-box">
                    <h2>new arrival</h2>
                </div>

                <div class="row">

                    <!-- col start first -->

                    <div class="col-md-4">
                        <img src="{{asset('img/2.jpeg')}}" alt="">

                        <div class="product-bottom text-center">
                            <h3>name</h3>
                            <h5>price</h5>
                            <a href="#" type="button">Request</a>
                        </div>
                    </div>

                <!-- col end -->

                </div>



            </div>

        </section>


    <!-- featured products -->
        <section id="featured_product">

            <div class="container">



                <div class="title-box">
                    <h2>featured product </h2>
                </div>

                <div class="row">

                    <!-- col start third-->

                    <div class="col-md-4">
                        <img src="{{asset('img/2.jpeg')}}" alt="">

                        <div class="product-bottom text-center">
                            <h3>name</h3>
                            <h5>GHC 200.00</h5>
                            <a href="#" type="button">request</a>
                        </div>
                    </div>

                <!-- col end -->
                </div>

            </div>
        </section>


    </div>

@endsection
