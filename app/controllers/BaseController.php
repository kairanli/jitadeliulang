<?php
   
 use Phalcon\Mvc\Controller;


 class BaseController extends Controller
 {
	public function initialize(){
		phpinfo();
	}	
 }
