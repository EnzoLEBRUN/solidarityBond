<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerINx5Fn3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerINx5Fn3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerINx5Fn3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerINx5Fn3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerINx5Fn3\App_KernelDevDebugContainer([
    'container.build_hash' => 'INx5Fn3',
    'container.build_id' => 'bd4b79c7',
    'container.build_time' => 1591894849,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerINx5Fn3');
