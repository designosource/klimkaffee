<?php

$args = array(
	'child_of' => wp_get_post_parent_id(get_the_ID()),
	'parent' => wp_get_post_parent_id(get_the_ID()),
	'hierarchical' => 0,
	'sort_column' => 'menu_order',
	'sort_order' => 'asc'
);
    $parent_page_id = wp_get_post_parent_id(get_the_ID());
    $page_children = get_pages( $args );
    $parent_page = get_post($parent_page_id);
    $current_page = home_url( $wp->request );
    ?>
<div class="submenu">
    <h3><?php echo $parent_page->post_title ?></h3>
    <ul>
    <?php
    foreach($page_children as $page_child) {
        ?>

            <li>
                <a <?php if (strpos($current_page, $page_child->post_name) !== false) { echo 'class="active-page"';}?> href="../<?php echo $page_child->post_name ?>"><?php echo $page_child->post_title ?>
                </a>
            </li>
        <?php
    }
    ?>
    </ul>
</div>