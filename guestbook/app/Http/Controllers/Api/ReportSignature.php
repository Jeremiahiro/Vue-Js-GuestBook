<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Signature;

class ReportSignature extends Controller
{
    
    /**
     * Flag a given signature
     * 
     * @param Signature $signature
     * @return Signature
     */
    public function update(Signature $signature)
    {
        # code...
        $signature->flag();

        return $signature;
    }
}
