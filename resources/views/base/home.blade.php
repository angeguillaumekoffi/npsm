{% extends "base.html" %}

{% load staticfiles %}
{% load crispy_forms_tags %}

{% block title %}{{ block.super }}Accueil{% endblock %}

{% block navbar-left %}
  {% include "_navbar.html" with active_link="home" %}
{% endblock %}

{% block navbar-right %}
{% endblock %}

{% block splash %}
  <div class="jumbotron jumbotron-carousel corporate-jumbo">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-8">
          <h1>{% include "_brandname.html" %}</h1>
          <p>Bienvenue sur le site officiel de reservation de salle INP-HB</p>
	  <a class="btn btn-primary" href="#" role="button">Inscrivez-vous gratuitement!</a>
        </div>
        <div class="col-md-4 col-sm-4">

        </div>
      </div>
    </div>
  </div>
{% endblock splash %}

{% block container %}
<!-- Benefits of the Django application -->
<a id="about"></a>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
      <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>
</div>

{% endblock container %}

{% block scripts %}
<script src="{% static 'site/js/site.js' %}"></script>
{% endblock scripts %}

