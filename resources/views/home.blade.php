@extends('templates.layout')


@section('main')

<main>
    <article>

        <!--
          - #HERO
        -->

        <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
                 style="background-image: url('./assets/images/hero-bg.png')">
            <div class="container">

                <div class="hero-content">

                    <p class="hero-subtitle">
                        <strong class="strong">El mejor</strong>Fitness plus Entre Rios
                    </p>

                    <h1 class="h1 hero-title">Trabaja duro para una mejor vida.</h1>

                    <p class="section-text">
                        Con un equipo de entrenadores altamente capacitados, equipos de última tecnología y un ambiente motivador, te ayudamos a transformar tu vida física y mental. </p>

                    <a href="#" class="btn btn-primary">Comienza hoy</a>
                    <br>
                    <br>

                </div>

                <div class="hero-banner">




                    <img src="https://www.eatingwell.com/thmb/88kXg2QcY_xn2-qOOiIbH-B5W_I=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/What-Are-Calories-and-How-Many-Do-You-Need-2c7a044cb4d942d199f270239b02e9da.jpg" width="348" height="224" alt="calories" class="abs-img abs-img-2">

                </div>

            </div>
        </section>





        <!--
          - #ABOUT
        -->

        <section class="section about" id="about" aria-label="about">
            <div class="container">

                <div class="about-banner has-after">
                    <img src="https://emilypost.com/client_media/images/blogs/everyday-gym.jpg" width="660" height="648" loading="lazy" alt="about banner"
                         class="w-100">

                </div>

                <div class="about-content">

                    <p class="section-subtitle">Acerca de nosotros</p>

                    <h2 class="h2 section-title">Bienvenido a nuestra pagina</h2>

                    <p class="section-text">
                        Creemos que cada día es una nueva oportunidad para desafiarte y alcanzar tus metas. Nuestro gimnasio está diseñado para ofrecerte una experiencia única que va más allá de los entrenamientos convencionales
                    </p>


                    <br>

                    <a href="#" class="btn btn-primary">Explora mas</a>

                </div>

            </div>

            </div>
        </section>





        <!--
          - #VIDEO
        -->

        <section class="section video" aria-label="video">
            <div class="container">

                <div>
                    <img src="https://www.tanglinclub.org/images/Content/Facilities/Sports_Recreation/Gymnasium/gymnasium_banner.jpg" alt="">
                </div>


            </div>

            </div>
        </section>





        <!--
          - #CLASS
        -->

        <section class="section class bg-dark has-bg-image" id="class" aria-label="class"
                 style="background-image: url('./assets/images/classes-bg.png')">
            <div class="container">

                <p class="section-subtitle">Nuestros productos</p>

                <h2 class="h2 section-title text-center">Productos de Fitness plus Entre Rios</h2>

                <ul class="class-list has-scrollbar">
                    @foreach($items as $item)
                    <li class="scrollbar-item">
                        <div class="class-card">

                            <figure class="card-banner img-holder" style="--width: 416; --height: 240;">
                                <img src="images/{{$item->img}} " width="416" height="240" loading="lazy" alt="Weight Lifting"
                                     class="img-cover">

                            </figure>

                            <div class="card-content">

                                <div class="title-wrapper">


                                    <h3 class="h3">
                                        <a class="card-title">{{$item->nombre }}</a>
                                    </h3>
                                </div>




                                <div class="card-progress">

                                    <div class="progress-wrapper">
                                        <p class="card-title">{{$item->descripcion}}</p>

                                        <span class="progress-value">85%</span>
                                    </div>

                                    <div class="progress-bg">
                                        <div class="progress-bar" style="width: 85%"></div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </li>
                    @endforeach

                        <div class="col space">
                            <div class="card element" >

                                <div class="card-body">




                                </div>     </div> </div>  </div>
            </ul>
            </div>
        </section>










    </article>
</main>





@endsection
