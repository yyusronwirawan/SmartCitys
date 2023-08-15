<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class RoleController extends Controller
{
    function __construct()
    {
        // $this->middleware('permission:role-R|role-C|role-U|role-D', ['only' => ['index','store']]);
        $this->middleware('permission:role-R', ['only' => ['index', 'list']]);
        $this->middleware('permission:role-C', ['only' => ['create', 'store']]);
        $this->middleware('permission:role-U', ['only' => ['edit', 'update']]);
        $this->middleware('permission:role-D', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['role']          = Role::with('permissions')->get();
        $data['permission']    = Permission::orderBy('id', 'desc')->get();
        return view('adm.role.index', compact('data'));
    }

    public function list(Request $request)
    {
        // $query = Role::select('id', 'name', 'guard_name', 'created_at', 'updated_at');
        $query = Role::with('permissions')->select('*');
        $data  = DataTables::of($query)
            ->addColumn('action', 'layouts.part.button-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);

        $response = $data->getData(true);
        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
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
        $validator = Validator::make($request->all(), [
            'name'          => 'required|min:3|unique:roles,name',
            'guard_name'    => 'required|min:3',
            'permission'    => 'required|array',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)
                ->withInput();
        }
        // if ($validator->fails()) {
        //     return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        // }

        $valueId = $request->id;

        $query   =   Role::updateOrCreate(
            $request->except('permission'),
            [
                'id' => $valueId
            ],
            [
                'name' => $request->name,
                'guard_name' => $request->guard_name,
                'updated_at' => now(),
            ],
        );
        $permissions = $request->input('permission') ? $request->input('permission') : [];
        $query->syncPermissions($permissions);

        Alert::success('Success Title', 'Role Successfully!');
        // Alert::warning('Warning Title', 'Warning Message');
        // Alert::error('Error Title', 'Error Message');

        return Response()->json($query);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
    public function update(Request $request)
    {
        $where = array('id' => $request->id);
        $query  = Role::with('permissions')->where($where)->first();

        return Response()->json($query);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $query = Role::where('id', $request->id)->delete();

        return Response()->json($query);
    }
}
