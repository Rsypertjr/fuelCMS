<?php
class Photolinks_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
		
    }
	
	
	public function initialize()
		{
			$data = array(
				array(
					'id' => 1,
					'link' => 'images/vacationing/bryce1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/vacationing/disney1.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/vacationing/soakcity1.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/vacationing/phoenixzoo1.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/vacationing/disney2.gif'
				),
				array(
					'id' => 6,
					'link' => 'images/vacationing/universalstudios1.gif'
				),
				array(
					'id' => 7,
					'link' => 'images/vacationing/zionnationalpark1.gif'
				),
				array(
					'id' => 8,
					'link' => 'images/vacationing/bryce2.gif'
				),
					array(
					'id' => 9,
					'link' => 'images/vacationing/cruise1.gif'
				),
				array(
					'id' => 10,
					'link' => 'images/vacationing/arizonasciencecenter1.gif'
				)
					
			);
			
			$data2 = array(
				array(
					'id' => 1,
					'link' => 'images/funinthepark/funinthepark1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/funinthepark/funinthepark2.gif'
				),
				
				array(
					'id' => 3,
					'link' => 'images/funinthepark/funinthepark3.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/funinthepark/funinthepark4.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/funinthepark/funinthepark5.gif'
				),
				array(
					'id' => 6,
					'link' => 'images/funinthepark/funinthepark6.gif'
				),
				array(
					'id' => 7,
					'link' => 'images/funinthepark/funinthepark7.gif'
				),
				array(
					'id' => 8,
					'link' => 'images/funinthepark/funinthepark8.gif'
				)
			);
				
			$data3 = array(
				array(
					'id' => 1,
					'link' => 'images/localrecreation/valleyoffire1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/localrecreation/redrock1.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/localrecreation/redrock2.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/localrecreation/mountcharlestonsnow1.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/localrecreation/mountcharleston1.gif'
				),
				array(
					'id' => 6,
					'link' => 'images/localrecreation/mountcharlestonsnow2.gif'
				),
					
			);
		
			$data4 = array(
				array(
					'id' => 1,
					'link' => 'images/localamusement/rollerskating1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/localamusement/rollerskating2.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/localamusement/grandprix1.gif'
				),
					array(
					'id' => 4,
					'link' => 'images/localamusement/grandprix2.gif'
				)
					
			);
			
			$data5 = array(
				array(
					'id' => 1,
					'link' => 'images/tennistown/tennistown1.gif'
				),
				array(
					'id' => 2,
					'link' => 'images/tennistown/tennistown2.gif'
				),
				array(
					'id' => 3,
					'link' => 'images/tennistown/tennistown3.gif'
				),
				array(
					'id' => 4,
					'link' => 'images/tennistown/tennistown4.gif'
				),
				array(
					'id' => 5,
					'link' => 'images/tennistown/tennistown5.gif'
				),
					array(
					'id' => 6,
					'link' => 'images/tennistown/tennistown6.gif'
				)

					
			);
			
			// Insert links into databases
			$cnt = $this->db->count_all_results('vacationing_links');
			if($cnt == 0)
				{
					$this->db->insert_batch('vacationing_links',$data); 
					
				}
				
			$cnt2 = $this->db->count_all_results('funinthepark_links');
			if($cnt2 == 0)
				{
					$this->db->insert_batch('funinthepark_links',$data2); 
					
				}
				
			$cnt3 = $this->db->count_all_results('localrecreation_links');
			if($cnt3 == 0)
				{
					$this->db->insert_batch('localrecreation_links',$data3); 
					
				}
			$cnt3 = $this->db->count_all_results('localrecreation_links');
			if($cnt3 == 0)
				{
					$this->db->insert_batch('localrecreation_links',$data3); 
					
				}
			$cnt4 = $this->db->count_all_results('localamusement_links');
			if($cnt4 == 0)
				{
					$this->db->insert_batch('localamusement_links',$data4); 
					
				}
			$cnt5 = $this->db->count_all_results('tennistown_links');	
			if($cnt5 == 0)
				{
					$this->db->insert_batch('tennistown_links',$data5); 
					
				}
	
		}
	
   // functions called from controller to get links to be sent to views	
    public function get_vacationing()
		{
			$this->db->select('link');
			$query = $this->db->get('vacationing_links');
			return $query->result();
		
		}
		
	public function get_funinthepark()
		{
			$this->db->select('link');
			$query = $this->db->get('funinthepark_links');
			return $query->result();
		
		}	
		
	public function get_localrecreation()
		{
			$this->db->select('link');
			$query = $this->db->get('localrecreation_links');
			return $query->result();
		
		}		
	public function get_localamusement()
		{
			$this->db->select('link');
			$query = $this->db->get('localamusement_links');
			return $query->result();
		
		}			
		
	public function get_tennistown()
		{
			$this->db->select('link');
			$query = $this->db->get('tennistown_links');
			return $query->result();
		
		}		
		
}
?>