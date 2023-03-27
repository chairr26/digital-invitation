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
    <style>
        #mainpage {
            background-color: #EEEEEE;
            color: #3C84AB;
        }

        .tamu {
            font-family: 'Fasthand', cursive;
        }

        .bride {
            font-family: 'Fasthand', cursive;
            text-align: center;
        }

        .badgenya {
            background-color: #eeeeee;
            background-image: url("https://www.transparenttextures.com/patterns/exclusive-paper.png");
            border-radius: 50% 50% 0 0;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark navbar-expand fixed-bottom" style="background-color:#2B3467">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="#mainpage" class="nav-link"><i class="bi bi-heart-fill"></i></a>
            </li>
            <li class="nav-item">
                <a href="#tanggal" class="nav-link"><i class="bi bi-calendar-date"></i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-geo-alt-fill"></i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-envelope"></i></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="bi bi-list-check"></i></a>
            </li>
        </ul>
    </nav>









    <article class="container py-5" id="mainpage">
        <h2 class=" h2 tamu">Dear {{$tamu}}</h2>
        <p>Dengan memohon rahmat dan ridho Allah SWT, kami mengundang saudara untuk menghadiri pernikahan kami</p>
        <div class="badgenya">
            <br><br><br><br>
            <h2 class="bride">Juli Prihatin</h2>
            <br>
            <h2 class="bride">&</h2>
            <br>
            <h2 class="bride">Ga Tau Namanya</h2>
            <br>
        </div>
    </article>
    <article class="container py-5" id="tanggal">
        <h1 class=" h1 tamu">Dear {{$tamu}}</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum exercitationem alias libero mollitia esse, illum odio ex perspiciatis omnis voluptate ducimus, corporis cupiditate</p>
    </article>







</body>

</html>