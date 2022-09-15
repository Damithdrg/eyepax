<?php

namespace App\Http\Controllers;

use App\Http\Requests\SalesRepresentativeRequest;
use App\Models\SalesRepresentative;
use App\Models\WorkingRoute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesRepresentativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesRepresentatives = SalesRepresentative::orderBy('updated_at', 'desc')->paginate(20);
        return view('salesRepresentative.index', ['salesRepresentatives' =>  $salesRepresentatives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $workRoutes = WorkingRoute::all();
        return view('salesRepresentative.create', ['workRoutes' => $workRoutes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesRepresentativeRequest $request)
    {
        $salesRepresentative = SalesRepresentative::create([
            'name' => $request->name,
            'contact_number' => $request->contact_number,
            'email' => $request->email,
            'joined_date' => $request->joined_date,
            'manager_id' => Auth::id(),
        ]);

        $workingRoute = WorkingRoute::find($request->route_id);

        $salesRepresentative->workingRoutes()->save($workingRoute);

        return redirect(route('sales-representative.index'));
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
