<?PHP
class 	Comment{
 
		 
	private $comment_id;
	private $comment;
	private $sender_name;
	private $datec;
	private $voyid; 
	 
	
	function __construct($comment,$sender_name){

	
		$this->comment=$comment;
		$this->sender_name=$sender_name;
		

		

	
	}
	
	function getComment_id(){
		return $this->comment_id;
	}

	
	function getComment(){
		return $this->comment;
	}
	function getSender_name(){
		return $this->sender_name;
	}
	function getDatec(){
		return $this->datec;
	}
	function getVoyid(){
		return $this->voyid;
	}
	

	function setComment_id($comment_id){
		$this->comment_id=$comment_id;
	}

	
	function setComment($comment){ 
		$this->comment=$comment;
	}
	function setSender_name($sender_name){
		$this->sender_name=$sender_name;
	}
	function setDatec($datec){
		$this->datec=$datec;
	}
	function setVoyid($voyid){
		$this->voyid=$voyid;
	}
	
	
}

?>