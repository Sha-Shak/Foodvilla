<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/../lib/Database.php');
include_once ($filepath.'/../helper/Format.php');
?>
<?php
class Cart{
	
	private $db;
	private $fm;

	public function __construct()
	{
		$this->db = new Database();
		$this->fm = new Format();
	}
	public function addToCart($quantity, $id){
		$quantity = $this->fm->validation($quantity);

		$quantity = mysqli_real_escape_string($this->db->link, $quantity);
		$productId = mysqli_real_escape_string($this->db->link, $id);
		$sId       = session_id();

		$zquery = "SELECT * FROM tbl_product WHERE productId = '$productId'";
		$result = $this->db->select($zquery)->fetch_assoc();

		$productname = $result['productname'];
		$price       = $result['price'];
		$image       = $result['image'];

		$query = "INSERT INTO tbl_cart(sId, productId, productname, price, quantity, image) 
    VALUES('$sId','$productId','$productname','$price', '$quantity', '$image')";

    $inserted_row = $this->db->insert($query);
			if ($inserted_row) {
				header("Location:cart.php");
			} else{
				header("Location:404.php");
			}
	}
	public function getCartProduct(){
		$sId = session_id();
		$query = "SELECT * FROM tbl_cart WHERE sId = '$sId'";
		$result = $this->db->select($query);
		return $result;
	}

}
?>
