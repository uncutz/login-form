<?php declare(strict_types=1);

namespace Backend;

use PDO;
use RuntimeException;

class Container
{
    /** @var array<string, callable> */
    private array $factory = [];

    /** @var array<string, mixed> */
    private array $values = [];


    /**
     * @param string $id
     * @param callable $factory
     */
    public function add(string $id, callable $factory): void
    {
        $this->factory[$id] = $factory;
    }

    /**
     * @param string $id
     * @return mixed
     */
    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('dependency could not be found ' . $id);
        }

        if (!isset($this->values[$id])) {
            $this->values[$id] = $this->factory[$id]($this);
        }

        return $this->values[$id];
    }

    /**
     * @param string $id
     * @return bool
     */
    public function has(string $id): bool
    {
        return isset($this->factory[$id]);
    }




    /**
     * @return PDO
     */
    public function getPdo(): PDO
    {
        return $this->get('pdo');
    }

}