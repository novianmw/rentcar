<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with=['category'];

    public function scopeFaqSearch($query, array $filters)
    {   
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('name', 'LIKE', '%'.$search.'%')
                ->orWhere('content', 'LIKE', '%'.$search.'%');
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
