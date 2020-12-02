<?php


namespace DataStructure;


class SinglyLinkListNode
{
    public ?SinglyLinkListNode $next = null;
    public $value;

    /**
     * SinglyLinkListNode constructor.
     * @param SinglyLinkListNode|null $next
     * @param $value
     */
    public function __construct($value = null, ?SinglyLinkListNode $next = null)
    {
        $this->next = $next;
        $this->value = $value;
    }

    public function traverse(): array
    {
        $arr = [];

        if (! $this->value)
        {
            return $arr;
        }

        $arr[] = $this->value;

        if (! $this->next)
        {
            return $arr;
        }

        $values = $this->next->traverse();
        $arr = array_merge($arr, $values);

        return $arr;
    }

    public function remove($value)
    {

    }
}