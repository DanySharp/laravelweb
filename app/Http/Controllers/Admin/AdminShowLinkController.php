<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ShowLinkRequest;
use App\Models\showlink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminShowLinkController extends Controller
{

    public function index()
    {
        $showlinks=showlink::paginate(5);
        return view('admin.showlinks.index',compact('showlinks'));
    }


    public function create()
    {
        return view('admin.showlinks.create');
    }


    public function store(ShowLinkRequest $request)
    {
        $showlink=new showlink();
        $showlink->url_link=$request->input('url_link');
        $showlink->url_title=$request->input('url_title');
        $showlink->save();
        Session::flash('add_linkurl','لینک روزانه ثبت شد');
        return redirect('/showlinks');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {

    }



    public function update(ShowLinkRequest $request, $id)
    {

    }


    public function destroy($id)
    {
        $showlink=showlink::FindOrFail($id);
        $showlink->delete();

        Session::flash('delete_linkurl',' لینک مورد نظر حذف شد');
        return redirect()->back();
    }
}
