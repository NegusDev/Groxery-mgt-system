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
            return $products;

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

    public function insertIntoOrderDetails($table = 'order_details', $data)
    {
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->multi_query($sql) or die($this->conn->error);
        return $result;

    }

    // add to order details
    // public function addToOrderDetails($order_id,$product_id,$quantity,$total_price) {
    //     if (isset($order_id) && isset($product_id) && isset($quantity) && isset($total_price)) {

    //         $params = array(
    //             "order_id" => $order_id,
    //             "product_id" => $product_id,
    //             "quantity" => $quantity,
    //             "total_price" => $total_price
    //         );
    //         $result = $this->insertIntoOrderDetails($params);
    //         if ($result) {
    //         // RELOAD PAGE
    //             header("Location:" .$_SERVER['PHP_SELF']);
    //         }

    //     }

    // }


}


// $order_datas = [];
//         foreach ($order_datas as $order_data) {
//             $order_data['order_id'];
//             $order_data['product_id'];
//             $order_data['quantity'];
//             $order_data['total_price'];
//         }
//         $result = $this->conn->query($sql,$order_datas) or die($this->conn->error);