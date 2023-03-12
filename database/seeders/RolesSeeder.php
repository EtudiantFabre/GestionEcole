<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class RolesSeeder extends Seeder{
    public function run(){
        $roles = array('admin', 'eleve', 'enseignant', 'responsable', 'secretaire', 'censeur');
        foreach($roles as $role){
            Role::create(['name' => $role]);
        }
    }

}