<?php
namespace Opencart\Admin\Controller\Extension\OcbrLanguageBrazil\Language;
class Brazil extends \Opencart\System\Engine\Controller {
    public function index(): void {
        $this->load->language('extension/ocbr_language_brazil/language/brazil');

        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/ocbr_language_brazil/language/brazil', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['save'] = $this->url->link('extension/ocbr_language_brazil/language/brazil|save', 'user_token=' . $this->session->data['user_token']);
        $data['back'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=language');

        $data['language_brazil_status'] = $this->config->get('language_brazil_status');

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/ocbr_language_brazil/language/brazil', $data));
    }

    public function save(): void {
        $this->load->language('extension/ocbr_language_brazil/language/brazil');

        $json = [];

        if (!$this->user->hasPermission('modify', 'extension/ocbr_language_brazil/language/brazil')) {
            $json['error'] = $this->language->get('error_permission');
        }

        if (!$json) {
            $this->load->model('setting/setting');

            $this->model_setting_setting->editSetting('language_brazil', $this->request->post);

            $json['success'] = $this->language->get('text_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function install(): void {
        if ($this->user->hasPermission('modify', 'extension/language')) {

            $this->load->model('localisation/language');
            $language = $this->model_localisation_language->getLanguageByCode('pt-br');

            if (!$language) {
                $language_data = [
                    'name' => 'Português do Brasil',
                    'code' => 'pt-br',
                    'locale' => 'pt_BR.UTF-8,pt_BR,pt-br,pt_br,portuguese',
                    'extension' => 'ocbr_language_brazil',
                    'status' => 1,
                    'sort_order' => 1
                ];

                $this->model_localisation_language->addLanguage($language_data);
            }
        }
    }

    public function uninstall(): void {
        if ($this->user->hasPermission('modify', 'extension/language')) {
            $this->load->model('localisation/language');

            $language_info = $this->model_localisation_language->getLanguageByCode('pt-br');

            if ($language_info) {
                $this->model_localisation_language->deleteLanguage($language_info['language_id']);
            }
        }
    }
}
