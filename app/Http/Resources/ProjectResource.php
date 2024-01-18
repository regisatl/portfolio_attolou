<?php
// Début du script PHP

namespace App\Http\Resources;

// Définit le namespace pour ce fichier, ce qui aide à éviter les conflits de noms de classes.

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

// Importe les classes nécessaires pour ce fichier.

class ProjectResource extends JsonResource
{
    // Définit une nouvelle classe `ProjectResource` qui étend la classe `JsonResource`.

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Définit une méthode `toArray` pour transformer la ressource en un tableau.
        return [
            'id' => $this->id,
            // Renvoie l'ID du projet.
            'name' => $this->name,
            // Renvoie le nom du projet.
            'image' => asset('/storage/' . $this->image),
            // Renvoie l'URL de l'image du projet.
            'skill' => new SkillResource($this->whenLoaded('skill')),
            // Renvoie la compétence associée au projet, si elle a été chargée.
            'project_url' => $this->project_url,
            // Renvoie l'URL du projet.
        ];
    }
}
// Fin de la classe `ProjectResource`.
