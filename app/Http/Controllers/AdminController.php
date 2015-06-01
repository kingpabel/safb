<?php

namespace app\Http\Controllers;

use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use Session;
use App\DataType;
use App\Food;
use App\Unit;
use App\Location;
use App\Country;
use App\ImportExport;
use App\DamageType;
use App\DamageLevel;
use App\Damage;
use DB;
use App\ProductionRequirement;
use App\MemberList;
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

    public function getProductionRequirementForm()
    {
        $data['dataType'] = DataType::all();
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        return view('admin.productionRequirement',$data);
    }

    public function getProductionRequirement()
    {
        $data = array();
        $data['productionRequirement'] = ProductionRequirement::all();
        return view('admin.productionRequirementTotal',$data);
    }

    public function getProductionRequirementShow($id)
    {
        $data['productRequirementData']  = ProductionRequirement::find($id);
        return view('admin.productionRequirementView', $data);
    }

    public function getProductionRequirementEdit($id)
    {
        $data['dataType'] = DataType::all();
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        $data['productRequirementData']  = ProductionRequirement::find($id);
        return view('admin.productionRequirementEdit', $data);
    }
    public function postProductionRequirementEdit($id)
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
            $productionRequirement = ProductionRequirement::find($id);
            $productionRequirement->data_type_id = Input::get('data_type_id');
            $productionRequirement->start_date = Input::get('start_date');
            $productionRequirement->end_date = Input::get('end_date');
            $productionRequirement->food_id = Input::get('food_id');
            $productionRequirement->quantity = trim(Input::get('quantity'));
            $productionRequirement->unit_id = Input::get('unit_id');
            $productionRequirement->location_id = Input::get('location_id');
            $productionRequirement->save();
            Session::flash('flashSuccess', 'Production Requirement Data Updated Successfully');
            return 'true';
        endif;
    }

    public function getImport()
    {
        $data['importAll'] = ImportExport::where('status',1)->get();
        return view('admin.importList',$data);
    }


    public function getImportShow($id)
    {
        $data['import'] = ImportExport::where('status',1)->where('id', $id)->first();
        return view('admin.importView',$data);
    }

    public function getImportEdit($id)
    {
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        $data['countryList'] = Country::all();
        $data['import'] = ImportExport::find($id);
        return view('admin.importEdit',$data);
    }

    public function postImportEdit($id)
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
            $import = ImportExport::find($id);
            $import->food_id = Input::get('food_id');
            $import->start_date = Input::get('start_date');
            $import->end_date = Input::get('end_date');
            if(isset($data['import_saarc']))
                $import->import_saarc = Input::get('import_saarc');
            else
                $import->import_saarc = 0;
            $import->country_id = Input::get('country_id');
            $import->quantity = trim(Input::get('quantity'));
            $import->unit_id = Input::get('unit_id');
            $import->price = trim(Input::get('price'));
            $import->location_id = Input::get('location_id');
            $import->status = 1;
            $import->save();
            Session::flash('flashSuccess', 'Import Data Update Successfully');
            return 'true';
        endif;
    }

    public function getExport()
    {
        $data = array();
        $data['importAll'] = ImportExport::where('status',0)->get();
        return view('admin.exportList',$data);
    }
    public function getDamage()
    {
        $data = array();
        $data['damageAll'] = Damage::all();
        return view('admin.damageList',$data);
    }

    public function getExportShow($id)
    {
        $data['export'] = ImportExport::find($id);
        return view('admin.exportView', $data);
    }

    public function getExportEdit($id){
        $data['foodList'] = Food::all();
        $data['unitList'] = Unit::all();
        $data['locationList'] = Location::all();
        $data['countryList'] = Country::all();
        $data['export'] = ImportExport::find($id);
        return view('admin.exportEdit',$data);
    }

    public function postExportEdit($id){
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
            $import = ImportExport::find($id);
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
            Session::flash('flashSuccess', 'Export Data Updated Successfully');
            return 'true';
        endif;
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
    public function getImportForm()
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

    public function getExportForm()
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

    public function getDamageForm()
    {
        $data['foodList'] = Food::all();
        $data['locationList'] = Location::all();
        $data['damageList'] = DamageType::all();
        $data['damageLevelList'] = DamageLevel::all();
        return view('admin.damage', $data);
    }

    public function getDamageShow($id)
    {
        $data['damage'] = Damage::find($id);
        return view('admin.damageView', $data);
    }

    public function getDamageEdit($id)
    {
        $data['foodList'] = Food::all();
        $data['locationList'] = Location::all();
        $data['damageList'] = DamageType::all();
        $data['damageLevelList'] = DamageLevel::all();
        $data['damage'] = Damage::find($id);
        return view('admin.damageEdit', $data);
    }
    public function postDamageEdit($id)
    {
        $rules = array(
            'start_date'  => 'required|date_format:Y-m-d',
            'end_date'  => 'required|date_format:Y-m-d',
            'food_id'  => 'required',
            'location_id'  => 'required',
            'quantity'  => 'required|numeric',
            'damage_type_id'  => 'required',
            'damage_level_id'  => 'required',
            'details'  => 'required',
        );
        $messages = array(
            'start_date.date_format' => 'Start Date Will be Y-m-d',
            'end_date.date_format' => 'End Date Will be Y-m-d',
            'food_id.required' => 'Please Select A Food',
            'location_id.required' => 'Please Select a Location',
            'damage_type_id.required' => 'Please Select a Damage Type',
            'damage_level_id.required' => 'Please Select a Damage Level',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            $errorMessage =  $validator->messages()->first();
            Session::flash('flashError', $errorMessage);
            return redirect("admin/damage/$id/edit");
        else:
            $file = Input::file('file');
            if($file) {
                $destinationPath = public_path() . '/damage/';
                $filename = $file->getClientOriginalName();
                Input::file('file')->move($destinationPath, $filename);
            }
            $damage = Damage::find($id);
            $damage->start_date = Input::get('start_date');
            $damage->end_date = Input::get('end_date');
            $damage->food_id = Input::get('food_id');
            $damage->location_id = Input::get('location_id');
            $damage->quantity = Input::get('quantity');
            $damage->damage_type_id = Input::get('damage_type_id');
            $damage->damage_level_id = Input::get('damage_level_id');
            $damage->details = Input::get('details');
            if(isset($filename))
                $damage->file = $filename;
            $damage->save();
            Session::flash('flashSuccess', 'Damage Data Updated Successfully');
            return redirect("admin/damage");
        endif;
    }

    public function postDamage()
    {
        $rules = array(
            'start_date'  => 'required|date_format:Y-m-d',
            'end_date'  => 'required|date_format:Y-m-d',
            'food_id'  => 'required',
            'location_id'  => 'required',
            'quantity'  => 'required|numeric',
            'damage_type_id'  => 'required',
            'damage_level_id'  => 'required',
            'details'  => 'required',
        );
        $messages = array(
            'start_date.date_format' => 'Start Date Will be Y-m-d',
            'end_date.date_format' => 'End Date Will be Y-m-d',
            'food_id.required' => 'Please Select A Food',
            'location_id.required' => 'Please Select a Location',
            'damage_type_id.required' => 'Please Select a Damage Type',
            'damage_level_id.required' => 'Please Select a Damage Level',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            $errorMessage =  $validator->messages()->first();
        Session::flash('flashError', $errorMessage);
        return redirect('admin/damage');
        else:
            $file = Input::file('file');
            if($file) {
                $destinationPath = public_path() . '/damage/';
                $filename = $file->getClientOriginalName();
                Input::file('file')->move($destinationPath, $filename);
            }
            $damage = new Damage();
            $damage->start_date = Input::get('start_date');
            $damage->end_date = Input::get('end_date');
            $damage->food_id = Input::get('food_id');
            $damage->location_id = Input::get('location_id');
            $damage->quantity = Input::get('quantity');
            $damage->damage_type_id = Input::get('damage_type_id');
            $damage->damage_level_id = Input::get('damage_level_id');
            $damage->details = Input::get('details');
            if(isset($filename))
                $damage->file = $filename;
            $damage->save();
            Session::flash('flashSuccess', 'Damage Data Save Successfully');
            return redirect('admin/damage');
        endif;
    }

    public  function getReportRequirement()
    {
        $data['foods'] = Food::all();
        return view('admin.reportRequirementForm', $data);
    }

    public  function getReportProduction()
    {
        $data['foods'] = Food::all();
        return view('admin.reportProductionForm', $data);
    }

    public  function getReportImportFood()
    {
        $data['foods'] = Food::all();
        return view('admin.reportImportFoodForm', $data);
    }

    public  function getReportImportMember()
    {
        $data['foods'] = Food::all();
        return view('admin.reportImportMemberForm', $data);
    }

    public  function getReportExportFood()
    {
        $data['foods'] = Food::all();
        return view('admin.reportExportFoodForm', $data);
    }

    public function postReportExportFood(){

        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $query = ImportExport::select(DB::raw('sum(quantity) as total_quantity'),'food_id','unit_id','start_date','end_date','id')
            ->selectRaw('SUM(price * quantity) as total_price')
            ->where('status',0)
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('food_id'))
            $query = $query->where('food_id', Input::get('food_id'));


        $data['imports'] = $query->groupBy('food_id')->get();
        if($data['imports']->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-import-food');
        }
        return view('admin.reportImport',$data);
    }

    public function postReportImportMember(){

        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $query = ImportExport::select(DB::raw('sum(quantity) as total_quantity'),'food_id','unit_id','start_date','end_date','id')
            ->selectRaw('SUM(price * quantity) as total_price')
            ->where('import_saarc',1)
            ->where('status',1)
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('food_id'))
            $query = $query->where('food_id', Input::get('food_id'));


        $data['imports'] = $query->groupBy('food_id')->get();
        if($data['imports']->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-import-member');
        }
        return view('admin.reportImport',$data);
    }

    public function postReportImportFood(){

        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $query = ImportExport::select(DB::raw('sum(quantity) as total_quantity'),'food_id','unit_id','start_date','end_date','id')
            ->selectRaw('SUM(price * quantity) as total_price')
            ->where('status',1)
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('food_id'))
            $query = $query->where('food_id', Input::get('food_id'));


        $data['imports'] = $query->groupBy('food_id')->get();
        if($data['imports']->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-import-food');
        }
        return view('admin.reportImport',$data);
    }

    public function postReportRequirement(){

        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $query = ProductionRequirement::select(DB::raw('sum(quantity) as total_quantity'),'food_id','unit_id','start_date','end_date','id')
                                        ->where('data_type_id',1)
                                        ->where('start_date','>=',$startDate)
                                        ->where('end_date','<=',$endDate);
        if(Input::get('food_id'))
            $query = $query->where('food_id', Input::get('food_id'));


        $data['requirements'] = $query->groupBy('food_id')->get();
        if($data['requirements']->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-requirement');
        }
        return view('admin.reportRequirement',$data);
    }

    public function postReportProduction(){

        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $query = ProductionRequirement::select(DB::raw('sum(quantity) as total_quantity'),'food_id','unit_id','start_date','end_date','id')
            ->where('data_type_id',2)
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('food_id'))
            $query = $query->where('food_id', Input::get('food_id'));


        $data['requirements'] = $query->groupBy('food_id')->get();
        if($data['requirements']->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-production');
        }
        return view('admin.reportRequirement',$data);
    }

    public function getAddMember()
    {
        $data['countryList'] = Country::all();
        return view('admin.addMember', $data);
     }

    public function postAddMember(){
        $rules = array(
            'member_type'=> "required",
            'name'  => 'required',
            'country_id'  => 'required',
            'code'  => 'required',
        );
        $messages = array(
            'member_type.required' => 'Please Select a Member Type',
            'country_id.required' => 'Please Select A Country',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $productionRequirement = new MemberList();
            $productionRequirement->member_type = Input::get('member_type');
            $productionRequirement->name = Input::get('name');
            $productionRequirement->country_id = Input::get('country_id');
            $productionRequirement->code = Input::get('code');
            $productionRequirement->save();
            Session::flash('flashSuccess', 'Member Added Successfully');
            return 'true';
        endif;
    }

    public function getMemberGoverning()
    {
        $data['allMember'] = MemberList::where('member_type', 1)->get();
        return view('admin.governingBodyMember', $data);
     }

    public function getMemberFocal()
    {
        $data['allMember'] = MemberList::where('member_type', 2)->get();
        return view('admin.focalMember', $data);
     }

    public function getMemberEdit($id)
    {
        $data['member'] = MemberList::find($id);
        $data['countryList'] = Country::all();
        return view('admin.memberEdit', $data);
    }

    public function postMemberEdit($id)
    {
        $rules = array(
            'member_type'=> "required",
            'name'  => 'required',
            'country_id'  => 'required',
            'code'  => 'required',
        );
        $messages = array(
            'member_type.required' => 'Please Select a Member Type',
            'country_id.required' => 'Please Select A Country',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $productionRequirement = MemberList::find($id);
            $productionRequirement->member_type = Input::get('member_type');
            $productionRequirement->name = Input::get('name');
            $productionRequirement->country_id = Input::get('country_id');
            $productionRequirement->code = Input::get('code');
            $productionRequirement->save();
            Session::flash('flashSuccess', 'Member Data Added Successfully');
            return 'true';
        endif;
    }

    public function getReportStorageLocation()
    {
        $data['allLocation'] = Location::all();
        return view('admin.reportStorageLocationForm', $data);
    }

    public function postReportStorageLocation()
    {
        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $requirementsQuery = ProductionRequirement::select(DB::raw('sum(quantity) as total_quantity'),'location_id','food_id')
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('location_id'))
            $requirementsQuery = $requirementsQuery->where('location_id', Input::get('location_id'));

        $requirements= $requirementsQuery->groupBy('location_id','food_id')->get();


        $eximQuery = ImportExport::select(DB::raw('sum(quantity) as total_quantity'),'location_id','food_id')
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('location_id'))
            $eximQuery = $eximQuery->where('location_id', Input::get('location_id'));

        $exims = $eximQuery->groupBy('location_id','food_id')->get();

        if($requirements->count() == 0 && $exims->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-storage-location');
        }

        $newRequirement = array();
        if($requirements->count() > 0) {
            foreach($requirements as $key => $requirement){
                $newRequirement[$key]['total_quantity'] = $requirement->total_quantity;
                $newRequirement[$key]['food_id'] = $requirement->food_id;
                $newRequirement[$key]['food_name'] = $requirement->Food->name;
                $newRequirement[$key]['location_id'] = $requirement->location_id;
                $newRequirement[$key]['location_name'] = $requirement->Location->name;
            }
        }

        $newExim = array();
        if($exims->count() > 0) {
            foreach($exims as $key => $exim){
                $newExim[$key]['total_quantity'] = $exim->total_quantity;
                $newExim[$key]['food_id'] = $exim->food_id;
                $newExim[$key]['food_name'] = $exim->Food->name;
                $newExim[$key]['location_id'] = $exim->location_id;
                $newExim[$key]['location_name'] = $exim->Location->name;
            }
        }

        $totalArray = array_merge($newRequirement,$newExim);
        $data['totalProductByLocation'] = array_reduce($totalArray, function ($a, $b) {
            if(isset($a[$b['location_id']]) && isset($a[$b['food_id']]))
                $a[$b['location_id']][$b['food_id']]['total_quantity'] += $b['total_quantity'];
            else
                $a[$b['location_id']][$b['food_id']] = $b;
            return $a;
        });

        return view('admin.reportStorageLocation',$data);
    }

    public function getReportDamage()
    {
        $data['allDamageType'] = DamageType::all();
        return view('admin.reportDamageForm', $data);
    }

    public function postReportDamage()
    {
        $startDate = Input::get('start_date');
        $endDate = Input::get('end_date');
        $data['start_date'] = $startDate;
        $data['end_date'] = $endDate;

        $query = Damage::select(DB::raw('sum(quantity) as total_quantity'),'damage_type_id','id')
            ->where('start_date','>=',$startDate)
            ->where('end_date','<=',$endDate);
        if(Input::get('damage_type_id'))
            $query = $query->where('damage_type_id', Input::get('damage_type_id'));


        $data['damages'] = $query->groupBy('damage_type_id')->get();
        if($data['damages']->count() == 0) {
            Session::flash('flashError', "There is no report between $startDate to $endDate");
            return redirect('admin/report-damage');
        }
        return view('admin.reportDamage',$data);
    }

    public function getAddUser()
    {
        $data['allCountry'] = Country::all();
        return view('admin.userAdd', $data);
    }

    public function postAddUser()
    {
        $rules = array(
            'user_email'=> "required|unique:users,user_email",
            'password'  => 'required|min:6|max:10',
            'country_id'  => 'required',
        );

        $messages = array(
            'country_id.required' => 'Please Select A Country',
        );
        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $user = new User();
            $user->user_email = Input::get('user_email');
            $user->country_id = Input::get('country_id');
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            Session::flash('flashSuccess', 'User Added Successfully');
            return 'true';
        endif;
    }

    public function getUserList(){
        $data['allUser'] = User::where('user_level', 2)->get();
        return view('admin.allUser', $data);
    }

    public function getUserEdit($id)
    {
        $data['user'] = User::find($id);
        $data['allCountry'] = Country::all();
        return view('admin.userEdit', $data);
    }

    public function postUserEditPassword($id)
    {
        $rules = array(
            'password'  => 'required|min:6|max:10',
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $user = User::find($id);
            $user->password = Hash::make(Input::get('password'));
            $user->save();
            Session::flash('flashSuccess', 'Password Updated Successfully');
            return 'true';
        endif;
    }
    public function postUserEditUsername($id)
    {
        $rules = array(
            'user_email'=> "required|unique:users,user_email,$id",
            'country_id'  => 'required',
        );

        $messages = array(
            'country_id.required' => 'Please Select A Country',
        );

        $validator = Validator::make(Input::all(), $rules, $messages);
        if ($validator->fails()):
            return $validator->messages()->first();
        else:
            $user = User::find($id);
            $user->user_email = Input::get('user_email');
            $user->country_id = Input::get('country_id');
            $user->save();
            Session::flash('flashSuccess', 'User Name Updated Successfully');
            return 'true';
        endif;
    }
}