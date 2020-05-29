<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'name' => 'Classic',
            'description' => 'BeffPatty,chedderCheese,grilled Onion , cocktailSauce.',
            'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
            'price' => 20.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Cheese',
             'description' => 'doubleBeef, tomato, cocktail sauce , cocktailSauce.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 30.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double',
             'description' => 'doubleBeef,chedderCheese,grilled Onion , cocktailSauce.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 35.00
         ]);

         DB::table('products')->insert([
             'name' => 'Classic Double Cheese',
             'description' => 'doubleBeef,doubleCheese,chedder Cheese, grilled onion.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 40.00
         ]);

         DB::table('products')->insert([
             'name' => 'Italian style',
             'description' => 'beefPatty,fresh mozzarella italian salami, cocktailSauce.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 43.50
         ]);
         DB::table('products')->insert([
             'name' => 'Mozzarella Soft',
             'description' => 'beefpatty,freshmozzarella,tomato, cocktailSauce,onion.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 40.50
         ]);
         DB::table('products')->insert([
             'name' => ' Blue cheese',
             'description' => 'beefpatty,bluecheese ,cocktail Sauce, onion,cheese.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 45.00
         ]);
         DB::table('products')->insert([
             'name' => ' Chedder Cheese',
             'description' => 'beefpatty,bacon,cheddarCheese, cocktailSauce, cheese.',
             'photo' => ' https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Swiss Cheese',
             'description' => 'beefpatty,bacon,cheddarcheese, lettuce, onions, chesse.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 50.00
         ]);
         DB::table('products')->insert([
             'name' => 'Grilled Chicken',
             'description' => 'grilledchicken breast,cheddar cheese ,white oregano.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Cheese',
             'description' => 'beef patty, cheddar cheese, tomato, onion, red paper.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY= ',
             'price' => 40.00
         ]);
         DB::table('products')->insert([
             'name' => 'Veggier',
             'description' => 'freshgrilledvegetables,broccoli, tomato,freshcucumber.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Mignon Steak',
             'description' => 'mignonsteak,buildyours,tomato, freshcucumber , onion.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 20.00
         ]);
         DB::table('products')->insert([
             'name' => 'BBQ Grilled Chicken',
             'description' => 'grilledchicken breast,rucola and barbecue sauce.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 30.00
         ]);
         DB::table('products')->insert([
             'name' => 'Pepper Steak',
             'description' => 'cognac,peppersauce,grilledpepper, cheddar cheese.',
             'photo' => 'https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 35.00
         ]);
         DB::table('products')->insert([
             'name' => 'Tuscan Style',
             'description' => 'tomato,rucola,figs,prosciutto, toma, fresh cucumber.',
             'photo' => ' https://media.istockphoto.com/photos/double-cheese-burger-picture-id945057664?k=6&m=945057664&s=612x612&w=0&h=RUo4h_hgeBaExePasl-2YDhEMp4iKKScKpxX_mXlJVY=',
             'price' => 40.00
         ]);
    }
}
