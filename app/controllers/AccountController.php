<?php

class AccountController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
        public function validateAccountFields() {
            $account = new Account();
            $values = Input::all();
            $valid = $account->accountFieldsValidation($values);
            $isSame = $account->isSameEmail($values['email']);
            if($valid->fails()) {
                
                return Redirect::to('account/create')->withInput(Input::old())->withErrors($valid); 
            }
            elseif($isSame){
                return Redirect::to('account/create')->withInput(Input::old())->withErrors("Email already exist, we have an account with this email");
            }
            else { 
                $passwAndDate = $account->hashingAndDates($values);  
                $ok = AccountController::store($values, $passwAndDate);
		 if($ok[0]){
                 return Redirect::to('login')->withInput(Input::old()); 
            	 }
             	 else{
                 return Redirect::to('account/create')->withInput(Input::old())->withErrors($ok[1]);
           	 }
            }
        }
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

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(array $inputValues, array $modValues)
	{
            /*after inputValues have been validated, we add all other fields
              we need to insert in our table*/
             $submit=Account::create($inputValues);
             $submit->fillable($modValues);
             $submit->password = $modValues['password'];
             $submit->secAnswer = $modValues['secAnswer'];
             $submit->dateCreated = $modValues['dateCreated'];
             $submit->lastModified = $modValues['lastModified'];
             $userSubmit = new User();
	     $userSubmit->email = $inputValues['email'];
	     $userSubmit->password = $modValues['password'];
             $userSubmit->created_at = $modValues['dateCreated'];	
             $userSubmit->updated_at = $modValues['lastModified'];
             $userSubmit->first_name = $inputValues['name'];
             $userSubmit->last_name = $inputValues['lname'];
             $userSubmit->phone_number = $inputValues['phoneNumber'];
             $userSubmit->user_type = "administrator";
	     if($submit->save() && $userSubmit->save()){
                 return array('true'); 
             }
             else{
                 return array('false',$submit);
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
