<?php $title = 'A Propos'; ?>
<?php 
$scripts = '<script src="/public/js/about.js"></script>'; 
?>

<?php ob_start(); ?>
<?php $shouldShowSocials = false ?>
<?php require('components/CMenu.php') ?>
<div class="container">
  <div class="v-about">
    <div class="apropos">
      <h1>A PROPOS</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      Pellentesque imperdiet dapibus vehicula. Morbi pulvinar
      nec ex non tincidunt. Phasellus in volutpat ex, eget
      consequat velit. Maecenas eu arcu sit amet sapien
      porttitor finibus id ligula. Aliquam ac purus eros.</p>
    </div>
    <div class="clients">
      <h1>CLIENTS</h1>
      <p>
        <span id="regain">Regain Magazine</span> / <span id="air-france">Air france Mag</span> /
        <span id="hermes">Hermès</span> / <span id="fooding">Le fooding</span>
        <span id="intersection">Intersection Mag</span> / <span id="andrea">Andrea Crews</span> /
        <span id="le-monde">Le Monde</span> / <span id="pierre-jancou">Pierre Jancou</span>
        <span id="jalouse-mag">Jalouse Mag</span> / <span id="colombo-gin">Colombo Gin</span> /
        <span id="armand-arnal">Armand Arnal</span> / <span id="reykjavik">Reykjavik</span>
        <span id="gentucca-bini">Gentucca Bini</span> / <span id="matador-magazine">Matador Magazine</span> /
        <span id="tank-mag">Tank Mag</span> / <span id="kalamata">Kalamata</span> /
        <span id="regal-magazine">Regal magazine</span> / <span id="jack-daniel">Jack Daniel’s</span> /
        <span id="ad-magazine">AD magazine</span> / <span id="ulysse-magazine">Ulysse Magazine</span>
      </p>
    </div>
    <div class="contacts">
      <div class="represent">
        <h1>REPRESENT BY ROSE - PARIS</h1>
        <p>132 RUE DU FBG-SAINT-DENIS</p>
        <p>75010 PARIS</p>
        <p>+33 (6) 42 05 58 13</p>
        <p>OLIVIA@ROSE-PARIS.COM</p>
      </div>
      <div class="personal">
        <h1>CONTACTEZ-MOI</h1>
        <p>CONTACT@MARTINBRUNO.FR</p>
        <p>+33 (6) 60 23 54 99</p>
      </div>
    </div>
    <div class="watermark">
      <p>
        Site réalisé par Jules Fournier, Nicholas Fawcitt, Luca Oltra, Axelle Vandermarlière, Mathis Guyen, Léa
        Marques, Anaïs Lusenti, Qingyang Yu et Alexis Porraz.
      </p>
    </div>
    <div class="imageMartinBruno">
      <img src="/public/infos/martin_bruno.png">
    </div>
    <div class="imageClients" id="image-clients"></div>
  </div>
</div>
<?php
$content = ob_get_clean();
require('views/VTemplate.php');
?>
