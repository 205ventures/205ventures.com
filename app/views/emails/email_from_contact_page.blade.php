<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        {{ HTML::style('css/emailer.css') }}
    </head>
    <body>
    <h2>205Ventures Contact Page</h2>
     <table>  
            <tr>
               <th><h4>Costumers Name </h4></th>
               <th><h4>Costumers Email  </h4></th>
               <th><h4>Costumers Message  </h4></th>
            </tr>
            <tr>
               <td><p><strong>{{ $name }}</strong></p></td>

               <td><p><strong>{{ $email }}</strong></p></td>

               <td><p><strong>{{ $text }}</strong></p></td>
            </tr>
    </table>
    </body>
</html>