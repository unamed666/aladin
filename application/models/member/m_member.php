<?php 
class M_member extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
	}
 
	function register($username,$password,$nama,$notelp,$alamat)
	{
		$data_user = array(
			'username_m'=>$username,
			'password_m'=>password_hash($password,PASSWORD_DEFAULT),
            'nama_m'=>$nama,
            'notelp_m'=>$notelp,
            'alamat_m'=>$alamat
		);
		$this->db->insert('member',$data_user);
	}

	
	function login_user($username,$password)
	{
        $query = $this->db->get_where('member',array('username_m'=>$username));
        if($query->num_rows() > 0)
        {
            $data_user = $query->row();
            if (password_verify($password, $data_user->password_m)) {
                $this->session->set_userdata('username_m',$username); 
                $this->session->set_userdata('nama_m',$data_user->nama_m);
                $this->session->set_userdata('alamat_m',$data_user->alamat_m);
                $this->session->set_userdata('notelp_m',$data_user->notelp_m);
				$this->session->set_userdata('is_login',TRUE);
                return TRUE;
            } else {
                return FALSE;
            }
        }
        else
        {
            return FALSE;
        }
	}
	
    function cek_login()
    {
        if(empty($this->session->userdata('is_login')))
        {
			redirect('login_m');}
	}
}
?>