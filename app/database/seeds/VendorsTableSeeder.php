// app/database/seeds/QuotesTableSeeder.php

<?php

class VendorsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('vendors')->delete();
        Vendors::create(array(
            'name' => 'AprileUSA',
            'contact_phone' => 'unknown',
            'vendor_type' => 'truck',
        Vendors::create(array(
            'name' => 'TFC',
            'contact_name' => 'tfc contact',
            'address' => 'unknown',
            'city' => 'unknown',
            'state' => 'CA',
            'zipcode' => '94596',
            'contact_phone' => 'unknown',
            'contact_email' => 'unknown',
            'note' => '',
            'vendor_type' => 'truck',
            'vendor_id' => 'TFC'
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
            'vendor_id' => 'DIL'
        ));
        Vendors::                                                                                                                                       create(array(                                                                                                                                           
            'name' => 'Freight Force',
            'address' => 'unknown',                                                                                                                     
            'city' => 'unknown',                                                                                                                        
            'state' => 'CA',                                                                                                                            
            'contact_phone' => 'unknown',                                                                                                               
            'contact_email' => 'unknown',                                                                                                               
            'note' => '',                                                                                                                               
            'vendor_type' => 'truck',                                                                                                                   
            'vendor_id' => 'FRF'                                                                                                                        
        ));                                                                                                                                             
                                                                                                                                                        
    } 

    }

}
