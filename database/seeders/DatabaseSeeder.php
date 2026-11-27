<?php

namespace Database\\Seeders;

use App\\Models\\Category;
use Illuminate\\Database\\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $examples = [
            'General' => [
                ['A place for ideas', 'A shared space for thoughts, notes and useful conversations.', 'Use this space to collect ideas, ask questions and share information that does not belong to a specific project. Keep the conversation clear, useful and welcoming.'],
                ['Getting started', 'A quick introduction to how this space is organised.', 'Browse the categories, open a post to read its full content, or create your own post. Each post belongs to one category, so choose the one that best matches its subject.'],
            ],
            'Project' => [
                ['Project overview', 'Keep project updates, decisions and milestones in one place.', 'Use this category to share project context, progress updates, milestones and decisions. Add enough detail so that everyone can understand what changed and what needs attention next.'],
                ['Next milestones', 'A concise view of the upcoming work and priorities.', 'Describe the next milestones, the expected outcome and any dependencies. Update this post as the project evolves so the team always has a reliable overview.'],
            ],
            'Others' => [
                ['Useful resources', 'Links, references and material worth keeping close.', 'Collect useful resources and references here. Add a short explanation for each item so readers understand why it is relevant and when they might need it.'],
                ['Open discussion', 'Topics that are interesting but do not fit elsewhere.', 'A flexible place for miscellaneous topics, suggestions and open discussions. Keep posts focused and use a descriptive title to make them easy to find.'],
            ],
        ];

        foreach ($examples as $name => $posts) {
            $category = Category::firstOrCreate(['name' => $name]);

            foreach ($posts as [$title, $description, $detail]) {
                $category->posts()->firstOrCreate(
                    ['title' => $title],
                    ['description' => $description, 'description_detail' => $detail]
                );
            }
        }
    }
}
