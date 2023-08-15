<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:event-C', ['only' => ['index','list','show']]);
        $this->middleware('permission:event-R', ['only' => ['create','store']]);
        $this->middleware('permission:event-U', ['only' => ['edit','update']]);
        $this->middleware('permission:event-D', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Wisata';
        $data['items'] = News::where('category', 'Event')->get();
        return view('adm.event.index', $data);
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
        return view('adm.event.add_edit', $data);
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
            'body' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data['name'] = $request->name;
        $data['category'] = 'Event';
        $data['body'] = $request->body;
        $data['author_id'] = Auth::user()->id;
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $destinationPath = 'fe/img/post/';
            $profileImage = $request->category . date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $data['thumbnail'] = $profileImage;
        }
        News::create($data);
        return redirect()->route('admin.event.index')->with('success', 'Created Data Success!');
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
        $data['item'] = News::find($id);
        return view('adm.event.show', $data);
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
        $data['item'] = News::find($id);
        return view('adm.event.add_edit', $data);
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
            'body' => 'required',
            // 'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        $data['name'] = $request->name;
        $data['category'] = 'Event';
        $data['body'] = $request->body;
        $data['author_id'] = Auth::user()->id;
        if ($request->hasFile("thumbnail")){
            $thumbnail = $request->thumbnail;
            $destinationPath = 'fe/img/post/';
            $profileImage = $request->category . date('YmdHis') . "." . $thumbnail->getClientOriginalExtension();
            $thumbnail->move($destinationPath, $profileImage);
            $data['thumbnail'] = $profileImage;
        }
        News::find($id)->update($data);
        return redirect()->route('admin.event.index')->with('success', 'Updated Data Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::find($id);
        // File::delete(public_path('fe/img/post/'.$data->thumbnail));
        $data->delete();

        return redirect()->route('admin.event.index')->with('success','Deleted Data Success!');
    }
}
