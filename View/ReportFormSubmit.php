<?php
include_once '../Controller/ReportController.php';

ReportController::insertReport($_POST);

?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ثبت گزارش</title>
</head>
<body>

<div>
    گزارش شما ثبت شد
</div>

</body>
</html>
