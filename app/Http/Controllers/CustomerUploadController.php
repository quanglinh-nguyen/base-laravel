<?php

namespace App\Http\Controllers;

use App\Models\UploadCustomer;
use Illuminate\Http\Request;

class CustomerUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UploadCustomer $uploadCustomer)
    {
        $this->authorize('viewAny', $uploadCustomer);
        return view('customer-upload.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UploadCustomer $uploadCustomer)
    {
        $this->authorize('create', $uploadCustomer);
        return view('customer-upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, UploadCustomer $uploadCustomer)
    {
        $this->authorize('create', $uploadCustomer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, UploadCustomer $uploadCustomer)
    {
        $this->authorize('view', $uploadCustomer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, UploadCustomer $uploadCustomer)
    {
        $this->authorize('update', $uploadCustomer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, UploadCustomer $uploadCustomer)
    {
        $this->authorize('create', $uploadCustomer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, UploadCustomer $uploadCustomer)
    {
        $this->authorize('delete', $uploadCustomer);
    }
}
