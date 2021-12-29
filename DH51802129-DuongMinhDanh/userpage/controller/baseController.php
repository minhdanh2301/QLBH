<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of baseController
 *
 * @author Admin
 */
class baseController {

    //put your code here
    public function view($name, $data = []) {
        include_once '../view/' . $name . '.php';
    }

}
