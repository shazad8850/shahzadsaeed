<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="Asingment1.php" method="get" name="registration" onsubmit="return validateform()" >
            
            
            
            
            
            
          <b>First name:</b> <input type = "text" name = "first_name" placeholder="Your First name" />
          <br>
          <b>Middle name:</b> <input type="text" name="middle_name" placeholder="Your Middle name"/>
          <br>
          <b>Last name:</b> <input type = "text" name = "last_name"  placeholder="Your Last name"/>
          <br>
          <b>Contact:</b> <input type="text" name="contact" placeholder="Your Contact"/>
         <br>
         <b>User ID :</b> <input type = "text" name = "user_id" placeholder="your user id for login" />
         <br>
         <b>Password:</b> <input type = "password" name = "password" placeholder="**********" />
         <br>
          <b>Address :</b> <textarea rows = "2" cols = "50" name = "description" placeholder="Enter Address Here...........">
            
                       </textarea>
          <br>
         <b>Description :</b> <textarea rows = "2" cols = "50" name = "address" placeholder="Enter Description Here...........">
            
                       </textarea>
          
          <br>
          <b>Gender:</b>
         <input type = "radio" name = "subject" value = "male"/> Male
         <input type = "radio" name = "subject" value = "female"/> Female
         <br>
         <b>Course:</b>
         <input type = "checkbox" name = "subject" value = "Computer programming"> Computer Programming
         <input type = "checkbox" name = "subject" value = "Web Programming"> Web Programming
         <input type = "checkbox" name = "subject" value = "Computer Software"> Computer Software
         <input type = "checkbox" name = "subject" value = "Microsoft Office"> Microsoft Office
         <br>
         <b>Classes:</b>
         <select name = "dropdown">
            <option value = "Morning" selected>Morning</option>
            <option value = "Evening">Evening</option>
         </select>
         <br>
         <b>Your Image:</b>
         <input type = "file" name = "fileupload" accept = "image/*" />
         <br>
         <input type = "submit" name = "submit" value = "Submit" />
         <input type = "reset" name = "reset"  value = "Reset" />
         <input type = "button" name = "ok" value = "OK"/>
      </form>


    </body>
</html>
