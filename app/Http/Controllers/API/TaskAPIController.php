<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTaskAPIRequest;
use App\Http\Requests\API\UpdateTaskAPIRequest;
use App\Task;
use App\Repositories\TaskRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TaskController
 * @package App\Http\Controllers\API
 */

class TaskAPIController extends AppBaseController
{
    /** @var  TaskRepository */
    private $taskRepository;

    public function __construct(TaskRepository $taskRepo)
    {
        $this->taskRepository = $taskRepo;
    }

    /**
     * Display a listing of the Task.
     * GET|HEAD /tasks
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tasks = $this->taskRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $tasks->toArray(),
            __('messages.retrieved', ['model' => __('models/tasks.plural')])
        );
    }

    /**
     * Store a newly created Task in storage.
     * POST /tasks
     *
     * @param CreateTaskAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTaskAPIRequest $request)
    {
        $input = $request->all();

        $task = $this->taskRepository->create($input);

        return $this->sendResponse(
            $task->toArray(),
            __('messages.saved', ['model' => __('models/tasks.singular')])
        );
    }

    /**
     * Display the specified Task.
     * GET|HEAD /tasks/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Task $task */
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/tasks.singular')])
            );
        }

        return $this->sendResponse(
            $task->toArray(),
            __('messages.retrieved', ['model' => __('models/tasks.singular')])
        );
    }

    /**
     * Update the specified Task in storage.
     * PUT/PATCH /tasks/{id}
     *
     * @param int $id
     * @param UpdateTaskAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTaskAPIRequest $request)
    {
        $input = $request->all();

        /** @var Task $task */
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/tasks.singular')])
            );
        }

        $task = $this->taskRepository->update($input, $id);

        return $this->sendResponse(
            $task->toArray(),
            __('messages.updated', ['model' => __('models/tasks.singular')])
        );
    }

    /**
     * Remove the specified Task from storage.
     * DELETE /tasks/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Task $task */
        $task = $this->taskRepository->find($id);

        if (empty($task)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/tasks.singular')])
            );
        }

        $task->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/tasks.singular')])
        );
    }
}
