<?php
/**
 * Created by PhpStorm.
 * User: 0103848
 * Date: 11-9-14
 * Time: 16:42
 */




class HomeController extends CI_Controller {

    public function index()
    {
        $data['val'] = "Dit is de titeeeeel van deze view HOME";
        $this->load->view('HomeView', $data);
    }

    public function test()
    {
        echo"andere functie test()";
    }

}

?>