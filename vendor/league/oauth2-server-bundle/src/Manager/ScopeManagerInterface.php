<?php

declare(strict_types=1);

namespace League\Bundle\OAuth2ServerBundle\Manager;

use League\Bundle\OAuth2ServerBundle\Model\Scope;

interface ScopeManagerInterface
{
    public function find(string $identifier): ?Scope;

    public function save(Scope $scope): void;
}
