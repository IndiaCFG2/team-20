<?php
class Bid{
  
    // database connection and table name
    private $conn;
    private $table_name = "bidding";
  
    // object properties
    public $bid_id;
    public $user_id;
    public $product_id;
    public $bid_price;
    public $bid_time;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read products
    function read(){
  
    // select all query
        $query = "SELECT
                p.bid_id, p.user_id,
                p.bid_price, p.bid_time
            FROM
                " . $this->table_name . " p
            WHERE
                p.product_id = ?
            ORDER BY
                bid_price DESC limit 12";
  
        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id of product to be updated
     //   $stmt->bindParam(1, $this->id);
  
        // execute query
        $stmt->execute();
  
        return $stmt;
    }
}
?>