<div class="hybridauth-widget-wrapper">
<div class="hybridauth-signin-with"><p class="signin-withtext background"><span>OR SIGN IN WITH</span></p></div>
	<?php
  print theme('item_list',
    array(
      'items' => $providers,
      'title' => $element['#title'],
      'type' => 'ul',
      'attributes' => array('class' => array('hybridauth-widget')),
    )
  );
?></div>