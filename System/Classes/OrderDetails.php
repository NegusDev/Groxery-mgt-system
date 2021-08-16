<?php

class OrderDetails extends Product
{
    public function getOrderDetails()
    {
        $sql = "SELECT order_details.* , orders.order_id, product.product_id FROM order_details
        INNER JOIN orders  ON order_details.order_id = orders.order_id JOIN product ON order_details.product_id = product.product_name";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
            $products;
        }
    }

    public function getProduct($table = 'product')
    {
        $sql = "SELECT * FROM  $table";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $items[] = $row;
            }

        }
        return $items;
    }

    // Select product
    public function showProduct(array $products): string
    {
        $html = '<option value="" selected disabled  class="text-center">--Select--</option>';
        foreach ($products as $product) {
            $html .= '
            <option value="' . $product['product_id'] . '">' . $product['product_name'] . '</option>
        ';
        }
        return $html;
    }

    public function insertIntoOrderDetails($table = 'order_details', $order_id,$product_id,$quantity,$total)
    {
       $sql = "INSERT INTO {$table}(order_id,product_id,quantity,total) SELECT 
                {$order_id} FROM orders VALUES('$order_id', '$product_id','$quantity','$total');";
        $result = $this->conn->multi_query($sql) or die($this->conn->error);
        return $result;

    }
    public function getOrders(){
        $sql = "SELECT * FROM  order_details ";
        $result = $this->conn->query($sql);
        $resultArray = array();
		while ($rows = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			$resultArray[] = $rows;
		}

		return $resultArray;
    }
    public function deleteOrder($id) {
        $result = $this->conn->query("DELETE  FROM orders WHERE order_id = $id") or die($this->conn->error);
        return $result;
    }

}
