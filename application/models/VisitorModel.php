<?php

class VisitorModel extends CI_Model{
    function __construct()
    {
         parent::__construct();
    }
    public function getAllvisitor()
    {
        $this->db->order_by('ip');
        return  $this->db->get('visitor')->result_array();
 
    }
    public function getvisitorByip($ip)
    {
        return $this->db->get_where('visitor',['ip' => $ip])->row_array();
         
    }
    public function editvisitor($ip)
    {
        $data['visitor'] = $this->db->get_where('visitor',['ip' => $ip])->row_array();
        $data = [
			"hits" => $this->input->post('hits', true),
           ];
           $this->db->where('ip', $this->input->post('ip'));
           $this->db->update('visitor', $data);
    }
}