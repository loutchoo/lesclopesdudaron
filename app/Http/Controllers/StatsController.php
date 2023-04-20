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

public function removekill($id, $number){
    $stats = Stat::findOrFail($id);
    $nombre = $stats->kills - $number;
    $stats->kills = $nombre;
    $stats->save();

    return response()->json(['Le nombre de kills demande a ete enleve' => true]);
}

public function piece($id, $number){
    $stats = Stat::findOrFail($id);
    $nombre = $stats->pieces + $number;
    $stats->pieces = $nombre;
    $stats->save();

    return response()->json(['Une piece a ete ajoute' => true]);
}

public function removepiece($id, $number){
    $stats = Stat::findOrFail($id);
    $nombre = $stats->pieces - $number;
    $stats->pieces = $nombre;
    $stats->save();

    return response()->json(['Le nombre de pieces demande a ete enleve' => true]);
}
}