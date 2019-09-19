<style>
.dropbtn1 {
  background-color: #77dc71;
  color: white;
  padding: 14px;
  font-size: 14px;
  border: solid 2px #77dc71;
  cursor: pointer;
}

.cont {
  background-color: #77dc71;
  color: white;
  border: 2px solid #77dc71;
  padding: 14px;
  font-size: 14px;
  cursor: pointer;
}

.dropdown1 {
  position: relative;
  display: inline-block;
}

.dropdown1-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown1-content li {
  color: black;
  padding: 2px 2px;
  text-decoration: none;
  display: block;
}

.dropdown1-content li:hover {background-color: #dcdcdc;
    display: block;
}
@media (max-width: 560px) {
  .recherche {
    width: 560px;
  }

}
#theme{
    background-color: rgba(31,119,0,0.99);
}
#grad{
    background-image: linear-gradient(-90deg, darkblue, deepskyblue);
}
.dropdown1:hover .dropdown1-content {

}

.dropdown1:hover .dropbtn1 {
  background-color: #77dc71;
}
</style>
<div class="header-top" id="grad">
    <div class="w3-container" >
        <div class="row">
            <div class="col-sm-3 w3-left no-padding " style="margin-left: 10%">
                <img class="img-fluid" src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="col-sm-1 " style="margin-top: 3%; margin-left: 16%">
                <a href="{{ route('creer') }}">
                    <div class="w3-button w3-orange" style="padding: 4px">Creer un compte</div></a>
            </div>
            <div class="col-sm-2" style="margin-top: 3%; margin-left: 4%">
                <a href="{{url('/login_page')}}">
                <div class="w3-button" style="padding: 4px; color: white">Espace membre</div></a>
            </div>
        </div>
    </div>
</div>
<div id="main-menu">
    <div class="w3-container" style="padding: 10px; background-color: rgba(31,119,0,0.99);" id="heada">
        <div class="container "  >
            <div class="col-sm-pull-6">

                <form action="" method="get" style=" display: inline-flex">
                    <span id="log-text" style="width: 250px; font-size: 18px">La Nouvelle Pharmacie Sainte Marie</span>
                    <input id="rech" class="w3-input " type="text" name="q" style="width: 350px; border-bottom-left-radius:4px; border-top-left-radius: 4px; border: 2px solid white;" placeholder="Rechercher un produit, une marque,..." value="" required>
                    <input type="submit" value="OK"  style="background-color: orangered; border-bottom-right-radius:4px; border-top-right-radius: 4px; border: 4px solid orangered">
                </form>&ensp;&ensp;
                <span></span>
                <span id="bout" class="w3-right">

                <a href="{{ route('creer') }}">
                    <div class="w3-button w3-orange" style="padding: 4px">Creer un compte</div></a>
                <a href="{{url('/login_page')}}">
                    <div class="w3-button" style="padding: 4px; color: white">Espace membre</div></a>
                    <img class="img-fluid" src="{{ asset('img/site/logo-blanc.png') }}" width="50" alt="">
                </span>
            </div>
        </div>
    </div>
    <div class="container w3-black" >
        <nav class="container" >
            <div class="col-sm-pull-12" style="width: 100%; margin-left: 8%; margin-right: 8%">
                <ul class="nav-menu" style="display: flex">
                    <li class="w3-button"><a href="">Pharmacie</a></li>
                    <li><a class="w3-padding w3-button " href="">Produits du moment</a></li>
                    <li><a class="w3-padding w3-button " href="">Prix Mini</a>
                        <ul>
                            <li style="display: inline-block; padding: 0;"><a href="{% url 'Activite' 'Réalisée' %}">Réalisées</a></li>
                            <li style="display: inline-block; padding: 0;"><a href="{% url 'Activite' 'Non-réalisée' %}">Non-réalisées</a></li>
                        </ul>
                    </li>
                    <li><a class="w3-padding w3-button" href="">Nouveauté</a>
                        <ul>
                            <li><a href="">Rapports</a></li>
                            <li><a href="{% url 'Gallerie' %}">Pressboock</a></li>
                        </ul>
                    </li>
                    <li class="menu-has-children"><a class="w3-padding w3-button" href="{% url 'Actualites' %}">Marques</a></li>
                    <li class="menu-has-children"><a class="w3-padding w3-button" href="{% url 'presidents' %}">Contenu Santé</a></li>
                    <li id="theme" class="menu-has-children"><a class="w3-padding w3-button" href="{% url 'presidents' %}">Médicaments</a></li>
                </ul>
            </div>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
<div class="col-sm-pull-12 w3-white w3-padding-16" style="margin-left: 8%; margin-right: 8%"></div>
<br>
