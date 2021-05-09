<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
     public function index(){
         $contacts= contact::all();

         return view('content.index' ,compact('contacts'));
     }
     public function create(){
         return view('content.Create');
     }
     public function store( Request $request){
           $request->validate([
            'product_name'=> 'required',
            'product_price' => 'required',
            'product_qty' => 'required'
           ]);
           $contact = new Contact();
           $contact->name = $request->product_name;
           $contact->price = $request->product_price;
           $contact->Quantity = $request->product_qty;
           $contact->save();
           return redirect('/content');
     }
    public function edit($id ){
        $contact = Contact::findOrFail($id);
        return view('content.edit' , compact('contact'));

    }
    public function update( Request $request , $id){
        $request->validate([
            'product_name'=> 'required',
            'product_price' => 'required',
            'product_qty' => 'required'
           ]);
           $contact = new Contact();
           $contact->name = $request->product_name;
           $contact->price = $request->product_price;
           $contact->Quantity = $request->product_qty;
           $contact->save();
           return redirect('/content');

    }
    public function delete($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/content');
    }
     public function myname(){

     }
}
