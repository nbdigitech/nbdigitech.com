<?php

namespace Jojoee\Mediumm\Page;

while ( have_posts() ) {
  the_post();

  get_template_part( 'templates/page', 'header' );
  get_template_part( 'templates/content', 'page' );
}
