<?php

use \Blockify\Block;
use \Blockify\Element;
use \Blockify\VoidElement;

$block->openTag('footer');

?>
<div class="container">
<?php

echo '<div class="content-section top">';
echo $block->content('top');
echo '</div>';

if(isset($block->model['text'])) {
  echo new Element('p', $block->model['text'], [
      'class' => 'content'
  ]);
}

echo '<div class="content-section bottom">';
echo $block->content('bottom', true);
echo '</div>';

?>
</div>
<?php


$block->closeTag();
