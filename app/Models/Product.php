<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;
    // Relationship with ApplicationCategory
    public function applicationCategory() {
        return $this->belongsTo( ApplicationCategory::class, 'applicationCategory_id' );
    }

    // Relationship with ProductCategory
    public function productCategory() {
        return $this->belongsTo( ProductCategory::class, 'productCategory_id' );
    }
}
