@extends('layouts.front')

@section('title')
    {{ __("titles.about_us") }}
@endsection

@section('content')
    <div class="hero-wrap" style="background-image: url('/front/images/home/Education_10000.jpg');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>

        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-3 bread"
                        data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        {{ __('titles.about_us') }}
                    </h1>
                </div>
            </div>
        </div>
    </div>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex ftco-animate">
    				<div class="img img-about align-self-stretch" style="background-image: url(/front/images/father.jpg); width: 100%;"></div>
    			</div>
                <div class="col-md-6 pl-md-5 ftco-animate">
    				<h2 class="mb-4">Bienvenue au VillaepymeeCameroun</h2>
    				<p>
                        La Fondation VillagepygmeeCameroun est honorée de vous inviter
                        à participer au Programme en vue de la scolarisation, de la
                        réhabilitation à la citoyenneté, de l'approche du genre,
                        de l’accès à l'eau potable, à l'électricité, et aux soins
                        primaires des Peuples Autochtones du Département de l’OCEAN
                        en l’occurrence, les Pygmées Bagyéli.
                        En effet le Cameroun fait partie des 193 pays ayant adopté les
                        Objectifs de Développement Durable (ODD) en septembre 2015.
                        Ces Objectifs qui constituent un programme ambitieux destiné
                        à éradiquer la pauvreté dans la planète, sont en phase avec
                        la stratégie de développement du Cameroun telle que déclinée
                        dans le Document de Stratégie pour la Croissance et l’Emploi (DSCE).
                    </p>

    				<p>
                        Leur intégration dans le nouvel environnement socio-économique
                        du Cameroun va de pair avec la mise en place de diverses actions
                        d’accompagnement dédiées dont, notamment la scolarisation,
                        la réhabilitation à la citoyenneté, l'approche du genre,
                        de l’accès à l'eau potable, à l'électricité, et aux soins
                        primaires des Peuples.
                    </p>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-intro ftco-intro-2" id="section-counter">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-1 align-items-stretch">
             <div class="text">
                <span>Taux de Morbiter</span>
                <strong class="number" data-number="37">0</strong>
                <span>L'aggravation des maladies</span>
              </div> 
            </div>
          </div>
          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-2 align-items-stretch">
              <div class="text">
                <span>Taux d'alphabétisation</span>
                <strong class="number" data-number="7">0</strong>
                <span>Le manque de scolarisation</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 color-3 align-items-stretch">
              <div class="text">
              	<span>Taux d'identification</span>
                <strong class="number" data-number="4">0</strong>
                <span>Le manque de support des Mairies</span>
              </div>
            </div>
          </div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Notre Equipe</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
          </div>
        </div>


        <div class="row">
            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(/front/images/person_1.jpg);"></div>
                        <div class="info ml-4">
                            <h3 class="text-center">
                                <a href="javascript:void(0)">Père Abbé Antione Ella</a>
                            </h3>
                            <span class="position">antoine_pere@yahoo.com</span>
                            <div class="text">
                                <p class="text-center">

                                    <span>Founder</span>
                                    <br>
                                </p>
                                <br>
                                <div class="row" >
                                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                        <li class="ftco-animate l-round bg-twitter">
                                            <a href="#" target="_blank">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </li>
                                        <li class="ftco-animate l-round bg-facebook">
                                            <a href="#" target="_blank">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </li>
                                        <li class="ftco-animate l-round bg-instagram">
                                            <a href="#" target="_blank">
                                                <span class="icon-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(/front/images/person_1.jpg);"></div>
                        <div class="info ml-4">
                            <h3 class="text-center">
                                <a href="javascript:void(0)">Père Abbé Antione Ella</a>
                            </h3>
                            <span class="position">antoine_pere@yahoo.com</span>
                            <div class="text">
                                <p class="text-center">

                                    <span>Founder</span>
                                    <br>
                                </p>
                                <br>
                                <div class="row" >
                                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                        <li class="ftco-animate l-round bg-twitter">
                                            <a href="#" target="_blank">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </li>
                                        <li class="ftco-animate l-round bg-facebook">
                                            <a href="#" target="_blank">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </li>
                                        <li class="ftco-animate l-round bg-instagram">
                                            <a href="#" target="_blank">
                                                <span class="icon-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
                <div class="staff">
                    <div class="d-flex mb-4">
                        <div class="img" style="background-image: url(/front/images/person_1.jpg);"></div>
                        <div class="info ml-4">
                            <h3 class="text-center">
                                <a href="javascript:void(0)">Père Abbé Antione Ella</a>
                            </h3>
                            <span class="position">antoine_pere@yahoo.com</span>
                            <div class="text">
                                <p class="text-center">

                                    <span>Founder</span>
                                    <br>
                                </p>
                                <br>
                                <div class="row" >
                                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft">
                                        <li class="ftco-animate l-round bg-twitter">
                                            <a href="#" target="_blank">
                                                <span class="icon-twitter"></span>
                                            </a>
                                        </li>
                                        <li class="ftco-animate l-round bg-facebook">
                                            <a href="#" target="_blank">
                                                <span class="icon-facebook"></span>
                                            </a>
                                        </li>
                                        <li class="ftco-animate l-round bg-instagram">
                                            <a href="#" target="_blank">
                                                <span class="icon-instagram"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
      </div>
    </section>
@endsection
