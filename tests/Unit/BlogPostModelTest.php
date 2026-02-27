<?php

namespace Tests\Unit;

use App\Models\BlogPost;
use App\Models\BreakingNews;
use PHPUnit\Framework\TestCase;

class BlogPostModelTest extends TestCase
{
    public function test_blog_post_fillable_attributes_match_expected_fields(): void
    {
        $model = new BlogPost();

        $this->assertSame([
            'title',
            'excerpt',
            'image_path',
            'author',
            'published_at',
            'tags',
            'comments_label',
            'button_text',
            'sort_order',
        ], $model->getFillable());
    }

    public function test_breaking_news_uses_custom_table_name(): void
    {
        $model = new BreakingNews();

        $this->assertSame('breaking_news', $model->getTable());
    }
}
