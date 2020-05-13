<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'manajemen-produk']);
        Permission::create(['name' => 'menjalankan-transaksi']);
        Permission::create(['name' => 'manajemen-order']);
        Permission::create(['name' => 'manajemen-user']);
        $role = Role::create(['name' => 'siswacec']);
        $role->givePermissionTo('manajemen-produk', 'menjalankan-transaksi');
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('manajemen-order', 'manajemen-user', 'manajemen-produk', 'menjalankan-transaksi');
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@cec.id',
            'password' => bcrypt('secret'),
            'status' => true
        ]);
        $user->assignRole('admin');
    }
}
