<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->load->language('common/home');
		
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');


		$data['card_info'] = sprintf($this->language->get('text_card_info'), $this->config->get('config_name'), date('Y', time()));
		$data['card_info2'] = sprintf($this->language->get('text_card_info2'), $this->config->get('config_name'), date('Y', time()));
		$data['card_desc'] = sprintf($this->language->get('text_card_info_desc'), $this->config->get('config_name'), date('Y', time()));

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
