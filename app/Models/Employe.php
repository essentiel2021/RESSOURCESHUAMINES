<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employe extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = [];

    public function serviceEmploye(){
        return $this->hasMany(EmployeService::class);
    }
    public function situation(){
        return $this->belongsTo(SituationMatrimoniale::class,"situation_matrimoniale_id","id");
    }
    public function commune(){
        return $this->belongsTo(Commune::class,"commune_id","id");
    }
    public function piece(){
        return $this->belongsTo(PieceIdentite::class,"piece_identite_id","id");
    }
    public function services(){
        return $this->belongsToMany(Service::class, 'employe_service', 'employe_id', 'service_id');
    }
    public function user(){
        
    }
    public function fonction(){
        return $this->belongsTo(Fonction::class);
    }
    public function age()
    {
        return Carbon::parse($this->dateNaissance)->age;
    }
}
