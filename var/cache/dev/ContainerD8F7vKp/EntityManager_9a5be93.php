<?php

namespace ContainerD8F7vKp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera28a4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer83720 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties502d1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getConnection', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getMetadataFactory', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getExpressionBuilder', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'beginTransaction', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getCache', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'transactional', array('func' => $func), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->transactional($func);
    }

    public function commit()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'commit', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->commit();
    }

    public function rollback()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'rollback', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getClassMetadata', array('className' => $className), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'createQuery', array('dql' => $dql), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'createNamedQuery', array('name' => $name), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'createQueryBuilder', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'flush', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'clear', array('entityName' => $entityName), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->clear($entityName);
    }

    public function close()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'close', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->close();
    }

    public function persist($entity)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'persist', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'remove', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'refresh', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'detach', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'merge', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'contains', array('entity' => $entity), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getEventManager', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getConfiguration', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'isOpen', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getUnitOfWork', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getProxyFactory', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'initializeObject', array('obj' => $obj), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'getFilters', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'isFiltersStateClean', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'hasFilters', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return $this->valueHoldera28a4->hasFilters();
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

        $instance->initializer83720 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera28a4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera28a4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera28a4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, '__get', ['name' => $name], $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        if (isset(self::$publicProperties502d1[$name])) {
            return $this->valueHoldera28a4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera28a4;

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

        $targetObject = $this->valueHoldera28a4;
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
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera28a4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera28a4;
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
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, '__isset', array('name' => $name), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera28a4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera28a4;
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
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, '__unset', array('name' => $name), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera28a4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera28a4;
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
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, '__clone', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        $this->valueHoldera28a4 = clone $this->valueHoldera28a4;
    }

    public function __sleep()
    {
        $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, '__sleep', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;

        return array('valueHoldera28a4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer83720 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer83720;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer83720 && ($this->initializer83720->__invoke($valueHoldera28a4, $this, 'initializeProxy', array(), $this->initializer83720) || 1) && $this->valueHoldera28a4 = $valueHoldera28a4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera28a4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera28a4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
