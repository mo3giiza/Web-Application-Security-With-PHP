
<?php 

class Helper {

    public $dummy = "hacked!";
    public $exec = "ls";

    public function __wakeup()
        {
            system($this->exec);
        }
}

$message = "";

if(isset($_POST["serialized"])) {
    unserialize($_POST["serialized"]);
    $message = "Data was unserialized!!";
}

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <label>Data to be unserialized</label>
    <textarea name="serialized" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    <small id="emailHelp"><?php echo $message; ?></small>
</body>
</html>