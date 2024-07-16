<?php
$HEADER_PATH = "<nav class='header-breadcrumb px-2' aria-label='breadcrumb'>
<ol class='breadcrumb mb-0'>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Market Sizing</li>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Sales</li>
  <li class='breadcrumb-item fs-14 text-darklight-400'>Existing Commercial Consumers All India</li>
</ol>
</nav>";
require(APPPATH . 'views/header.php');

?>
<?php require($this->config->item('views') . '/trending.php'); ?>
<?php require($this->config->item('views') . '/remaining.php'); ?>




<?php require($this->config->item('views') . '/footer.php'); ?>

