<?php


use Carbon\Carbon;

class QuotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$quotes = Quotes::orderBy('id', 'DESC')->get();
                return View::make('quotes.default.index')->with('quotes', $quotes);
	}

        public function d()
	{
		$quotes = Quotes::orderBy('id', 'DESC')->get();
                return View::make('quotes.d')->with('quotes', $quotes)->with('title','DEFAULT');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('quotes.default.create')->with('quote_id', $quote_id );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	        $rules = array(
            'vendor_id'   => 'required|min:3|max:3', //|unique:vendors,vendor_id',
            'origin'      => 'required',
            'destination' => 'required',
            'buy'         => 'required|numeric',
            'sell'        => 'required|numeric',
            'cargo'       => 'required'
        );


        $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('quotes/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store

            $quote = new Quotes;
            $quote->vendor_id   = Input::get('vendor_id');
            $quote->origin      = Input::get('origin');
            $quote->destination = Input::get('destination');
            $quote->buy         = Input::get('buy');
            $quote->sell        = Input::get('sell');
            $quote->cargo       = Input::get('cargo');
            $quote->note        = Input::get('note');
            // generate quote id
            // QAPRUS-DATE-TIME
            $now = Carbon::now();
            $quote->quote_id = 'Q-' . strtoupper(trim($quote->vendor_id)) . '-' . $now->format('Ymd-hms');

            //$quote->quote_id    = Input::get('quote_id');
            $quote->save();

            // redirect
            Session::flash('message', 'Successfully created Quote');
            return Redirect::to('quotes');
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

		$quote = Quotes::find($id);


		return View::make('quotes.default.show')
			->with('quote', $quote);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$quote = Quotes::find($id);


		return View::make('quotes.default.edit')
			->with('quote', $quote);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

	     $rules = array(
            'vendor_id'   => 'required|min:3|max:3', //|unique:vendors,vendor_id',
            'origin'      => 'required',
            'destination' => 'required',
            'buy'         => 'required|numeric',
            'sell'        => 'required|numeric',
            'cargo'       => 'required'
            );


            $validator = Validator::make(Input::all(), $rules);


        if ($validator->fails()) {
            return Redirect::to('quotes/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store

            $quote = Quotes::find($id);
            $quote->vendor_id   = Input::get('vendor_id');
            $quote->origin      = Input::get('origin');
            $quote->destination = Input::get('destination');
            $quote->buy         = Input::get('buy');
            $quote->sell        = Input::get('sell');
            $quote->cargo       = Input::get('cargo');
            $quote->note        = Input::get('note');
            $quote->save();

            // redirect
            Session::flash('message', 'Successfully created Quote');
            return Redirect::to('quotes');
        }


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
