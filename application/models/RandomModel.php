<?php 

class RandomModel extends CI_Model{
	function checkactivate($hash, $col) {
        // $col = column name, $hash = random key
                $query = $this->db->get_where('user', array($col => $hash));
        //if this hash exists
                if ($query->num_rows > 0) :
        
                    $this->db->where($col, $hash);
                    $this->db->update('user', array('confirmed' => 1));
                    $data['true'] = TRUE;
                    $data['result'] = $query->result();
                else :
                    $data['true'] = FALSE;
                endif;
                return $data;
            }
        
            function update($table, $id, $array) {
                $this->db->where('id', $id);
                $q = $this->db->update($table, $array);
            }
}