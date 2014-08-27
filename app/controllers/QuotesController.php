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
        return View::make('quotes.index')->with('quotes', $quotes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

        // generate quote id
        // QAPRUS-DATE-TIME
        $now = Carbon::now();
        $quote_id = 'Q-APRUS-' . $now->format('Ymd-hms');

		return View::make('quotes.cf')->with('quote_id', $quote_id );
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	        $rules = array(
            'vendor_id'   => 'required',
            'origin'      => 'required',
            'destination' => 'required',
            'buy'         => 'required',
            'sell'        => 'required',
            'cargo'       => 'required'
        );	


        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('quotes/create')
                ->withErrors($validator);
                //->withInput(Input::except('password'));
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
            $quote->quote_id    = Input::get('quote_id');
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
