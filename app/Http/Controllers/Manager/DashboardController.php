<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.manager.Dashboard');
    }
    //display the scholar applicant
    public function scholarTable(Request $request){
        if($request->ajax()){
            $getScholar = User::latest()->where('status', 0)->get();
            return DataTables::of($getScholar)
            
            ->addColumn('imagename', function($getScholar){
                $tes = ' <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <img alt="Image placeholder" src="/images/'.$getScholar->photo.'">
                        </a>
                        <div class="media-body">
                          <span class="name mb-0 text-sm">'.$getScholar->name.'</span>
                        </div>
                      </div>';               
                return $tes; 
            })
            ->addColumn('facebook', function($getScholar){
                $btn = '<button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                          <a href="'.$getScholar->facebook.'">View Facebook Profile</a>
                        </button>';
                                 
                return $btn; 
            })

            ->addColumn('action', function($getScholar){
                $btn = '<button type="button" class="btn btn-success">Success</button>
                <button type="button" class="btn btn-danger">Danger</button>
                <button type="button" class="btn btn-warning">Warning</button>';
                                 
                return $btn; 
            })


            
            ->rawColumns(['imagename', 'facebook', 'action'])
            ->make(true);  
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
