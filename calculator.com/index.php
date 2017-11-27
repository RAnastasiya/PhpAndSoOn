<html>
 <head>
  <title>Calculator</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <div id="calculator">
    <form method="POST" action=''>
    	<div class="top">
        <?php
        $value = htmlspecialchars($_POST['value']);
      //  echo $value;
        if ($value == ''){
          echo '<input class="screen" type="text" name="value" value="">';
          include 'index.html';
          exit;
        }
        elseif (!eregi ('[0-9]', $value) || eregi ('[a-zA-Z]', $value)){
          $x= $value."= syntax error ";
          echo '<input class="screen" type="text" name="value" value="'.$x.'">';
          include 'index.html';
          exit;
        }
        list($x, $y, $superfluous) = split('[+-/*]', $value);
        if ($superfluous != ''){
          $x= $value."= error ";
          echo '<input class="screen" type="text" name="value" value="'.$x.'">';
          include 'index.html';
        }
	witch ($value) {
	    case '+':
		$rez = $x + $y;
          	$token = '+';
		break;
	    case '-':
		$rez = $x - $y;
          	$token = '-';
		break;
	    case '*':
		$rez = $x * $y;
          	$token = '*';
		break;
	    case '*':
		if($y == "0"){ # / 0
		    $x= "You can't divide by 0";
		    echo '<input class="screen" type="text" name="value" value="'.$x.'">';
		    include 'index.html';
		    exit;  //  die;
		  }else {
		    $rez = $x / $y;
		    $token = '/';
		  }
		break;
	}

        $x=  $x.$token.$y."=".$rez;
        echo '<input class="screen" type="text" name="value" value="'.$x.'">';
        include 'index.html';
        ?>
