// app/database/seeds/QuotesTableSeeder.php

<?php

class VendorsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('vendors')->delete();

        Vendors::create(array(
            'name' => 'Aprile USA',
            'contact_name' => 'Penelope Bandiera',
            'address' => '1370 Broadway, Suite 1400',
            'city' => 'New York',
            'state' => 'NY',
            'zipcode' => '10018',
            'contact_phone' => '212-273-9700',
            'contact_email' => 'p.bandiera@aprileusa.com',
            'note' => 'Contact Penelope',
            'vendor_type' => 'ocean',
            'vendor_id' => 'APR',
            'created_by' => 'michael'
        ));
        Vendors::create(array(
            'name' => 'Diligent',
            'contact_name' => 'diligent contact',
            'address' => 'unknown',
            'city' => 'unknown',
            'state' => 'CA',
            'contact_phone' => 'unknown',
            'contact_email' => 'unknown',
            'note' => '',
            'vendor_type' => 'truck',
            'vendor_id' => 'DIL',
            'created_by' => 'penelope'
        ));

        Vendors::create(array(
            'name' => 'Freight Force',
            'contact_name' => 'ff contact',
            'address' => 'unknown',
            'city' => 'unknown',
            'state' => 'CA',
            'contact_phone' => 'unknown',
            'contact_email' => 'unknown',
            'note' => '',
            'vendor_type' => 'truck',
            'vendor_id' => 'FRF',
            'created_by' => 'penelope'
        ));

                Vendors::create(array(
            'name' => 'TFC',
            'contact_name' => 'tfc contact',
            'address' => 'unknown',
            'city' => 'unknown',
            'state' => 'CA',
            'contact_phone' => 'unknown',
            'contact_email' => 'unknown',
            'note' => '',
            'vendor_type' => 'truck',
            'vendor_id' => 'TFC',
            'created_by' => 'penelope'
        ));

    }

}
