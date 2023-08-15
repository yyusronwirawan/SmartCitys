<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\Misi;
use App\Models\News;
use App\Models\Visi;
use App\Models\About;
use App\Models\Event;
use App\Models\Contact;
use App\Models\Culture;
use App\Models\SmartCity;
use App\Models\Structural;
use App\Models\Destination;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    // Halaman Utama
    public function index() {
        $data['item1'] = Destination::where('category', 'Wisata')->paginate(2);
        $data['item2'] = Destination::where('category', 'Kuliner')->paginate(2);
        $data['item3'] = Destination::where('category', 'Sovenir')->paginate(1);
        $data['items'] = News::where('category', 'News')->latest('id')->paginate(3);
        return view('fe.index', $data);
    }

    // Tentang
    public function about() {
        $data['about'] = About::latest('id')->first();
        $data['visi'] = Visi::latest('id')->first();
        $data['misi'] = Misi::latest('id')->first();
        $data['opd'] = Opd::latest('id')->first();
        $data['bupati'] = Structural::first();
        $data['wakil_bupati'] = Structural::latest('id')->first();
        return view('fe.about', $data);
    }

    // Galeri
    public function gallery() {
        $data['items'] = Gallery::latest('id')->get();
        return view('fe.gallery', $data);
    }

    // Berita
    public function news() {
        $data['items'] = News::where('category', 'News')->latest('id')->get();
        return view('fe.news', $data);
    }

    public function detail_news($id) {
        $data['item'] = News::find($id);
        $data['items'] = News::where('category', 'News')->latest('id')->paginate(3);
        return view('fe.detail_news', $data);
    }

    // Wisata
    public function destination() {
        $data['items'] = Destination::all();
        return view('fe.destination', $data);
    }

    public function detail_destination($id) {
        $data['item'] = Destination::find($id);
        return view('fe.detail_destination', $data);
    }

    // Budaya
    public function culture() {
        $data['items'] = News::where('category', 'Culture')->latest('id')->get();
        return view('fe.culture', $data);
    }

    public function detail_culture($id) {
        $data['item'] = News::find($id);
        return view('fe.detail_news', $data);
    }

    // Acara
    public function event() {
        $data['items'] = News::where('category', 'Event')->latest('id')->get();
        return view('fe.event', $data);
    }

    public function detail_event($id) {
        $data['item'] = News::find($id);
        return view('fe.detail_news', $data);
    }

    // Kota Pintar
    public function smart_city($id = 1) {
        $data['item'] = SmartCity::find($id);
        return view('fe.smart_city', $data);
    }

    // Kontak
    public function contact() {
        return view('fe.contact');
    }

    public function contact_post(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'body' => 'required',
        ]);
        $data = Contact::create($request->all());
        return redirect()->route('fe.contact')->with('success','Message created successfully');
    }
}
