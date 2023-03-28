<?php
    global $post;
    $product_price = get_post_meta($post->ID,'product_price',true);
    $product_quantity = get_post_meta($post->ID,'product_quantity',true);

    
?>
<table class="form-table">
    <tr>
    <th scope="row"><label for="price">Giá</label></th>
        <td><input type="text" name='product_price' id='price' value='<?= $product_price ?>'></td>
    </tr>
    <tr>
    <th scope="row"><label for="quantity">Số lượng</label></th>
        <td><input type="text" name='product_quantity' id='quantity' value='<?= $product_price ?>'></td>
    </tr>
</table>