<?php

class Salesman extends DbController
{
    public function getSalesman()
    {
        $sql = "SELECT * FROM `salesman` ";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                $salesmans[] = $rows;
            }
            return $salesmans;

        }
    }

    public function viewSalesman(array $sales): string
    {
        $html = '<option>Select Salesman</option>';
        foreach ($sales as $sale) {
            $html .= ' <option value="' . $sale['salesman_id'] . '">' . $sale['salesman_name'] . '</option>';
        }
        $html;
        return $html;
    }

    public function CreateEmployee($table, $data) {
        //get columns
        $columns = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";

        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);
        $result = $this->conn->query($sql) or die($this->conn->error);
        return $result;
    }
}