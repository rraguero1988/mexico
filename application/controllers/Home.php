                                                                                                                                                                                                                                                                                                 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = [];
        $this->load->view('admin/home/loader', $data);
    }

}
