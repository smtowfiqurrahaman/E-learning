<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Brian2694\Toastr\Facades\Toastr;


class ContactController extends Controller
{
    public function contact(Request $request){
    	$this->validate($request,[
            'name' => 'required',
            'phn' => 'required',
            'email' => 'required',
            'message' => 'required'
            
        ]);

        // $image = $request->file('image');
        // $slug = Str::slug($request->name);


        // if (isset($image)) {
        //     $currentData = Carbon::now()->toDateString();
        //     $imagename = $slug.'-'.$currentData.'-'.'.'.$image->getClientOriginalExtension();
        //     if (!file_exists('uploads/course')) {
        //         mkdir('uploads/course', 077 , true);
        //     }
        //     $image->move('uploads/course', $imagename);
        // }else{
        //     $imagename = 'default.png';
        // }

        $contact = new Contact();
        $contact->contact_name = $request->name;
        $contact->contact_phn = $request->phn;
        $contact->contact_emali = $request->email;
        $contact->contact_message = $request->message;

        $contact->save();

        Toastr::success('Thanks for Connecting us. We Receive your Message. We Contact you Leter....... Thanks', 'Success', ["positionClass" => "toast-top-right"]);

        // return redirect()->route('contact.index');
        return redirect()->back();

    }
}
