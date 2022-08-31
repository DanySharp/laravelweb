<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReqestContact;
use App\Models\contact;
use App\Models\showlink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts=contact::paginate(5);
        return view('admin.contacts.index',compact('contacts'));
    }


    public function create()
    {
        return view('admin.contacts.create');
    }


    public function store(ReqestContact $request)
    {
        $contact=new contact();
        $contact->title=$request->input('title');
        $contact->matn=$request->input('matn');
        $contact->phone=$request->input('phone');
        $contact->email=$request->input('email');
        $contact->telegram=$request->input('telegram');
        $contact->instagram=$request->input('instagram');
        $contact->linkedin=$request->input('linkedin');
        $contact->link=$request->input('link');
        $contact->save();
        Session::flash('add_contact','لینک روزانه ثبت شد');
        return redirect('/contacts');
    }


    public function show($id)
    {

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        $contact=contact::FindOrFail($id);
        $contact->delete();

        Session::flash('delete_contact',' ردیف مورد نظر حذف شد');
        return redirect()->back();
    }
}
