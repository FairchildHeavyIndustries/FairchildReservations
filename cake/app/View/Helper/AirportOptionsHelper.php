<?php
/* /app/View/Helper/AirportOptionsHelper.php */
App::uses('AppHelper', 'View/Helper');

class AirportOptionsHelper extends AppHelper {
    public $helpers = array('Form');
	public function createOptions($airport_data, $direction) {
        $form_input = $this->Form->input(strtolower($direction) . '_airport', array(
			'type'    => 'select',
			'empty'   => true,
			'label'	=> $direction . ' Airport'
		));
		
		$output = new DOMDocument();
		$output->loadHTML($form_input);
		$xpath = new DOMXPath($output);
		$select = $xpath->query("//*[@id='Flights" . $direction . "Airport']")->item(0);
		
		foreach ($airport_data as $airport => $data) {
			$new_option = $output->createElement("option", $airport);
			$curr_option = $select->appendChild($new_option);
			$curr_option->setAttribute("value", $airport);
			$curr_option->setAttribute("data-position_x", $data['position_x']);
			$curr_option->setAttribute("data-position_y", $data['position_y']);
		}

		echo($output->saveHTML());
    }
}