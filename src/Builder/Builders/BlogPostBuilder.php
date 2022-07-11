<?php

namespace Patterns\Builder\Builders;

use Patterns\Builder\BlogPost;
use Patterns\Builder\Interfaces\BuilderBlogPostInterface;

class BlogPostBuilder implements BuilderBlogPostInterface
{

    /**
     * @var
     */
    private BlogPost $blogPost;

    public function __construct()
    {
        $this->create();
    }

    /**
     * @inheritDoc
     */
    public function setTitle(string $title): BuilderBlogPostInterface
    {
        $this->blogPost->title = $title;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setBody(string $body): BuilderBlogPostInterface
    {
        $this->blogPost->body = $body;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setTags(array $tags): BuilderBlogPostInterface
    {
        $this->blogPost->tags = $tags;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setCategories(array $categories): BuilderBlogPostInterface
    {
        $this->blogPost->categories = $categories;

        return $this;
    }

    public function get(): BlogPost
    {
        $result = $this->blogPost;

        $this->create();

        return $result;
    }

    public function create(): BuilderBlogPostInterface
    {
        $this->blogPost = new BlogPost();

        return $this;
    }
}