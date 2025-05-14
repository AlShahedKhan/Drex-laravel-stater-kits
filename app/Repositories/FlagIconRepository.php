<?php

namespace App\Repositories;
use App\Interfaces\FlagIconInterface;
use App\Models\FlagIcon;
use App\Traits\CommonHelperTrait;

class FlagIconRepository implements FlagIconInterface
{
    use CommonHelperTrait;
    private $model;

    public function __construct(FlagIcon $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return FlagIcon::all();
    }

}
