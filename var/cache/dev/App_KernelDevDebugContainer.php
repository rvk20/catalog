<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIEk8tox\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIEk8tox/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIEk8tox.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIEk8tox\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerIEk8tox\App_KernelDevDebugContainer([
    'container.build_hash' => 'IEk8tox',
    'container.build_id' => '67842e5b',
    'container.build_time' => 1650865415,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIEk8tox');
