<?php

namespace App\Models;

use CodeIgniter\Model;

class PromosModel extends Model
{
    protected $table = 'project';
    protected $allowedFields = ['p-name', 'client', 'pleader', 'pleader-photo', 'start-date', 'end-date', 'progress'];

    public function getPromos($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
