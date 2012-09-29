<?php
/* /app/View/Helper/AirportOptionsHelper.php */
App::uses('AppHelper', 'View/Helper');

class AirportOptionsHelper extends AppHelper {
    public $helpers = array('Form');
	public function createOptions($airport_data, $Direction) {
        $direction = strtolower($Direction);
		$choice_text = "";
		$from_or_to = "to";
		$enabled_flag = 'disabled';
		if ($Direction == 'Departure') {
			$choice_text = "Choose a City:";
			$from_or_to = "from";
			$enabled_flag = 'enabled';
		};
		
		$form_input = $this->Form->input($direction . '_airport', array(
			'type'    => 'select',
			'empty'   => true,
			'label'	=> $Direction . ' Airport'
		));
		
		$output = new DOMDocument();
		$output->loadHTML($form_input);
		$xpath = new DOMXPath($output);
		$select = $xpath->query("//*[@id='Flights" . $Direction . "Airport']")->item(0);
		
		$slkt_container_start = "	<div id='" . $direction . "_city_selekt' class='slkt_container " . $enabled_flag . "'>
				<label for='" . $direction . "_city'>" . $Direction . " " . $from_or_to . "</label>
				<div class='slkt_dropdown' id='" . $direction . "_airp_drodwn' style='display: none;'>";
				
		$slkt_container_end ="</div>
				<div class='slkt_button' id='" . $direction . "_slkt_button'><span class='slkt_text'>" . $choice_text . "</span></div>
			</div>";
			
		$airport_tables = "";
		foreach ($airport_data as $airport => $data) {
			$new_option = $output->createElement("option", $airport);
			$curr_option = $select->appendChild($new_option);
			$curr_option->setAttribute("value", $airport);
			$curr_option->setAttribute("data-position_x", $data['position_x']);
			$curr_option->setAttribute("data-position_y", $data['position_y']);
			
			$airport_tables = $airport_tables . 
			"<table width='100%' class='slkt_item' data-airport='" . $airport . "' data-city ='" . $data['name'] . "' data-position_x ='" . $data['position_x'] . "' data-position_y ='" . $data['position_y'] . "'>
				<tr>
					<td>" .$data['name'] . "</td>
					<td class='airport_name' align='right'>" . $airport . "</td>
				</tr>
			</table>" ;
		}
		
		echo($slkt_container_start . $airport_tables . $slkt_container_end);
		//echo($output->saveHTML());
		
		
    }

	public function createDropdown($airport_data, $Direction)
	{
		$direction = strtolower($Direction);
		
		$form_input = $this->Form->input($direction . '_airport', array(
			'type'    => 'select',
			'empty'   => true,
			'label'	=> $Direction . ' Airport'
		));
		
		
		
		$start = "<div class='slkt_dropdown' id='" . $direction . "_airp_drodwn' style='display: none;'>";
		
		$airport_tables = "";
		foreach ($airport_data as $airport => $data) {
			$airport_tables = $airport_tables . "<table width='100%' class='slkt_item' data-airport='" . $airport . "' data-city ='" . $data['name'] . "' data-position_x ='" . $data['position_x'] . "' data-position_y ='" . $data['position_y'] . "'>
				<tr>
					<td>" .$data['name'] . "</td>
					<td class='airport_name' align='right'>" . $airport . "</td>
				</tr>
			</table>" ;
		}
		
		
			
		echo($start . $airport_tables . "</div>");
		
	}
}