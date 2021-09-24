<?php

class Order extends DbController
{

    public function getAllOrders()
    {
        $sql = "SELECT * FROM orders ORDER BY datetime DESC";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $orders[] = $row;
            }
            return $orders;
        }

    }

    public function viewAllOrders(array $orders): string
    {
        $html = '<tbody id="tbody">';
        foreach ($orders as $order) {
            $html .= '
                <tr>
                    <td class="text-capitalize">' . date('F j h:m', strtotime($order['datetime'] )) . '</td>
                    <td class="text-capitalize">' . $order['order_id'] . '</td>
                    <td class="text-capitalize">' . $order['customer'] . '</td>
                    <td class="text-capitalize">' . $order['total'] . ' Ugx</td>                      
                </tr>
            ';
        }
        $html .= '</tbody>';
        return $html;

    }
    // get total amount

    public function getTotalAmount() {
        $sql = "SELECT sum(total) AS Total FROM orders";
        $result = $this->conn->query($sql);
        $row= mysqli_fetch_array($result);
        $total = $row['Total'];
        echo $total;
    }

    public function insertIntoOrder($table = 'orders', $order,$products)
    {
        $this->conn->begin_transaction();
        $this->conn->autocommit(0);
        //get columns
        $columns = implode(',', array_keys($order));
        $values = "'" . implode("','", array_values($order)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        $order_id = $this->conn->insert_id;
        //what goes below herer
        // $products = [];
        $queries = [];
        foreach ($products as $product) {
            $queries[] = "INSERT INTO order_details(order_id,product_id,quantity,total_price   ) 
                        VALUES({$order_id},{$product['product_id']},{$product['qty']},{$product['total_price']})";
        }
        
        foreach ($queries as $query) {
            $this->conn->query($query) or die($this->conn->error);
        }
        return $this->conn->commit();
    }
}


  
