<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerNqLsx6N\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerNqLsx6N/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerNqLsx6N.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerNqLsx6N\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerNqLsx6N\App_KernelDevDebugContainer([
    'container.build_hash' => 'NqLsx6N',
    'container.build_id' => 'b146304e',
    'container.build_time' => 1629446168,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerNqLsx6N');