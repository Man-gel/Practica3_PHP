<!DOCTYPE html>
  <html>
	<head>
	  <title>Tweets</title>
	</head>
	<body>
	  <h1>Alumnos</h1>
	  <img src="https://www.google.es/images/srpr/logo11w.png" /><br/>
		<?php
		   $tweets = array(
		   /*1*/array(
			'id' => '1',
			'autor' => '@KurtKobain',
			'contenido' => "Hey, did you see the amazing work made by Miguel?
					It's really awesome!",
			'fecha_hora' => 'Thu Feb 25th 2015 17:31:37',
			'retweets' => '754'
			),
		   /*2*/array(
			'id' => '2',
			'autor' => '@KatyPerry',
			'contenido' => "Oh yes! I just see it and I'm pretty glad 4 be so damn lucky!",
			'fecha_hora' => 'Thu Feb 25th 2015 17:32:10',
			'retweets' => '100'),
		   /*3*/array(
			'id' => '3',
			'autor' => '@LinusTorvalds',
			'contenido' => "I'm wondering if would he accept to work with me?",
			'fecha_hora' => 'Thu Feb 25th 2015 17:32:58',
			'retweets' => '1789'),
		   /*4*/array(
			'id' => '4',
			'autor' => '@Vaticano',
			'contenido' => "Roguemos al Señor para que esa bendición que nos ha enviado
					nos ilumine durante mucho tiempo.",
			'fecha_hora' => 'Thu Feb 25th 2015 17:32:59',
			'retweets' => '3000'),
		   /*5*/array(
			'id' => '5',
			'autor' => '@EPN',
			'contenido' => "México manda una felicitación a la república de Italia por el gran talento que nos ha 
					maravillado de su poeta Miguel Ángel.",
			'fecha_hora' => 'Thu Feb 25th 2015 17:33:22',
			'retweets' => '6510'),
		   /*6*/array(
			'id' => '6',
			'autor' => '@MiguelGirlfriendOfficial',
			'contenido' => "Hey, all of you must be calm 'cause my boyfriend here, Miguel, don't read tweets!.ALVS 4ever4u!",
			'fecha_hora' => 'Thu Feb 25th 2015 17:34:01',
			'retweets' => '122'),
		   /*7*/array(
			'id' => '7',
			'autor' => '@neo',
			'contenido' => "Miguel, wake up. The Matrix has you.
					would you take the red pill or the blue one?",
			'fecha_hora' => 'Thu Feb 25th 2015 17:34:37',
			'retweets' => '0')
		   );
		   echo '<label>'.$tweets[2]['autor'].'</label>';
		   echo '<br><br>';
		?>
		<br>
		<br>
		<table>
		<tr>
		<th>ID</th>
		<th>C&oacute;digo</th>
		<th>Nombre</th>
		</tr>
		<?php /*foreach ($tweets as $tweet) { ?>
		   <tr>
		     <td><?php echo $tweet['id']; ?></td>
		     <td><?php echo $tweet['autor']; ?></td>
		     <td><?php echo $tweet['contenido']; ?></td>
		     <td><?php echo $tweet['fecha_hora']; ?></td>
		     <td><?php echo $tweet['retweets']; ?></td>
		   </tr>
		<?php } */?>
	</table>
   </body>
</html>
