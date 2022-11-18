<?php

namespace App\Repositories;

use App\Models\Brand;

class BrandRepository {

    public function all()
    {
        return Brand::all();
    }
}

?>