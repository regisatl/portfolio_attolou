<?php
// Début du script PHP

namespace App\Http\Controllers;

// Définit le namespace pour ce fichier, ce qui aide à éviter les conflits de noms de classes.

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

// Importe les classes nécessaires pour ce fichier.

class ProjectController extends Controller
{
    // Définit une nouvelle classe `ProjectController` qui étend la classe `Controller`.

    public function index()
    {
        // Définit une méthode `index` pour afficher une liste de projets.
        $projects = ProjectResource::collection(Project::with('skill')->get());
        // Récupère tous les projets de la base de données et les transforme en collection de ressources.
        return Inertia::render('Projects/Index', compact('projects'));
        // Renvoie une vue Inertia avec les projets.
    }

    public function create()
    {
        // Définit une méthode `create` pour afficher un formulaire de création de projet.
        $skills = Skill::all();
        // Récupère toutes les compétences de la base de données.
        return Inertia::render('Projects/Create', compact('skills'));
        // Renvoie une vue Inertia pour créer un nouveau projet.
    }

    public function store(Request $request)
    {
        // Définit une méthode `store` pour enregistrer un nouveau projet dans la base de données.
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'image' => ['required', 'image'],
            'skill_id' => ['required']
        ]);
        // Valide les données de la requête.

        if ($request->hasFile('image')) {
            // Vérifie si une image a été téléchargée.
            $image = $request->file('image')->store('projects');
            // Stocke l'image téléchargée dans le dossier 'projects'.
            Project::create([
                'skill_id' => $request->skill_id,
                'name' => $request->name,
                'image' => $image,
                'project_url' => $request->project_url
            ]);
            // Crée un nouveau projet avec l'ID de compétence, le nom, l'image et l'URL du projet.
            return redirect()->route('projects.index')->with('message', 'Project created successfully');
            // Redirige l'utilisateur vers la liste des projets.
        }
        return redirect()->back();
        // Si aucune image n'a été téléchargée, redirige l'utilisateur vers la page précédente.
    }

    public function edit(Project $project)
    {
        // Définit une méthode `edit` pour afficher un formulaire d'édition de projet.
        $skills = Skill::all();
        // Récupère toutes les compétences de la base de données.
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
        // Renvoie une vue Inertia pour éditer un projet existant.
    }

    public function update(Request $request, Project $project)
    {
        // Définit une méthode `update` pour mettre à jour un projet existant dans la base de données.
        $image = $project->image;
        // Stocke l'image actuelle du projet.
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'skill_id' => ['required', 'skill_id']
        ]);
        // Valide les données de la requête.

        if ($request->hasFile('image')) {
            // Vérifie si une nouvelle image a été téléchargée.
            Storage::delete($project->image);
            // Supprime l'ancienne image.
            $image = $request->file('image')->store('projects');
            // Stocke la nouvelle image.
        }
        $project->update([
            'name' => $request->name,
            'skill_id' => $request->skill_id,
            'image' => $image,
            'project_url' => $request->project_url
        ]);
        // Met à jour le projet avec le nouveau nom, l'ID de compétence, l'image et l'URL du projet.
        return redirect()->route('projects.index')->with('message', 'Project updated successfully');
        // Redirige l'utilisateur vers la liste des projets.
    }

    public function destroy(Project $project)
    {
        // Définit une méthode `destroy` pour supprimer un projet de la base de données.
        Storage::delete($project->image);
        // Supprime l'image du projet.
        $project->delete();
        // Supprime le projet de la base de données.
        return redirect()->route('projects.index')->with('message', 'Project deleted successfully');
        // Redirige l'utilisateur vers la liste des projets.
    }
}
// Fin de la classe `ProjectController`.
