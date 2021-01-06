<?PHP
class client1{
	private $nom;
	private $etat;
	private $email;
	private $mdp;
    private $confmdp;
    private $sexe;
    private $datee; 
    private $adresse; 
    private $num; 
	function __construct($nom,$email,$etat,$date,$adresse){
		$this->nom=$nom;
		$this->etat=$etat;
		$this->email=$email;
        $this->datee=$date;
        $this->adresse=$adresse;
   
	}
	
	function getNom(){
		return $this->nom;
	}
    
	function getEtat(){
		return $this->etat;
	}
	function getEmail(){
		return $this->email;
	}
	function getMdp(){
		return $this->mdp;
	}
   
    function getConfmdp(){
		return $this->confmdp;
	}
    function getSexe(){
		return $this->sexe;
	}
     function getDate(){
		return $this->datee;
	}
     function getAdresse(){
		return $this->adresse;
	}
    
    
    
	function setNom($nom){
		$this->nom=$nom;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setMdp($mdp){
		$this->mdp=$mdp;
	}
      function setConfmdp($confmdp){
		$this->confmdp=$confmdp;
	}  
    function setSexe($sexe){
		$this->sexe=$sexe;
	}
    function setDate($date){
		$this->datee=$date;
	}
    function setAdresse($adresse){
		$this->adresse=$adresse;
	}
    function setNum($num){
		$this->num=$num;
	}
}

?>