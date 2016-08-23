<?php
declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

interface SearchCriteria
{
    public function apply(array $pairs) : Pair;
}
