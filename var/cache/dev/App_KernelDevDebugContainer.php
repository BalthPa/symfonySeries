<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUZyRCuW\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUZyRCuW/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerUZyRCuW.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerUZyRCuW\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerUZyRCuW\App_KernelDevDebugContainer([
    'container.build_hash' => 'UZyRCuW',
    'container.build_id' => 'c23790b4',
    'container.build_time' => 1583830660,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerUZyRCuW');
