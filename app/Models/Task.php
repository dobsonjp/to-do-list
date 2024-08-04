<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'completed'];

    protected $casts = [
        'completed' => 'boolean',
    ];

    protected $description;
    protected $completed;

    public function getRouteKeyName(): string
    {
        return 'id';
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setCompleted(bool $completed): self
    {
        $this->completed = $completed;

        return $this;
    }

    public function getCompleted(): bool
    {
        return $this->completed;
    }
}
