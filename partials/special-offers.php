<?php

?>
<div class="section dark special-offers">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 id="internal-special-offers">Special Offers</h2>
      </div>
      {% assign offers = site.special-offers | sort: 'order' %}
      {% for offer in offers %}
      <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
        <a href="{{ site.baseurl }}{{ offer.url }}">
        <img src="{{ offer.image }}" class="img-responsive" alt="">
      </a>
        <h3>{{ offer.title }}</h3>
        <h5>Original Price: {{ offer.original-price }}</h5>
        <h5>Sale Price: {{ offer.discounted-price }}</h5>
        <p>{{ offer.excerpt }}</p>
        <a href="{{ site.baseurl }}{{ offer.url }}">Find out More&nbsp;&raquo;</a>
      </div>
      {% endfor %}
    </div>
  </div>
</div>
