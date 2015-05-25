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
use App\Country;
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

    /**
     * @return string
     */
    public function postProductionRequirement()
    {
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
            $productionRequirement->quantity = trim(Input::get('quantity'));
            $productionRequirement->unit_id = Input::get('unit_id');
            $productionRequirement->location_id = Input::get('location_id');
            $productionRequirement->save();
            return 'true';
        endif;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function getImport()
    {
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        $data['countryList'] = Country::all();
        return view('admin.import',$data);
    }

    /**
     * @return string
     */
    public function postImport()
    {
        $rules = array(
            'start_date'  => 'required|date_format:Y-m-d',
            'end_date'  => 'required|date_format:Y-m-d',
            'food_id'  => 'required',
            'country_id'  => 'required',
            'quantity'  => 'required|numeric',
            'price'  => 'required|numeric',
            'unit_id'  => 'required',
            'location_id'  => 'required',
        );
        $messages = array(
            'start_date.date_format' => 'Start Date Will be Y-m-d',
            'end_date.date_format' => 'End Date Will be Y-m-d',
            'food_id.required' => 'Please Select A Food',
            'unit_id.required' => 'Please Select a Measure Unit',
            'location_id.required' => 'Please Select a Location',
            'country_id.required' => 'Please Select a Country',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $data = Input::all();
            $import = new ImportExport();
            $import->food_id = Input::get('food_id');
            $import->start_date = Input::get('start_date');
            $import->end_date = Input::get('end_date');
            if(isset($data['import_saarc']))
            $import->import_saarc = Input::get('import_saarc');
            $import->country_id = Input::get('country_id');
            $import->quantity = trim(Input::get('quantity'));
            $import->unit_id = Input::get('unit_id');
            $import->price = trim(Input::get('price'));
            $import->location_id = Input::get('location_id');
            $import->status = 1;
            $import->save();
            return 'true';
        endif;
    }

    public function getExport()
    {
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        $data['countryList'] = Country::all();
        return view('admin.export',$data);
    }

    public function postExport(){
        $rules = array(
            'start_date'  => 'required|date_format:Y-m-d',
            'end_date'  => 'required|date_format:Y-m-d',
            'food_id'  => 'required',
            'country_id'  => 'required',
            'quantity'  => 'required|numeric',
            'price'  => 'required|numeric',
            'unit_id'  => 'required',
            'location_id'  => 'required',
        );
        $messages = array(
            'start_date.date_format' => 'Start Date Will be Y-m-d',
            'end_date.date_format' => 'End Date Will be Y-m-d',
            'food_id.required' => 'Please Select A Food',
            'unit_id.required' => 'Please Select a Measure Unit',
            'location_id.required' => 'Please Select a Location',
            'country_id.required' => 'Please Select a Country',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $data = Input::all();
            $import = new ImportExport();
            $import->food_id = Input::get('food_id');
            $import->start_date = Input::get('start_date');
            $import->end_date = Input::get('end_date');
            $import->country_id = Input::get('country_id');
            $import->quantity = trim(Input::get('quantity'));
            $import->unit_id = Input::get('unit_id');
            $import->price = trim(Input::get('price'));
            $import->location_id = Input::get('location_id');
            $import->status = 0;
            $import->save();
            return 'true';
        endif;
    }
}