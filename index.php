<?php
  session_start();
?>
<html>
    <head>
      <link rel="icon" type="image/png" href="icons/favicon.ico" />
      <title>
        The List
      </title>
      <!-- GoogleMDL-->
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.indigo-pink.min.css">
      <script defer src="https://code.getmdl.io/1.1.3/material.min.js"></script>
      <!-- jQuery -->
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
      <!--jQuery Tabelsorter -->
    	<script src="js/tablesorter/jquery.tablesorter.min.js"></script>
    	<script src="js/tablesorter/jquery.tablesorter.widgets.min.js"></script>
      <!--Register, Logout, etc. -->
      <script src="index.js"></script>
      <!--Falls angemeldet, aktuelle Liste laden -->
      <?php include("page/if_signed_in.php");?>
      <div id = "hidden">
      <link rel="stylesheet" href="index.css">
      </div>
  </head>
  <body>
    <div id="todoandlist">
    </div>
    <div id="main">
      <?php include("page/header/header.php");?>
    </div>
  </body>
</html>
