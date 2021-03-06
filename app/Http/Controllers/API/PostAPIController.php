<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePostAPIRequest;
use App\Http\Requests\API\UpdatePostAPIRequest;
use App\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class PostController
 * @package App\Http\Controllers\API
 */

class PostAPIController extends AppBaseController
{
    /** @var  PostRepository */
    private $postRepository;

    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * Display a listing of the Post.
     * GET|HEAD /posts
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $posts = $this->postRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $posts->toArray(),
            __('messages.retrieved', ['model' => __('models/posts.plural')])
        );
    }

    /**
     * Store a newly created Post in storage.
     * POST /posts
     *
     * @param CreatePostAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePostAPIRequest $request)
    {
        $input = $request->all();

        $post = $this->postRepository->create($input);

        return $this->sendResponse(
            $post->toArray(),
            __('messages.saved', ['model' => __('models/posts.singular')])
        );
    }

    /**
     * Display the specified Post.
     * GET|HEAD /posts/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Post $post */
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/posts.singular')])
            );
        }

        return $this->sendResponse(
            $post->toArray(),
            __('messages.retrieved', ['model' => __('models/posts.singular')])
        );
    }

    /**
     * Update the specified Post in storage.
     * PUT/PATCH /posts/{id}
     *
     * @param int $id
     * @param UpdatePostAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostAPIRequest $request)
    {
        $input = $request->all();

        /** @var Post $post */
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/posts.singular')])
            );
        }

        $post = $this->postRepository->update($input, $id);

        return $this->sendResponse(
            $post->toArray(),
            __('messages.updated', ['model' => __('models/posts.singular')])
        );
    }

    /**
     * Remove the specified Post from storage.
     * DELETE /posts/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Post $post */
        $post = $this->postRepository->find($id);

        if (empty($post)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/posts.singular')])
            );
        }

        $post->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/posts.singular')])
        );
    }
}
