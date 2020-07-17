<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProductTypeSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(UserAddressSeeder::class);
        $this->call(OrderStatusCodesSeeder::class);
        $this->call(OrderItemsStatusCodesSeeder::class);
        $this->call(InvoiceStatusCodesSeeder::class);
        $this->call(OrderItemsSeeder::class);
        $this->call(UserPaymentMethodSeeder::class);
    }
}
