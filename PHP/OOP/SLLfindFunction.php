<?php


Class Node{
 public function __construct($value)
 {
  $this->value= $value;
  $this->next = null;
 }
}

Class SinglyLinkedList{
    public function __construct()
    {
     $this->head = null;
    }

    public function add($val)
    {
     //return true if added correctly
     
     //check to see if there is not a head because then, we can create the head node
     if($this->head == null)
     {
       //point head to that new node
       $this->head = new Node($val);
     }
     else
     {
       //we have a head lets navigate through the Linked List till we get to the end
       //when we reach the end we can add the new node there
       
       //temp to help us navigate the linked list
       $current = $this->head;
       //while loops are extremely skilled at looping through a linked list
       while($current->next)
       {
         //move our pointer forward to the next node
         $current = $current->next;
       }
       //we reached the end! time to add the new node to the end
       $current->next = new Node($val);
     }
    }


    public function remove($val)
 {
   //lets start by checking if the node we want to remove is the head
   if($this->head->value == $val)
   {
      //its the head! lets change the head pointer
      $this->head = $this->head->next;
   }
   else
   {
      //lets find the node and make sure we dont hit the end of the node list
      $current = $this->head;
      while($current->next->value != $val && $current->next)
      {
        //move our pointer forward
        $current = $current->next;
      }
      // we either made it to the end or found our node, either way we can change the pointers!
      //create a temp to hold onto whatever is ahead of the node we found
      $temp = $current->next->next;
      //now set our current node's next to the node thats on the other side of the node we want to remove
      $current->next = $temp;
   }
  }
   public function find($val)
 {
   // Lets start by setting temp that will navigate the Linked List for us.
   $current = $this->head;
   // Start traversing the Linked List.
   while($current != null)
   {
      // Check to see if current node is the one we are trying to find
      if($current->value == $val)
      {
          //Hey it is! Return true!
          return true;
      }
      // Oh, I guess it isn't. Keep looking, at the next one. 
      $current = $current->next;
   }
   // Uh oh, our loop broke -- it ran out of nodes to check. Just return false.
   return false;
 }
 
}

//now we can execute our new function to add nodes to a linked list!
$newList = new SinglyLinkedList();
$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);

var_dump($newList);

//check the list for the value of 3
var_dump($newList->find(3));

//check the list for the value of 99
var_dump($newList->find(99));

?>