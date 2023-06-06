<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request){
        $data =$request->all();

        $validator = Validator::make($data,[
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        if($validator->fails()){
            return response()->json(
                [
                    'success'=>false,
                    'errors'=>$validator->errors(),
                ]
            );
        }

        $contact = new Lead();
        $contact->fill($data);
        $contact->save();

        $newContact = new NewContact($contact);

        Mail::to('zotaedward@gmail.com')->send($newContact);

        return response()->json(
            [
                'success'=>true,
            ]
            );

    }
}
