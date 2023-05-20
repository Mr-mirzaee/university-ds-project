<?php

class Node
{
    private object|null $prev = null;
    private object|null $next = null;
    private int $value;
    public function __construct(int $value = 0, object|null $prev = null, object|null $next = null)
    {
        $this->next = $next;
        $this->prev = $prev;
        $this->value = $value;
    }

    /**
     * @return object|null
     */
    public function getPrev(): ?object
    {
        return $this->prev;
    }

    /**
     * @param object|null $prev
     */
    public function setPrev(?object $prev): void
    {
        $this->prev = $prev;
    }

    /**
     * @return object|null
     */
    public function getNext(): ?object
    {
        return $this->next;
    }

    /**
     * @param object|null $next
     */
    public function setNext(?object $next): void
    {
        $this->next = $next;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }
}