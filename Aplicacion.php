<?php
class Aplicaion {

    /**
     * mostrar
     * funcion que hace......
     * @param  mixed $numero
     * @return $texto
     */
    public function mostrar($numero){
        $texto = "";
        if ($_POST["numero"] == 1){
            $texto = "El usuario ha introducido un " . $_POST["numero"];
        }else{
            $texto = "El usuario ha introducido otro número ";
        }
        return $texto;
    }
    
}
    
?>