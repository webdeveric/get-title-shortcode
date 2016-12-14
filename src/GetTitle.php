<?php

namespace webdeveric\GetTitleShortcode;

class GetTitle
{
    private $post_id;

    public function __construct()
    {
        \add_action('loop_start', [ $this, 'handleLoopStart' ]);
        \add_shortcode('gettitle', [ $this, 'render' ]);
    }

    public function handleLoopStart($query)
    {
        $this->post_id = $query->queried_object->ID;
    }

    public function render($attributes, $shortcode_content = null, $code = '')
    {
        return isset( $this->post_id ) ? get_the_title( $this->post_id ) : '';
    }
}
