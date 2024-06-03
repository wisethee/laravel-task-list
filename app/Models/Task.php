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
 * @property boolean completed
 */
class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'long_description'];

    function complete(): void
    {
        $this->completed = !$this->completed;
        $this->save();
    }
}
