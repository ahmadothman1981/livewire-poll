<?php

namespace App\Models;

use App\Models\Poll;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function poll()
    {
        return $this->belongsTo(Poll::class);
    }

    public function votes(): HasMany
    {
        return $this-> hasMany(Vote::class);
    }
}
