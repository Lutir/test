<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Users;
use Log;


class AdminController extends Controller
{
   
   public function addName(Request $request)
   {
   		
   			$bool = Users::where('name',$request->input('name'))
   					->first();
   			if(!$bool){
   				$name = new Users();
   				$name->name = $request->input('name');
               $name->position = $request->input('position');
				$name->save();
				return json_encode(1);
   			}
   			else{
   				return json_encode(0);
   			}
   		
   }

   public function removeName(Request $request)
   {
   		
   			$bool = Users::where('name',$request->input('name'))
   					->first();
   			if($bool){
   				Users::where('name',$request->input('name'))
   					->delete();
   				return json_encode(1);
   			}
   			return json_encode(0);
   		
   }

   public function viewTherapist(Request $request)
   {
            Log::info($request->input('position'));
            $bool = Users::where('position',$request->input('position'))->get();
            Log::info($bool);
            if($bool){               
               return json_encode($bool);
            }
            return json_encode(0);
         
   }

   public function viewAll(Request $request)
   {
   		
   			$data = Users::all();
   			return json_encode($data);
   		
   }

}
