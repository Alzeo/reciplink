<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK6SRpYx\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK6SRpYx/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerK6SRpYx.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerK6SRpYx\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerK6SRpYx\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'K6SRpYx',
    'container.build_id' => '48a3a22e',
    'container.build_time' => 1579518486,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK6SRpYx');
