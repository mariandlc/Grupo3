<?php 

require_once('InfoWeb.php');

$url = 'http://sportsfacilities.com.ar/carreras/';

$infoSports = InfoWeb::createInfoWeb($url);

// images
$images = [];
$nodeList = $infoSports ->query("//*[@class='span12 imge']//img/@src");

foreach($nodeList as $node){
	
	$images[] = $node->nodeValue;

}
$contImages = 0;

$nodeList = $infoSports ->query("//*[@class='span12 modern_style']//a/@href");

//*[@id="tribe-events-content"]/div[1]/div[2]/div/div/div/div[2]/div[1]/h3
foreach ($nodeList as $node) {
	
	$infoSportsLinkInside = new InfoWeb($node ->nodeValue);
	
	//title
	$nodeH1 = $infoSportsLinkInside  ->query("//h1");
	if (!empty($nodeH1 ->item(0))){
		echo 'Titulo:<h2> '.$nodeH1 ->item(0)->nodeValue.'</h2>';
	}
	else echo 'Titulo: none';
	echo '<br>';

	//image
	echo '<img src="'.$images[$contImages].'">';
	$contImages++;
	echo '<br>';


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
	else echo 'Site original: none';
	echo '<br>';
	echo '--------------------------------------------------------------';
	echo '<br>';

}

/*$nodeList = $infoSports ->query("//*[@class='span12 imge']//img/@src");

//*[@id="tribe-events-content"]/div[1]/div[2]/div/div/div/div[2]/div[1]/h3
foreach ($nodeList as $node) {
	
	echo "<pre>";
	var_dump($node);
	echo "</pre>";
	
}
*/

$nodeList = $infoSports ->query("//*[@class='tribe-events-single-section-title']");

foreach ($nodeList as $node) {
	
	echo "<pre>";
	var_dump($node);
	echo "</pre>";
	
}


?>