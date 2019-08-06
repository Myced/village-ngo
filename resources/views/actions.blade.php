@extends('layouts.front')

@section('title')
    {{ __('navigation.action') }}
@endsection

@section('content')
<div class="hero-wrap" style="background-image: url('/front/images/bg_7.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>

    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-3 bread"
                    data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                    {{ __('titles.actions') }}
                </h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
        <h1 class="text-center"> <strong>VillagePygmeeCameroun</strong> </h1>
    </div>
    <p>
        <center>
            <strong>
                La Fondation Village Pygmées Cameroun, interpelle le Cameroun sur
                la vigilance que les autorités doivent avoir sur l’équilibre entre
                le Droit des peuples autochtones et l’exploitation des ressources
                naturelles dans le département de l’Océan.
            </strong>
        </center>
    </P>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">+
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/dd1.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">La scolarisation</a></h3>
                        <p> Ils ont besoin d’instruction et d’apprentissage de la langue française pour connaître leurs droits et les défendre la méthode interactive ORA (Observer-Réfléchir-Agir) est la plus adaptée au public cible  </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddd.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">La Rehabitation</a></h3>
                        <p>Les pygmées n'ont pas accès aux services sociaux de base: ils n'inscrivent pas leurs enfants dans les écoles, et les soins de santé modernes leur sont inconnus. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddd5.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">Les soins primaire</a></h3>
                        <p>La morbidité dans les campements pygmées est très élevée. Les maladies fréquentes y sont la malaria, les infections respiratoires aiguës, ...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddf.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">L'acces a l'eau portable et electricite</a></h3>
                        <p>La déforestation entraîne l'érosion du sol et l'envasement des cours d'eau, ce qui réduit l'accès à l'eau potable ; à la fois en qualité et en quantité.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddd4.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">L'approche du genre</a></h3>
                        <p>priorité sera donnée à la promotion de la jeune fille pygmée ; ceci appelle la collaboration du  CPF (Centre de Promotion de la Femme) de Fifinda. </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddf.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">Nouvelle Technologie</a></h3>
                        <p>L'informatique,  internet… Ce qui  réclame une salle informatique et un formateur à mi-temps</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/dd5.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">Les campagnes Etat Civil et identité</a></h3>
                        <p> l’établissement de 300 actes de naissance. Prenant la forme de campagnes de régularisation de l'état civil, ces campagnes incluent la formation d’animateurs Pygmées Bagyeli</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddd3.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">Vie socio-culturelle de pygmées</a></h3>
                        <p>La majorité des pygmées est animiste. Ils ont une croyance aux esprits surnaturels. Pour eux la forêt est le lieu des esprits de la nature qui veillent sur eux, les protègent ou, au contraire, les punissent.</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
            <div class="staff">
                <div class="d-flex mb-4">
                    <div class="img" style="background-image: url(/front/images/ddd.jpg);"></div>
                    <div class="info ml-4">
                        <h3><a href="teacher-single.html">Vie socio-politiques de pygmées</a></h3>
                        <p>Bénéficier des droits dus à toute personne humaine et recevoir un enseignement sur le monde extérieur, puisque ce dernier viole les limites de leur territoire. Ils veulent qu'ils soient reconnus comme autochtones. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </div>
</section>

<section class="ftco-section-3 img" style="background-image: url(/front/images/bg_3.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex">
        <div class="col-md-6 d-flex ftco-animate">
            <div class="img img-2 align-self-stretch" style="background-image: url(/front/images/ddg.jpg);"></div>
        </div>
        <div class="col-md-6 volunteer pl-md-5 ftco-animate">
            <h3 class="mb-3">Be a volunteer</h3>
            <form action="#" class="volunter-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
          <textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
        </div>
      </form>
        </div>
        </div>
    </div>
</section>
@endsection
