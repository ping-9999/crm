<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DemoGeneralSettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('general_settings')->delete();

        \DB::table('general_settings')->insert([
            0 => [
                'id' => 1,
                'key' => 'company_name',
                'display_name' => 'Company Name',
                'value' => 'Acculance',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id' => 2,
                'key' => 'company_tagline',
                'display_name' => 'Company Tagline',
                'value' => 'Ultimate Sales, Inventory, Accounting Management System',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id' => 3,
                'key' => 'email_address',
                'display_name' => 'Email Address',
                'value' => 'support@codeshape.net',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id' => 4,
                'key' => 'phone_number',
                'display_name' => 'Phone Number',
                'value' => '0170000000',
                'created_at' => null,
                'updated_at' => null,
            ],
            4 => [
                'id' => 5,
                'key' => 'address',
                'display_name' => 'Address',
                'value' => 'Ground Floor, Road# 24, House# 339, New DOHS, Mohakhali, Dhaka - 1206, Bangladesh',
                'created_at' => null,
                'updated_at' => null,
            ],
            5 => [
                'id' => 6,
                'key' => 'client_prefix',
                'display_name' => 'Client Prefix',
                'value' => 'AC',
                'created_at' => null,
                'updated_at' => null,
            ],
            6 => [
                'id' => 7,
                'key' => 'supplier_prefix',
                'display_name' => 'Supplier Prefix',
                'value' => 'AS',
                'created_at' => null,
                'updated_at' => null,
            ],
            7 => [
                'id' => 8,
                'key' => 'employee_prefix',
                'display_name' => 'Employee Prefix',
                'value' => 'AE',
                'created_at' => null,
                'updated_at' => null,
            ],
            8 => [
                'id' => 9,
                'key' => 'product_cat_prefix',
                'display_name' => 'Product Cat Prefix',
                'value' => 'APC',
                'created_at' => null,
                'updated_at' => null,
            ],
            9 => [
                'id' => 10,
                'key' => 'product_sub_cat_prefix',
                'display_name' => 'Product Sub Cat Prefix',
                'value' => 'APS',
                'created_at' => null,
                'updated_at' => null,
            ],
            10 => [
                'id' => 11,
                'key' => 'product_prefix',
                'display_name' => 'Product Prefix',
                'value' => 'AP',
                'created_at' => null,
                'updated_at' => null,
            ],
            11 => [
                'id' => 12,
                'key' => 'exp_cat_prefix',
                'display_name' => 'Exp Cat Prefix',
                'value' => 'AEC',
                'created_at' => null,
                'updated_at' => null,
            ],
            12 => [
                'id' => 13,
                'key' => 'exp_sub_cat_prefix',
                'display_name' => 'Exp Sub Cat Prefix',
                'value' => 'AES',
                'created_at' => null,
                'updated_at' => null,
            ],
            13 => [
                'id' => 14,
                'key' => 'pur_prefix',
                'display_name' => 'Pur Prefix',
                'value' => 'APP',
                'created_at' => null,
                'updated_at' => null,
            ],
            14 => [
                'id' => 15,
                'key' => 'pur_return_prefix',
                'display_name' => 'Pur Return Prefix',
                'value' => 'APR',
                'created_at' => null,
                'updated_at' => null,
            ],
            15 => [
                'id' => 16,
                'key' => 'quotation_prefix',
                'display_name' => 'Quotation Prefix',
                'value' => 'APQ',
                'created_at' => null,
                'updated_at' => null,
            ],
            16 => [
                'id' => 17,
                'key' => 'invoice_prefix',
                'display_name' => 'Invoice Prefix',
                'value' => 'AI',
                'created_at' => null,
                'updated_at' => null,
            ],
            17 => [
                'id' => 18,
                'key' => 'invoice_return_prefix',
                'display_name' => 'Invoice Return Prefix',
                'value' => 'AIR',
                'created_at' => null,
                'updated_at' => null,
            ],
            18 => [
                'id' => 19,
                'key' => 'adjustment_prefix',
                'display_name' => 'Adjustment Prefix',
                'value' => 'AIA',
                'created_at' => null,
                'updated_at' => null,
            ],
            19 => [
                'id' => 20,
                'key' => 'default_currency',
                'display_name' => 'Default Currency',
                'value' => '1',
                'created_at' => null,
                'updated_at' => null,
            ],
            20 => [
                'id' => 21,
                'key' => 'default_language',
                'display_name' => 'Default Language',
                'value' => 'en',
                'created_at' => null,
                'updated_at' => null,
            ],
            21 => [
                'id' => 22,
                'key' => 'logo',
                'display_name' => 'Logo',
                'value' => 'logo.png',
                'created_at' => null,
                'updated_at' => null,
            ],
            22 => [
                'id' => 23,
                'key' => 'logo_black',
                'display_name' => 'Logo Black',
                'value' => 'logo-black.png',
                'created_at' => null,
                'updated_at' => null,
            ],
            23 => [
                'id' => 24,
                'key' => 'small_logo',
                'display_name' => 'Small Logo',
                'value' => 'small-logo.png',
                'created_at' => null,
                'updated_at' => null,
            ],
            24 => [
                'id' => 25,
                'key' => 'favicon',
                'display_name' => 'Favicon',
                'value' => 'favicon.png',
                'created_at' => null,
                'updated_at' => null,
            ],
            25 => [
                'id' => 26,
                'key' => 'copyright',
                'display_name' => 'Copyright',
                'value' => 'Copyright',
                'created_at' => null,
                'updated_at' => '2022-05-18 09:30:44',
            ],
            26 => [
                'id' => 27,
                'key' => 'default_client_slug',
                'display_name' => 'Default Client Slug',
                'value' => 'walking-customer',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
