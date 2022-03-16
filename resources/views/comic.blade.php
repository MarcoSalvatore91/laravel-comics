<?php

$links = config('commerce');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include("includes.header")

    <main>
        <section class="comic">
            <div class="bg-blue">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
            </div>

            <div class="small-container">
                <div class="info-comic">
                    <div>
                        <h1>Action Comics #1000: The Deluxe Edition</h1>

                        <div class="available">
                            <div class="price">
                                <p class="grey">U.S. Price: <span class="white">$19.99</span></p>
                                <p class="grey">AVAILABLE</p>
                            </div>
                            <div class="check-available">
                                <p class="white">Check Availability</p>
                            </div>
                        </div>

                        <div class="text-comic">
                            <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
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
                            <p class="blue">José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</p>
                        </div>
                    </div>
                    <div class="written">
                        <div class="title">
                            <h4>Written By:</h4>
                        </div>

                        <div>
                            <p class="blue">José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee</p>
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
                            <p class="blue">ACTION COMICS</p>
                        </div>
                    </div>
                    <div class="specs">
                        <div class="title-specs">
                            <h4>U.S. Price:</h4>
                        </div>

                        <div>
                            <p>$19.99</p>
                        </div>
                    </div>

                    <div class="specs">
                        <div class="title-specs">
                            <h4>On Sale Date:</h4>
                        </div>

                        <div>
                            <p>Oct 02 2018</p>
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