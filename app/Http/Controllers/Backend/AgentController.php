<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function AgentDashboard(){

        return view('Backend.Agent.agent_dashboard');
    }
}
