<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // Either declare fields as fillable through forms
    // Or use Model::unguard(); in AppServiceProvider
    // protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags'];

    /*
        Only use Model::unguard() if fields are validated.
        Model::unguard() allows all request fields to be inserted into the database,
        Which we dont want for fields like updatedAt or createdAt etc.
    */

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) {
            $query
                ->where('tags', 'like', '%' . request('tag') . '%');
        }

        if ($filters['search'] ?? false) {
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }

    // Relationship To User
    public function user()
    {
        // as long as it's <model name>_id the second argument can be omitted.
        return $this->belongsTo(User::class, 'user_id');
    }
}
