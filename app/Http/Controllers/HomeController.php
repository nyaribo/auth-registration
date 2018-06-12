<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Fees;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function create()
    {
          return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $fees= new \App\Fees;
      $fees->student_id=$request->get('student_id');
      $fees->amount=$request->get('amount');
      $fees->date=$request->get('date');
      $fees->save();

      return redirect('home')->with('success', 'Payement has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id0
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fees = new \App\Fees;
        $fees = Fees::all();
   	    return view('093905.fees.welcome')->with('fees',$fees);
    }

    public function search(Request $request)
    {

      $search =$request->search;
      $fees = Fees::where('student_id','LIKE','%'.$search.'%')->get();
      // return $fees;
      // if(count($fees) > 0)
          return view('093905.fees.welcome')->with('fees',$fees);
      // else return view ('093905.fees.welcome')->withMessage('No Details found. Try to search again !');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
