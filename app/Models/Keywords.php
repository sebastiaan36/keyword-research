<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Keywords extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'keyword'];


public function project(): BelongsTo
{
    return $this->belongsTo(Project::class, 'project' );
}
}
