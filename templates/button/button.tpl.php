<?php

/**
 * @file
 * Contains template file.
 */
?>
<button<?php print $atomium['attributes']['element']->append('class', 'ecl-button--default'); ?>>
  <?php print render($element['#value']); ?><?php print render($element['#children']); ?>
</button>
