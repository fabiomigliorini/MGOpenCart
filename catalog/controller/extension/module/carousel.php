<?php
class ControllerExtensionModuleCarousel extends Controller {
	public function index($setting) {
		static $module = 0;

		$this->load->model('catalog/manufacturer');
		$this->load->model('tool/image');
		
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');

		$data['banners'] = array();

		$results = $this->model_catalog_manufacturer->getManufacturers(["limit"=>10,"start"=>0,"sort"=>"rand()","order"=>null]);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['name'],
					'link'  => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'] ),
					'image' => $this->model_tool_image->resize($result['image'], 130, 100)
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/carousel', $data);
	}
}