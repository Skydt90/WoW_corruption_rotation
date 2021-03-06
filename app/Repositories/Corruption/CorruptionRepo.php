<?php

namespace App\Repositories\Corruption;

use App\Repositories\BaseRepo;
use Illuminate\Database\Eloquent\Model;

class CorruptionRepo extends BaseRepo implements CorruptionRepoInterface
{

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function createFromFile(object $corruption) : Model
    {
        return $this->model->firstOrCreate([
            'name'          => $corruption->name,
            'description'   => $corruption->description,
            'wowhead_link'  => $corruption->wowhead_link,
            'corr_cost'     => $corruption->corr_cost,
            'echo_cost'     => $corruption->echo_cost,
            'blizz_item_id' => $corruption->blizz_item_id,
            'rotation_id'   => $corruption->rotation_id
        ]);
    }
}
