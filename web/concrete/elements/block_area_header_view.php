<?
defined('C5_EXECUTE') or die("Access Denied.");
$c = Page::getCurrentPage();
$css = $c->getAreaCustomStyle($a);
if (is_object($css)) {
    $class = $css->getContainerClass();
}
?>

<div data-section="area-view" class="<?=$class?>" >
