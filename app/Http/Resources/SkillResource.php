<?php
// Début du script PHP

namespace App\Http\Resources;

// Définit le namespace pour ce fichier, ce qui aide à éviter les conflits de noms de classes.

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

// Importe les classes nécessaires pour ce fichier.

class SkillResource extends JsonResource
{
    // Définit une nouvelle classe `SkillResource` qui étend la classe `JsonResource`.

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
            // Renvoie l'ID de la compétence.
            'name' => $this->name,
            // Renvoie le nom de la compétence.
            'image' => asset('/storage/' . $this->image)
            // Renvoie l'URL de l'image de la compétence.
        ];
    }
}
// Fin de la classe `SkillResource`.
