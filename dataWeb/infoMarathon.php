<?php 
require_once('InfoWeb.php');

define("DATE", "Fecha:");
define("HOUR", "Horario:");
define("MARATHON_TYPES", "Modalidades:");
define("PLACE", "Lugar:");



$url = 'http://maraton.com.ar/calendario-de-carreras/';

$infoSports = InfoWeb::createInfoWeb($url);
/*
// images
$images = [];
$nodeList = $infoSports ->query("//*[@class='ev_ftImg']//@data-img");

foreach($nodeList as $node){
	
	$images[] = $node->nodeValue;

}
$contImages = 0;*/

$links = [];
$nodeList = $infoSports ->query("//*[@class='evo_event_schema']//a/@href");
foreach ($nodeList as $node) {
	if(!in_array($node ->nodeValue, $links)){
		$links[] = $node ->nodeValue;
	}
}


foreach ($links as $link) {
	
	$info = new InfoWeb($link);
	
	//title 
	$nodeH1 = $info  ->query("//*[@class='evcal_desc2 evcal_event_title']");
	if (!empty($nodeH1 ->item(0))){
		echo 'Titulo:<h3> '.$nodeH1 ->item(0)->nodeValue.'</h3>';
	}
	else echo 'Titulo: none';
	echo '<br>';

	//image
	$nodeImg = $info  ->query("//*[@class='evo_metarow_directimg']//img/@src");
	if (!empty($nodeImg ->item(0))){
		echo '<img src="'.$nodeImg ->item(0)->nodeValue.'">';
	}
	else echo 'Image: none';
	echo '<br>';
	
	//*[@id="event_8521"]/div[2]/div[2]/div[2]/div/div[1]/p/text()[1]
	$nodeH1 = $info  ->query("//*[@class='eventon_desc_in']//p/text()[1]");
	echo "<pre>";
	echo($nodeH1 ->item(0)->nodeValue);
	echo "</pre>";

	$nodeH1 = $info  ->query("//*[@class='eventon_desc_in']//p/text()[2]");
	echo "<pre>";
	echo($nodeH1 ->item(0)->nodeValue);
	echo "</pre>";

	$nodeH1 = $info  ->query("//*[@class='eventon_desc_in']//p/text()[3]");
	echo "<pre>";
	echo($nodeH1 ->item(0)->nodeValue);
	echo "</pre>";

	$nodeH1 = $info  ->query("//*[@class='eventon_desc_in']//p/text()[4]");
	echo "<pre>";
	echo($nodeH1 ->item(0)->nodeValue);
	echo "</pre>";

	$nodeH1 = $info  ->query("//*[@class='eventon_desc_in']//p//a/@href");
	echo "<pre>";
	echo($nodeH1 ->item(0)->nodeValue);
	echo "</pre>";

	$nodeH1 = $info  ->query("//*[@class='eventon_desc_in']//p/text()[6]");
	echo "<pre>";
	echo($nodeH1 ->item(0)->nodeValue);
	echo "</pre>";
	/*
	//date
	$nodeDate = $infoSportsLinkInside ->query("//*[@class='tribe-events-meta-group tribe-events-meta-group-details']//abbr/@title");
	if (!empty($nodeDate ->item(0))){
		echo 'Date:<h2> '.$nodeDate ->item(0)->nodeValue.'</h2>';
	}
	else echo 'Date: none';
	echo '<br>';

	//hour
	$nodeDate = $infoSportsLinkInside ->query("//*[@class='tribe-events-abbr tribe-events-start-time published dtstart']");
	if (!empty($nodeDate ->item(0))){
		echo 'Hour:<h2> '.$nodeDate ->item(0)->nodeValue.'</h2>';
	}
	else echo 'Hour: none';
	echo '<br>';

	//place
	$nodeTime = $infoSportsLinkInside ->query("//*[@class='mapgg']");
	if (!empty($nodeTime ->item(0))){
		$buffer = $nodeTime ->item(0)->nodeValue;
		$place = substr($buffer, 0, strpos($buffer, '+'));
		echo 'Place:<h2> '.$place.'</h2>';
	
	}
	else echo 'Place: none';
	echo '<br>';

	// price
	$nodeTime = $infoSportsLinkInside ->query("//*[@class='ev_price']");
	if (!empty($nodeTime ->item(0))){
		$buffer = $nodeTime ->item(0)->nodeValue;
		$price = substr($buffer,strpos($buffer, '$'));
		echo 'Price:<h2> '.$price.'</h2>';
	
	}
	else echo 'Price: none';
	echo '<br>';

	// site original
	$nodeTime = $infoSportsLinkInside ->query("//*[@class='tribe-events-event-url']//a/@href");
	if (!empty($nodeTime ->item(0))){
		$buffer = $nodeTime ->item(0)->nodeValue;
		$price = substr($buffer,strpos($buffer, '$'));
		echo 'Site original:<h2> '.$price.'</h2>';
	
	}
	else echo 'Site original: none';*/
	echo '<br>';
	echo '--------------------------------------------------------------';
	echo '<br>';

}


?>