<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CommsController extends Controller
{
    
    public $callScript;
    
    function requestCall() {
        
        $this->callScript = 'js/waitForCall.js';
        
        return $this->activateCommunication();
        
    }
    
    function startCall(Request $req) {
        
        $this->callScript = 'js/startCall.js';
        
        return $this->activateCommunication($req->get('myid'));
        
    }
    
    public function activateCommunication($req = 0) {
        
        return view('credentials')->with( array('callScript' => $this->callScript, 'callID' => $req) );
        
    }
}
