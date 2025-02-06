<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Word;
use App\Http\Controllers\Controller;

class WordApiController extends Controller
{
   
    public function store(Request $request)
    {
        // Validate the DNI
        $validated = $request->validate([
            'dni' => 'required|integer|digits:8'
        ]);

        $dni = $validated['dni'];

        // Calculate the module
        $calculatedModule = $this->calculateModule($dni);

        // Find the word 
        $word = $this->findWordByModule($calculatedModule);

        // Return a JSON response
        return $this->ResponseSucces($dni, $word);
    }

    private function calculateModule(int $dni)
    {
        $ModuleNumber = 23;
        return ($dni % $ModuleNumber) + 1;
    }

    private function findWordByModule(int $calculatedModule)
    {
        $word = Word::find($calculatedModule);
        return $word -> word ;
    }

    private function ResponseSucces($dni, $word)
    {
        return response()->json([
            'completeDNI' => $dni . $word
        ], 200);
    }
}
