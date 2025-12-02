<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$current_language = pll_current_language();

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->

<?php
astra_content_after();
$uploads = wp_get_upload_dir();
?>

<div id="mouse-cursor"></div>

<hr style="width: 80%; margin: 0 auto; color: #5e5700;">

<footer>
  <div id="footContainer">
    <div id="about">
   
      <div  id="imgFoot">

        <div class="loghifoot" style="position: relative; width: 55rem;">
          <img class='rendano' src="<?php echo esc_url( $uploads['baseurl'] . '/2025/09/cropped-LOGO.png' ); ?>" alt="">
        </div>
        <div class="loghifoot" style="position: relative; width: 55rem;">
          <img class='cosenza' src="<?php echo esc_url( $uploads['baseurl'] . '/2025/10/COSENZA-BIANCO.png'); ?>"  alt=''>

        </div>
        <div class="loghifoot" style="
          position: relative; width: 55rem;
          padding: 0;
          margin: 0;
          display: flex;
          justify-content: center;
          flex-direction: column;">
          <img class='ministero' src="<?php echo esc_url( $uploads['baseurl'] . '/2025/10/MINISTERO-BIANCO-1.png'); ?>" alt=''>

        </div>  
          
 
        <!-- <div  class="altri_loghi d-flex justify-center gap-5"> -->
        <!-- </div> -->
    
      </div>
      

    </div>


    <div class="testilinkfoot d-flex">

      <div id="company" class="linkUtili">
        <h4><?php echo ($current_language == "it")? "LINK UTILI":"USEFUL LINKS"?></h4>
        <!-- <a href="<?php echo ($current_language == "en")? "./index.php/contatti/":"./index.php/contatti/fr/contacts/" ?>">Contatti</a> <br> -->
   
        <!-- <a style="text-decoration: underline !important;" href="./index.php/area-trasparenza/" target="_blank">Area Trasparenza</a><br> -->

          <?php 
        if($current_language == "en") {// verifico su che lingua sono 
          ?> 
          <a href="../../cookie-policy-en-ue/">Cookie Policy (UE)</a>
          <?php
        }else {
          ?>
          <a href="./index.php/cookie-policy-ue/">Cookie Policy (UE)</a>
          <?php
        }
        ?>


        <br>
  
  
      </div>
  

  
      <!-- sicial media -->
      <div class="socialMedia">
        <h4 class="text-uppercase fw-bold"><?php echo ($current_language == "it")? "CONTATTI":"CONTACTS"?></h4>
           
        <a href="mailto: info@primacom.cloud" class="link"><i class="fas fa-home me-3 text-secondary"></i>
          <span class="mask">
            <div class="link-container">
              <div class="link-title1 title"> Italia</div>
              <div class="link-title2 title"> Italia</div>
            </div>
          </span>
        </a>
  
        <a href="mailto: info@agricorsocosenza.it" class="link"><i class="fas fa-envelope me-3 text-secondary"></i>
          <span class="mask">
            <div class="link-container">
              <div class="link-title1 title">info@agricorsocosenza.it</div>
              <div class="link-title2 title">info@agricorsocosenza.it</div>
            </div>
          </span>
        </a>
        <a href="mailto: segreteria@agricorso.it" class="link"><i class="fas fa-envelope me-3 text-secondary"></i>
          <span class="mask">
            <div class="link-container">
              <div class="link-title1 title">segreteria@agricorso.it</div>
              <div class="link-title2 title">segreteria@agricorso.it</div>
            </div>
          </span>
        </a>
  
        <!-- <a href="tel: +390965062753" class="link"><i class="fas fa-phone me-3 text-secondary"></i>
          <span class="mask">
            <div class="link-container">
              <div class="link-title1 title">Tel. e Fax +39 0965 062753</div>
              <div class="link-title2 title">Tel. e Fax +39 0965 062753</div>
            </div>
          </span>
        </a> -->


        <div class="socials" style="font-size: 40px; cursor: pointer; margin-top: 10px;">
          <a href="" target="_blank">
            
            <i  class="fa-brands fa-facebook"></i>
          </a>
  
          <a href="https://www.instagram.com/" target="_blank">
  
            <i class="fa-brands fa-instagram"></i>
          </a>
  
          <a href="https://www.youtube.com/" target="_blank">
  
            <i class="fa-brands fa-youtube"></i>
          </a>
  
        </div>
  
      </div>
    </div>


    <div class="socialmedia2 text-center hidden">
      <h4 class="text-uppercase fw-bold text-center"><?php echo ($current_language == "it")? "CONTATTI":"CONTACTS"?></h4>
      <i class="fas fa-envelope me-3 text-secondary"></i><p>info@consorziodituteladelbergamotto.it</p>
      <i class="fas fa-phone me-3 text-secondary"></i><p>Tel. e Fax +39 0965 062753</p><p>Cell. +39 335 8322313</p>
    </div>


  </div>

</footer>



<div class=" footCopy">
  <footer style="margin-top: 20px;">    
    <?php 
    if($current_language == "en") {// verifico su che lingua sono 
      echo '<p style="text-align: center; font-size: 12px;" class="text-center ">&copy; Bergamotto di Reggio Calabria D.O.P. Tutti i diritti sono riservati. - Questo sito non raccoglie dati personali.</p>';
     
    }else {
      echo '<p style="text-align: center; font-size: 12px;" class="text-center ">&copy; Teatro Rendano 2025 -  Tutti i diritti sono riservati.</p>';
    } 
    ?>
  </footer>
</div>



<?php


astra_body_bottom();
wp_footer();
?>
</body>

</html>