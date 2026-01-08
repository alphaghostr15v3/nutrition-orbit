<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminPanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Categories
        $protein = \App\Models\Category::create(['name' => 'Proteins', 'slug' => 'proteins', 'is_active' => true]);
        $vitamins = \App\Models\Category::create(['name' => 'Vitamins', 'slug' => 'vitamins', 'is_active' => true]);
        $accessories = \App\Models\Category::create(['name' => 'Accessories', 'slug' => 'accessories', 'is_active' => true]);

        // 2. Products
        $p1 = \App\Models\Product::create([
            'category_id' => $protein->id,
            'name' => 'Whey Protein Isolate',
            'slug' => 'whey-protein-isolate',
            'brand' => 'Optimum Nutrition',
            'price' => 59.99,
            'stock' => 50,
            'is_active' => true,
            'is_featured' => true,
        ]);

        $p2 = \App\Models\Product::create([
            'category_id' => $vitamins->id,
            'name' => 'Multivitamin Gold',
            'slug' => 'multivitamin-gold',
            'brand' => 'MuscleTech',
            'price' => 24.50,
            'stock' => 100,
            'is_active' => true,
            'on_sale' => true,
        ]);

        $p3 = \App\Models\Product::create([
            'category_id' => $accessories->id,
            'name' => 'Steel Shaker Bottle',
            'slug' => 'steel-shaker-bottle',
            'brand' => 'Nutrition Orbit',
            'price' => 15.00,
            'stock' => 200,
            'is_active' => true,
        ]);

        // 3. Customers
        $c1 = \App\Models\Customer::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'city' => 'New York',
        ]);

        $c2 = \App\Models\Customer::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'city' => 'Los Angeles',
        ]);

        // 4. Orders
        $o1 = \App\Models\Order::create([
            'customer_id' => $c1->id,
            'number' => 'ORD-TEST-001',
            'total_price' => 74.99,
            'status' => 'completed',
            'payment_status' => 'paid',
        ]);

        \App\Models\OrderItem::create([
            'order_id' => $o1->id,
            'product_id' => $p1->id,
            'quantity' => 1,
            'unit_price' => 59.99,
        ]);

        \App\Models\OrderItem::create([
            'order_id' => $o1->id,
            'product_id' => $p3->id,
            'quantity' => 1,
            'unit_price' => 15.00,
        ]);
    }
}
