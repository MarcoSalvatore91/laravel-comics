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
                                <p>U.S. Price: <span>$19.99</span></p>
                                <p>AVAILABLE</p>
                            </div>
                            <div class="check-available">
                                <p>Check Availability</p>
                            </div>
                        </div>

                        <div>
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
    </main>



    @include("includes.footer")
</body>

</html>