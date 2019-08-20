<?php

if (!defined('ABSPATH')) die('No direct access.');

class PSM_WC_Google_Tags
{
  public function init()
  {
    add_action('wp_enqueue_scripts', [$this, 'initialScripts'], 10, 0);

    add_action('woocommerce_thankyou', [$this, 'includeConversionScript']);
  }

  public function includeConversionScript()
  {
    ?>
<script type="text/javascript">
  gtag('event', 'conversion', {
    'send_to': 'AW-952669036/SWBcCOLgjqgBEOymosYD',
    'transaction_id': ''
  });
</script>
<?php
  }

  public function initialScripts()
  {
    wp_enqueue_script('google_tag_manager', 'https://www.googletagmanager.com/gtag/js?id=AW-952669036');
    wp_enqueue_script('psm_wc_google_tags_init', PSM_WC_GOOGLE_TAG_URL . 'assets/js/global.js');
  }
}

?>