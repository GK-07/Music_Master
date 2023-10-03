<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_c extends CI_Controller
{
	// public function displayuser()
	// {
	// 	$this->load->model("signup_m", "am");
	// 	$bdata=$this->am->getuserinfo();
	// 	$k=array(
	// 		"bdata"=>$bdata
	// 	);
	// 	$this->load->view("musicadmin_v/default/userdis", $k);

	// }
// 	public function blockunblock_c($id,$status)
// {
// 	$this->load->model("musicadmin_m/Displayuser_m", "am");
// 	if($status==0)
// 	{
// 		$status=1;
// 	}
// 	else
// 	{
// 		$status=0;
// 	} 
// 	$this->am->blockunblock_m($id, $status);
// 	redirect("Musicadmin_c/Displayuser_c/displayuser");
// 	}
 	/*public function index()
 	{
 		$this->load->view("signup");
 	}*/

 	//Function to add user 
	public function adduser()
	{
		$this->load->model("signup_m","bm");
        $data=array(
        	"username"=>$this->input->post("txtuname"),
        	"password"=>$this->input->post("txtpwd"),
        	"email"=>$this->input->post("txtemail"),
        	"profilepic"=>$this->input->post("txtpropic"),
        	"contactno"=>$this->input->post("txtcontact"),
        	
        	"dob"=>$this->input->post("txtdob"), 
        	"gender"=>$this->input->post("txtgender")
        	
        );
		$this->bm->insertuser($data);
		redirect("home");
	}

	//function to validate login 
	public function dologin()
	{
		$t=array
		(
			"username"=>$this->input->post("username"),
			"password"=>$this->input->post("password")
		);
		$this->load->model("signup_m","bm");
		$x=$this->bm->login($t);
		if($x==false)
		{
		?>
			<script type="text/javascript">
				alert("Invalid username or password");
			</script>
		<?php
		}
		else
		{
			$this->session->name=$x->username;
			$this->session->uid=$x->userid;
			redirect("home");
		}
	}
	//function to logout
	public function logout()
	{
		session_destroy();
		redirect("home");
	}
}