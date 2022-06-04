@extends('frontend.layouts.app')

@section('content')


    <div class="working-info">
        <div class="working-info-inner z3 _inner">
            <div class="working-times">
                <h4>Çalışma Saatleri</h4>
                <div class="day">
                    <span class="day-name">Pazartesi</span>
                    <span class="at-time">08.00 - 15.00 <a href="" class="take-meet"> <i
                                class="fa-solid fa-calendar-check"></i> Randevu Al </a></span>
                </div>
                <div class="day">
                    <span class="day-name">Pazartesi</span>
                    <span class="at-time">08.00 - 15.00 <a href="" class="take-meet"> <i
                                class="fa-solid fa-calendar-check"></i> Randevu Al </a></span>
                </div>
                <div class="day">
                    <span class="day-name">Pazartesi</span>
                    <span class="at-time">08.00 - 15.00 <a href="" class="take-meet"> <i
                                class="fa-solid fa-calendar-check"></i> Randevu Al </a></span>
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
                    <h1 class="title">Klinik Tedaviler</h1>
                    <p class="content">Tam teşekküllü ortopedi kliniziğimizde bir çok tedavi uygulanmaktadır</p>
                    <span>Tümünü Görüntüle  <i class="fa-solid fa-arrow-right"></i></span>
                </div>
            </a>
            <a href="" class="work-type">
                <div class="work-face">
                    <img src="frontend/assets/img/card_image.jpg" alt="card_image.jpg">
                </div>
                <div class="details">
                    <div class="icon"><i class="fa-solid fa-shield-virus"></i></div>
                    <h1 class="title">Cerrahi Tedaviler</h1>
                    <p class="content">Ortopedik cerrahi yöntemleriyle bir çok tedavi yöntemi uygulamaktayız</p>
                    <span>Tümünü Görüntüle  <i class="fa-solid fa-arrow-right"></i></span>
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
                    İlk, orta ve lise öğrenimimi Elazığ’da tamamladıktan sonra <b>Fırat Üniversitesi Tıp Fakültesi</b>‘ni
                    bitirdim. Daha sonra Tıpta Uzmanlık Sınavını kazanarak yine <b>Fırat Üniversitesi Tıp Fakültesi Deri
                        ve Zührevi Hastalıkları Anabilim Dalı</b>’nda uzmanlık eğitimime başladım.
                    Uzmanlık eğitimini tamamladıktan sonra sırasıyla <b>Elazığ Deri ve Zührevi Hastalıklar Hastanesi</b>
                    ve <b>Elazığ Devlet Hastanesi</b>’nde uzman doktor olarak çalıştım. Daha sonra <b>Özel Çağrı Tıp
                        Merkezi</b> ve <b>Elazığ Medikal Park Hastaneleri</b>'nde daha sonra ise kendi kliniğimi kurarak
                    çalışmaya devam ettim ve halen hastalarıma <b>kendi kliniğimde</b> hizmet vermeye devam etmekteyim.
                </p>
                <h2 class="drname">Op.Dr.Ömer Cihan Batur</h2>
                <span class="script-text">Ortopedi ve Travmotoloji</span>
            </div>
        </div>
    </div>

    <div class="commonDisases">
        <div class="container mt-5 mb-5">

                <h4 class="fs-1 text-center mt-4 mb-1">Sık Karşılaşılan Rahatsızlıklar</h4>

                <section id="wrapper">
                    <div class="content">
                        <!-- Tab links -->
                        <div class="tabs">
                            <button class="tablinks active" data-country="London"><p data-title="Kireçlenme">Kireçlenme</p></button>
                            <button class="tablinks" data-country="Paris"><p data-title="Bel Fıtığı">Bel Fıtığı</p></button>
                            <button class="tablinks" data-country="Barcelona"><p data-title="Kırık">Kırık</p></button>
                            <button class="tablinks" data-country="Madrid"><p data-title="Kemik Erimesi">Kemik Erimesi</p></button>
                        </div>

                        <!-- Tab content -->
                        <div class="wrapper_tabcontent">
                            <div id="London" class="tabcontent active">
                                <div class="row p-4">
                                    <div class="col-6">
                                        <h3>Kireçlenme</h3>

                                        <div class="prior mb-2">
                                            <p>
                                                <strong>
                                                    An arrhythmia is an abnormal heart rhythm. Some arrhythmias can cause problems with contractions of your heart chambers by not allowing the top chambers (atria) to squeeze correctly.

                                                </strong>
                                            </p>

                                        </div>

                                        <div class="seconder mb-4">
                                            <p>
                                                The choice will be based on the type of arrhythmia you have, how severe your symptoms are, and if you have other conditions such as diabetes, kidney failure, or heart failure. Your healthcare provider will discuss your treatment options with you.
                                            </p>
                                        </div>

                                        <div class="symptoms">
                                            <p class="mb-1">Usual Symptoms:</p>

                                            <ul>
                                                <li>Weakness</li>
                                                <li>Fainting</li>
                                                <li> Heart failure</li>

                                            </ul>
                                        </div>


                                    </div>
                                    <div class="col-6">
                                        <img class="img-fluid" src="https://cliniq.bold-themes.com/classic/wp-content/uploads/sites/3/2021/08/inner_image_01.jpg" alt="">
                                    </div>
                                </div>

                            </div>

                            <div id="Paris" class="tabcontent">
                                <h3>Bel Fıtığı</h3>
                                <p>Paris is in the Paris department of the Paris-Isle-of-France region The French historic, political and economic capital, with a population of only 2.5 million is located in the northern part of France. One of the most beautiful cities in the world. Home to historical monuments such as Notre Dame, the Eiffel tower (320m), Bastille, Louvre and many more. </p>
                            </div>

                            <div id="Barcelona" class="tabcontent">
                                <h3>Kırık</h3>
                                <p>Barcelona has been an urban laboratory since the high Medieval Ages. A place of diversity, a backdrop for a multiplicity of social and cultural processes on multiple scales that reflect different ways of constructing the future, a city with a long experience of urban life and social innovations. </p>
                            </div>

                            <div id="Madrid" class="tabcontent">
                                <h3>Kemik Erimesi</h3>
                                <p>Madrid is in the middle of Spain, in the Community of Madrid. The Community is a large area that includes the city as well as small towns and villages outside the city. 7 million people live in the Community. More than 3 million live in the city itself.
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

        </div>

    </div>

    <div class="services">
        <div class="services-inner _inner">

            <div class="service-type">
                <i class="fa-solid fa-laptop-medical"></i>
                <h7 class="service-title">Özel Ortopedi Kliniği</h7>
                <hr>
                <p class="service-description">Tüm insanı önemsiyoruz, her insanın hayatının karmaşıklığını görüyoruz ve geniş bir yelpazeye hitap etmenin gerektiğine inanıyoruz.</p>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                </ul>
            </div>
            <div class="service-type">
                <i class="fa-solid fa-brain"></i>
                <h7 class="service-title">Teknolojik Görüntüleme Hizmetleri</h7>
                <hr>
                <p class="service-description">Görüntüleme hizmetlerimiz, hastalarımız için kolaylık sağlar ve hızlı ve doğru teşhiste büyük önem taşır.</p>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                </ul>
            </div>



            <div class="service-type">
                <i class="fa-solid fa-house-medical"></i>
                <h7 class="service-title">Cerrahi Merkez</h7>
                <hr>
                <p class="service-description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Porro deserunt,
                    eius at beatae cum provident?</p>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                    <li><i class="fa-solid fa-circle-check"></i> Lorem, ipsum dolor.</li>
                </ul>
            </div>
        </div>
        <h6 class="_inner">Kliniğimizde Hastalarımıza Mümkün Olan En İyi Bakımı Sunmaktan Gurur Duyuyoruz</h6>
    </div>
    <script>
        // tabs

        var tabLinks = document.querySelectorAll(".tablinks");
        var tabContent = document.querySelectorAll(".tabcontent");


        tabLinks.forEach(function(el) {
            el.addEventListener("click", openTabs);
        });


        function openTabs(el) {
            var btnTarget = el.currentTarget;
            var country = btnTarget.dataset.country;

            tabContent.forEach(function(el) {
                el.classList.remove("active");
            });

            tabLinks.forEach(function(el) {
                el.classList.remove("active");
            });

            document.querySelector("#" + country).classList.add("active");

            btnTarget.classList.add("active");
        }

    </script>
@endsection
