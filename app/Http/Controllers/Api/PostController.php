<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController 
{
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:160'],
            'description' => ['required', 'string', 'max:280'],
            'description_detail' => ['required', 'string'],
        ]);

        return response()->json(Post::create($validated)->load('category'), 201);
    }

    public function update(Request $request, Post $post): JsonResponse
    {
        $validated = $request->validate([
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'title' => ['required', 'string', 'max:160'],
            'description' => ['required', 'string', 'max:280'],
            'description_detail' => ['required', 'string'],
        ]);

        $post->update($validated);

        return response()->json($post->load('category'));
    }

    public function destroy(Post $post): JsonResponse
    {
        $post->delete();

        return response()->json(['message' => 'Post deleted.']);
    }
}
