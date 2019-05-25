<?php

class core_persona{

static function guardar($persona){

    $CI =& get_instance();
    if(isset($persona['id']) && $persona['id'] > 0) {
        $CI->db->where('id',$persona['id']);
        $CI->db->update('personas', $persona);
    }else{

        $CI->db->insert('personas',$persona);
    }


}

static function listado (){

    $CI =& get_instance();
   
    $rs = $CI->db->get('personas')->result();
    return $rs;


}

static function persona_x_id ($id){

    $CI =& get_instance();
    $CI->db->where('id',$id);
    $rs = $CI->db->get('personas')->result();
    return $rs;


}
static function borrar($id){

    $CI =& get_instance();
    
    $sql = "delete from personas where id =?";
    $CI->db->query($sql,[$id]);

}

}

