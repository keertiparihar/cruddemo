<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class StudentModel extends CI_Model
{


	public function __construct()
    {
        parent::__construct();
    }


    public function stdSave($data)
    {
    	$this->load->database();
    	$result = $this->db->insert('student',$data);
    	return $result;
    }

    public function getList()
    {
    	$data = $this->db->get('student');
    	return $data->result();
    }

        /**
     * Search By Id
     *
     * @param int $id
     * @return array
     */
    public function searchById($id = null)
    {
        if($id)
        {
            return (array) $this->db->from('student')
                ->where('id', $id)
                ->get()
                ->row();
        }

        return [];
    } 


     /**
     * Update Employee
     *
     */
    public function update($id = null, $input = array())
    {
        if($id && is_array($input) && count($input))
        {
            return $this->db->where('id', $id)
                ->update('student', $input);
        }

        return false;
    }



    /**
     * Delete
     *
     */


    public function delete($id)
    {
		$this->load->database();
    	return $this->db->where('id', $id)
                ->delete('student');
	}

}
?>