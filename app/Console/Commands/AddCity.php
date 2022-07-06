<?php

namespace App\Console\Commands;

use App\Models\Citiess;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class AddCity extends Command
{
    /**
     * API_KEY
     *
     * @var string
     */
    protected $API_KEY = '0df6d5bf733214af6c6644eb8717c92c';
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:city';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Untuk menambahkan data kota dari rajaongkir.com';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $response = Http::withHeaders([
            'key' => $this->API_KEY
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response['rajaongkir']['results'];

        foreach($cities as $city){

            $kota = new Citiess();
            $kota->province_id = $city['province_id'];
            $kota->province = $city['province'];
            $kota->city_name = $city['city_name'];
            $kota->type = $city['type'];
            $kota->postal_code = $city['postal_code'];
            $kota->save();
            $this->info('City added successfully');
        }


    }
}
