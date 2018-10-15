<?php

class Banki_model extends CI_Model
{

    public function getBanki()
    {
        //  $this->db->where("parent_id", 0);
        $query = $this->db->get('bis_banki');
        return $query->result();
    }


    public function getBanka($id)
    {
        $this->db->where("id", $id);
        $query = $this->db->get('bis_banki');
        $return = $query->result();

        return $return[0];
    }

    public function create_banka()
    {
        $insert_data = $this->input->post();
        $insert      = $this->db->insert('bis_banki', $insert_data);
        return $insert;
    }


    public function delete_banka($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('bis_banki');


    }

    public function update_banka()
    {
        $field_update_data =	$this->input->post();

        $this->db->where('id',$field_update_data['id']);
        unset($field_update_data['id']);
        $this->db->update('bis_banki', $field_update_data);
    }



}