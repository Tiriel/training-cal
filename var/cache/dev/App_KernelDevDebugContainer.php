<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFtUtn2x\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFtUtn2x/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFtUtn2x.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFtUtn2x\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFtUtn2x\App_KernelDevDebugContainer([
    'container.build_hash' => 'FtUtn2x',
    'container.build_id' => '8c85741f',
    'container.build_time' => 1719298811,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFtUtn2x');
