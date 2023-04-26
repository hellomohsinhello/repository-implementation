<?php


namespace App\Repository;

use App\Models\Post;
use App\Repository\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{

    public function all()
    {
        return Post::all();
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update(array $data, string $id)
    {
        $post = Post::find($id);
        return $post->update($data);
    }

    public function delete(string $id)
    {
        return Post::destroy($id);
    }

    public function show(string $id)
    {
        return Post::find($id);
    }
}
