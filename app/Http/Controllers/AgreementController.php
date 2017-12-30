<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agreement;

class AgreementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agreements = Agreement::withCount('contacts')->withCount('certs')->get();
        return view('agreements')->with('agreements', $agreements);
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
        $request->validate([
          'agreement' => 'bail|required|unique:agreements,name|max:255',
        ]);
        $agreement = new Agreement;
        $agreement->name = $request->agreement;
        $agreement->save();
        return redirect()->route('agreement.index')
                        ->with('success','Agreement created successfully');
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
        $agreement = Agreement::withCount('certs')->findOrFail($id); 
        if ($agreement->certs_count != 0) {
        return redirect()->route('agreement.index')
                        ->with('error',"You can't delete an agreement that still has certs.");
        };
        $agreement->delete();
        return redirect()->route('agreement.index')
                        ->with('success','Agreement deleted successfully');
    }
}
