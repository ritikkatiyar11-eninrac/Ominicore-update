<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/backend/Default_Backend_Controler.php');
class Filters extends Default_Backend_Controler
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/FilterModel');
    }
    public function index()
    {
        $type = $this->input->get('type');

        // Validate the input and handle 404 if invalid
        if (!$this->isValidType($type)) {
            return $this->show404();
        }

        // Fetch all filter types and check if the provided type exists
        $filterTypes = $this->getAllFilterTypes();

        if (!in_array($type, $filterTypes)) {
            return $this->show404();
        }

        // Render the views if type is valid
        $this->renderView();
    }

    /**
     * Validates the provided type.
     * 
     * @param string|null $type The type to validate.
     * @return bool Returns true if the type is valid; otherwise, false.
     */
    private function isValidType($type)
    {
        return !empty($type);
    }

    /**
     * Fetches all filter types from the model.
     * 
     * @return array An array of filter types.
     */
    private function getAllFilterTypes()
    {
        $filters = $this->FilterModel->get_all_types();
        return array_map(function ($item) {
            return $item['type'];
        }, $filters);
    }

    /**
     * Renders the 404 error page.
     * 
     * @return void
     */
    private function show404()
    {
        echo "This is a 404 page";
        // Optionally, you could load a 404 view instead of echoing plain text:
        // $this->load->view('errors/404');
    }

    /**
     * Renders the main filter page with a header and footer.
     * 
     * @return void
     */
    private function renderView()
    {
        $this->load->view('backend/layout/header');
        $this->load->view('backend/filters');
        $this->load->view('backend/layout/footer');
    }
}
