<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TeamQ - @yield("title")</title>

    @vite(['resources/css/style.css', 'resources/js/main.js'])

</head>
<body class="page">

<div class="bg" aria-hidden="true">
    <span class="bg__blob bg__blob--green"></span><span class="bg__blob bg__blob--pink"></span><span
        class="bg__blob bg__blob--blue"></span>
    <div class="bg__grid"></div>
    <div class="bg__emojis" data-bg-emojis></div>
</div>

<x-layout.app.header/>

@yield("content")

<x-layout.app.footer/>

</body>
</html>
