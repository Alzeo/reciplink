<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF6HMxtd\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF6HMxtd/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF6HMxtd.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF6HMxtd\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerF6HMxtd\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'F6HMxtd',
    'container.build_id' => '588eb3f6',
    'container.build_time' => 1577442727,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF6HMxtd');
