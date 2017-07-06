<?php 
require_once('InfoWeb.php');

$url = 'https://iloverunn.com.ar/myrunn/index.php/category/dates-2/';

//$infoLoveRun = new InfoBase($url);

$contPage = 2;

while ($infoLoveRun = InfoWeb::createInfoWeb($url)){


	$images = [];
	$nodeImgList = $infoLoveRun  ->query("//*[@class='zn_full_image kl-blog-full-image']//img/@src");
	foreach($nodeImgList as $node){
		$images[] = $node->nodeValue;
	}


	$nodeList = $infoLoveRun ->query("//*[@class='zn_full_image kl-blog-full-image']/a/@href");

	$contImages = 0;
	foreach($nodeList as $node){

		//link
		echo 'link: '.$node ->nodeValue;
		echo '<br>';

		// info inside each link
		$infoLoveRunLinkInside = new InfoWeb($node ->nodeValue);
		// titule link
		$nodeH1 = $infoLoveRunLinkInside ->query("//h1");
		if (!empty($nodeH1 ->item(0))){
			echo 'Titulo:<h2> '.$nodeH1 ->item(0)->nodeValue.'</h2>';
		}
		else echo 'Titulo: none';
		echo '<br>';

		// image
		echo '<img src="'.$images[$contImages].'">';
		$contImages++;
		echo '<br>';

		
		// description
		$nodeP = $infoLoveRunLinkInside ->query("//p");
		$description = [];
		echo 'descripción: ';
		echo '<br>';
		foreach($nodeP as $node){
			
			if(!preg_match('/© 2016/',$node->nodeValue)){
				
				$description[] = $node->nodeValue;
				echo $node->nodeValue;
				
			
			}
			echo '<br>';
		}		
	}
	// next url in https://iloverunn.com.ar/myrunn/index.php/category/dates-2.
	$url = $url.'page/'.$contPage.'/';
	$contPage++;	
}



 ?>