<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Обратная связь</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
     integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <h1>Обратная связь</h1>
    <form id="mailForm">
        <input type="email" id="email" name="email" placeholder="Email" class="form-control"><br>
        <input type="text" id="name" name="name" placeholder="Введите ваше имя" class="form-control"><br>
        <input type="phone" id="phone" name="phone" placeholder="Телефон" class="form-control"><br>
        <textarea name="message" id="message" placeholder="Ваше сообщения" class="form-control"></textarea><br>
        <button type="button" class="btn btn-success" id="sendMail">Отправить</button>
    </form>
    <div id="errorMess" class="container"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/formMail.js"></script>
  </body>
</html>
