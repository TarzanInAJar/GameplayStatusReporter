<?php
require_once 'API.class.php';
class MarleyAPI extends API
{
    protected $User;

    public function __construct($request, $origin) {
        parent::__construct($request);

    }

    /**
     * Example of an Endpoint
     */
     protected function example() {
        if ($this->method == 'GET') {
            //return "Your name is " . $this->User->name;
            return "Works!";
        } else {
            return "Only accepts GET requests";
        }
     }
 }
 ?>