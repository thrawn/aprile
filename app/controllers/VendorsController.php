<?php

class VendorsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $vendors = Vendors::orderBy('id', 'DESC')->get();
        return View::make('vendors.default.index')->with('vendors', $vendors);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('vendors.default.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
        {

	    $rules = array(
            'vendor_id'   => 'required|min:3|max:3|unique:vendors,vendor_id',
            'name'          => 'required',
            'contact_name'  => 'required'
            );


        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('vendors/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store

            $vendor = new Vendors;
            $vendor->name           = Input::get('name');
            $vendor->vendor_id      = Input::get('vendor_id');
            $vendor->contact_name   = Input::get('contact_name');
            $vendor->address        = Input::get('address');
            $vendor->city           = Input::get('city');
            $vendor->state          = Input::get('state');
            $vendor->zipcode        = Input::get('zipcode');
            $vendor->contact_phone  = Input::get('contact_phone');
            $vendor->contact_email  = Input::get('contact_email');
            $vendor->note           = Input::get('note');

            $vendor->save();

            // redirect
            Session::flash('message', 'Successfully created Quote');
            return Redirect::to('vendors');
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
		$vendor = Vendors::find($id);


		return View::make('vendors.default.show')
			->with('vendor', $vendor);
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
