<?php

class CustomersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
    {

       // $s3 = AWS::get('s3');
        
        $customers = Customers::orderBy('id', 'DESC')->get();
        return View::make('customers.default.index')->with('customers', $customers);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('customers.default.create')->with('customers', $customers);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $rules = array(
            'name'          =>  'required',
            'account_number'   => 'required'
            );


        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('customers/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store

            $customer = new Customers;
            $customer->name           = Input::get('name');
            $customer->account_number = Input::get('account_number');
            $customer->contact_name   = Input::get('contact_name');
            $customer->address        = Input::get('address');
            $customer->city           = Input::get('city');
            $customer->state          = Input::get('state');
            $customer->zipcode        = Input::get('zipcode');
            $customer->phone  = Input::get('contact_phone');
            $customer->email  = Input::get('contact_email');
            $customer->notes           = Input::get('note');
            $customer->created_by     = Auth::user()->username;

            $customer->save();

            // redirect
            Session::flash('message', 'Successfully created Customer');
            return Redirect::to('customers');
            }
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
