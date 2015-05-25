<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 5/24/15
 * Time: 12:45 AM
 */

namespace app\Http\Controllers;

use Auth;
use Session;
use App\DataType;
use App\Food;
use App\Unit;
use App\Location;
use App\ImportExport;
use App\ProductionRequirement;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
class AdminController extends  Controller{

    public function getIndex()
    {
        return view('admin.home');
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function getProductionRequirement()
    {
        $data['dataType'] = DataType::all();
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        return view('admin.productionRequirement',$data);
    }

    public function postProductionRequirement()
    {
//        dd(Input::all());
        $rules = array(
            'data_type_id'=> "required",
            'start_date'  => 'required|date_format:Y-m-d',
            'end_date'  => 'required|date_format:Y-m-d',
            'food_id'  => 'required',
            'quantity'  => 'required|numeric',
            'unit_id'  => 'required',
            'location_id'  => 'required',
        );
        $messages = array(
            'data_type_id.required' => 'Please Select a Data Type',
            'start_date.date_format' => 'Start Date Will be Y-m-d',
            'end_date.date_format' => 'End Date Will be Y-m-d',
            'food_id.required' => 'Please Select A Food',
            'unit_id.required' => 'Please Select a Measure Unit',
            'location_id.required' => 'Please Select a Location',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $productionRequirement = new ProductionRequirement();
            $productionRequirement->data_type_id = Input::get('data_type_id');
            $productionRequirement->start_date = Input::get('start_date');
            $productionRequirement->end_date = Input::get('end_date');
            $productionRequirement->food_id = Input::get('food_id');
            $productionRequirement->quantity = Input::get('quantity');
            $productionRequirement->unit_id = Input::get('unit_id');
            $productionRequirement->location_id = Input::get('location_id');
            $productionRequirement->save();
            return 'true';
        endif;
    }

    public function getImport()
    {
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        return view('admin.import',$data);
    }
}