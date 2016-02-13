<?php namespace App\Http\Controllers\Client;

use App\Http\Requests\MoneyRequest;
use App\Http\Controllers\Controller;

use App\Order;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class MailPaymentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(MoneyRequest $request)
	{

        $order = new Order();
        $order->user_id = \Auth::user()->id;
        $order->cantidad = $request->get('cantidad');
        $order->descripcion = $request->get('descripcion');
        $order->save();
         Mail::send('emails.conctactpayment',$request->all(),function($msj){
         $msj->subject('Mail para solicitud de dinero');
         $msj->to('alejandro.maxcorp@gmail.com');
        });
        notify()->flash('Mail sent correctly','success',[
            'timer' => 3000,
            'text'  => ''
        ]);
        return Redirect::to('client/payment');

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
