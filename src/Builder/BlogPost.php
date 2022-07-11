<?php

namespace Patterns\Builder;

class BlogPost
{
    /**
     * @var string $title
     */
    public string $title;

    /**
     * @var string $body
     */
    public string $body;

    /**
     * @var string $tags
     */
    public array $tags = [];

    /**
     * @var array $categories
     */
    public array $categories = [];

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}