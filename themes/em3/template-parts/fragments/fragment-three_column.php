<div class="three-columns">
    <?php
    foreach( $row_data as $field_key => $item )
    {
        $field = get_field_object($field_key);
        if($field) {
            echo '<div class='.$field['name'].'>' . get_sub_field($field['name']) . '</div>';
        }
    }
    ?>
</div>