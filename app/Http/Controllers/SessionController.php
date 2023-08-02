<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use Auth;

class SessionController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $session = Session::where('user_id', Auth::User()->id)->first();
        return view('session.index', compact('session'));
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->route('session.index')->with('success','session has been deleted successfully');
    }
}
