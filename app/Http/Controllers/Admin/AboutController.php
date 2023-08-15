<?php

namespace App\Http\Controllers\Admin;

use App\Models\Opd;
use App\Models\Misi;
use App\Models\Visi;
use App\Models\About;
use App\Models\Structural;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:about-R|about-C|about-U|about-D', ['only' => ['index','store']]);
        $this->middleware('permission:about-R', ['only' => ['index', 'list']]);
        $this->middleware('permission:about-C', ['only' => ['create', 'store']]);
        $this->middleware('permission:about-U', ['only' => ['edit', 'update']]);
        $this->middleware('permission:about-D', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'About';
        $data['about'] = About::latest('id')->first();
        $data['visi'] = Visi::latest('id')->first();
        $data['misi'] = Misi::latest('id')->first();
        $data['opd'] = Opd::latest('id')->first();
        $data['bupati'] = Structural::first();
        $data['wakil_bupati'] = Structural::latest('id')->first();
        return view('adm.about.index', $data);
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
        $this->validate($request, [
            'body' => 'required',
        ]);

        $data['body'] = $request->body;
        About::find($id)->update($data);

        return back()->with('success','Data Berhasil Tersimpan');
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
