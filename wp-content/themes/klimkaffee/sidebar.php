<?php

    $all_pages = get_pages();

    // Then get your current page ID and children (out of all the pages)
    $parent_page_id = wp_get_post_parent_id(get_the_ID());
    $page_children = get_page_children($parent_page_id, $all_pages);
    $parent_page = get_post($parent_page_id);
    ?>
<div class="submenu">
    <h3><?php echo $parent_page->post_title ?></h3>
    <ul>
    <?php
    foreach($page_children as $page_child) {
        ?>

            <li><a href="../<?php echo $page_child->post_name ?>"><?php echo $page_child->post_title ?></a></li>
        <?php
    }
    ?>
    </ul>
</div>