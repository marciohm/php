<?php
foreach (json_decode(file_get_contents('http://worldcup.sfg.io/matches')) as $jogo) {
	echo $jogo->status == 'completed' ? substr($jogo->datetime, 0, 10) . ' | ' . $jogo->home_team->country . ' ' . $jogo->home_team->goals . ' x ' . $jogo->away_team->country . ' ' . $jogo->away_team->goals . '<br/>' : '';
}
?>