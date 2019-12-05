
<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
    private $_table = "login";

    public $login_id;
    public $username;
    public $password;

    public function rules()
    {
        return [
            ['field' => 'username',
            'label' => 'username',
            'rules' => 'required'],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required',
            'rules' => 'required'],

         ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["login_id" => $id])->row();
    }

    public function save()
    {
    	
        $post = $this->input->post();
        $this->login_id = uniqid();
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->db->insert($this->login, $this);
    }
    function cek_login($table,$where){	
    	return $this->db->get_where($table,$where);
    	

	}	
}
