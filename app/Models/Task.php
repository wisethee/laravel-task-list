<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static findOrFail($id)
 * @method static latest()
 * @property string id
 * @property string title
 * @property string description
 * @property string long_description
 */
class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'long_description'];
}
