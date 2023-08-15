<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Culture;
use App\Models\Destination;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:dashboard-C', ['only' => ['index','list','show']]);
        $this->middleware('permission:dashboard-R', ['only' => ['create','store']]);
        $this->middleware('permission:dashboard-U', ['only' => ['edit','update']]);
        $this->middleware('permission:dashboard-D', ['only' => ['destroy']]);
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['destination'] = Destination::all()->count();
        $data['news'] = News::where('category', 'news')->get()->count();
        $data['event'] = News::where('category', 'event')->get()->count();
        $data['culture'] = News::where('category', 'culture')->get()->count();
        $data['message'] = Contact::latest('id')->paginate(5);
        return view('adm.dashboard', $data);
    }

    public function list(Request $request)
    {

    }
}
