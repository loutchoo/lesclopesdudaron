<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use Illuminate\Http\Request;

class StatsController extends Controller
{
public function kill($id){
    $stats = Stat::findOrFail($id);
    $stats->kills++;
    $stats->save();

    return response()->json(['Un kill a ete ajoute' => true]);
}

public function piece($id){
    $stats = Stat::findOrFail($id);
    $stats->pieces++;
    $stats->save();

    return response()->json(['Une piece a ete ajoute' => true]);
}
}
