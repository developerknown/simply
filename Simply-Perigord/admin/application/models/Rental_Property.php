<?php
Class Rental_Property extends CI_Model {

// Read data using username and password
    public function Add_Rental_Property1($data) {

        $this->db->set('property_id', $data['property_id']);
		$this->db->set('property_name', $data['property_name']);
        $this->db->set('primary_image', $data['primary_image']);
		$this->db->set('address', $data['address']);
		$this->db->set('town', $data['town']);
		$this->db->set('phone', $data['phone']);
		$this->db->set('email', $data['email']);
		$this->db->set('listed_on', time());
		$this->db->set('maximum_guests', $data['maximum_guests']);
        $this->db->set('low_guests', $data['low_guests']);
        $this->db->set('low_guests', $data['low_season_under']);
        $this->db->set('low_guests', $data['low_season_full']);
        $this->db->set('low_guests', $data['mid_season_under']);
        $this->db->set('low_guests', $data['mid_season_full']);
        $this->db->set('low_guests', $data['high_season_under']);
        $this->db->set('low_guests', $data['high_season_full']);
		$this->db->set('beds', $data['beds']);
		$this->db->set('bathroom', $data['bathroom']);
		$this->db->set('pool_size', $data['pool_size']);
		$this->db->set('washer', $data['washer']);
		$this->db->set('tv', $data['tv']);
		$this->db->set('aircon', $data['aircon']);
		$this->db->set('wifi', $data['wifi']);
		$this->db->set('bbq', $data['bbq']);
		$this->db->set('private_parking', $data['private_parking']);
		$this->db->set('private_garden', $data['private_garden']);
		$this->db->set('private_pool', $data['private_pool']);
		$this->db->set('pets_allowed', $data['pets_allowed']);
		$this->db->set('family_friendly', $data['family_friendly']);
		$this->db->set('village_house', $data['village_house']);
		$this->db->set('rural_setting', $data['rural_setting']);
		$this->db->set('romatic_for_two', $data['romatic_for_two']);
		$this->db->set('cosy_cottage', $data['cosy_cottage']);
		$this->db->set('description', $data['description']);
		$this->db->set('status', 'Active');

		
		if ($this->db->insert('rental_property')) {
            $insert_id = $this->db->insert_id();
			foreach ($data['feature_name'] as $key => $ss){
                $this->db->set('rental_id', $insert_id);
                $this->db->set('feature_name', $ss);
                $this->db->set('feature_value', $data['feature_value'][$key]);
                $this->db->insert('rental_features');
			}
            foreach ($data['multiple_images'] as $key => $ss){
                $this->db->set('rental_id', $insert_id);
                $this->db->set('multiple_images', $ss);
                $this->db->insert('rental_images');
            }
            return true;
        } else {
            return false;
        }
    }
    public function list_view() {
        $this->db->select('*');
        $this->db->from('rental_property');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }



}

?>

