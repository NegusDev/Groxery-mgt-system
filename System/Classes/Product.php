<?php

class Product extends DbController
{

    public function getAllProducts()
    {

        $sql = "SELECT product.* , uom.uom_name FROM product
                INNER JOIN uom ON product.uom_id = uom.uom_id";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }

        }
        return $products;

    }

    public function viewAllProducts(array $products): string
    {
        $html = '<tbody id="tbody">';
        foreach ($products as $product) {
            $html .= '
                    <tr>
                            <td class="text-capitalize">' . $product['product_name'] . '</td>
                            <td class="text-capitalize">' . $product['number_of_produt'] . '</td>
                            <td class="text-capitalize">' . $product['uom_name'] . '</td>
                            <td  class="text-capitalize">' . $product['price_per_unit'] . '</td>
                            <td class=""> 
                             <a href="updateProduct.php?update=' . $product['product_id'] . '" class="btn btn-success">Update</a> 
                             <a href="deleteProduct.php?product=' . $product['product_id'] . '" class="btn btn-danger">Delete</a> 
                            </td>                       
                    </tr>
                ';
        }
        $html .= '</tbody>';
        return $html;

    }
    
    public function getProductById(int $product_id): array
    {

        $result = $this->conn->query("SELECT * FROM   `product` WHERE `product_id`=$product_id ") or die($this->conn->error);
        //      While loop for fetching product data one by one
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $product = $row;
            }
        }
        return $product ?? [];
    }

    public function createProduct($table, $data)
    {
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }

    public function deleteProduct($product_id = null, $table = 'product') {
        if ($this->conn != null) {
            if ($product_id != null) {
                $result = $this->dbc->con->query("DELETE FROM $table WHERE product_id = $product_id") or die($this->conn->error);
                if ($result) {
                    // RELOAD PAGE
                    header("Location:" . $_SERVER['PHP_SELF']);
                }
                return $result;
            }
        }

    }

    public function updateProduct($product_id = null,$product_name,$qty,$uom,$price) {
        if ($this->conn != null) {
            if ($product_id != null) {
                $sql = "UPDATE product 
                        SET `product_name` ='$product_name', `number_of_produt` ='$qty' ,  `uom_id` = '$uom', `price_per_unit` = '$price'
                        WHERE `product_id` = '$product_id' ";
                $result = $this->conn->query($sql) or die($this->conn->error);
                if ($result) {
                    return true;
                } else {
                    return false;
                }
            }

        }
        return false;
    }
    public function getTotalRows($table = 'admins') {
        $result = $this->conn->query("SELECT * FROM {$table}") or die($this->conn->error);
        $num = mysqli_num_rows( $result);
        return $num;
    }


}

