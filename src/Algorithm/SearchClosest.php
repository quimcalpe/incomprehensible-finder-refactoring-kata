<?php
declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

class SearchClosest implements SearchCriteria
{
    public function apply(array $pairs) : Pair
    {
        $this->guardNoPairsToSearch($pairs);

        /** @var Pair[] $pairs */
        $matchingPair = $pairs[0];
        foreach ($pairs as $pair) {
            if ($pair->diffInSeconds() < $matchingPair->diffInSeconds()) {
                $matchingPair = $pair;
            }
        }

        return $matchingPair;
    }

    /**
     * @param array $pairs
     */
    private function guardNoPairsToSearch(array $pairs)
    {
        if (count($pairs) === 0) {
            throw new \InvalidArgumentException("Not enought pairs to search into, provide at least one");
        }
    }}
