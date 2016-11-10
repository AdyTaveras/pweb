<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ClientsRequest;
use App\Credit;
use App\Client;
use App\Payment;
use Laracasts\Flash\Flash;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id','ASC')->paginate(5);

        $clients->each(function($clients){
            $clients->credits;            
        });
        return view('users.clients.index')->with('clients',$clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users/clients/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new Client ($request->all());
        $user->save();

        return redirect('users/clients');
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
        $user = Client::find($id);

        return view('users.clients.edit')->with('user', $user);

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
        $user = Client::find($id);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->ssn = $request->ssn;
        $user->address = $request->address;
        $user->work_location = $request->work_location;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->phone2 = $request->phone2;

        $user->save();
        return redirect('users/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
      $user = Client::find($id);
      $user->delete();
      return redirect('users/clients');
    }
    public function loan($id,$id2){
        $user = Client::find($id);
        $credit = Credit::find($id2);
        return view('users.clients.loan')->with('user', $user)->with('credits',$credit);
    }
    public function payment($id,$id2)
    {
        $user = Client::find($id);
        $credit = Credit::find($id2);
        return view('users.clients.payment')->with('client', $user)->with('credits',$credit);
    }
    public function payment_store(Request $request)
    {

     $client = Client::find($request->id_client);
     $credit = Credit::find($request->id);
     $credit->current_amount = $request->future_amount;
     $credit->current_fee = $request->future_fee;

    if ($request->future_amount == '0'){
        $credit->status = 'Paid';
        $client->debt = "No";
     }

     $payment = new Payment($request->all());
     $payment->credit_id = $request->id;
     $payment->client_id = $request->id_client;
     $payment->fee_payment = $request->fee_payment;
     $payment->name = $request->name;
     $payment->last_name = $request->last_name;
     $payment->ssn = $request->ssn;

     $payment->save();
     $credit->save();
     $client->save();

     return redirect('users/clients');

    }
}
