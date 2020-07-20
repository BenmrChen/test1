<?php

function university_files() {
  wp_enqueue_style('university_main_styles', get_stylesheet_uri());
  // 要載入 css 就要寫wp_enqueue_style, 若是要載入 js 就要寫 wp_enqueue_scrip
  // get_stylesheet_uri() 就是拿 style.css
}

add_action('wp_enqueue_scripts', 'university_files'); // 載入 header 前先載入 script，而script 的名字叫 'university_files`