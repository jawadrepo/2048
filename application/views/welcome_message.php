
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo $this->config->item('css_url');?>bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="<?php echo $this->config->item('css_url');?>/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo $this->config->item('js_url');?>html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="muted">Game 2048</h3>
      </div>

      <hr>

      <div >
        <h1>Lets see how lucky you are!</h1>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span6">
				<div class="bs-docs-example">
            <table class="table table-bordered">
              <thead></thead>
              <tbody>
               <?php
				$rand = rand(1, 9);
				 echo "<tr>";	
				 for ($i=1;$i<10;$i++){
					echo '<td id="'.$i.'" name="'.$i.'" style="text-align:center;" onClick="callclick(\''.$i.'\')"><img width="42" height="42" src="'.$this->config->item('image_url').'dollar.png" ></td>';
					if(($i%3) == 0){
						if($i == 9)
							echo"</tr>";
						else	
						echo "</tr><tr>";
					}
				 }
				?>
              </tbody>
            </table>
          </div>
        </div>

        <div class="span6">
          <h4>How To Play / Rules</h4>
          <p>Click on the Money Bag you think has 2048 behind it.</p>
          <p>You have a total of 3 attempts.</p>
          <p>Lets see how lucky you are.</p>

        </div>
      </div>

      <hr>

      <div class="footer">
        <a href="http://www.000webhost.com/" target="_blank">http://www.000webhost.com/</a>
      </div>

    </div> <!-- /container -->
	
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo $this->config->item('js_url');?>jquery.js"></script>
	<script>
	var rand = '<?php echo $rand;?>';
	var attempt = 3;
	
	function callclick(key){
		
		if(key == rand){
			jQuery("#"+key).html('<h4>2048</h4>');
			jQuery("#"+key).css( "background-color", "#01DF3A" );
			alert("You Won...!");
			location.reload();
			
		}else{
			jQuery("#"+key).html('<p>Ops...!</p>');
			jQuery("#"+key).css( "background-color", "#FA5882" );
			attempt--;
		}
		
		if(attempt == 0){
			alert("Guess you are not lucky enough, Game Over...!");
			location.reload();
		}
	}
	</script>   


	
  </body>
</html>
