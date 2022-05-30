@extends('frontend.layouts.app')

@section('content')
    
<div class="working-info">
    <div class="working-info-inner z3 _inner">
        <div class="working-times">
            <h4>Çalışma Saatleri</h4>
            <div class="day">
                <span class="day-name">Pazartesi</span>
                <span class="at-time">08.00 - 15.00 <a href="" class="take-meet"> <i class="fa-solid fa-calendar-check"></i> Randevu Al </a></span>
            </div>
            <div class="day">
                <span class="day-name">Pazartesi</span>
                <span class="at-time">08.00 - 15.00 <a href="" class="take-meet"> <i class="fa-solid fa-calendar-check"></i> Randevu Al </a></span>
            </div>
            <div class="day">
                <span class="day-name">Pazartesi</span>
                <span class="at-time">08.00 - 15.00 <a href="" class="take-meet"> <i class="fa-solid fa-calendar-check"></i> Randevu Al </a></span>
            </div>
            <div class="day">
                <span class="day-name">Pazartesi</span>
                <span class="at-time">İzinli</span>
            </div>
            <div class="day">
                <span class="day-name">Pazartesi</span>
                <span class="at-time">İzinli</span>
            </div>
        </div>

        <a href="" class="work-type ">
            <div class="work-face">
                <img src="frontend/assets/img/card_image.jpg" alt="card_image.jpg">
            </div>
            <div class="details">
                <div class="icon"><i class="fa-solid fa-shield-virus"></i></div>
                <h1 class="title">Lorem, ipsum dolor.</h1>
                <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum et mollitia eius expedita eum?</p>
                <span>Detaylar  <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </a>
        <a href="" class="work-type">
            <div class="work-face">
                <img src="frontend/assets/img/card_image.jpg" alt="card_image.jpg">
            </div>
            <div class="details">
                <div class="icon"><i class="fa-solid fa-shield-virus"></i></div>
                <h1 class="title">Lorem, ipsum dolor.</h1>
                <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum et mollitia eius expedita eum?</p>
                <span>Detaylar  <i class="fa-solid fa-arrow-right"></i></span>
            </div>
        </a>
    </div>
</div>

<div class="homeAboutMe">
    <div class="homeAboutMeInner _inner">
        <div id="homeAboutMePic">
            <img src="frontend/assets/img/O.png" alt="">
        </div>
        <div id="homeAboutMeRight">
            <img class="tag" src="frontend/assets/img/tag.png" alt="tag.png">
            <p>
                İlk, orta ve lise öğrenimimi Elazığ’da tamamladıktan sonra <b>Fırat Üniversitesi Tıp Fakültesi</b>‘ni bitirdim. Daha sonra Tıpta Uzmanlık Sınavını kazanarak yine <b>Fırat Üniversitesi Tıp Fakültesi Deri ve Zührevi Hastalıkları Anabilim Dalı</b>’nda uzmanlık eğitimime başladım.
                Uzmanlık eğitimini tamamladıktan sonra sırasıyla <b>Elazığ Deri ve Zührevi Hastalıklar Hastanesi</b> ve <b>Elazığ Devlet Hastanesi</b>’nde uzman doktor olarak çalıştım. Daha sonra <b>Özel Çağrı Tıp Merkezi</b> ve <b>Elazığ Medikal Park Hastaneleri</b>'nde daha sonra ise kendi kliniğimi kurarak çalışmaya devam ettim ve halen hastalarıma <b>kendi kliniğimde</b> hizmet vermeye devam etmekteyim.
            </p>
            <h2 class="drname">Op.Dr.Ömer Cihan Batur</h2>
            <span class="script-text">Ortopedi ve Travmotoloji</span>
        </div>
    </div>
</div>


<div class="services">
    <div class="services-inner _inner">
        <div class="service-type">
            <i class="fa-solid fa-brain"></i>
            <h7 class="service-title">Lorem ipsum dolor sit amet.</h7>
            <hr>
            <p class="service-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro deserunt, eius at beatae cum provident?</p>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
            </ul>
        </div>

        <div class="service-type">
            <i class="fa-solid fa-laptop-medical"></i>
            <h7 class="service-title">Lorem ipsum dolor sit amet.</h7>
            <hr>
            <p class="service-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro deserunt, eius at beatae cum provident?</p>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
            </ul>
        </div>

        <div class="service-type">
            <i class="fa-solid fa-house-medical"></i>
            <h7 class="service-title">Lorem ipsum dolor sit amet.</h7>
            <hr>
            <p class="service-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro deserunt, eius at beatae cum provident?</p>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
            </ul>
        </div>
    </div>
    <h6 class="_inner">Kliniğimizde Hastalarımıza Mümkün Olan En İyi Bakımı Sunmaktan Gurur Duyuyoruz</h6>
</div>

@endsection
