<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\User;
use App\Models\Certificate;
use Excel;
use App\Imports\CertificateImport;
use DataTables;

class HomeController extends Controller
{
   

    public function index(){
        
        $role=Auth::user()->role;
        if($role=='1'){
            return view('admin.dashboard');
        }
        else{
            return view('dashboard');
        }
    }

    public function register(){
               
                
                $role=Auth::user()->role;
                if($role=='1'){
                    return view('auth.register'); 
                }
                else{
                    return view('dashboard');
                }
    }


    public function showusers(Request $request){
        $role=Auth::user()->role;
        if($role=='1'){
            $users=User::all();
        
        if ($request->ajax()) {
          
            return DataTables::of($users)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCert">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCert">Delete</a>';
    
                            //return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      

        return view('admin.showusers',compact('users'));
            
          
        }
        else{
            return view('dashboard');
        }
    }


    public function showcerts(Request $request){
        $role=Auth::user()->role;
        if($role=='1'){
            $certs=Certificate::all();
        
        if ($request->ajax()) {
           
            return DataTables::of($certs)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editCert">Edit</a>';
   
                           $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteCert">Delete</a>';
    
                            //return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      

        return view('admin.showcerts',compact('certs'));
            
          
        }
        else{
            return view('dashboard');
        }
    }

        //CSV
        public function importform(){


            $role=Auth::user()->role;
     
            if($role=='1'){
    
                return view('admin.importform');
                
            }
            else{
                return view('dashboard');
            }


          
        }

        public function import(Request $request){

            $role=Auth::user()->role;
     
            if($role=='1'){
    
                Excel::import(new CertificateImport, $request->file);
                 return "Records are imported succesfully";
                
            }
            else{
                return view('dashboard');
            }


            
        }

}
