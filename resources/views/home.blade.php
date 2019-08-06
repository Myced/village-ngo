@extends('layouts.front')

@section('title')
    {{ __("Home") }} 
@endsection


@section('content')
<div class="hero-wrap" style="background-image: url('/front/images/home.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              Pour le developpement des Pygmée Bagyèli
          </h1>
          <p class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              Président Fondateur <a href="#">Père Abbé Antione Ella</a>
          </p>

      </div>
    </div>
  </div>
</div>

<section class="ftco-counter ftco-intro" id="section-counter">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-1 align-items-stretch">
          <div class="text">
            <span>Population</span>
            <strong class="number" data-number="2700">0</strong>
            <span>Une population de 2700 habitants</span>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex justify-content-center counter-wrap ftco-animate">
        <div class="block-18 color-2 align-items-stretch">
          <div class="text">
            <span>Taux de Morbité</span>
            <strong class="number" data-number="37">0</strong>
            <span>Des mort due aux problèmes cité plu haut</span>
          </div>
        </div>
      </div>

        </div>
    </div>
</section>

<section class="ftco-section">
    	<div class="container">
    		<h1><center><strong>Problematique</center></strong></h1>
			<p>
				<center>La Fondation dénonce les exactions concernant des conflits
				 fonciers entre les multinationales et les communautés autochtones
				  ainsi que les dommages écologiques liés notamment au projet de développement de Kribi.
				</center>
			</p>
			<div class="row">
	
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation-1"></span></div>
			  
              <div class="media-body pl-4">
                <h3 class="heading"><strong>La déforestation</strong></h3>
                <p>Les forêts hébergent plus de 80 pour cent de la biodiversité 
                terrestre et représentent l'un des derniers refuges pour de très 
            nombreuses espèces animales et végétales.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-charity"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading"><strong>L'aggravation des maladies</strong></h3>
                <p>Contrairement aux idées reçues, les forêts réduisent les maladies infectieuses.
                 Les forêts tropicales non perturbées peuvent exercer un effet modérateur sur les 
             maladies provoquées par les insectes et les animaux</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 d-flex services p-3 py-4 d-block">
              <div class="icon d-flex mb-3"><span class="flaticon-donation"></span></div>
              <div class="media-body pl-4">
                <h3 class="heading"><strong>La diminution des eaux</strong></h3>
                <p>Les forêts aident à reconstituer les nappes phréatiques si cruciales pour l'eau potable. Ainsi,,les trois quarts de l'eau accessible proviennent de bassins versants forestiers.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-5 heading-section ftco-animate text-center">
          
    		<h1><center><strong>Nos Actions</center></strong></h1>
			<p>
				<center>Fondation villagepygmeecameroun a mis sur pied un programmede scolarisation, 
            de la rehabitation a la citoyenette, l'acces a l'eau portable et a des soins primaire.
				</center>
			</p>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="carousel-cause owl-carousel">
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(/front/images/dd1.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#"><strong>La Scolarisation</strong></a></h3>
		    							<p>Assurant la scolarisation des jeunes Pygmées Bagyeli et leur acclimatation progressive à la civilisation camerounaise,villagepygmeecameroun est le point de repère entre leur monde et celui qui les entoure. Il est difficile pour les parents de laisser les enfants aller à l’école pendant les périodes d’intenses activités traditionnelles.</p>
		    						
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(/front/images/dd6.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#"><strong>Rehabitation des Bagyeli</strong></a></h3>
		    						
		    						<p>Les Bagyeli se savent Camerounais, ils ont conscience depuis des décennies de faire partie d’une nation et désirent désormais recevoir un enseignement sur le monde extérieur, puisque ce dernier viole les limites de leur territoire.</p>
		    						
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		              
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(/front/images/dd3.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#"><strong>La Sante</strong></a></h3>
		    							
		    							<p>L'hygiène n'est pas respectée dans les campements pygmées. Il y règne une grande charge parasitaire en relation avec la promiscuité qui influe sur les anémies. Villagepygmeecameroun offres les primier soins a tout patogen.</p>
		    						
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(/front/images/dd2.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#"><strong>La Biodiversite</strong></a></h3>
		    						
		    						<p>Ainsi, les forêts tropicales fournissent une panoplie de plantes médicinales servant aux soins de santé. 80% des habitants des pays en développement dépendent des médicaments traditionnels: 50% d'entre eux proviennent de la forêt</p>
		    						
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                
		    					</div>
		    				</div>
	    				</div>
	    				<div class="item">
	    					<div class="cause-entry">
		    					<a href="#" class="img" style="background-image: url(/front/images/dd5.jpg);"></a>
		    					<div class="text p-3 p-md-4">
		    						<h3><a href="#"><strong>L'Identification</strong></a></h3>
		    						<p>Les Pygmées ont conscience de faire partie d'une nation et désirent désormais être reconnus comme citoyens à part entière, bénéficier des droits dus à toute personne humaine et recevoir des actes de naissances.</p>
		   
		                <div class="progress custom-progress-success">
		                  <div class="progress-bar bg-primary" role="progressbar" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
		                </div>
		                
		    					</div>
		    				</div>
	    				</div>
	    				
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nos Donations</h2>
            <p>Nous tenons à vous dire merci pour votre investissement et votre contribution dans notre Fondation</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(/front/images/person_1.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Père Abbe Antione Ella</a></h3>
        					
        					
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(/front/images/person_2.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">Eglise Catholique</a></h3>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        	<div class="col-lg-4 d-flex mb-sm-4 ftco-animate">
        		<div class="staff">
        			<div class="d-flex mb-4">
        				<div class="img" style="background-image: url(/front/images/person_3.jpg);"></div>
        				<div class="info ml-4">
        					<h3><a href="teacher-single.html">La Diaspora</a></h3>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </section>

    <section class="ftco-gallery">
    	<div class="d-md-flex">
	    	<a href="/front/images/dd1.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/dd1.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="/front/images/dd2.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/dd2.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="/front/images/dd3.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/dd3.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="/front/images/dd4.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/dd4.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
    	</div>
    	<div class="d-md-flex">
		
	    	<a href="/front/images/dd5.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/dd5.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="/front/images/dd6.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/dd6.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="/front/images/dd7.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/ddd.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
	    	<a href="/front/images/dd8.jpg" class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate" style="background-image: url(/front/images/ddf.jpg);">
	    		<div class="icon d-flex justify-content-center align-items-center">
	    			<span class="icon-search"></span>
	    		</div>
	    	</a>
			
	    </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Nos Projets</h2>
            <p>La Fondation VillagepygméeCameroun a pour ,un cadre référentiel d'inclusion sociale et prévention des risques de crime écologique</p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('/front/images/ddd4.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                 
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h2 class="heading mt-3"><a href="#"><strong>Caisse de Réhabilitation du Patrimoine Pygmée</strong></a></h2>
                <p>L'imprégnation à l'éducation conventionnelle pour faciliter l'intégration des pygmée àlanation,
				une caisse de santé pour permettre une prise en charge rapide et gratuite,
				une caisse d'exposition du patrimoine pygmée et l'identification systématique des population</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('/front/images/dd1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h2 class="heading mt-3"><a href="#"><strong>Creation d'une Internat</strong></a></h2>
                <p>Un programme scolaire adapté aux saisons de pêche, chasse et de rites. En  effet, il est difficile pour les parents de laisser les enfants aller à l’école pendant les périodes d’intenses activités traditionnelles.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('/front/images/dd4.jpg');">
              </a>
              <div class="text p-4 d-block">
              	<div class="meta mb-3">
                  
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h2 class="heading mt-3"><a href="#"><strong>Caisse de Réhabilitation du Patrimoine Pygmée</strong></a></h2>
                <p>L'imprégnation à l'éducation conventionnelle pour faciliter l'intégration des pygmée àlanation,
				une caisse de santé pour permettre une prise en charge rapide et gratuite, une caisse d'exposition du patrimoine pygmée et l'identification systématique des population</p>
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
            <h2 class="mb-4">Nos Activités</h2>
			<p>l’établissement de 300 actes de naissance, La distribution de 500 lampes solaires pour l’éclairage domestique, La scolarisation de 80 enfants pygmées dans les établissements de l’Etat, la distribution de 500 lampes solaires pour l’éclairage domestique, la construction de 10 cases modernes ; pour améliorer l’habitat des Bagyéli, la scolarisation de 80 enfants pygmées dans les établissements de l’Etat, l’ouverture d’un groupe scolaire bilingue pour l’intégration des enfants pygmées, 15 campagnes de vaccination et de médication et l’aménagement d’un forage d’eau potable
		</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('/front/images/dd1.jpg');">
              </a>
              <div class="text p-4 d-block">
              	
                <h3 class="heading mb-4"><a href="#"><strong><center>La Scolarisation</strong></center></a></h3>
                <p>la scolarisation des enfants ne représente pas seulement l’instruction et la connaissance. C'est également pour toute la communauté une opportunité de changement et d'adaptation à un nouveau mode de vie pour une réelle amélioration du statut social du peuple Pygmée Bagyeli et une réduction de sa marginalisation. </p>
                <p><a href="event.html">Plus D'info<i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('/front/images/dd3.jpg');">
              </a>
              <div class="text p-4 d-block">
              	
                <h3 class="heading mb-4"><a href="#"><strong><center>La Santé</strong></center></a></h3>
                <p>Appui aux formations sanitaires pour les opérations de vaccination, la sensibilisation communautaire dans la lutte contre le paludisme en milieu pygmée, la promotion de la moustiquaire imprégnée d’insecticide et l'orientation et accompagnement des malades vers les centres de santé partenaires.
			</p>

            <p><a href="event.html">Plus D'info<i class="ion-ios-arrow-forward"></i></a></p>    
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('/front/images/dd2.jpg');">
              </a>
              <div class="text p-4 d-block">
              	
                <h3 class="heading mb-4"><a href="#"><strong><center>L'Identification'</strong></center></a></h3>
                
                <p>Le droit au respect, à l’épanouissement et au bien-être qui reviennent de droit aux Pygmées dépendent en partie de cette action, mais c’est un enjeu qui doit être atteint par et avec les Pygmées et non pas leur être imposé sans leur consentement.</p>
                <p><a href="event.html">Plus D'info<i class="ion-ios-arrow-forward"></i></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-3 img" style="background-image: url(/front/images/ddd5.jpg);">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex">
    		<div class="col-md-6 d-flex ftco-animate">
    			<div class="img img-2 align-self-stretch" style="background-image: url(/front/images/dd6.jpg);"></div>
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
