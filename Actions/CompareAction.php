<?php

namespace Modules\Compare\Actions;

use Illuminate\Support\Facades\Session;
use Lorisleiva\Actions\Concerns\AsAction;

class CompareAction
{
    use AsAction;

    public function handle(int $product_id, bool $action): bool
    {
        $action ? Session::put("compare_product_id_$product_id", $product_id) : Session::forget("compare_product_id_$product_id");;
        return true;
    }
}
