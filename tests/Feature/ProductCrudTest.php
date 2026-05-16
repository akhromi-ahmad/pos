<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_create_a_product(): void
    {
        $response = $this->post('/products', [
            'name' => 'Milk',
            'price' => 15000,
            'stock' => 10,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['name' => 'Milk', 'stock' => 10]);
    }

    public function test_it_can_update_a_product(): void
    {
        $product = Product::create([
            'name' => 'Bread',
            'price' => 12000,
            'stock' => 5,
        ]);

        $response = $this->put("/products/{$product->id}", [
            'name' => 'Wheat Bread',
            'price' => 13000,
            'stock' => 8,
        ]);

        $response->assertRedirect('/products');
        $this->assertDatabaseHas('products', ['id' => $product->id, 'name' => 'Wheat Bread', 'stock' => 8]);
    }

    public function test_it_can_delete_a_product(): void
    {
        $product = Product::create([
            'name' => 'Egg',
            'price' => 25000,
            'stock' => 12,
        ]);

        $response = $this->delete("/products/{$product->id}");

        $response->assertRedirect('/products');
        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
