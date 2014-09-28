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
                $vendors = Vendors::orderBy('name', 'ASC')->lists('name','vendor_id','id','vendor_type');
                //$v = Vendors::select('name','vendor_type')->groupBy('name')->orderBy('vendor_type')->get();
                //print_r($vendors);
                //print_r($v);
                //foreach (Vendors::select('name','vendor_id','vendor_type')->orderBy('vendor_type','asc')->get() as $v)
                //{
                  //  $vendors[$v->vendor_type] = $v->name;
                //}
		return View::make('quotes.default.create')->with('quote_id', $quote_id )->with('vendors', $vendors);
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
            $quote->created_by = Auth::user()->username;
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
                $files = Files::where('belongs_to_id','=',$quote->quote_id)->orderBy('filemime')->get();



		return View::make('quotes.default.show')
			->with('quote', $quote)->with('quote_files',$files);
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
            $quote->created_by  = Auth::user()->username;
            $quote->save();

            // redirect
            Session::flash('message', 'Successfully created Quote');
            return Redirect::to('quotes');
        }


	}


        public function upload(){

		$input = Input::all();
                $quote = Input::get('quote');
                $id = Input::get('id');
		$rules = array(
		    'file' => 'max:3000000',
		);

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
			return Response::make($validation->errors->first(), 400);
		}

                $file = Input::file('file');
                $destinationPath  = public_path() . '/uploads/';// . sha1(time());
                //print $destinationPath;
                // If the uploads fail due to file system, you can try doing public_path().'/uploads'
                //$filename = str_random(12);
                $filename = $quote . '_' . $file->getClientOriginalName();
                //$extension =$file->getClientOriginalExtension();
                $upload_success = Input::file('file')->move($destinationPath, $filename);

                if( $upload_success ) {

                        $f = new Files();
                        $og = $file->getClientOriginalName();
                        $f->belongs_to_id   = $quote;
                        $f->filename        = $filename;
                        $f->filetype        = $og;
                        $f->filemime        = strtolower($file->getClientOriginalExtension());//$file->getMimeType();
                        $f->filesize        = $file->getSize();
                        $f->filepath        = $destinationPath . $filename;
                        $f->note            = "attaching $og to $quote";
                        $f->created_by      = Auth::user()->username;

                        $f->save();

                   return Response::json('success', 200);
                } else {
                   return Response::json('error', 400);
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
