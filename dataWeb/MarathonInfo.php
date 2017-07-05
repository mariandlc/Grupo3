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

 	protected $oficialSite = null;
 	
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
 	public function getOficialSite()
 	{
 		return $this ->oficialSite;		
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
 	public function setOficialSite($value)
 	{
 		$this ->oficialSite = $value;		
 	}
	


 } ?>