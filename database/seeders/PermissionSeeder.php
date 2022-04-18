<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            "Can view dashboard","Can View categories"];
    
            for($i=0; $i < count($permissions); $i++){
               $permission = new Permission();
                if(Permission::where("id",$i)->exists()){
                    $permission->id = $i+1;
                }
                else{
                   $permission->id = $i;
                } 
                $permission->Permission=$permissions[$i];
                $permission->save();
            }
    }
}
