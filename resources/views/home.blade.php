<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sonsie+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">

    <style>
        #mainpage {
            background-color: #EEEEEE;
            color: #3C84AB;
        }

        .isitext {
            font-family: 'Belanosima', sans-serif;
        }

        .tamu {
            font-family: 'Fasthand', cursive;
        }

        .bride {
            font-family: 'Fasthand', cursive;
            text-align: center;
        }

        .brideawal {
            font-family: 'Sonsie One', cursive;
            text-align: center;

        }

        .badgenya {
            background-color: #eeeeee;
            background-image: url("https://www.transparenttextures.com/patterns/exclusive-paper.png");
            border-radius: 50% 50% 0 0;
        }

        @media (min-width:320px) {
            .day {
                width: 100%
            }
        }

        @media (min-width:481px) {
            .day {
                width: 100%
            }
        }

        @media (min-width:641px) {
            .day {
                width: 80%
            }
        }

        @media (min-width:961px) {
            .day {
                width: 60%
            }
        }

        @media (min-width:1025px) {
            .day {
                width: 40%
            }
        }

        @media (min-width:1281px) {
            .day {
                width: 30%
            }
        }














        /* .wrap {
            width: 960px;
            margin: 0 auto;
        } */

        .chrome-window {
            /* float: left; */
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            width: 80% !important;
            border-radius: 2px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, .15);
            padding: 55px 15px 15px;
            background: url('http://www.valeomarketing.com/wp-content/uploads/2013/12/chrome_top.png') top no-repeat white;
            background-size: 100%;
        }

        .chrome-window2 {
            margin-top: 10px;
            float: right;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: block;
            width: 60% !important;
            border-radius: 2px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, .15);
            padding: 35px 15px 15px;
            background: url('http://www.valeomarketing.com/wp-content/uploads/2013/12/chrome_top.png') top no-repeat white;
            background-size: 100%;
        }

        .chrome-window img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }

        .chrome-window2 img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
        }

        .mempelai {
            background-image: url("/images/bgbunga.png");
            background-repeat: no-repeat, repeat;
            background-color: #EEEEEE;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="bay">
        <nav class="navbar navbar-dark navbar-expand fixed-bottom" style="background-color:#2B3467">
            <ul class="navbar-nav nav-justified w-100">
                <li class="nav-item">
                    <a href="#mainpage" class="nav-link"><i class="bi bi-heart-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#tanggal" class="nav-link"><i class="bi bi-calendar-date"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#lokasi" class="nav-link"><i class="bi bi-geo-alt-fill"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#hadiah" class="nav-link"><i class="bi bi-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-list-check"></i></a>
                </li>
            </ul>
        </nav>









        <article class="container py-4 day" id="mainpage">
            <h2 class=" h2 tamu">dear {{$tamu}}</h2>
            <p class="isitext">Dengan memohon rahmat dan ridho Allah SWT, kami mengundang saudara untuk menghadiri acara spesial kami</p>
            <div class="badgenya">
                <br><br><br><br><br><br>
                <h6 class="brideawal">The Wedding of</h6>
                <!-- <br>
                <h2 class="brideawal">&</h2> -->
                <br>
                <h2 class="brideawal">Doi & Siti</h2>
                <br><br><br>
            </div>

        </article>
        <div class="container py-4 day mempelai" style="padding:0 75px;">
            <h2 class="bride">Nama Mempelai</h2>
            <center class="isitext">Putra dari Bp Namanya & Ibu Namanya</center><br>
            <h2 class="bride">&</h2>
            <h2 class="bride">Siti Maesaroh</h2>
            <center class="isitext">Putri dari Bp Namanya & Ibu Namanya</center><br>
        </div>



        <!-- <div class="container day biodata">



            <div class="wrap">
                <div class="chrome-window">
                    <img class="" src="https://people.com/thmb/n1jOYhG9LzuA7iCgt2rkMdi3Q6k=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():focal(999x0:1001x2):format(webp)/meghan-markle-linen-set-tout-2000-dff60684ed3f4ed790908dce55a77c38.jpg" alt="" />
                </div>
                <div class="chrome-window2">
                    <img class="" src="https://akcdn.detik.net.id/community/media/visual/2023/03/10/meghan-markle_43.jpeg?w=700&q=90" alt="" />
                </div>
                <p style="margin-top:10px"><b>Juli Prihatin</b><br>
                    Putri dari Bapak ________ dan Ibu ________. Lahir di Banyumas pada 1 Januari 2001</p>
            </div>




        </div> -->

















        <article class="container py-4 day" id="tanggal">
            <!-- <h1 class=" h1 tamu">Dear {{$tamu}}</h1> -->
            <img src="/images/batasatas.png" alt="" style="width:80%;display: block;margin-left: auto;margin-right: auto;"><br>
            <h6 class="brideawal" style="color:#2B3467">Waktu dan Tempat</h6><br>
            <p class="isitext">Besar harapan kami atas kehadian Bapak/Ibu/Saudara/ pada acara bahagia kami. Adapun acara pernikahan kami akan dilaksanakan pada:</p>
            <p class="isitext"><i class="bi bi-geo-alt-fill"></i> Desa wlahar, RT 000 RW 000, Wangon, Banyumas, Jawa Tengah</p>
            <p class="isitext"><i class="bi bi-calendar-heart"></i> Jumat, 30 Juni 2023</p>
            <p class="isitext"><i class="bi bi-clock"></i> 09:00 WIB</p>
            <img src="/images/batasbawah.png" alt="" style="width:80%;display: block;margin-left: auto;margin-right: auto;">
        </article>


        <article class="container py-4 day" id="lokasi" style="background-color:#2B3467">
            <h6 class="brideawal" style="color:#eeeeee">Peta Lokasi</h6><br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d1978.866452923331!2d109.07374699999995!3d-7.468167000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMjgnMDUuNCJTIDEwOcKwMDQnMjguMCJF!5e0!3m2!1sid!2sid!4v1687754060171!5m2!1sid!2sid" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <br><br>
            <center>
                <a href="https://goo.gl/maps/LD5nmR8bpU4PKZ2a6" style="background-color: #eeeeee;padding:10px 30px;color:black;text-decoration:none">Buka Maps</a>
            </center>


            <br>
        </article>

        <article class="container py-4 day" id="hadiah" style="background-color:#eeeeee">
            <h6 class="brideawal" style="color:#2B3467">Wedding Gift</h6><br>



            <br><br><br><br>
        </article>





    </div>
</body>

</html>