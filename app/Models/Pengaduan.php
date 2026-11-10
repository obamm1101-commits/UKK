<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengaduan extends Model
{
    protected $fillable = ['user_id', 'category_id', 'status', 'ruangan', 'deskripsi'];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
