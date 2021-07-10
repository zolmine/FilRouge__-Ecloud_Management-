<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Assurance extends Model
{
    use HasFactory;

    public function getAssuranceNameById($id)
    {
        return DB::table('assurances')
            ->select('assurance_name')
            ->where('assurance_id', '=', '$id')
            ->get();
    }
}
