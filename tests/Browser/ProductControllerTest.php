<?php

namespace Tests\Browser;

use App\Models\Product;
use Illuminate\Foundation\Testing\DatabaseTruncation;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ProductControllerTest extends DuskTestCase
{
    use DatabaseTruncation;

    public function test_index()
    {
        $products = Product::factory(5)->create();

        $this->browse(function (Browser $browser) use ($products) {
            $browser->visit(route('products.index'))
                ->assertSee('Products')
                ->assertSee($products->first()->name);
        });
    }

    public function test_create()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('products.create'))
                ->assertSee('Add New Product')
                ->type('name', 'Test Product')
                ->type('price', '100')
                ->type('detail', 'Test Product Detail')
                ->press('Submit')
                ->assertPathIs('/products')
                ->assertSee('Product Created Successfully');
        });
    }

    public function test_edit()
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) use ($product) {
            $browser->visit(route('products.edit', $product->id))
                ->assertSee('Edit Product')
                ->type('name', 'Updated Name')
                ->type('price', '200')
                ->type('detail', 'Updated Detail')
                ->press('Submit')
                ->assertPathIs('/products')
                ->assertSee('Product Updated Successfully');
        });
    }

    public function test_destroy()
    {
        $product = Product::factory()->create();

        $this->browse(function (Browser $browser) {
            $browser->visit('/products')
                ->press('Delete')
                ->assertPathIs('/products')
                ->assertSee('Product Deleted Successfully');
        });
    }
}
