<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Certificate;


class CertificateController extends Controller
{
    //function the gets the data from the database 
    //and sents it to the ajax

//With the help of request im able to retrieve the afm value from ajax
//that was passed as parameter
    public function fetchcertificates(Request $request){
        
        //So if i have request
        if($request->ajax()){
            //fetch from database the rows with that afm from certificates table

            //relevance search
            //$data=Certificate::where('afm','like','%'.$request->search.'%')->get();

            //exact search
            $data=Certificate::where('afm','=',$request->search)->get();



         $output='';
        if(count($data)>0){
            //I must not forget to replace the  127.0.0.1 to the domain that the app will be uploaded
                    $output='
                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">ΑΦΜ</th>
                        <th scope="col">Επίθετο</th>
                        <th scope="col">Όνομα</th>
                        <th scope="col">Μάθημα</th>
                        <th scope="col">email</th>
                        <th scope="col">Ημ/νια Ολοκλήρωσης</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>';
                            foreach($data as $key=>$row){
                                $output.='
                                <tr>
                                <th scope="row">'.++$key.'</th>
                                <td>'.$row->afm.'</td>
                                <td>'.$row->surname.'</td>
                                <td>'.$row->name.'</td>                            
                                <td>'.$row->course.'</td>
                                <td>'.$row->email.'</td>
                                <td>'.$row->cert_date.'</td>
                             

                                <td><a class="btn btn-primary" href="http://localhost:11303/pdf/'.$row->id.'">PRINT</a></td>
                
                                </tr>
                                ';
                                
                            }
                        
                
                        $output.='</tbody>
                </table>';

        }
        else{
            $output.="No results";
        }
        
        }else{
            $output="No results";
        }




    return $output;


        /*$certificates=Certificate::all();
        return response()->json([
            'certificates'=>$certificates,
        ]);*/

    }





}
