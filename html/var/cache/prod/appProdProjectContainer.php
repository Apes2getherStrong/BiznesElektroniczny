<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLqpb9qk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLqpb9qk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerLqpb9qk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerLqpb9qk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerLqpb9qk\appProdProjectContainer([
    'container.build_hash' => 'Lqpb9qk',
    'container.build_id' => 'e759e296',
    'container.build_time' => 1701776719,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLqpb9qk');
