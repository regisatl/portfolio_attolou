<?php
// Début du script PHP

namespace App\Http\Controllers;

// Définit le namespace pour ce fichier, ce qui aide à éviter les conflits de noms de classes.

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

// Importe les classes nécessaires pour ce fichier.

class SkillController extends Controller
{
    // Définit une nouvelle classe `SkillController` qui étend la classe `Controller`.

    public function index()
    {
        // Définit une méthode `index` pour afficher une liste de compétences.
        $skills = SkillResource::collection(Skill::all());
        // Récupère toutes les compétences de la base de données et les transforme en collection de ressources.
        return Inertia::render('Skills/Index', compact('skills'));
        // Renvoie une vue Inertia avec les compétences.
    }

    public function create()
    {
        // Définit une méthode `create` pour afficher un formulaire de création de compétence.
        return Inertia::render('Skills/Create');
        // Renvoie une vue Inertia pour créer une nouvelle compétence.
    }

    public function store(Request $request)
    {
        // Définit une méthode `store` pour enregistrer une nouvelle compétence dans la base de données.
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'image' => ['required', 'image']
        ]);
        // Valide les données de la requête.

        if ($request->hasFile('image')) {
            // Vérifie si une image a été téléchargée.
            $image = $request->file('image')->store('skills');
            // Stocke l'image téléchargée dans le dossier 'skills'.
            Skill::create([
                'name' => $request->name,
                'image' => $image
            ]);
            // Crée une nouvelle compétence avec le nom et l'image.
            return redirect()->route('skills.index')->with('message', 'Skill created successfully');
            // Redirige l'utilisateur vers la liste des compétences.
        }
        return redirect()->back();
        // Si aucune image n'a été téléchargée, redirige l'utilisateur vers la page précédente.
    }

    public function edit(Skill $skill)
    {
        // Définit une méthode `edit` pour afficher un formulaire d'édition de compétence.
        return Inertia::render('Skills/Edit', compact('skill'));
        // Renvoie une vue Inertia pour éditer une compétence existante.
    }

    public function update(Request $request, Skill $skill)
    {
        // Définit une méthode `update` pour mettre à jour une compétence existante dans la base de données.
        $image = $skill->image;
        // Stocke l'image actuelle de la compétence.
        $request->validate([
            'name' => ['required', 'string', 'min:3']
        ]);
        // Valide les données de la requête.

        if ($request->hasFile('image')) {
            // Vérifie si une nouvelle image a été téléchargée.
            Storage::delete($skill->image);
            // Supprime l'ancienne image.
            $image = $request->file('image')->store('skills');
            // Stocke la nouvelle image.
        }
        $skill->update([
            'name' => $request->name,
            'image' => $image
        ]);
        // Met à jour la compétence avec le nouveau nom et la nouvelle image.
        return redirect()->route('skills.index')->with('message', 'Skill updated successfully');
        // Redirige l'utilisateur vers la liste des compétences.
    }

    public function destroy(Skill $skill)
    {
        // Définit une méthode `destroy` pour supprimer une compétence de la base de données.
        Storage::delete($skill->image);
        // Supprime l'image de la compétence.
        $skill->delete();
        // Supprime la compétence de la base de données.
        return redirect()->route('skills.index')->with('message', 'Skill deleted successfully');
        // Redirige l'utilisateur vers la liste des compétences.
    }
}
// Fin de la classe `SkillController`.
