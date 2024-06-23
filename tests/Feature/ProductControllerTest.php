<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_page_displays_paginated_products(): void
    {
        Product::factory(10)->create();

        $response = $this->get(route('products.index'));

        $response->assertOk();

        $response->assertViewHas('products');
    }

    public function test_create_displays_create_form(): void
    {
        $response = $this->get(route('products.create'));

        $response->assertOk();

        $response->assertViewIs('products.create');
    }

    public function test_store_saves_new_product_and_redirects(): void
    {
        $productData = [
            'name' => 'Test Product',
            'detail' => 'Test Description',
            'price' => rand(100, 1000),
        ];

        $response = $this->post(route('products.store'), $productData);

        $response->assertRedirect(route('products.index'));

        $this->assertDatabaseHas('products', $productData);
    }

    public function test_show_displays_product_details(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.show', $product->id));

        $response->assertOk();

        $response->assertViewHas('product');
    }

    public function test_edit_displays_edit_form(): void
    {
        $product = Product::factory()->create();

        $response = $this->get(route('products.edit', $product->id));

        $response->assertOk();

        $response->assertViewHas('product');
    }

    public function test_update_updates_product_and_redirects(): void
    {
        $product = Product::factory()->create();

        $updatedData = [
            'name' => 'Updated Name',
            'detail' => 'Updated Detail',
            'price' => rand(100, 1000),
        ];

        $response = $this->put(route('products.update', $product->id), $updatedData);

        $response->assertRedirect(route('products.index'));

        $this->assertDatabaseHas('products', $updatedData);
    }

    public function test_destroy_deletes_product_and_redirects(): void
    {
        $product = Product::factory()->create();

        $response = $this->delete(route('products.destroy', $product->id));

        $response->assertRedirect(route('products.index'));

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }
}
