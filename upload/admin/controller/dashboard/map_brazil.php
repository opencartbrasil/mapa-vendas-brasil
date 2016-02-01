<?php
class ControllerDashboardMapBrazil extends Controller {
	public function index() {
		$this->load->language('dashboard/map_brazil');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_order'] = $this->language->get('text_order');
		$data['text_sale'] = $this->language->get('text_sale');

		$data['token'] = $this->session->data['token'];

		return $this->load->view('dashboard/map_brazil.tpl', $data);
	}
	
	public function map() {
		$json = array();

		$this->load->model('dashboard/map_brazil');

		$results = $this->model_dashboard_map_brazil->getTotalOrdersByZone();

		foreach ($results as $result) {
			$json[strtolower($result['code'])] = array(
				'total'  => $result['total'],
				'amount' => $this->currency->format($result['amount'], $this->config->get('currency_code'))
			);
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}