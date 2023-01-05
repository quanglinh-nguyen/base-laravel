<?php

namespace App\Http\Controllers;

use App\Models\CustomersError;
use Illuminate\Http\Request;

class CustomerErrorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CustomersError $customersError)
    {
        $this->authorize('viewAny', $customersError);
        return view('customers-error.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(CustomersError $customersError)
    {
        $this->authorize('create', $customersError);
        return view('customers-error.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CustomersError $customersError)
    {
        $this->authorize('create', $customersError);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, CustomersError $customersError)
    {
        $this->authorize('view', $customersError);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CustomersError $customersError)
    {
        $this->authorize('update', $customersError);
        return view('customers-error.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, CustomersError $customersError)
    {
        $this->authorize('update', $customersError);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, CustomersError $customersError)
    {
        $this->authorize('delete', $customersError);
    }
}
