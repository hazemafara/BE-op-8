<?php

use Illuminate\Database\Seeder;
use App\Models\Allergie;
use App\Models\Contact;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\ProductPerAllergie;
use App\Models\ProductPerSupplier;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(AllergenSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(SupplierSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(WarehouseSeeder::class);
        $this->call(ProductPerAllergieSeeder::class);
        $this->call(ProductPerSupplierSeeder::class);
    }
}

class AllergenSeeder extends Seeder
{
    public function run()
    {
        Allergie::create(['name' => 'Gluten', 'description' => 'This product contains gluten']);
        Allergie::create(['name' => 'Gelatine', 'description' => 'This product contains gelatine']);
        Allergie::create(['name' => 'AZO-Dye', 'description' => 'This product contains AZO dyes']);
        Allergie::create(['name' => 'Lactose', 'description' => 'This product contains lactose']);
        Allergie::create(['name' => 'Soy', 'description' => 'This product contains soy']);
    }
}

class ContactSeeder extends Seeder
{
    public function run()
    {
        // Seed contacts here
        Contact::create(['street' => 'Van Gilslaan', 'house_number' => '34', 'postal_code' => '1045CB', 'city' => 'Hilvarenbeek']);
        Contact::create(['street' => 'Den Dolderpad', 'house_number' => '2', 'postal_code' => '1067RC', 'city' => 'Utrecht']);
        Contact::create(['street' => 'Fredo Raalteweg', 'house_number' => '257', 'postal_code' => '1236OP', 'city' => 'Nijmegen']);
        Contact::create(['street' => 'Bertrand Russellhof', 'house_number' => '21', 'postal_code' => '2034AP', 'city' => 'Den Haag']);
        Contact::create(['street' => 'Leon van Bonstraat', 'house_number' => '213', 'postal_code' => '145XC', 'city' => 'Lunteren']);
        Contact::create(['street' => 'Bea van Lingenlaan', 'house_number' => '234', 'postal_code' => '2197FG', 'city' => 'Sint Pancras']);
    }
}

class SupplierSeeder extends Seeder
{
    public function run()
    {
        // Seed suppliers here
        Supplier::create(['name' => 'Venco', 'contact_person' => 'Bert van Linge', 'supplier_number' => 'L1029384719', 'mobile' => '06-28493827', 'contact_id' => 1]);
        Supplier::create(['name' => 'Astra Sweets', 'contact_person' => 'Jasper del Monte', 'supplier_number' => 'L1029284315', 'mobile' => '06-39398734', 'contact_id' => 2]);
        Supplier::create(['name' => 'Haribo', 'contact_person' => 'Sven Stalman', 'supplier_number' => 'L1029324748', 'mobile' => '06-24383291', 'contact_id' => 3]);
        Supplier::create(['name' => 'Basset', 'contact_person' => 'Joyce Stelterberg', 'supplier_number' => 'L1023845773', 'mobile' => '06-48293823', 'contact_id' => 4]);
        Supplier::create(['name' => 'De Bron', 'contact_person' => 'Remco Veenstra', 'supplier_number' => 'L1023857736', 'mobile' => '06-34291234', 'contact_id' => 5]);
        Supplier::create(['name' => 'Quality Street', 'contact_person' => 'Johan Nooij', 'supplier_number' => 'L1029234586', 'mobile' => '06-23458456', 'contact_id' => 6]);
    }
}

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Seed products here
        Product::create(['name' => 'Mintnopjes', 'barcode' => '8719587231278']);
        Product::create(['name' => 'Schoolkrijt', 'barcode' => '8719587326713']);
        Product::create(['name' => 'Honingdrop', 'barcode' => '8719587327836']);
        Product::create(['name' => 'Zure Beren', 'barcode' => '8719587321441']);
        Product::create(['name' => 'Cola Flesjes', 'barcode' => '8719587321237']);
        Product::create(['name' => 'Turtles', 'barcode' => '8719587322245']);
        Product::create(['name' => 'Witte Muizen', 'barcode' => '8719587328256']);
        Product::create(['name' => 'Reuzen Slangen', 'barcode' => '8719587325641']);
        Product::create(['name' => 'Zoute Rijen', 'barcode' => '8719587322739']);
        Product::create(['name' => 'Winegums', 'barcode' => '8719587327527']);
        Product::create(['name' => 'Drop Munten', 'barcode' => '8719587322345']);
        Product::create(['name' => 'Kruis Drop', 'barcode' => '8719587322265']);
        Product::create(['name' => 'Zoute Ruitjes', 'barcode' => '8719587323256']);
        Product::create(['name' => 'Drop ninja’s', 'barcode' => '8719587323277']);
    }
}

class WarehouseSeeder extends Seeder
{
    public function run()
    {
        // Seed warehouses here
        Warehouse::create(['product_id' => 1, 'packaging_unit' => 5, 'quantity_on_hand' => 453]);
        Warehouse::create(['product_id' => 2, 'packaging_unit' => 2.5, 'quantity_on_hand' => 400]);
        Warehouse::create(['product_id' => 3, 'packaging_unit' => 5, 'quantity_on_hand' => 1]);
        Warehouse::create(['product_id' => 4, 'packaging_unit' => 1, 'quantity_on_hand' => 800]);
        Warehouse::create(['product_id' => 5, 'packaging_unit' => 3, 'quantity_on_hand' => 234]);
        Warehouse::create(['product_id' => 6, 'packaging_unit' => 2, 'quantity_on_hand' => 345]);
        Warehouse::create(['product_id' => 7, 'packaging_unit' => 1, 'quantity_on_hand' => 795]);
        Warehouse::create(['product_id' => 8, 'packaging_unit' => 10, 'quantity_on_hand' => 233]);
        Warehouse::create(['product_id' => 9, 'packaging_unit' => 2.5, 'quantity_on_hand' => 123]);
        Warehouse::create(['product_id' => 10, 'packaging_unit' => 3, 'quantity_on_hand' => null]);
        Warehouse::create(['product_id' => 11, 'packaging_unit' => 2, 'quantity_on_hand' => 367]);
        Warehouse::create(['product_id' => 12, 'packaging_unit' => 1, 'quantity_on_hand' => 467]);
        Warehouse::create(['product_id' => 13, 'packaging_unit' => 5, 'quantity_on_hand' => 20]);
    }
}

class ProductPerAllergieSeeder extends Seeder
{
    public function run()
    {
        // Seed product per allergen here
        ProductPerAllergie::create(['product_id' => 1, 'allergen_id' => 2]);
        ProductPerAllergie::create(['product_id' => 1, 'allergen_id' => 1]);
        ProductPerAllergie::create(['product_id' => 1, 'allergen_id' => 3]);
        ProductPerAllergie::create(['product_id' => 3, 'allergen_id' => 4]);
        ProductPerAllergie::create(['product_id' => 6, 'allergen_id' => 5]);
        ProductPerAllergie::create(['product_id' => 9, 'allergen_id' => 2]);
        ProductPerAllergie::create(['product_id' => 9, 'allergen_id' => 5]);
        ProductPerAllergie::create(['product_id' => 10, 'allergen_id' => 2]);
        ProductPerAllergie::create(['product_id' => 12, 'allergen_id' => 4]);
        ProductPerAllergie::create(['product_id' => 13, 'allergen_id' => 1]);
        ProductPerAllergie::create(['product_id' => 13, 'allergen_id' => 4]);
        ProductPerAllergie::create(['product_id' => 13, 'allergen_id' => 5]);
        ProductPerAllergie::create(['product_id' => 14, 'allergen_id' => 5]);
    }
}

class ProductPerSupplierSeeder extends Seeder
{
    public function run()
    {
        // Seed product per supplier here
        ProductPerSupplier::create(['supplier_id' => 1, 'product_id' => 1, 'delivery_date' => '2023-04-09', 'quantity' => 23, 'next_delivery_date' => '2023-04-16']);
        ProductPerSupplier::create(['supplier_id' => 1, 'product_id' => 1, 'delivery_date' => '2023-04-18', 'quantity' => 21, 'next_delivery_date' => '2023-04-25']);
        ProductPerSupplier::create(['supplier_id' => 1, 'product_id' => 2, 'delivery_date' => '2023-04-09', 'quantity' => 12, 'next_delivery_date' => '2023-04-16']);
        ProductPerSupplier::create(['supplier_id' => 1, 'product_id' => 3, 'delivery_date' => '2023-04-10', 'quantity' => 11, 'next_delivery_date' => '2023-04-17']);
        ProductPerSupplier::create(['supplier_id' => 2, 'product_id' => 4, 'delivery_date' => '2023-04-14', 'quantity' => 16, 'next_delivery_date' => '2023-04-21']);
        ProductPerSupplier::create(['supplier_id' => 2, 'product_id' => 4, 'delivery_date' => '2023-04-21', 'quantity' => 23, 'next_delivery_date' => '2023-04-28']);
        ProductPerSupplier::create(['supplier_id' => 2, 'product_id' => 5, 'delivery_date' => '2023-04-14', 'quantity' => 45, 'next_delivery_date' => '2023-04-21']);
        ProductPerSupplier::create(['supplier_id' => 2, 'product_id' => 6, 'delivery_date' => '2023-04-14', 'quantity' => 30, 'next_delivery_date' => '2023-04-21']);
        ProductPerSupplier::create(['supplier_id' => 3, 'product_id' => 7, 'delivery_date' => '2023-04-12', 'quantity' => 12, 'next_delivery_date' => '2023-04-19']);
        ProductPerSupplier::create(['supplier_id' => 3, 'product_id' => 7, 'delivery_date' => '2023-04-19', 'quantity' => 23, 'next_delivery_date' => '2023-04-26']);
        ProductPerSupplier::create(['supplier_id' => 3, 'product_id' => 8, 'delivery_date' => '2023-04-10', 'quantity' => 12, 'next_delivery_date' => '2023-04-17']);
        ProductPerSupplier::create(['supplier_id' => 3, 'product_id' => 9, 'delivery_date' => '2023-04-11', 'quantity' => 1, 'next_delivery_date' => '2023-04-18']);
        ProductPerSupplier::create(['supplier_id' => 4, 'product_id' => 10, 'delivery_date' => '2023-04-16', 'quantity' => 24, 'next_delivery_date' => '2023-04-30']);
        ProductPerSupplier::create(['supplier_id' => 5, 'product_id' => 11, 'delivery_date' => '2023-04-10', 'quantity' => 47, 'next_delivery_date' => '2023-04-17']);
        ProductPerSupplier::create(['supplier_id' => 5, 'product_id' => 11, 'delivery_date' => '2023-04-19', 'quantity' => 60, 'next_delivery_date' => '2023-04-26']);
        ProductPerSupplier::create(['supplier_id' => 5, 'product_id' => 12, 'delivery_date' => '2023-04-11', 'quantity' => 45, 'next_delivery_date' => null]);
        ProductPerSupplier::create(['supplier_id' => 5, 'product_id' => 13, 'delivery_date' => '2023-04-12', 'quantity' => 23, 'next_delivery_date' => null]);
    }
}
