<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolesHasPermissionsSeeder extends Seeder{
    public function run(){
        $admin = Role::find(1);   
        $roles = Role::all();
        $permissions = Permission::all();

        //Roles de l'administrateur
        $admin->syncPermissions($permissions);


        //Permissions de l'elève
        $eleve = Role::find(2);

        $eleve_permissions = [
            "absence_index",
            "annee_scolaire_index",
            "appreciation_index",
            "candidat_index",
            "classe_index",
            "coefficient_index",
            "cotisation_parralele_index",
            "eleve_index",
            "enseignant_index",
            "etablissement_index",
            "inscription_index",
            "matiere_index",
            "niveau_serie_index",
            "note_index",
            "parent_index",
            "scolarite_index",
            "type_note_index",
        ];
        
        foreach ($permissions as $p) {
            if (in_array($p, $eleve_permissions)) {
                $eleve->syncPermissions($p);
            }
        }


        // Permission de l'enseignant :
        $enseignant = Role::find(3);
        $enseignant_permissions = [
            "absence_create",
            "absence_update",
            "absence_delete",
            "absence_show",
            "absence_index",

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

            "eleve_create",
            "eleve_update",
            "eleve_delete",
            "eleve_show",
            "eleve_index",

            "enseignant_update",
            "enseignant_show",
            "enseignant_index",

            "etablissement_index",
            "inscription_index",

            "matiere_create",
            "matiere_update",
            "matiere_delete",
            "matiere_show",
            "matiere_index",

            "niveau_serie_index",

            "note_create",
            "note_update",
            "note_delete",
            "note_show",
            "note_index",

            "scolarite_index",
            "type_note_index",
        ];

        foreach ($permissions as $p) {
            if (in_array($p, $enseignant_permissions)) {
                $enseignant->syncPermissions($p);
            }
        }

        //Permission du Comptable :
        $responsable = Role::find(4);
        $responsable_permissions = [
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
        ];

        foreach ($permissions as $p) {
            if ((in_array($p, $responsable_permissions))) {
                $responsable->syncPermissions($p);
            }
        }

        //Permission du sécretaire :
        $secretaire = Role::find(5);
        $rollback_secretaire_permissions = [
            "user_create",
            "user_update",
            "user_delete",
            "user_show",
        ];

        foreach ($permissions as $p) {
            if (!in_array($p, $rollback_secretaire_permissions)) {
                $secretaire->syncPermissions($p);
            }
        }

        //Permission du censeur :
        $censeur = Role::find(6);
        $censeur_permission = [
            "user_delete",
        ];

        foreach ($permissions as $p) {
            if (in_array($p, $censeur_permission)) {
                $censeur->syncPermissions($p);
            }
        }
    }
}