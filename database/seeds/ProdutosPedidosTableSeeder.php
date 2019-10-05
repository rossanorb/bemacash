<?php

use App\Models\Pedido;
use Illuminate\Database\Seeder;

class ProdutosPedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pedido::Create([
            'status' => 1,
            'data' => '2019-09-27 15:05:10',
            'total' => 575.59
        ]);
        Pedido::find(1)->produtos()->attach([
            1 => ['valor_unitario' => 179.59, 'quantidade' => 1],
            4 => ['valor_unitario' => 198.00, 'quantidade' => 2]
        ]);

        Pedido::Create([
            'status' => 3,
            'data' => '2019-10-01 16:15:11',
            'total' => 1176.44
        ]);
        Pedido::find(2)->produtos()->attach([
            3 => ['valor_unitario' => 99.35,  'quantidade' => 3],
            5 => ['valor_unitario' => 698.80, 'quantidade' => 1],
            1 => ['valor_unitario' => 179.59, 'quantidade' => 1],
        ]);

        Pedido::Create([
            'status' => 5,
            'data' => '2019-10-05 11:55:19',
            'total' => 2899.99
        ]);
        Pedido::find(3)->produtos()->attach([
            2 => ['valor_unitario' => 2899.99,  'quantidade' => 1]
        ]);
    }
}
