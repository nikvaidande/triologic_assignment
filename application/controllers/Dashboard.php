<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

     public function __construct()
         {
             parent::__construct();
             $this->load->model("Dashboard_model");
         }

	public function index()
	{
		$data["title"] = "Triologic Assignment";
		$this->load->view('template/template_header',$data);
		$this->load->view('employee_list', $data);
		$this->load->view('template/template_footer',$data);
	}

	public function fetch_user(){  
             
           $fetch_data = $this->Dashboard_model->make_datatables();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<span class="custom-checkbox">
                                        <input type="checkbox" class="checkForDelete" id="'.$row->id.'" name="options[]" value="1">
                                        <label for="checkbox'.$row->id.'"></label>
                                   </span>';  
                $sub_array[] = $row->name;  
                $sub_array[] = $row->company_name;  
                $sub_array[] = $row->designation;  
                $sub_array[] = $row->email;  
                $sub_array[] = '<a href="'.base_url().'dashboard/edit_employee/'.$row->id.'" name="update" id="'.$row->id.'" class="btn btn-warning btn-xs update">Update</a>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"              => intval($_POST["draw"]),  
                "recordsTotal"      => $this->Dashboard_model->get_all_data(),  
                "recordsFiltered"   => $this->Dashboard_model->get_filtered_data(),  
                "data"              => $data  
           );  
           echo json_encode($output);  
      } 

     public function add_employee(){
          $data["title"] = "Add employee | Triologic Assignment";
          $data["header"] = "Add";
          $this->load->view('template/template_header',$data);
          $this->load->view('employee_action', $data);
          $this->load->view('template/template_footer',$data);
     }

     public function edit_employee($employee_id){
          $data["title"] = "update employee | Triologic Assignment";
          $data["update_query"] = $this->db->select('*')->from('employees_list')->where('id',$employee_id)->get()->row();
          $data["header"] = "Update";
          $this->load->view('template/template_header',$data);
          $this->load->view('employee_action', $data);
          $this->load->view('template/template_footer',$data);

     }

     public function user_action($employee_id = NULL){
          if ($employee_id) {
               $this->form_validation->set_rules('name','Name','required');
               $this->form_validation->set_rules('company_name','Company Name', 'required');
               $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
             
               if($this->form_validation->run())
                  {
                        $updated_data = array(  
                               'name' => $this->input->post('name'),  
                               'company_name'  => $this->input->post("company_name"),  
                               'designation'  => $this->input->post("designation"),  
                               'email'  => $this->input->post("email"),  
                          );  
                          $this->Dashboard_model->update_crud($employee_id, $updated_data);
                          // echo $this->db->last_query(); exit;
                          redirect('dashboard/index','refresh'); 
                  }
                  else
                  {
                    $data["title"] = "Update employee | Triologic Assignment";
                    $data["header"] = "Update";
                    $this->load->view('template/template_header',$data);
                    $this->load->view('employee_action', $data);
                    $this->load->view('template/template_footer',$data);
                  }
          } else {
               $this->form_validation->set_rules('name','Name','required');
               $this->form_validation->set_rules('company_name','Company Name', 'required');
               $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
             
               if($this->form_validation->run())
                  {
                        $insert_data = array(  
                               'name' => $this->input->post('name'),  
                               'company_name'  => $this->input->post("company_name"),  
                               'designation'  => $this->input->post("designation"),  
                               'email'  => $this->input->post("email"),  
                          );  
                          $this->Dashboard_model->insert_crud($insert_data);  
                          redirect('dashboard/index','refresh'); 
                  }
                  else
                  {
                    $data["title"] = "Add employee | Triologic Assignment";
                    $data["header"] = "Add";
                    $this->load->view('template/template_header',$data);
                    $this->load->view('employee_action', $data);
                    $this->load->view('template/template_footer',$data);
                  }
          }

     }

     public function delete_user(){
        $this->Dashboard_model->delete_record($this->input->post('employee_ids'));
        echo "1";
     }
}
