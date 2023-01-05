<?php

namespace App\Http\Controllers;

use App\Models\HistoryUpdateCustomer;
use Illuminate\Http\Request;

class HistoryUpdateCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(HistoryUpdateCustomer $historyUpdateCustomer)
    {
        $this->authorize('viewAny', $historyUpdateCustomer);
        return view('history-update-customer.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        $this->authorize('create', $historyUpdateCustomer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        $this->authorize('view', $historyUpdateCustomer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        $this->authorize('update', $historyUpdateCustomer);
        return view('history-update-customer.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        $this->authorize('update', $historyUpdateCustomer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, HistoryUpdateCustomer $historyUpdateCustomer)
    {
        $this->authorize('delete', $historyUpdateCustomer);
    }
}
