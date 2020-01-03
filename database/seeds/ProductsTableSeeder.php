<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'zapa1',
            'slug' => 'zapa-piola-1',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);
        
        Product::create([
            'name' => 'zapa2',
            'slug' => 'zapa-piola-2',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa3',
            'slug' => 'zapa-piola-3',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa4',
            'slug' => 'zapa-piola-4',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa5',
            'slug' => 'zapa-piola-5',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa6',
            'slug' => 'zapa-piola-6',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa7',
            'slug' => 'zapa-piola-7',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa8',
            'slug' => 'zapa-piola-8',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa9',
            'slug' => 'zapa-piola-9',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);

        Product::create([
            'name' => 'zapa10',
            'slug' => 'zapa-piola-10',
            'details' => 'una zapa copada',
            'price' => 200,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deserunt?'
        ]);
    }
}
