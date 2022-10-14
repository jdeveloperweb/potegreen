<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
 
    /*
        Get all the records from the database
    */
    public function get_all()
    {
        $users = $this->db->get("users")->result();
        return $users;
    }
 
    /*
        Store the record in the database
    */
    public function store($data)
    {    
        $dados = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description')
        ];
 
        $result = $this->db->insert('users', $data);
        return $result;
    }
 
    /*
        Get an specific record from the database
    */
    public function get($id)
    {
        $users = $this->db->get_where('users', ['id' => $id ])->row();
        return $users;
    }
 
 
    /*
        Update or Modify a record in the database
    */
    public function update($id, $data) 
    {
        $dados = [
            'name'        => $this->input->post('name'),
            'description' => $this->input->post('description')
        ];
 
        $result = $this->db->where('id',$id)->update('users',$data);
        return $result;
                 
    }
 
    /*
        Destroy or Remove a record in the database
    */
    public function delete($id)
    {
        $result = $this->db->delete('users', array('id' => $id));
        return $result;
    }

}