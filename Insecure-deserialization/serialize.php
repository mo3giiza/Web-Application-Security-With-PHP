<?php 

class User{
    
    public $id = 10;
    public $fname = "Muhammed";
    public $lname = "Azab";
    public $role = "user";
    public $arr = array();

    public function __construct(){
        echo "[*] Constructor Called\n";
        $this->arr[0] = "First entry";
        $this->arr[1] = "Second entry";
    }

}
$u = new User;
echo "[*] Serialized Class\n\n";
echo serialize($u) . "\n\n";

?>