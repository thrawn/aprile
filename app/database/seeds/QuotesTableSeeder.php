// app/database/seeds/QuotesTableSeeder.php

<?php

class QuotesTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('quotes')->delete();

        Quotes::create(array(
            'vendor_id' => 'APR',
            'origin' => 'OAK',
            'destination' => '94596',
            'buy' => '1000.00',
            'sell' => '3000.00',
            'cargo' => 'pallets',
            'note' => '25 pallets',
            'parent_id' => '0',
            'quote_id' => 'Q-APR-20140827-170800'
        ));

        Quotes::create(array(
            'vendor_id' => 'DIL',
            'origin' => 'NYC',
            'destination' => '10018',
            'buy' => '3000.00',
            'sell' => '5200.00',
            'cargo' => 'donkeys',
            'note' => '20 donkeys',
            'parent_id' => '0',
            'quote_id' => 'Q-DIL-20140827-171002'
        ));

         Quotes::create(array(
            'vendor_id' => 'FRF',
            'origin' => 'OAK',
            'destination' => '94596',
            'buy' => '700.00',
            'sell' => '3000.00',
            'cargo' => 'fish',
            'note' => '53 foot trailer, 200 boxes of fish, 20,000 ilbs',
            'parent_id' => '0',
            'quote_id' => 'Q-FRF-20140827-180823'
        ));

        Quotes::create(array(
            'vendor_id' => 'TFC',
            'origin' => 'SEA',
            'destination' => '94596',
            'buy' => '13420.00',
            'sell' => '15000.00',
            'cargo' => 'lumber',
            'note' => '50,000 lbs of redwood',
            'parent_id' => '0',
            'quote_id' => 'Q-TFC-20140828-100800'
        ));

        Quotes::create(array(
            'vendor_id' => 'JTS',
            'origin' => 'SAC',
            'destination' => 'Toronto',
            'buy' => '797.00',
            'sell' => '950.00',
            'cargo' => 'I ask a quotation for a delivery from Sacramento to Toronto of:

- 1 wooden case (dim. 116x77x h 90 cm) - kg. 600 lb 1323
- 1 wooden case (dim. 130x85x h124 cm) - KG. 650 lb 1433

Offer for pick up at our depot in Sacramento up to Toronto whse',
            'note' => '',
            'parent_id' => '0',
            'quote_id' => 'Q-JTS-20140828-102234'
        ));
    }

}
