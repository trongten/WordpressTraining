<?php
$image =get_term_meta($tag->term_id,'image',true);
?>
    <tr class="form-field form-required term-name-wrap">
        <th scope="row">
            <label for="image">Ảnh</label>
        </th>
        <td><input type="text" name="image" id="image" value="<?= $image?>" ></td>
    </tr>
 
   
