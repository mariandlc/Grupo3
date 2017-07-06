<?php 

/**
 * 
 */
class MarathonInfo
 {

 	protected $title;

 	protected $img;

 	protected $description = null;

 	protected $date = null;

 	protected $hour = null;

 	protected $place = null;

 	protected $price = null;

 	protected $referenceLink = null;

 	protected $subscribeLink = null;
 	
 	function __construct($title, $img)
 	{
 		
 		$this ->title = $title;

 		$this ->img = $img;
 	
 	}

 	public function getTitle()
 	{
 		return $this ->title;
 	}
 	public function getImg;()
 	{
 		return $this ->img;
 	}
 	public function getDescription()
 	{
 		return $this ->description;
 	}
 	public function getDate()
 	{
 		return $this ->date;
 	}
 	public function getPlace()
 	{
 		return $this ->place;
 	}
 	public function getreferenceLink()
 	{
 		return $this ->referenceLink;		
 	}

 	public function getsubscribeLink($value)
 	{
 		return $this ->subscribeLink;
 	}


 
 	public function setDescription($value)
 	{
 		$this ->description = $value;
 	}
 	public function setDate($value)
 	{
 		$this ->date = new DateTime($value);
 	}
 	public function setPlace($value)
 	{
 		$this ->description = $value;
 	}
 	public function setreferenceLink($value)
 	{
 		$this ->referenceLink = $value;		
 	}

 	public function setSubscribeLink($value)
 	{
 		$this ->subscribeLink = $value;
 	}
	


 } ?>