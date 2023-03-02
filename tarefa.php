
<html>

<form>
    <p> Tempo : <input name="t_tempo" type="text"> </p> 
    <p> Velocidade : <input name="t_velocidade" type="text">  </p>
    <input type = "submit" value="calcule já!" onclick = "calcular()">
    <a href="tarefa.php"><input type="button" value="limpeza profunda!"></a>
</form>
</html>


    

<?php

 function calcular(){
    if (isset($_GET["t_velocidade"]) || isset($_GET["t_tempo"])) {
       
       $velocidade = $_GET["t_velocidade"];
       $tempo = $_GET["t_tempo"];
       $distancia = 0;

       $distancia = $velocidade * $tempo;

       echo "A distância é " .  $distancia . " km";
    } 

}
    
calcular()

?>