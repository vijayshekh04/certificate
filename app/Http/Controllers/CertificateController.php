<?php

namespace App\Http\Controllers;

use App\Certificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificates=Certificate::all();
        //return $certificates[1]->design;
        return view('certificate.view',compact('certificates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificate.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $file = $request->file('picture');
      //  return  $file;
        //Move Uploaded File
        $destinationPath = 'uploads/certificates';

       // return $destinationPath;
        if($request->has('picture'))
        {
            $file->move($destinationPath,$file->getClientOriginalName());
            $request->merge(["design"=>$destinationPath.'/'.$file->getClientOriginalName()]);
        }
        
        $certificate = new Certificate();
        $certificate->design=$request->design;
        $certificate->params=$request->params;
        $certificate->save();
        if ($certificate->id) {
            
            return redirect('/certificate');
            
        }
        else
        {
            return "error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificate=Certificate::find($id);
        return view('certificate.edit',compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       

        $file = $request->file('picture');
        //  return  $file;
          //Move Uploaded File
          $destinationPath = 'uploads/certificates';
  
         // return $destinationPath;
          if($request->has('picture'))
          {
              $file->move($destinationPath,$file->getClientOriginalName());
              $request->merge(["design"=>$destinationPath.'/'.$file->getClientOriginalName()]);
          }

        $certificate=Certificate::find($id);
        $certificate->design=$request->design;
        $certificate->params=$request->params;
        $certificate->save();
        return redirect('/certificate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificate=Certificate::find($id);
        $certificate->delete();
        return redirect('/certificate');
    }
}
