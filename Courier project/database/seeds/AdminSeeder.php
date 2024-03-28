<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('branches')->insert(
            [
                [
                    'name' => 'Karachi',
                    'image' => 'ocuJ7qOnCJmIuod1oUYRVg8l2eiFN99qST6VUnny.jpeg',
                    'email' => '',
                    'phone' => '031244556688',
                    'address' => 'Saddar'
                ],
                [
                    'name' => 'Islamabad',
                    'image' => 'ocuJ7qOnCJmIuod1oUYRVg8l2eiFN99qST6VUnny.jpeg',
                    'email' => '',
                    'phone' => '031244556688',
                    'address' => 'Saddar'
                ],
                [
                    'name' => 'Lahore',
                    'image' => 'ocuJ7qOnCJmIuod1oUYRVg8l2eiFN99qST6VUnny.jpeg',
                    'email' => '',
                    'phone' => '031244556688',
                    'address' => 'Saddar'
                ],
                [
                    'name' => 'Peshawar',
                    'image' => 'ocuJ7qOnCJmIuod1oUYRVg8l2eiFN99qST6VUnny.jpeg',
                    'email' => '',
                    'phone' => '031244556688',
                    'address' => 'Saddar'
                ],
                [
                    'name' => 'Quetta',
                    'image' => 'ocuJ7qOnCJmIuod1oUYRVg8l2eiFN99qST6VUnny.jpeg',
                    'email' => '',
                    'phone' => '031244556688',
                    'address' => 'Saddar'
                ],
            ]
        );

        

        DB::table('units')->insert(
            [
                [
                    'name' => 'KG',
                    'status' => 'Active'
                ],
                [
                    'name' => 'Liter',
                    'status' => 'Active'
                ],
                [
                    'name' => 'Ton',
                    'status' => 'Active'
                ]
            ]
        );

        DB::table('users')->insert(
           [
            [
                'name' => 'manager',
                'email' => 'shayanManager@gmail.com',
                'password' => Hash::make('password'),
                'phone' => '03362290835',
                'image' => NULL,
                'email_verified_at' => NULL,
                'type' => 'Manager',
                'branch_id' => '1',
                'status' => 'Active',
                'remember_token' => 'jrgLgE0GqkhtwRbBiASQKsUJ7x7yaK4mF3umJfn3sKFCOJDnJheNhqlYadgq'
            ],
            [
                'name' => 'agent',
                'email' => 'shayanStaff@gmail.com',
                'password' => Hash::make('password'),
                'phone' => '03362290835',
                'image' => NULL,
                'email_verified_at' => NULL,
                'type' => 'Staff',
                'branch_id' => '1',
                'status' => 'Active',
                'remember_token' => 'jrgLgE0GqkhtwRbBiASQKsUJ7x7yaK4mF3umJfn3sKFCOJDnJheNhqlYadgq'
            ]
           ]
        );

        
    }
}
