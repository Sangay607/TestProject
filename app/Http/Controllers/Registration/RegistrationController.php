<?php

namespace App\Http\Controllers\registration;
use App\Models\registration\RoleModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\registration\UserModel;

class RegistrationController extends Controller
{
    public function Register(){
        $response_data=RoleModel::where('status','Active')->get();
        return view('Register')->with('response_data', $response_data);
    }

    public function create_role(Request $request){
        $role_data=[
            'name'          => $request->role_name,
            'status'        => $request->status,
            'created_by'    => 1,
            'created_at'    => date('Y-m-d h:i:s'),
            'updated_at'    => date('Y-m-d h:i:s'),
            'updated_by'    => 1,
        ];
        //dd($role_data);
        RoleModel::create ($role_data);
        return redirect()->away('/get_role_list/ALL/NA/ALL');
    }
    public function get_role_list($param_type,$id,$status){
        if($param_type=="ALL"){
            $response_data=RoleModel::get();
        }
        if($param_type=="BYID"){
            $response_data=RoleModel::where('id,%id')->get();
            //slect * from t_role_master where id='?';
        }
        if($param_type=="Status"){
            $response_data=RoleModel::where('status',$status)->get();
            //slect * from t_role_master where status='Active';
        }
        return view('list_role')->
        with(compact('response_data'));
        
    }
    public function edit_role($id){
        $data=RoleModel::where('id',$id)->first();
        return view('edit_role')-> with(compact("data"));
    }
    public function delete_role($id){
        RoleModel::where('id',$id)->delete();
        return redirect()->away('/get_role_list/ALL/NA/ALL');
    }
    public function update_role(Request $request){
        $role_data=[
            'name'          => $request->role_name,
            'status'        => $request->status,
            'updated_at'    => date('Y-m-d h:i:s'),
            'updated_by'    => 1,
        ];
        RoleModel::where('id',$request->record_id)->update($role_data);
        return redirect()->away('/get_role_list/ALL/NA/ALL');
    }
    public function register_new_user(Request $request){
        $user_data=[
            'full_name'     => $request->full_name,
            'contact_no'    => $request->Phone_number,
            'email'         => $request->email,
            'role_id'       => $request->role,
            'created_at'    => date('Y-m-d h:i:s'),
            'created_by'    => 1,
            'updated_at'    => date('Y-m-d h:i:s'),
            'updated_by'    => 1, 
            'updated_by'    => 1,
        ];
        //dd($user_data);
        UserModel::create ($user_data);
        return redirect()->away('/get_role_list/ALL/NA/ALL');
}
}