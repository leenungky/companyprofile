<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PHPExcel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Helpers\Helpers;
use Illuminate\Support\Facades\Input;
use Redirect;
use DNS2D;
use \URL;
use \PHPExcel_IOFactory, \PHPExcel_Style_Fill, \PHPExcel_Cell, \PHPExcel_Cell_DataType, \SiteHelpers;
use Illuminate\Support\Facades\Validator;

class TrackingController extends Controller {
    
    public function __construct(Request $req){        
        $this->data["user"] = \Auth::user();
        $this->page = 15;        
    }

	public function index(){
        return view('index');
    }

    public function contact(Request $req){
        $helpers = new Helpers();
        $result = $helpers->submitContact($req);
        if ($result->response->code == 200){
            $req->session()->flash('flash_message', 'Terima kasih atas pesannya, kami akan segera meresponse pesan anda');
        }
        return Redirect::to("/#contact");
    }

    public function tarif(Request $req){
        $validator = Validator::make($req->all(), [            
            'to' => 'required',
            'weight' => 'required'            
        ]);

        if ($validator->fails()) {            
            return Redirect::to(URL::previous())->withInput(Input::all())->withErrors($validator);            
        }

        $data["from"]  = "JAKARTA";        
        $to            = $req->input("to", "");
        $data["to"]    = $to;
        $arrTo = explode(",", $to);        
        $params = array(
            "token" => config('config.token'), 
            "city" => trim($arrTo[0]), 
            "kecamatan" => isset($arrTo[1]) ? trim($arrTo[1]) : "");
        $helpers = new Helpers();
        $data["result"] = $helpers->getTarifByKecamatan($params);
        $data["weight"] = $req->input("weight", "");
        $data["helpers"] = new Helpers();
        return view('tarif', $data);
    }

    public function get_tarif(Request $req){        
    	$input = $req->input("filter","");
        $helpers = new Helpers();
        $arrData = $helpers->getTarifByFilter($input);
        return response()->json($arrData);
    }

    public function tracking(){
        return view('tracking');
    }
    


}
    