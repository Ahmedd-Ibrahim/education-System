<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create settings permissions
        Permission::create(['name' => 'edit settings']);
        Permission::create(['name' => 'delete settings']);
        Permission::create(['name' => 'store settings']);
        Permission::create(['name' => 'update settings']);
        Permission::create(['name' => 'show settings']);

        // create website permissions
        Permission::create(['name' => 'edit website']);
        Permission::create(['name' => 'delete website']);
        Permission::create(['name' => 'store website']);
        Permission::create(['name' => 'update website']);
        Permission::create(['name' => 'show website']);


        // create config permissions
        Permission::create(['name' => 'edit config']);
        Permission::create(['name' => 'delete config']);
        Permission::create(['name' => 'store config']);
        Permission::create(['name' => 'update config']);
        Permission::create(['name' => 'show config']);

        // create class permissions
        Permission::create(['name' => 'edit class']);
        Permission::create(['name' => 'delete class']);
        Permission::create(['name' => 'store class']);
        Permission::create(['name' => 'update class']);
        Permission::create(['name' => 'show class']);


        // create prof permissions
        Permission::create(['name' => 'edit prof']);
        Permission::create(['name' => 'delete prof']);
        Permission::create(['name' => 'store prof']);
        Permission::create(['name' => 'update prof']);
        Permission::create(['name' => 'show prof']);


        // create student permissions
        Permission::create(['name' => 'edit student']);
        Permission::create(['name' => 'delete student']);
        Permission::create(['name' => 'store student']);
        Permission::create(['name' => 'update student']);
        Permission::create(['name' => 'show student']);


        // create subject permissions
        Permission::create(['name' => 'edit subject']);
        Permission::create(['name' => 'delete subject']);
        Permission::create(['name' => 'store subject']);
        Permission::create(['name' => 'update subject']);
        Permission::create(['name' => 'show subject']);


        // create health permissions
        Permission::create(['name' => 'edit health']);
        Permission::create(['name' => 'delete health']);
        Permission::create(['name' => 'store health']);
        Permission::create(['name' => 'update health']);
        Permission::create(['name' => 'show health']);


        // create food permissions
        Permission::create(['name' => 'edit food']);
        Permission::create(['name' => 'delete food']);
        Permission::create(['name' => 'store food']);
        Permission::create(['name' => 'update food']);
        Permission::create(['name' => 'show food']);


        // create scheduler permissions
        Permission::create(['name' => 'edit scheduler']);
        Permission::create(['name' => 'delete scheduler']);
        Permission::create(['name' => 'store scheduler']);
        Permission::create(['name' => 'update scheduler']);
        Permission::create(['name' => 'show scheduler']);


        // create roles and assign created permissions

        // this can be done as separate statements
        $role = Role::create(['name' => 'employee']);
        $role->givePermissionTo('edit student','update student','store student');

        // or may be done by chaining
        $role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

    }
}
