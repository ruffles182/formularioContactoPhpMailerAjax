<!doctype html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de contacto (phpmailer+ajax)</title>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <link href="css/form.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="ajax_submit.js"></script>
</head>
<body >
  <div id="wrapper">
    <h1>Env&iacutea un correo.</h1>
    <div id="inner-wrapper">
      <form id="feedback" action="feedback.php" enctype="multipart/form-data" method="post">
        <div id="response"></div>
        <div class="inputs">
          <label>Nombre&nbsp;&nbsp;&nbsp;</label>
          <input name="name" type="text" class="required form textbox" id="name" size="30" />
        </div>
        <div class="inputs">
          <label>Email&nbsp;&nbsp;&nbsp;</label>
          <input name="email" type="text" class="required form textbox" id="email" size="30"/>
        </div>
        <div class="inputs">
          <label>Mensaje</label>
          <textarea name="message" cols="25" rows="" class="required form textbox" id="message"></textarea>
        </div>
        <div class="button">
          <input type="submit" name="submit" id="submit" value="Enviar" class="sendButton" />
        </div>
        <div class="inputs">
          <input type="hidden" name="honeypot" id="honeypot" value="http://" />
          <input type="hidden" name="humancheck" id="humancheck" class="clear" value="" />
        </div>
      </form>
    </div>
  </div>
</body>
</html>
