<?php

namespace App\Repositories;

use App\Task;
use App\Repositories\BaseRepository;

/**
 * Class TaskRepository
 * @package App\Repositories
 * @version July 26, 2020, 1:17 pm UTC
*/

class TaskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Task::class;
    }
}
