<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        // Basic roles data
        App\Role::insert([
            ['name' => 'admin'],
            ['name' => 'bem'],
            ['name' => 'ukmo'],
            ['name' => 'ukmbalwana'],
            ['name' => 'ukmetalase'],
            ['name' => 'ukmlaos'],
            ['name' => 'himasif'],
            ['name' => 'binary'],
        ]);

        // Basic permissions data
        App\Permission::insert([
            ['name' => 'access.admin'],
            ['name' => 'access.bem'],
            ['name' => 'access.ukmo'],
            ['name' => 'access.ukmbalwana'],
            ['name' => 'access.ukmetalase'],
            ['name' => 'access.ukmlaos'],
            ['name' => 'access.himasif'],
            ['name' => 'access.binary'],
        ]);

        // Add a permission to a role
        $role = App\Role::where('name', 'admin')->first();
        $role->addPermission('access.admin');

        $role = App\Role::where('name', 'bem')->first();
        $role->addPermission('access.bem');

        $role = App\Role::where('name', 'ukmo')->first();
        $role->addPermission('access.ukmo');
        // ... Add other role permission if necessary

        // Create a user, and give roles
        $user = App\User::create([
            'email' => 'putridamayanti13@yahoo.com',
            'password' => bcrypt('200895'),
        ]);

        $user->assignRole('admin');
    }
}
