<?php
declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

class Pair
{
    /** @var Person */
    private $older;

    /** @var Person */
    private $younger;

    /** @var int */
    public $diffInSeconds;

    public function __construct(Person $p1, Person $p2)
    {
        if ($p1->birthDate() < $p2->birthDate()) {
            $this->older = $p1;
            $this->younger = $p2;
        } else {
            $this->older = $p2;
            $this->younger = $p1;
        }
        $this->diffInSeconds = $this->younger->birthDate()->getTimestamp() - $this->older->birthDate()->getTimestamp();
    }

    /**
     * @return Person
     */
    public function older() : Person
    {
        return $this->older;
    }

    /**
     * @return Person
     */
    public function younger() : Person
    {
        return $this->younger;
    }

    /**
     * @return int
     */
    public function diffInSeconds() : int
    {
        return $this->diffInSeconds;
    }

}
