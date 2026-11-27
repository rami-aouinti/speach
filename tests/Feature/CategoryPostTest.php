<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryPostTest extends TestCase
{
    use RefreshDatabase;

    public function test_categories_are_returned_with_their_posts(): void
    {
        $category = Category::create(['name' => 'General']);
        $category->posts()->create([
            'title' => 'Welcome',
            'description' => 'A short introduction.',
            'description_detail' => 'The complete introduction.',
        ]);

        $this->getJson('/api/categories')
            ->assertOk()
            ->assertJsonPath('0.name', 'General')
            ->assertJsonPath('0.posts.0.title', 'Welcome')
            ->assertJsonPath('0.posts.0.description_detail', 'The complete introduction.');
    }

    public function test_category_and_post_can_be_created_updated_and_deleted(): void
    {
        $this->postJson('/api/categories', ['name' => 'Project'])
            ->assertCreated()
            ->assertJsonPath('name', 'Project');

        $category = Category::where('name', 'Project')->firstOrFail();

        $this->postJson('/api/posts', [
            'category_id' => $category->id,
            'title' => 'First milestone',
            'description' => 'The first project milestone.',
            'description_detail' => 'Detailed milestone information.',
        ])->assertCreated()->assertJsonPath('title', 'First milestone');

        $post = Post::firstOrFail();

        $this->putJson('/api/posts/'.$post->id, [
            'category_id' => $category->id,
            'title' => 'Updated milestone',
            'description' => 'Updated short description.',
            'description_detail' => 'Updated detailed content.',
        ])->assertOk()->assertJsonPath('title', 'Updated milestone');

        $this->putJson('/api/categories/'.$category->id, ['name' => 'Projects'])
            ->assertOk()->assertJsonPath('name', 'Projects');

        $this->deleteJson('/api/posts/'.$post->id)->assertOk();
        $this->deleteJson('/api/categories/'.$category->id)->assertOk();
        $this->assertDatabaseCount('categories', 0);
        $this->assertDatabaseCount('posts', 0);
    }

    public function test_seed_data_contains_the_three_requested_categories(): void
    {
        $this->seed();

        $this->assertDatabaseHas('categories', ['name' => 'General']);
        $this->assertDatabaseHas('categories', ['name' => 'Project']);
        $this->assertDatabaseHas('categories', ['name' => 'Others']);
        $this->assertDatabaseCount('categories', 3);
    }
}
