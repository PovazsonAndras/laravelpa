<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.myDiv {
  border: 3px outset red;
  background-color: lightblue;
  text-align: center;
}
</style>
</head>
<body>
    <div class="myDiv">
        <a href="{{ route('counties.index') }}" class="font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433]">
            Megyék megtekintése
        </a>
    </div>
</body>
</html>