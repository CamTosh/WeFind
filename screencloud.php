<html>
<meta charset="UTF-8">
<head></head>
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Sacramento|Montserrat:700);

body {
	text-align: center;
}
iframe {
  width: 640px;
  height: 480px;
}
@media only screen and (min-width: 800px) {
  iframe {
    vertical-align: left;
  }

}
@media only screen and (max-width: 768px) {
  iframe {
  width: 85%;
  height: 45%;  
}
}
</style>
<script type="text/javascript">
window.onbeforeunload = function(){
  window.scrollTo(0,0);
}
</script>
<body>
<?php 

$tableau = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
    for ($i=0; $i < 100; $i++) {
        $olol = $tableau[rand(0,(count($tableau))-1)].$tableau[rand(0,(count($tableau))-1)].$tableau[rand(0,(count($tableau))-1)].$tableau[rand(0,(count($tableau))-1)];

 $toast = 'http://screencloud.net/v/'.$olol.'';
 $roger = 'http://screencloud.net/404';

 $tweetgen = 'screencloud.net/v/'.$olol.'';
 $twitter = 'https://twitter.com/search?q=';
            
    if ( file_get_contents($toast) != file_get_contents($roger) ) {
        echo '<a href='.$twitter.''.$tweetgen.' class="link" target="_blank">'.$twitter.''.$olol.'</a>';    	
        echo '<div><a href="'.$toast.'"class="link" target="_blank">'.$olol.'</a><br><iframe src="'.$toast.'"></iframe></div><br><br>';
    }
}

?>
</body>
</html>