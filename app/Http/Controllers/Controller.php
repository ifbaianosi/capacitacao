<?php

namespace capacitacao\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class CapacitacaoController extends Controller
{
   // use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	public function pasta(){
		return "isso vai funcionar!";
	}
}
