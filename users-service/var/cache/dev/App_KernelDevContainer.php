<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPowXj5K\App_KernelDevContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPowXj5K/App_KernelDevContainer.php') {
    touch(__DIR__.'/ContainerPowXj5K.legacy');

    return;
}

if (!\class_exists(App_KernelDevContainer::class, false)) {
    \class_alias(\ContainerPowXj5K\App_KernelDevContainer::class, App_KernelDevContainer::class, false);
}

return new \ContainerPowXj5K\App_KernelDevContainer([
    'container.build_hash' => 'PowXj5K',
    'container.build_id' => 'a56782b3',
    'container.build_time' => 1722523644,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPowXj5K');
