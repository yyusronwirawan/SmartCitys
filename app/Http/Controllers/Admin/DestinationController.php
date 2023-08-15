<?php

namespace App\Http\Controllers\Admin;

use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:destination-C', ['only' => ['index','list','show']]);
        $this->middleware('permission:destination-R', ['only' => ['create','store']]);
        $this->middleware('permission:destination-U', ['only' => ['edit','update']]);
        $this->middleware('permission:destination-D', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Wisata';
        $data['items'] = Destination::all();
        return view('adm.destination.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['isEdit'] = false;
        $data['title'] = 'Wisata';
        return view('adm.destination.add_edit', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'body' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data['name'] = $request->name;
        $data['category'] = $request->category;
        $data['body'] = $request->body;
        $data['author_id'] = Auth::user()->id;
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $destinationPath = 'fe/img/post/destination/';
            $profileImage = 'destination/' . $request->category . date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $data['thumbnail'] = $profileImage;
        }
        Destination::create($data);
        return redirect()->route('admin.destination.index')->with('success', 'Created Data Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['title'] = 'Wisata';
        $data['item'] = Destination::find($id);
        return view('adm.destination.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['isEdit'] = true;
        $data['title'] = 'Wisata';
        $data['item'] = Destination::find($id);
        return view('adm.destination.add_edit', $data);
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
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'body' => 'required',
            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data['name'] = $request->name;
        $data['category'] = $request->category;
        $data['body'] = $request->body;
        $data['author_id'] = Auth::user()->id;
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $destinationPath = 'fe/img/post/destination/';
            $profileImage = 'destination/' . $request->category . date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $data['thumbnail'] = $profileImage;
        }
        Destination::find($id)->update($data);
        return redirect()->route('admin.destination.index')->with('success', 'Updated Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Destination::find($id);
        // File::delete(public_path('fe/img/post/'.$data->thumbnail));
        $data->delete();

        return redirect()->route('admin.destination.index')->with('success','Deleted Data Success!');
    }
}
