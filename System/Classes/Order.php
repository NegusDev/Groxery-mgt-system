<?php

class Order extends DbController
{

    public function getAllOrders()
    {
        $sql = "SELECT * FROM orders ORDER BY date";
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
                    <td class="text-capitalize">' . $order['datetime'] . '</td>
                    <td class="text-capitalize">' . $order['order_id'] . '</td>
                    <td class="text-capitalize">' . $order['customer'] . '</td>
                    <td class="text-capitalize">' . $order['total'] . ' Ugx</td>                      
                </tr>
            ';
        }
        $html .= '</tbody>';
        return $html;

    }

    public function insertIntoOrder($table = 'orders', $data)
    {
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }
}


  
