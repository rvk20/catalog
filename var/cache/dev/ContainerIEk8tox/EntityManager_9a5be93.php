<?php

namespace ContainerIEk8tox;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0d710 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9f33e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesac73f = [
        
    ];

    public function getConnection()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getConnection', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getMetadataFactory', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getExpressionBuilder', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'beginTransaction', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getCache', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'transactional', array('func' => $func), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'commit', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->commit();
    }

    public function rollback()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'rollback', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getClassMetadata', array('className' => $className), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'createQuery', array('dql' => $dql), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'createNamedQuery', array('name' => $name), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'createQueryBuilder', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'flush', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'clear', array('entityName' => $entityName), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->clear($entityName);
    }

    public function close()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'close', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->close();
    }

    public function persist($entity)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'persist', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'remove', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'refresh', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'detach', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'merge', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'contains', array('entity' => $entity), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getEventManager', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getConfiguration', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'isOpen', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getUnitOfWork', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getProxyFactory', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'initializeObject', array('obj' => $obj), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'getFilters', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'isFiltersStateClean', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'hasFilters', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return $this->valueHolder0d710->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer9f33e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0d710) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0d710 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0d710->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, '__get', ['name' => $name], $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        if (isset(self::$publicPropertiesac73f[$name])) {
            return $this->valueHolder0d710->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d710;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0d710;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d710;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0d710;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, '__isset', array('name' => $name), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d710;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0d710;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, '__unset', array('name' => $name), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0d710;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0d710;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, '__clone', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        $this->valueHolder0d710 = clone $this->valueHolder0d710;
    }

    public function __sleep()
    {
        $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, '__sleep', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;

        return array('valueHolder0d710');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9f33e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9f33e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9f33e && ($this->initializer9f33e->__invoke($valueHolder0d710, $this, 'initializeProxy', array(), $this->initializer9f33e) || 1) && $this->valueHolder0d710 = $valueHolder0d710;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0d710;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0d710;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
