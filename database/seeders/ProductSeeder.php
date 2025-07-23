<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
    ['Cotton T-shirt', 'clear'],
    ['Lightweight shorts', 'clear'],
    ['Sunglasses', 'clear'],
    ['Sun hat', 'clear'],
    ['Breathable sneakers', 'clear'],

    ['Light long-sleeve shirt', 'partly-cloudy'],
    ['Chinos or jeans', 'partly-cloudy'],
    ['Baseball cap', 'partly-cloudy'],
    ['Lightweight jacket', 'partly-cloudy'],
    ['Casual sneakers', 'partly-cloudy'],

    ['Layered T-shirt with cardigan', 'cloudy-with-sunny-intervals'],
    ['Comfortable jeans', 'cloudy-with-sunny-intervals'],
    ['Lightweight scarf', 'cloudy-with-sunny-intervals'],
    ['Loafers or slip-ons', 'cloudy-with-sunny-intervals'],
    ['Light windbreaker', 'cloudy-with-sunny-intervals'],

    ['Hoodie or light sweater', 'cloudy'],
    ['Long pants or leggings', 'cloudy'],
    ['Waterproof shoes', 'cloudy'],
    ['Light trench coat', 'cloudy'],
    ['Beanie', 'cloudy'],

    ['Water-resistant jacket', 'light-rain'],
    ['Ankle rain boots', 'light-rain'],
    ['Umbrella', 'light-rain'],
    ['Quick-dry pants', 'light-rain'],
    ['Hat with small brim', 'light-rain'],

    ['Raincoat', 'rain'],
    ['Waterproof boots', 'rain'],
    ['Rain hat', 'rain'],
    ['Water-resistant backpack', 'rain'],
    ['Moisture-wicking base layer', 'rain'],

    ['Full-length rain poncho', 'heavy-rain'],
    ['High rain boots', 'heavy-rain'],
    ['Waterproof overpants', 'heavy-rain'],
    ['Sealed rain jacket with hood', 'heavy-rain'],
    ['Quick-drying synthetic socks', 'heavy-rain'],

    ['Insulated waterproof jacket', 'thunder'],
    ['Rubber-soled boots', 'thunder'],
    ['Hooded raincoat', 'thunder'],
    ['Reflective vest', 'thunder'],
    ['Water-resistant gloves', 'thunder'],

    ['Packable rain jacket', 'isolated-thunderstorms'],
    ['Convertible pants', 'isolated-thunderstorms'],
    ['Rain hat', 'isolated-thunderstorms'],
    ['Quick-dry hiking shoes', 'isolated-thunderstorms'],
    ['Synthetic base layer', 'isolated-thunderstorms'],

    ['Waterproof trench', 'thunderstorms'],
    ['Thermal undershirt', 'thunderstorms'],
    ['Waterproof hiking boots', 'thunderstorms'],
    ['Hooded storm jacket', 'thunderstorms'],
    ['Reinforced rain pants', 'thunderstorms'],

    ['Stormproof jacket with taped seams', 'heavy-rain-with-thunderstorms'],
    ['Waterproof overalls', 'heavy-rain-with-thunderstorms'],
    ['Heavy-duty boots', 'heavy-rain-with-thunderstorms'],
    ['Hard rain hat', 'heavy-rain-with-thunderstorms'],
    ['Waterproof gloves', 'heavy-rain-with-thunderstorms'],

    ['Fleece-lined jacket', 'light-sleet'],
    ['Water-resistant shoes', 'light-sleet'],
    ['Knit gloves', 'light-sleet'],
    ['Wool hat', 'light-sleet'],
    ['Light scarf', 'light-sleet'],

    ['Waterproof parka', 'sleet'],
    ['Insulated boots', 'sleet'],
    ['Thermal leggings', 'sleet'],
    ['Waterproof gloves', 'sleet'],
    ['Warm beanie', 'sleet'],

    ['Ice-grip boots', 'freezing-rain'],
    ['Heavy insulated coat', 'freezing-rain'],
    ['Waterproof outer gloves', 'freezing-rain'],
    ['Wool base layers', 'freezing-rain'],
    ['Neck gaiter', 'freezing-rain'],

    ['Padded waterproof jacket', 'hail'],
    ['Helmet or hard hat', 'hail'],
    ['Thick jeans', 'hail'],
    ['Rubber boots', 'hail'],
    ['Safety goggles', 'hail'],

    ['Light insulated coat', 'light-snow'],
    ['Wool sweater', 'light-snow'],
    ['Lined boots', 'light-snow'],
    ['Knit hat', 'light-snow'],
    ['Gloves', 'light-snow'],

    ['Down jacket', 'snow'],
    ['Snow pants', 'snow'],
    ['Thermal boots', 'snow'],
    ['Insulated gloves', 'snow'],
    ['Fleece hat', 'snow'],

    ['Heavy-duty snow parka', 'heavy-snow'],
    ['Waterproof snow bib', 'heavy-snow'],
    ['Fur-lined boots', 'heavy-snow'],
    ['Balaclava', 'heavy-snow'],
    ['Layered mittens', 'heavy-snow'],

    ['Reflective windbreaker', 'fog'],
    ['Breathable long sleeves', 'fog'],
    ['Closed-toe walking shoes', 'fog'],
    ['Visibility vest', 'fog'],
    ['Light scarf', 'fog']
        ];

        foreach ($products as [$name, $condition]) {
            Product::create([
                'name' => $name,
                'condition_code' => $condition
            ]);
        }
    }
}

