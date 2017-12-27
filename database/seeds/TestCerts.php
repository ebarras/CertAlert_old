<?php

use Illuminate\Database\Seeder;

use App\Agreement;
use App\Cert;
use App\Contact;

class TestCerts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $agreement = new Agreement;
      $agreement->name = 'TTT0000';
      $agreement->save();
      $cert = new Cert;
      $cert->expiration_date = '2029/04/06';
      $cert->url = 'www.test-ttt0000.com';
      $cert->agreement()->associate($agreement);
      $cert->save();
      $contact = new Contact;
      $contact->email = "erik.barras.test-ttt0000@ocio.usda.gov";
      $contact->save();
      $contact->agreements()->attach($agreement);

      $agreement = new Agreement;
      $agreement->name = 'TTT0001';
      $agreement->save();
      $cert = new Cert;
      $cert->expiration_date = '2030/04/06';
      $cert->url = 'www.test-ttt0001.com';
      $cert->agreement()->associate($agreement);
      $cert->save();
      $contact = new Contact;
      $contact->email = "erik.barras.test-ttt0001@ocio.usda.gov";
      $contact->save();
      $contact->agreements()->attach($agreement);
    }
}
