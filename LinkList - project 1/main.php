<?php

/**
 *
 * @name `Ali Mirzaee`
 * @studentNumber 4002106023
 *
 */


require 'LinkList.php';

$linkList1 = new LinkList(0);
$linkList1->AddNode(2);
$linkList1->AddNode(4);
$linkList1->AddNode(6);
$linkList1->AddNode(8);
$linkList1->AddNode(10);

$linkList2 = new LinkList(1);
$linkList2->AddNode(3);
$linkList2->AddNode(5);
$linkList2->AddNode(7);
$linkList2->AddNode(9);

$linkList3 = LinkList::mergeTwoLinkList($linkList1->getHead(), $linkList2->getHead());
// "Link List Value: 0 ,1 ,2 ,3 ,4 ,5 ,6 ,7 ,8 ,9 ,10" should be printed
$linkList3->PrintLinkList();
