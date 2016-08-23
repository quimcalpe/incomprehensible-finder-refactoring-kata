<?php
declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

final class Finder
{
    /** @var Person[] */
    private $people;

    public function __construct(array $people)
    {
        $this->people = $people;
    }

    public function find(SearchCriteria $criteria): Pair
    {
        $pairs = $this->getAllPairs($this->people);

        if (count($pairs) === 0) {
            return new EmptyPair();
        }

        return $criteria->apply($pairs);
    }

    /**
     * @param array $people
     * @return Pair[]
     */
    private function getAllPairs(array $people) : array
    {
        $pairs = [];
        for ($i = 0; $i < count($people); $i++) {
            for ($j = $i + 1; $j < count($people); $j++) {
                $pairs[] = new Pair($people[$i], $people[$j]);
            }
        }

        return $pairs;
    }
}
