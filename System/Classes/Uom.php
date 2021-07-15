<?php


class Uom extends Product
{
    public function getUom($uom = 'uom')
    {
        $sql = "SELECT * FROM $uom";
        $result = $this->conn->query($sql) or die($this->conn->error);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $uoms[] = $row;
            }
            return $uoms;
        }
    }

    public function ShowUom(array $uoms): string
    {
        $html = '<option value="">--Select--</option>';
        foreach ($uoms as $uom) {
            $html .= '
                <option value="' . $uom['uom_id'] . '">' . $uom['uom_name'] . '</option>
            ';
        }
        return $html;
    }
}