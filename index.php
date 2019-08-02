<!DOCTYPE html>
<html>

   <head>
      <title>Text Input Control</title>
      <link rel = "stylesheet" type = "text/css" href = "style.css">
      
      
        <script type = "text/javascript">
    function validation(){
       var first=document.registration.name1.value;
       var second=document.registration.adrees.value;
       
       
       
       
       if(first==null || first==""){
           alert("Plz enter name");
          return false;
      
         }
            
        
        
       if(second==null || second==""){
           
            alert("Plz enter adrees");
          return false;
      
       }
   }
    
            
            </script> 
         
      </script>     
       
          <style>
              body{
                  background-image: url("3.jpg");
                  background-repeat:no-repeat;  
                  
              }
              .shahzad{
                  
                  color: white;
                  font-size:50px;
                  
                  
                  
              }
          </style>
          
           
   </head>
	
   <body bgcolor="skyblue">
       
       <P class="MYCLASS">
           MY NAME IS SHAHZAD Saeed.
       </P>
       <form action="" name="registration" onsubmit="return validation()">
           
          <table>
              <tr>
                  
                  <td class="shahzad">Name:</td>
                  <td><input type ="text" name= "name1" placeholder="Put your name"</td>
              
              <td class="shahzad">Last Name:</td>
                  <td><input type ="text" name= "name2" placeholder="Put your name"</td>
                  </tr>
               <tr>
                   <td class="shahzad" name="contact">contact</td>>
                    <td><input type="text"  name="contact"></td>
              
                  
                   <td class="shahzad">Cnic:</td>
                   <td><textarea rows ="1" name="Cnic"></textarea></td>
               </tr>
             
                   <td class="shahzad">Adrees:</td>
                   <td><textarea rows ="4" name="adrees"></textarea></td>
              
                      <tr>
                         
                          
                          <td class="shahzad">Gender:</td>
                           <td>
                              <select name = "dropdown">
            <option value = "Male" selected>Maths/<yoption>
            <option value = "female">female</option>
         </select>
                          </td>
                      <td>Male<input type ="radio" name="gender"></td>
                      <td>Female<input type ="radio" name="gender"></td>
                      </tr>
                      <td class="shahzad">Course:
                      <input type = "checkbox" name = "subject" value = "maths">Maths:
                   <input type = "checkbox" name = "subject" value = "physics">Physics:
                </td>
                      
                      <tr>
                          
                          <td><input type="submit" name="login" value="submit"></td>
                      </tr>
                      </table>
                                          
      </form>

   </body>
	
</html>