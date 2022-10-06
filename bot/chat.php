<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //problemas comunes
    "el pc esta lento" => "Si tu ordenador ha disminuido su rendimiento, puede que necesites desfragmentar el disco o hayas instalado algún ejecutable malicioso que afecta a la velocidad del sistema y te haga falta una limpieza de virus.",
    "error en sistema operativo" => "Si ves que Windows no se enciende correctamente y te indica que hay errores o que tu BIOS no reconoce el sistema operativo, puede que haya archivos importantes dañados.",
    "mi pc no se enciende" => "Quizás hables de algún tipo de problema de arranque, pero también es posible que esté fallando la fuente de alimentación.",
    "problemas con la pantalla de mi laptop" => "A veces el ordenador se enciende, pero se money casino games queda la pantalla negra. Puede que simplemente sea que se haya configurado para abrirse en un monitor externo, pero también puede que se haya averiado la iluminación.",
    "El ratón y el teclado no funcionan" => "Puede que sea sólo una mala conexión o necesites limpiar la rueda de tu mouse. Para eso no hace faltar reparar (evidentemente), pero también puede que se haya averiado el puerto o se haya torcido el conector.",
    
    //nombre
    "como te llamas" =>"Soy IT SUPPORT y estoy para servirte",
    "cual es tu nombre" =>"Soy IT SUPPORT y estoy para servirte",
    "tienes nombre" =>"Soy IT SUPPORT y estoy para servirte",

    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
   
    "tu nombre es" => "Mi nombre es " . $bot->getName(),
    "tu eres" => "Yo soy un " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, aun estoy aprendiendo. Intenta con otra pregunta.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
