<?php
declare(strict_types = 1);

namespace CodelyTV\FinderKata\Algorithm;

class Pair
{
    /** @var Person */
    protected $older;

    /** @var Person */
    protected $younger;

    /** @var int */
    protected $diffInSeconds;

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

    public function older()
    {
        return $this->older;
    }

    public function younger()
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
