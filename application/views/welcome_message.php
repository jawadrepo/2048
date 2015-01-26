<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>2048</title>

  <link href="<?php echo $this->config->item('css_url');?>style/main.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <div class="heading">
      <h1 class="title">2048</h1>
    </div>

    <div class="above-game">
      <p class="game-intro">Join the numbers and get to the <strong>2048 tile!</strong></p>
      <a class="restart-button">New Game</a>
    </div>

    <div class="game-container">
      <div class="game-message">
        <p></p>
        <div class="lower">
	        <a class="keep-playing-button">Keep going</a>
          <a class="retry-button">Try again</a>
        </div>
      </div>

      <div class="grid-container">
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
        <div class="grid-row">
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
          <div class="grid-cell"></div>
        </div>
      </div>

      <div class="tile-container">

      </div>
    </div>

    <p class="game-explanation">
      <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
    </p>
    <hr>
  </div>

  <script src="<?php echo $this->config->item('js_url');?>js/class.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/classlist.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/frame.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/keys.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/html.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/gridview.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/pagetile.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/store.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/main.js"></script>
  <script src="<?php echo $this->config->item('js_url');?>js/app.js"></script>
</body>
</html>