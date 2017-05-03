<?php


class category_model extends CI_Model{
    
    public function fetch_category($id = null){
      if($id === null){
       $q = $this->db->get('categories');
        if($q->num_rows()<=0){
            return false;
        }
        else{
            $data['results'] = $q->result();
        }
        return $data['results'];
      }
      else{
        $q = $this->db->where('id',$id)
                ->get('categories');
          if($q->num_rows()){
             return $q->result();
          }  
          else{
              return false;
          }  
         return $data['results'];   
      }
    }
}

?>