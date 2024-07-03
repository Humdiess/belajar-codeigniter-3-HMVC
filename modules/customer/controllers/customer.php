<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Admin {

	/**
	 * DEVELOPER: OITOC
	 * Author: SANTO DONI ROMADHONI
	 * Website : oitoc.co.id 
	 * email : oitocdev@gmail.com
	****/
    /**
     * [__construct description]
     *
     * @method __construct
     */
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    /**
     * [index description]
     *
     * @method index
     *
     * @return [type] [description]
     */
	public function index()
	{
        $this->data['pagetitle'] = "Customer Page"; 
		$mydata['result'] = '';
		$this->data['content']=$this->load->view('customer_view',$mydata,true);
        $this->display();
    }
    public function create() {
        $this->data['pagetitle'] = "Create Customer";
        $mydata["result"] = '';
        $this->data['content'] = $this->load->view('create', $mydata, true);
        $this->data['last_page'] = '/customer';
        $this->data['current_page'] = 'Create';
        $this->display();
    }
}