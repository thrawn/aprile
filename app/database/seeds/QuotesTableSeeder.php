// app/database/seeds/QuotesTableSeeder.php

<?php

class QuotesTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('quotes')->delete();

        Quotes::create(array(
            'vendor_id' => 'APRTEST01',
            'origin' => 'OAK',                                                                                                                
            'destination' => '94596',
            'buy' => '1000.00',
            'sell' => '3000.00',
            'cargo' => 'monkeys',
            'note' => 'more monkeys',
            'parent_id' => '0',
            'quote_id' => 'Q-APR-TES-20140827-1708'
        )); 

    }

}
