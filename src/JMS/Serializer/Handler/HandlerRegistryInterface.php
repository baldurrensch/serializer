<?php

namespace JMS\Serializer\Handler;

/**
 * Handler Registry Interface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface HandlerRegistryInterface
{
    /**
     * @param SubscribingHandlerInterface $handler
     *
     * @return void
     */
    public function registerSubscribingHandler(SubscribingHandlerInterface $handler);

    /**
     * Registers a handler in the registry.
     *
     * @param integer $direction one of the GraphNavigator::DIRECTION_??? constants
     * @param string $typeName
     * @param string $format
     * @param callable $handler function(VisitorInterface, mixed $data, array $type): mixed
     * @param boolean $inheriting Whether that function should also be applied to objects that inherit
     *                            from the targeted class.
     *
     * @return void
     */
    public function registerHandler($direction, $typeName, $format, $handler, $inheriting = false);

    /**
     * @param integer $direction one of the GraphNavigator::DIRECTION_??? constants
     * @param string $typeName
     * @param string $format
     * @param mixed $object
     *
     * @return callable|null
     */
    public function getHandler($direction, $typeName, $format, $object = null);
}
