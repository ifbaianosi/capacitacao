<?php
namespace Capacitacao\Http\Controllers;
use Illuminate\Support\Facades\View;
use Capacitacao\Http\Requests;
use Capacitacao\Http\Controllers\Controller;

class CapacitacaoController extends Controller
{
    // use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
	public function pasta(){
		return view("pagina");
	}
}
?>
