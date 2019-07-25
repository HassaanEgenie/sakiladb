<?php
defined("BASEPATH") or die("No direct script acess allowed");

class Sakila_Model extends CI_Model
{
    public function getdata()
    {
        $query = $this->db->get('actor');
        return $query->result();
    }

    public function updatedata($id, $update_data)
    {
        $this->db->where('actor_id', $id);
        $this->db->update('actor', $update_data);
    }

    public function deleat_data($sid)
    {
        $this->db->where('actor_id', $sid);
        $query = $this->db->delete('actor');

    }

    public function orwhere($id, $lastname, $firstname, $update_data)
    {
        $this->db->where('last_name', $lastname);
        $this->db->or_where('first_name', $firstname);
        $this->db->or_where('actor_id', $id);
        $this->db->update('actor', $update_data);

    }
    public function multiwhere($id, $firstname, $lastname, $update)
    {
        $this->db->where('last_name', $lastname);
        $this->db->where('first_name', $firstname);
        $this->db->where('actor_id', $id);
        $this->db->update('actor', $update_data);
    }
    public function getnewdata()
    {

        $this->db->order_by("phone", "desc");
        $this->db->where('phone BETWEEN "' . '14033335568' . '" and "' . '949312333307' . '"');
        $query = $this->db->get('address');
        return $query->result();

    }
    public function doubledate()
    {

        $this->db->order_by("postal_code", "desc");
        $this->db->where("postal_code >=", "14033335568");
        $this->db->where("postal_code <=", "517338314235");
        $query = $this->db->get('address');
        return $query->result();

    }
    public function joindata()
    {
        $this->db->select('actor.*,address.city_id');

        $this->db->join('address_id', 'address.city_id =actor.actor_id ');

        $query = $this->db->get('actor');
        return $query->result();

    }
}