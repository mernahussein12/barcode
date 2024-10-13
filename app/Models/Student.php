<?php

namespace App\Models;
use Picqer\Barcode\BarcodeGeneratorPNG;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function getBarcodeAttribute()
    {
        $generator = new BarcodeGeneratorPNG();
        return 'data:image/png;base64,' . base64_encode($generator->getBarcode($this->national_id, $generator::TYPE_CODE_128)); // الرقم القومي
    }
}
