<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerA7TtDYu\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerA7TtDYu/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerA7TtDYu.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerA7TtDYu\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerA7TtDYu\App_KernelDevDebugContainer([
    'container.build_hash' => 'A7TtDYu',
    'container.build_id' => '3256dd69',
    'container.build_time' => 1645367498,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerA7TtDYu');
