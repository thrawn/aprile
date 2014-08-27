// app/database/seeds/QuotesTableSeeder.php

<?php

class VendorsTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('vendors')->delete();
        Vendors::create(array(                                                                                                                          
            'name' => 'AprileUSA',                                                                                                                                        'contact_name' => 'apr                                                                                                                      contact',                                                                                                                                               
            'address' => 'unknown',                                                                                                                                 'city' => 'unknown',                                                                                                                                    'state' => 'NY',                                                                                                                            
            'contact_phone' => 'unknown',                                                                                                                           'contact_email' => 'unknown',                                                                                                                           'note' => '',                                                                                                                               
            'vendor_type' => 'truck',                                                                                                                               'vendor_id' => 'APR'                                                                                                                                )); 
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
