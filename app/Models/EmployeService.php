<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeService extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "employe_service";
    public function employe()
    {
        return $this->belongsTo(Employe::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
