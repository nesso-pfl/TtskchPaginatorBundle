<?php

declare(strict_types=1);

namespace Ttskch\PaginatorBundle\Criteria;

use Ttskch\PaginatorBundle\Form\CriteriaType;

class Criteria extends AbstractCriteria
{
    public function getFormTypeClass(): string
    {
        return CriteriaType::class;
    }
}
