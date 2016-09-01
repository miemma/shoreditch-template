<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>

	</div><!-- #content -->
	
	<footer class="site-footer">
  <div class="row text-center">
    <div class="col-xs-10 col-md-3-half col-sm-3 vertical-middle
                footer-join footer-col">
      <p class="footer-join-principal">
        ¿Quieres ser parte de nuestra familia?
      </p>
      <p class="footer-join-second">
        Envía tu solicitud para ser una <i>Emma</i>
      </p>
      <a href="#" class="emma-btn emma-btn-light footer-btn">
        Únete al equipo
      </a>
    </div>
    <div class="col-xs-10 col-md-4 col-sm-3 text-center
                vertical-middle footer-col">
      <figure class="footer-social-logo">
        <img src="<?php echo get_template_directory_uri() . '/img/icons/full_logo_bw.svg' ?>" alt="emma"/>
      </figure>
      <p class="footer-social-copyright">
        © 2016 Emma
      </p>
      <p class="footer-social-rights">
        Todos los derechos reservados
      </p>
      <p class="footer-social-rights">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shoreditch' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'shoreditch' ), 'WordPress' ); ?></a>
        <span class="sep">/</span>
        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'shoreditch' ), 'Shoreditch', '<a href="https://wordpress.com/themes/" rel="designer">Automattic</a>' ); ?>
      </p>
      <p class="footer-social-follow">
        Síguenos en:
      </p>
      <figure class="footer-social-img">
        <img src="<?php echo get_template_directory_uri() . '/img/icons/social.svg' ?>" alt="redes sociales"/>
        <a id="facebook" href="https://www.facebook.com/miemma.mexico/?fref=ts" target="_blank"></a>
        <a href="https://twitter.com/miemma_" id="twitter" target="_blank"></a>
      </figure>
      <i class="footer-social-icons"></i>
      <div class="footer-social-terms">
        <p>
          Términos y condiciones
        </p>
        <p>
          Aviso de privacidad
        </p>
      </div>
    </div>
    <div class="col-xs-10 col-md-3-half col-sm-3 vertical-middle
                footer-info footer-col">
      <p class="footer-info-phone center">
        <img src="<?php echo get_template_directory_uri() . '/img/icons/phone.svg' ?>" style="height:27px !important; margin-top: -5px;" alt="telefono"/>
        +52 1 55 4544 9350
      </p>
      <p class="footer-info-text">
        Horarios de atención: de lunes a viernes de 9:00 a 20:00 hrs.
      </p>
      <ul class="footer-info-list">
        <li class="footer-info-list-item center">
          <a href="{% url 'landing:who' %}">Quiénes somos</a>
        </li>
        <li class="footer-info-list-item center">
          <a href="https://medium.com/@miemma">Blog e historias</a>
        </li>
        <li class="footer-info-list-item center">
          <a href="{% url 'landing:faq' %}">Preguntas frecuentes</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/menu.js' ?>"></script>
</body>
</html>
