<?php

use App\Agreement;
use App\Cert;
use App\Contact;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('certs');
});

Route::get('/certs-all', function () {
    return view('certs-all');
});


//This is not at all an acceptable test. Figure out how to actually do testing.
Route::get('/test', function () {
	//Create Agreement
    $agreement = new Agreement;
    $agreement->name = 'OIR9959';
    $agreement->save();

    //Create Cert
    $cert = new Cert;
    $cert->expiration_date = '2018/04/06';
    $cert->url = 'www.google.com';
    //Accociate the cert to the agreement
    $cert->agreement()->associate($agreement);
    $cert->save();
    //Create a new contact
    $contact = new Contact;
    $contact->email = "erik.barras@ocio.usda.gov";
    $contact->save();
    //Attach the contact to the agreement (populates agreement_contact)
    $contact->agreements()->attach($agreement);
    //Delete the contact as a test. Note how this deletes the associated agreement_contact because of the cascade. Remember to set mysql to innodb.
    $contact = App\Contact::find(1);
    $contact->delete();

    return 'Test Complete';
});
