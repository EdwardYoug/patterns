<?php

namespace Patterns\Builder\Interfaces;

use Patterns\Builder\BlogPost;

interface BuilderBlogPostInterface
{

    /**
     * @return BuilderBlogPostInterface
     */
    public function create(): BuilderBlogPostInterface;

    /**
     * @param string $title
     * @return BuilderBlogPostInterface
     */
    public function setTitle(string $title): BuilderBlogPostInterface;

    /**
     * @param string $body
     * @return BuilderBlogPostInterface
     */
    public function setBody(string $body): BuilderBlogPostInterface;

    /**
     * @param array $tags
     * @return BuilderBlogPostInterface
     */
    public function setTags(array $tags): BuilderBlogPostInterface;

    /**
     * @param array $categories
     * @return BuilderBlogPostInterface
     */
    public function setCategories(array $categories): BuilderBlogPostInterface;

    /**
     * @return BlogPost
     */
    public function get(): BlogPost;
}