<?php
//The wrapping up of data and methods into a single unit (called class) is known as encapsulation. Encapsulation is a protection mechanism for the data members and methods present inside the class. In the encapsulation technique, we are restricting the data members from access to outside world end-user.
//Explanation:In this example, all the ATM class data members (variable) are marked with the private modifier. It implies that we can not directly access ATM class data members (property). So, we can't change the class property directly. The only approach to change the class property (data members) is calling a method (function). That’s the reason we have stated all the ATM class methods with a public access modifier. The user can pass the expected arguments to a class method to perform a particular task. Suppose anyone wants to check balance then he needs to access the CheckBalance() method with the required arguments custid="10005285637"andatmpin="1**3". This is called Data hiding through Encapsulation.
   class ATM {
      private $custid;
      private $atmpin;
      public function CheckBalance($custid,$atmpin){
               return 4500;
               }

      }
   $obj = new ATM();
   echo $obj ->CheckBalance(10005285637,1123);
?>