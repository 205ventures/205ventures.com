<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        {{ HTML::style('css/costumerEmail.css') }}
    </head>
     <body>

        <div id="letter">
        <h2>205Ventures</h2>
        <hr/>
         <p id="intro">Dear:{{ $name }}</p>

         <p id="body">We are pleace to infom you that your information was recieved, and someone will contact you shortly to the following: {{ $email }}<br/>
         <p>Thank you for your interest in our services.</p>
         </p>
          <p id="conclusion">
            Sincerely <br/>
            205Ventures
          </p>
        </div>
      </body>
</html>
