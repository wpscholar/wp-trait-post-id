<?php

namespace wpscholar\WordPress\Traits;

/**
 * Class PostID
 *
 * @package wpscholar\WordPress\Traits
 *
 * @property \WP_Post $post
 */
trait PostId {

	/**
	 * Get the post date.
	 *
	 * @return string
	 */
	public function postId() {
		return $this->post->ID;
	}

}
