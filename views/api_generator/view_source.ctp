<?php
/**
 * View the source code for a file.
 *
 */
$this->pageTitle = $apiDoc->trimFileName($filename);
?>
<h1><?php echo $filename; ?></h1>

<?php echo $apiUtils->highlight($contents); ?>
