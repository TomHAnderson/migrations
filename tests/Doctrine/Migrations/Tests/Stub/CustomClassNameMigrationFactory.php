<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tests\Stub;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\Migrations\Version\MigrationFactory;

class CustomClassNameMigrationFactory implements MigrationFactory
{
    /** @var MigrationFactory */
    private $parentMigrationFactory;

    /** @var string */
    private $migrationClassName;

    public function __construct(MigrationFactory $parentMigrationFactory, string $migrationClassName)
    {
        $this->parentMigrationFactory = $parentMigrationFactory;
        $this->migrationClassName     = $migrationClassName;
    }

    public function createVersion(string $migrationClassName) : AbstractMigration
    {
        return $this->parentMigrationFactory->createVersion($this->migrationClassName);
    }
}
