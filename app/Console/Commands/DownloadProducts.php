<?php

namespace App\Console\Commands;

use App\Models\WoocomerceProducts;
use Codexshaper\WooCommerce\Facades\Product;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class DownloadProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'download:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $products=Http::get(env('WOOCOMMERCE_STORE_URL'),['consumer_key'=>env('WOOCOMMERCE_CONSUMER_KEY'),'consumer_secret'=>env('WOOCOMMERCE_CONSUMER_SECRET'),'per_page'=>100]);


        foreach($products->json($key=null) as $product)
        {

            WoocomerceProducts::create(['name'=>$product['name'],'price'=>$product['price'],'description'=>$product['description']]);
        }
       dd("finished All");
    }
}
