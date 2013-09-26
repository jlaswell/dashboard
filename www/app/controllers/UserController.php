<?php

class UserController extends BaseController {
	/*
   * The layout that should be used for responses.
   */
  protected $layout = 'layouts.foundation';

  public function __construct()
  {
    // $this->beforeFilter('auth');
  }


  /**
   * Display a listing of the resource.
   */
	public function index($clientId)
	{
		
		// $this->layout->content = View::make('users.index')
			// ->with('client', Client::findOrFail($clientId));
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create($clientId)
	{
		// $this->layout->content = View::make('users.create')
			// ->with('client', Client::findOrFail($clientId));
	}

	/**
	 * Store a newly created resource.
	 */
	public function store($clientId)
	{
		// $user = new User;
		
		// $user->name_prefix = Input::get('name_prefix', null);
		// $user->first_name = Input::get('first_name', null);
		// $user->preferred_name = Input::get('preferred_name', null);
		// $user->last_name = Input::get('last_name', null);
		// $user->name_suffix = Input::get('name_suffix', null);
		// $user->phone = Input::get('phone', null);
		// $user->email = Input::get('email');
		// $user->client_id = $clientId;

		// $user->save();

		// $client = Client::findOrFail($clientId);
		// $client->users()->save($user);

		// return Redirect::to('clients/' . $clientId);
	}
	
	/**
	 * Display the specified resource.
	 */
	public function show($clientId, $userId)
	{
		// $this->layout->content = View::make('users.show')
			// ->with('client', Client::findOrFail($clientId))
			// ->with('user', User::findOrFail($userId));
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit($clientId, $userId)
	{
		// Allow a user to edit his/her own information and allow John to edit user info as well.
		// if((Auth::user()->id == $userId) or (Auth::user()->id == 1)) {
			// $this->layout->content = View::make('users.edit')
				// ->with('client', Client::findOrFail($clientId))
				// ->with('user', User::findOrFail($userId));
		// }
		// else {
			// return Redirect::intended('/');
		// }
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update($clientId, $userId)
	{
		// $task = Task::findOrFail($id);

		// $task->title = Input::get('title');
		// $task->description = Input::get('description');
		// $task->target_date = Input::get('target_date');
		
		// $task->save();
		
		// return Redirect::to('clients');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy($clientId, $userId)
	{
		// echo 'destroy ' . $id;
	}
}