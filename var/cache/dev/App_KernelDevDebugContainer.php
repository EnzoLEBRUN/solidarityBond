<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJmkH6H4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJmkH6H4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJmkH6H4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJmkH6H4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJmkH6H4\App_KernelDevDebugContainer([
    'container.build_hash' => 'JmkH6H4',
    'container.build_id' => '22e50aa2',
    'container.build_time' => 1592572902,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJmkH6H4');
