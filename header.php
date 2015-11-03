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
      <li><a href="<?php bloginfo('url'); ?>"><h1>PetFriends</h1></a></li>
    </ul>

