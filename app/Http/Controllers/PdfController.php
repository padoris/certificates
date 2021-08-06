<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\User;
use App\Models\Certificate;

use PDF;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

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
        $certificate_to_print=Certificate::where('id','=',$id)->get();

       
        $view = view('pdf', ['certificate_to_print'=>$certificate_to_print]);
        $html = mb_convert_encoding($view, 'HTML-ENTITIES', 'UTF-8');
        $html_decode = html_entity_decode($html);

        $pdf = \PDF::loadHTML($view)
            ->setPaper('a4', 'portrait')
            ->setWarnings(false)
            ->setOptions(['isFontSubsettingEnabled' => true]);

        return $pdf->download('info_certificate.pdf');
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
