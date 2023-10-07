 <?php  
 class Dashboard_model extends CI_Model
 {
 	  var $table = "employees_list";  
	  var $select_column = array("id", "name", "company_name", "designation", "email");  
	  var $order_column = array(null, "name", "company_name",  "designation", "email");  
	  
	  function make_query()  
	  {  
	       $this->db->select($this->select_column);  
	       $this->db->from($this->table);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("name", $_POST["search"]["value"]);  
	            $this->db->or_like("company_name", $_POST["search"]["value"]);  
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('id', 'DESC');  
	       }  
	  }  
	  function make_datatables(){  
	       $this->make_query();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get(); 
	       // echo $this->db->last_query(); exit(); 
	       return $query->result();  
	  }  
	  function get_filtered_data(){  
	       $this->make_query();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table);  
	       return $this->db->count_all_results();  
	  }  
	  function insert_crud($data)  
	  {  
	       $this->db->insert('employees_list', $data);  
	  }  
	  function update_crud($user_id, $data)  
	  {  
	       $this->db->where("id", $user_id);  
	       $this->db->update("employees_list", $data);  
	  }
	  function delete_record($user_id) 
	  {

	  	   $employeeIds =  explode(",", $user_id);
	  	   $this->db->where_in('id', $employeeIds);  
	       $this->db->delete("employees_list",); 
	  } 
}