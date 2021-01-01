<?PHP
class facture{
	private $id_facture;
	private $id_reservation;
	private $date_facture;
	private $prixtotal;
	function __construct($id_facture,$id_reservation,$date_facture,$prixtotal){
		$this->$id_facture=$id_facture;
		$this->id_reservation=$id_reservation;
		$this->date_facture=$date_facture;
		$this->prixtotal=$prixtotal;
	}
	
	function getid_reservation(){
		return $this->id_reservation;
	}
	function getid_facture(){
		return $this->id_facture;
	}
	function getdate_facture(){
		return $this->date_facture;
	}
	function getprixtotal(){
		return $this->prixtotal;
	}

	function setid_reservation($id_reservation){
		$this->id_reservation=$id_reservation;
	}
	function setid_facture($id_facture){
		$this->id_facture=$id_facture;
	}
	function setdate_facture($date_facture){
		$this->date_facture=$date_facture;
	}
	function setprixtotal($prixtotal){
		$this->prixtotal=$prixtotal;
	}
	
}

?>