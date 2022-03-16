<?php

$links = config('commerce');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include("includes.header")

    <main>



        <section class="comic">

            <div class="bg-blue">
                <img src="{{ $comic['thumb'] }}" alt="">
            </div>

            <div class="small-container">
                <div class="info-comic">

                    <!-- Slider -->
                    <div class="left">
                        <a href="{{ route('comic', ['id' => $prev]) }}">
                            <i class="fa-solid fa-angle-left fa-4x"></i>
                        </a>
                    </div>

                    <div class="right">
                        <a href="{{ route('comic', ['id' => $next]) }}">
                            <i class="fa-solid fa-angle-right fa-4x"></i>
                        </a>
                    </div>

                    <div>
                        <h1>{{ $comic['title'] }}</h1>

                        <div class="available">
                            <div class="price">
                                <p class="grey">U.S. Price: <span class="white">{{ $comic['price'] }}</span></p>
                                <p class="grey">AVAILABLE</p>
                            </div>
                            <div class="check-available">
                                <p class="white">Check Availability</p>
                            </div>
                        </div>

                        <div class="text-comic">
                            <p>{{ $comic['description'] }}</p>
                        </div>
                    </div>

                    <div class="adv">
                        <h3>ADVERTISMENT</h3>
                        <img src="{{ asset('images/adv.jpg') }}" alt="">
                    </div>
                </div>

            </div>
        </section>

        <div class="bg-grey">

            <section class="authors small-container">
                <div class="flex-bas">
                    <h1>Talent</h1>
                    <div class="art">
                        <div class="title">
                            <h4>Art By:</h4>
                        </div>

                        <div>
                            @foreach($comic['artists'] as $artist)
                            <p class="blue inline">{{ $artist }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="written">
                        <div class="title">
                            <h4>Written By:</h4>
                        </div>

                        <div>
                            @foreach($comic['writers'] as $writer)
                            <p class="blue inline">{{ $writer }}</p>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="flex-bas">
                    <h1>Specs</h1>
                    <div class="specs">
                        <div class="title-specs">
                            <h4>Series:</h4>
                        </div>

                        <div>
                            <p class="blue">{{ $comic['series'] }}</p>
                        </div>
                    </div>
                    <div class="specs">
                        <div class="title-specs">
                            <h4>U.S. Price:</h4>
                        </div>

                        <div>
                            <p>{{ $comic['price'] }}</p>
                        </div>
                    </div>

                    <div class="specs">
                        <div class="title-specs">
                            <h4>On Sale Date:</h4>
                        </div>

                        <div>
                            <p>{{ $comic['sale_date'] }}</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="e-commerce">
                <div class="shop small-container">
                    <div class="commerce-item">
                        <span>DIGITAL COMICS</span>
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="digital-comics">
                    </div>
                    <div class="commerce-item">
                        <span>SHOP DC</span>
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="merchandise">
                    </div>
                    <div class="commerce-item">
                        <span>COMIC SHOP LOCATOR</span>
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="locator">
                    </div>
                    <div class="commerce-item">
                        <span>SUBSCRIPITIONS</span>
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="subscriptions">
                    </div>
                </div>
            </section>
        </div>
    </main>



    @include("includes.footer")
</body>

</html>