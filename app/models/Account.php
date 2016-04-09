<?php

class Account extends Eloquent {
     protected $table = 'accounts';
    public $timestamps = false;
    protected $guarded = array('id','password', 'rePassword','reEmail','secAnswer','dateCreated','lastModified','type');
    public function accountFieldsValidation(array $values){
        
                    $valid = Validator::make($values,
                    array('name' => 'required',
                          'email' => 'required|email',
                          'phoneNumber' => 'required|numeric',
                          'cellPhone' => 'required|numeric',
                          'address' => 'required',
                          'city' => 'required',
                          'state' => 'required',
                          'country' => 'required',
                          'zipcode' => 'required|numeric',
                          'password' => 'required|same:rePassword|min:6',
                          'secQuestion' => 'required',
                          'secAnswer' => 'required'));
                    return $valid;
    }
    
    public function hashingAndDates(array $formValues) {
        $date = date("Y-m-d");
        $hashed = array(
          'password' => Hash::make($formValues['password']),
          'secAnswer' => Hash::make($formValues['secAnswer']), 
          'dateCreated' => $date,
          'lastModified' => $date  
        );
        return $hashed;
    }
    
    public function isSameEmail($email){
        $userEmail = $this->where('email','=', $email)->exists();  //spits out a boolean  
        return $userEmail;
    }
    
}

