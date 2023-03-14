<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionSeeder extends Seeder{
    public function run(){
        $permissions = array(
            "absence_create",
            "absence_update",
            "absence_delete",
            "absence_show",
            "absence_index",

            "annee_scolaire_create",
            "annee_scolaire_update",
            "annee_scolaire_delete",
            "annee_scolaire_show",
            "annee_scolaire_index",

            "appreciation_create",
            "appreciation_update",
            "appreciation_delete",
            "appreciation_show",
            "appreciation_index",

            "classe_create",
            "classe_update",
            "classe_delete",
            "classe_show",
            "classe_index",

            "coefficient_create",
            "coefficient_update",
            "coefficient_delete",
            "coefficient_show",
            "coefficient_index",

            "cotisation_parralele_create",
            "cotisation_parralele_update",
            "cotisation_parralele_delete",
            "cotisation_parralele_show",
            "cotisation_parralele_index",

            "eleve_create",
            "eleve_update",
            "eleve_delete",
            "eleve_show",
            "eleve_index",

            "enseignant_create",
            "enseignant_update",
            "enseignant_delete",
            "enseignant_show",
            "enseignant_index",

            "etablissement_create",
            "etablissement_update",
            "etablissement_delete",
            "etablissement_show",
            "etablissement_index",

            "inscription_create",
            "inscription_update",
            "inscription_delete",
            "inscription_show",
            "inscription_index",

            "matiere_create",
            "matiere_update",
            "matiere_delete",
            "matiere_show",
            "matiere_index",

            "niveau_serie_create",
            "niveau_serie_update",
            "niveau_serie_delete",
            "niveau_serie_show",
            "niveau_serie_index",

            "note_create",
            "note_update",
            "note_delete",
            "note_show",
            "note_index",

            "parent_create",
            "parent_update",
            "parent_delete",
            "parent_show",
            "parent_index",

            "scolarite_create",
            "scolarite_update",
            "scolarite_delete",
            "scolarite_show",
            "scolarite_index",

            "type_note_create",
            "type_note_update",
            "type_note_delete",
            "type_note_show",
            "type_note_index",

            "user_create",
            "user_update",
            "user_delete",
            "user_show",
            "user_index"
        );      

        foreach($permissions as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}