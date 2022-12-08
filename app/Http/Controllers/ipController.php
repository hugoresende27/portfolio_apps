<?php

namespace App\Http\Controllers;

use App\Http\MyClasses\ipClient;
use Illuminate\Http\Request;

class ipController extends Controller
{

    private $ipClient;


    public function __construct()
    {
        $this->ipClient = new ipClient();
    }

    public function myIP()
    {

        $res =  $this->ipClient->getIP();

        $res = json_decode($res);

        return view ('ip.my-ip', compact ('res'));
    }
}
