<?php
get_header();
?>

<style>

    /* :root {
        --burgundy: #6B2020; 
        --rose: #E3C0C0;
        --navy: #062360;
        --lightblue: #a0c1ff;
    }
   */

   html, body {
       margin:0;
       padding:0;
       overflow-x:hidden;
   }

  #sec_1 {
        height: 350px;
        background-image: url("https://designtree.dk/rartcph/wp-content/themes/Divi-child/img/splash.png");
    background-repeat: no-repeat;
  /* background-attachment: fixed; */
  background-position: center;


    }
</style>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="style.css" rel="stylesheet">
<script src="script.js"></script>

<section id="body">
<section id="sec_1" class="d-flex justify-content-center align-items-center">
      <div class="splash container-fluid">
          <div class="row">
              <div class="col">
                  <h1 id="h1" class="headline text-center">CONTACT</h1>
                  <p id="undertekst" class="sub-header text-center fs-5">- Classes, collabs and questions</p>
              </div>
          </div>
      </div>
      </section>


      <section id="sec_3" class="col pt-5 mx-5">
          <div class="row">
          
          <div class="col-12 col-md-6 px-4">
              <h3 id="h3">CONTACT RART CPH</h3>
              <p class="text">Feel free to contact me via rart@cph.com or call +45 XXXXXXXX
 </p>
 <p class="text">
 I am working on some tufting workshops and exhibitions. Sign up to RART CPH’s newsletter on the frontpage to get invited and get the latest scoops about new pieces. Or write me a message right here.
 </p>
          </div>
          <div id="contact"class="col-12 col-md-6 rounded">
<input id="name" type="name" class="form-control" id="formControlInput" placeholder="Name">
<input id="mail" type="email" class="form-control" id="formControlInput" placeholder="E-mail">
<select id="select" class="form-select form-select-sm" aria-label="Small select">
  <option selected="">CHOOSE TOPIC</option>
  <option value="1">Question</option>
  <option value="2">Workshop</option>
  <option value="3">Exhibition</option>
  <option value="4">Collab</option>
  <option value="5">Other</option>
</select>
<input id="write" type="text" class="form-control" placeholder="Write here..">
<div class="d-flex justify-content-end">
<button id="button" class="px-5">SEND MESSAGE</button>
</div>
          </div>
          </div>
      </section>


</section>
     




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>


<?php
get_footer();
?>