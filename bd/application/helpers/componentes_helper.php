<?php 


function asgInput($nombre, $label, $valor= ''){



    return <<<CODIGO
    
            <div class = 'form-group input-group'>   
            
            <label>{$label}:</label>
            <input type 'text' value = '{$valor}'class = 'form-control' name = '{$nombre}' />
            
            </div>
CODIGO;
    
    }

    function foTextArea ($nombre, $label, $valor=''){

      
        $required = '';
      
    
    
        return "<div class 'input-group form-group'>
    
    <label>{$label} :</label>
    <textarea type = 'text' class ='form-control' name = '{$nombre}' value = '{$valor}'></textarea>
    </div> ";
         
    
    }
    
   

    

   

    