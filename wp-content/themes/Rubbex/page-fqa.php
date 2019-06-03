<?php get_header(); ?>

<div class="wrapper">

  <div class="half">
 
    <div class="tab">
      <input id="tab-one" type="checkbox" name="tabs">
      <label for="tab-one">Label One</label>
      <div class="tab-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
      </div>
    </div>
    <div class="tab">
      <input id="tab-two" type="checkbox" name="tabs">
      <label for="tab-two">Label Two</label>
      <div class="tab-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
      </div>
    </div>
    <div class="tab">
      <input id="tab-three" type="checkbox" name="tabs">
      <label for="tab-three">Label Three</label>
      <div class="tab-content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, architecto, explicabo perferendis nostrum, maxime impedit atque odit sunt pariatur illo obcaecati soluta molestias iure facere dolorum adipisci eum? Saepe, itaque.</p>
      </div>
    </div>
  </div>
  </div>
  
  <style>
  
  
.half {
  float: left;
  width: 100%;
  padding: 0 1em;
}
/* Acordeon styles */
.tab {
  position: relative;
  margin-bottom: 1px;
  width: 100%;
  color: #fff;
  overflow: hidden;
}
input {
  position: absolute;
  opacity: 0;
  z-index: -1;
}
label {
  position: relative;
  display: block;
  padding: 0 0 0 1em;
  background: #16a085;
  font-weight: bold;
  line-height: 3;
  cursor: pointer;
}
.blue label {
  background: #2980b9;
}
.tab-content {
  max-height: 0;
  overflow: hidden;
  background: red;
  -webkit-transition: max-height .35s;
  -o-transition: max-height .35s;
  transition: max-height .35s;
}
.blue .tab-content {
  background: #3498db;
}
.tab-content p {
  margin: 1em;
}
/* :checked */
input:checked ~ .tab-content {
  max-height: 10em;
}
/* Icon */
label::after {
  position: absolute;
  right: 0;
  top: 0;
  display: block;
  width: 3em;
  height: 3em;
  line-height: 3;
  text-align: center;
  -webkit-transition: all .35s;
  -o-transition: all .35s;
  transition: all .35s;
}
input[type=checkbox] + label::after {
  content: "+";
}
input[type=radio] + label::after {
  content: "\25BC";
}
input[type=checkbox]:checked + label::after {
  transform: rotate(315deg);
}
input[type=radio]:checked + label::after {
  transform: rotateX(180deg);
}






.wrapper {
  margin: auto;
  width: 90%;
  max-width: 960px;
}

/* Otros estilos */
.card {
  padding: 1em;
  color: #333;
  background: #fff;
  -webkit-box-shadow: 0 0 10px rgba(0,0,0,.25);
  box-shadow: 0 0 10px rgba(0,0,0,.25);
}
.card h2:first-child,
.card p:first-child {
  margin-top: 0;
}
  </style>

<?php get_footer(); ?>