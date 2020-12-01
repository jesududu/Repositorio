<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\Product;

class ProductTable extends Seeder {

    /**
     * Run the Products table seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' 			=> 'Camiseta 1',
                'slug' 			=> 'playera-1',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Camiseta 2',
                'slug' 			=> 'playera-2',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 255.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Camiseta 3',
                'slug' 			=> 'playera-3',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 300.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Camiseta 4',
                'slug' 			=> 'playera-4',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 475.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Camiseta 5',
                'slug' 			=> 'playera-5',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 280.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Playera 6',
                'slug' 			=> 'playera-6',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],
            [
                'name' 			=> 'Camiseta 7',
                'slug' 			=> 'playera-7',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 1
            ],
            [
                'name' 			=> 'Camiseta 8',
                'slug' 			=> 'playera-8',
                'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
                'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'price' 		=> 275.00,
                'image' 		=> 'https://resize.sprintercdn.com/f/550x550/products/0296496/camiseta-running-fila_0296496_00_4_1025469543.jpg',
                'visible' 		=> 1,
                'created_at' 	=> new DateTime,
                'updated_at' 	=> new DateTime,
                'category_id' 	=> 2
            ],

        );

        Product::insert($data);

    }

}