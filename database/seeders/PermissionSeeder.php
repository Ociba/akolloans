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
            "Can view dashboard","Can view Investors","Can add Investor","Can view Investor options","Can suspend Investor","Can activate Investor","Can delete Investor",
            "Can view Packages","Can view Packages options","Can add Package","Can edit Package","Can delete Package","Can view Clients","Can view Client Option","Can edit Clients Information","Can delete Client Information","Can view Interests","Can view Other Entries",
            "Can View categories","Can view Category Option","Can add Category","Can edit Category","Can delete Category","Can view district","Can view District Option","Can add district","Can edit district",
            "Can delete district","Can view Account Settings","Can view Users","Can add staff member","Can view User Option","Can delete User","Can view Permissions"];
    
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
