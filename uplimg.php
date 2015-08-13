<?php 

$tableau = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
	for ($i=0; $i < 100; $i++) {
    	$olol = $tableau[rand(0,(count($tableau))-1)].$tableau[rand(0,(count($tableau))-1)].$tableau[rand(0,(count($tableau))-1)];

 $toast = 'http://uplmg.com/'.$olol.'';
 $roger = 'http://uplmg.com/404';

 $tweetgen = 'uplmg.com/'.$olol.'';
 $twitter = 'https://twitter.com/search?q=';
            
    if ( file_get_contents($toast) != file_get_contents($roger) ) {
        echo '<a href='.$twitter.''.$tweetgen.' class="link" target="_blank">'.$twitter.''.$rand.'</a>';
        echo '<div><a href="'.$toast.'"class="link" target="_blank">'.$olol.'</a><br><iframe src="'.$toast.'"></iframe></div>';
    }
}

?>