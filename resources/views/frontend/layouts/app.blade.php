
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/js/bootstrap.min.js')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/js/popper.min.js')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @yield('style')
    </style>
</head>
<body>
<div class="header">
    <nav>
        <div class="nav-div" id="nav-left">
            <span id="logo">Ömer C. Batur</span>
        </div>
        <div class="nav-div" id="nav-right">
            <ul>
                <li class="nav-right-links"><a href="">Ana Sayfa</a></li>
                <li class="nav-right-links"><a href="">Hakkımda</a></li>
                <li class="nav-right-links"><a href="">Uygulamalar</a></li>
                <li class="nav-right-links"><a href="">BİLGİ KÖŞESİ</a></li>
                <li class="nav-right-links"><a href="">Blog</a></li>
                <li class="nav-right-links"><a href="">İLETİŞİM</a></li>
                <li class="nav-right-links mx-0"><a href="" class="search"><img src="{{asset('frontend/assets/img/search.png')}}" alt="search.png"></a></li>
                <li class="nav-right-links"><a href="" class="date-button"> <img src="{{asset('frontend/assets/img/calendar-4.svg')}}" alt="calendar-4.svg"> Randevu Al</a></li>
            </ul>
        </div>
    </nav>

    <div class="header-content-slider mx-auto">
        <div class="text-area">
                <span class="title">
                    Op. Dr.
                </span>
            <h1 class="name">
                Ömer Cihan BATUR
            </h1>
        </div>
        <div class="header-cards">
            <a href="" class="card1 card-standart">
                <div>
                    <h2>Lorem Ipsum Doları</h2>
                    <div class="icon-border">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <i class="fa-solid fa-heart-circle-bolt"></i>
            </a>
            <a href="" class="card2 card-standart">
                <div>
                    <h2>Lorem Ipsum Doları</h2>
                    <div class="icon-border">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <i class="fa-solid fa-calendar-check"></i>
            </a>
            <a href="" class="card3 card-standart">
                <div>
                    <h2>Randevu Al</h2>
                    <div class="icon-border">
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <span>Sağlık Parkı</span>
                        <span>424</span>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="footer-inner">
        <div class="footer-top">
            <div>
                <a href="" class="drname-logo">Ömer C. Batur</a>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo, ducimus.</p>
            </div>
            <div>
                <h7 class="title">Hizmetler</h7>
                <p>Lorem, ipsum.</p>
                <p>Lorem, ipsum.</p>
                <p>Lorem, ipsum.</p>
                <p>Lorem, ipsum.</p>
                <p>Lorem, ipsum.</p>
            </div>
            <div>
                <h7 class="title">Fiyatlar</h7>
                <p>400 &#8378</p>
                <p>400 &#8378</p>
                <p>400 &#8378</p>
                <p>400 &#8378</p>
                <p>400 &#8378</p>
            </div>
            <div>
                <h7 class="title">İletişim</h7>
                <div class="socialbtns">
                    <ul>
                        <li><a href="#" class="fab fa-linkedin-in"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                    </ul>
                </div>
                <div class="extra">
                    <a target="_blank" href="tel:05399157309"><i class="fa-solid fa-phone"></i> +90 539 915 73 09</a>
                    <a target="_blank" href="mailto:x@gmail.com"><i class="fa-solid fa-envelope"></i> x@gmail.com</i></a>
                    <a target="_blank" href="https://www.google.com/maps/place/El%C3%A2z%C4%B1%C4%9F,+El%C3%A2z%C4%B1%C4%9F+Merkez%2FElaz%C4%B1%C4%9F/@38.6646596,39.198152,13z/data=!3m1!4b1!4m5!3m4!1s0x4076c06c76eaf697:0x12dab4118a3d2f39!8m2!3d38.674816!4d39.222515"><i class="fa-solid fa-location-dot"></i> Merkez / Elazığ</i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="foter-bottom">
            &#169;2022 <a target="_blank" href="">BJA SOFT</a>. Tüm Hakları Saklıdır.
        </div>
    </div>
</div>
</body>

<script>
    window.addEventListener("scroll",function(){
        var navbar = this.document.querySelector("nav");
        navbar.classList.toggle("sticky-nav", window.scrollY > 200);
    })
</script>
</html>
