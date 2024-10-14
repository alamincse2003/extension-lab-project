<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model {
    use HasFactory;

    public function productCategory() {
        return $this->belongsTo( ProductCategory::class, 'productCategory_id' );
    }
}
