<?php

namespace Tests\Unit;

use App\Models\BlogPost;
use PHPUnit\Framework\TestCase;

class BlogPostModelTest extends TestCase
{
    public function test_blog_post_fillable_attributes_match_expected_fields(): void
    {
        $model = new BlogPost();

        $this->assertSame([
            'title',
            'slug',
            'excerpt',
            'content',
            'image_path',
            'published_at',
            'is_published',
        ], $model->getFillable());
    }

    public function test_blog_post_uses_expected_table_name(): void
    {
        $model = new BlogPost();

        $this->assertSame('blog_posts', $model->getTable());
    }
}
