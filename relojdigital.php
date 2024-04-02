<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <style>
.digital-clock {
    font-family: 'VT323', monospace; /* Utilizamos la fuente VT323 */
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 5rem;
    color: white;
    background-color: black;
    padding: 20px;
    border-radius: 10px;
}

.digit {
    padding: 0 10px;
}

.colon {
    animation: blink 1s infinite;
}

@keyframes blink {
    50% {
        opacity: 0;
    }
}

</style>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">

</head>
<body>
    <div class="digital-clock">
        <div id="hours" class="digit"></div>
        <div class="colon">:</div>
        <div id="minutes" class="digit"></div>
        <div class="colon">:</div>
        <div id="seconds" class="digit"></div>
    </div>
    <script src="script_relojdigital.js"></script>
</body>
</html>
