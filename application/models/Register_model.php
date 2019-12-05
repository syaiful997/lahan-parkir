<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model
{
    private $_table = "register";

    public $register_id;
    public $email;
    public $username;
    public $password;
    public $alamat;
    public $handphone;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'
        ],

            ['field' => 'username',
            'label' => 'username',
        	 'rules' => 'required'
        ],

            ['field' => 'password',
            'label' => 'password',
            'rules' => 'required'
        ],
            
            ['field' => 'alamat',
            'label' => 'alamat',
            'rules' => 'required'
        ],

            ['field' => 'handphone',
            'label' => 'handphone',
            'rules' => 'required','numeric'
        ]

        ];
    }

   

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["register_id" => $id])->row();
    }

    public function save()
    {
    	
        $post = $this->input->post();
        $this->register_id = uniqid();
        $this->email = $post["email"];
        $this->username = $post["username"];
        $this->password = $post["password"];
        $this->alamat = $post["alamat"];
        $this->handphone = $post["handphone"];
     

		/*$this->email = "fdsg";
        $this->username = "fdsg";
        $this->password = "fdsg";
        $this->alamat = 99;
        $this->handphone = "fff";
        */

        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("register_id" => $id));
    }

     function cek_login($table,$where){	
    	return $this->db->get_where($table,$where);
    	

	}	
}