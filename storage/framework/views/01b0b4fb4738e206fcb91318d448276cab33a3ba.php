<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($name, $params)->html();
} elseif ($_instance->childHasBeenRendered('fMmq1fk')) {
    $componentId = $_instance->getRenderedChildComponentId('fMmq1fk');
    $componentTag = $_instance->getRenderedChildComponentTagName('fMmq1fk');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('fMmq1fk');
} else {
    $response = \Livewire\Livewire::mount($name, $params);
    $html = $response->html();
    $_instance->logRenderedChild('fMmq1fk', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php /**PATH D:\Drive4\Ecommerce-web-application\vendor\livewire\livewire\src\Testing/../views/mount-component.blade.php ENDPATH**/ ?>