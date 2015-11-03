<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <ul class="nav">
      <li>
        <h1 class="site-title">
        <a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a>
        </h1>
      </li>
    </ul>

