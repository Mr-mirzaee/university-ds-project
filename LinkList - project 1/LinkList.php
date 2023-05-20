<?php
require 'Node.php';
class LinkList
{
    private Node $head;
    public function __construct(int $firstValue){
        $this->head = new Node($firstValue);
    }

    public function AddNode(int $value): void
    {
        $node = $this->head;
        while ($node->getNext() != null) {
            $node = $node->getNext();
        }
        $node->setNext(new Node($value));
    }

    public function getHead(): Node
    {
        return $this->head;
    }

    public static function mergeTwoLinkList(Node $HeadOne, Node $HeadTwo): LinkList
    {
        $LinkList = new LinkList($HeadOne->getValue());
        $HeadOne = $HeadOne->getNext();
        $LinkList->AddNode($HeadTwo->getValue());
        $HeadTwo = $HeadTwo->getNext();
        while ($HeadOne != null && $HeadTwo != null){
            $LinkList->AddNode($HeadOne->getValue());
            $LinkList->AddNode($HeadTwo->getValue());
            $HeadOne = $HeadOne->getNext();
            $HeadTwo = $HeadTwo->getNext();
        }
        $otherNode = ($HeadOne == null ? $HeadTwo : $HeadOne);
        while ($otherNode != null){
            $LinkList->AddNode($otherNode->getValue());
            $otherNode = $otherNode->getNext();
        }
        return $LinkList;
    }

    public function PrintLinkList(): void
    {
        $output = 'Link List Value: ';
        $node = $this->head;
        while ($node != null){
            $output .= $node->getValue() . ' ,';
            $node = $node->getNext();
        }
        echo rtrim($output, ' ,');
    }

}