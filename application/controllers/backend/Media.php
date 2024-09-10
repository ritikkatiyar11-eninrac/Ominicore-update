<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/backend/Default_Backend_Controler.php');
class Media extends Default_Backend_Controler
{
  public function __construct()
  {
    parent::__construct();
    $this->is_login();
  }
  public function index()
  {
    $this->addMedia();
  }

  private function addMedia()
  {
    $this->load->view('backend/layout/header');
    $this->load->view('backend/media/media');
    $this->load->view('backend/layout/footer');
  }

  public function media_api($id)
  {
    header('Content-Type: application/json');
    if ($id == "") {
      http_response_code(400);
      exit(json_encode([
        "responseCode" => 400,
        'responseStatus' => true,
        'responseMessage' =>  "Request not Acceptable",
        'responseData' =>  "Bad Request"
      ]));
    }
    if ($id == 'get') $this->get_api_media();
    if ($id == 'search') $this->search_api_media();
    if ($id == 'add') $this->add_api_media();
    if ($id == 'delete') $this->delete_api_media();
  }

  public function get_api_media()
  {
    if (!empty($this->input->get('id'))) {
      $this->getMediaByID();
    }else{
      $this->getMediaByPages();
    }
  }
  private function getMediaByPages()
  {
    $this->db->select('*');
    $this->db->from('attachments');
    $data_count =  $this->db->get()->num_rows();
    $results_per_page = 20;
    if ($this->input->get("page") == "") {
      $page = 1;
    } else {
      $page = intval($this->input->get("page"));
    }
    $total_pages = ceil($data_count / $results_per_page);
    $page_first_result = ($page - 1) * $results_per_page;
    $this->db->select('*');
    $this->db->from('attachments');
    $this->db->limit($results_per_page, $page_first_result);
    $this->db->order_by("ATT_ID", "desc");
    $media = $this->db->get();
    if ($media->num_rows() > 0) {
      exit(json_encode([
        "responseCode" => 200,
        'responseStatus' => true,
        'responseMessage' =>  "Bad Request",
        'responseData' =>  [
          'data' => $media->result(),
          'current_page' => $page,
          "total_result" => $data_count,
          'total_pages' => $total_pages,
          "current_page_results" => "Showing " . (($page * $results_per_page) - ($results_per_page - 1)) . " to " . ((($page - 1) * $results_per_page) + $media->num_rows()) . " of " . $data_count . " entries"
        ],
      ]));
    } else {
      exit(json_encode([
        "responseCode" => 404,
        'responseStatus' => true,
        'responseMessage' =>  "no record found",
        'responseData' =>  "",
      ]));
    }
  }
  private function getMediaByID()
  {
    $attachment = $this->db->select('*')->from('attachments')->where('ATT_ID', $this->input->get('id'))->get();
    if ($attachment->num_rows() > 0) {
      http_response_code(200);
      exit(json_encode([
        "responseCode" => 200,
        'responseStatus' => true,
        'responseMessage' =>  "OK",
        'responseData' =>  $attachment->result()
      ]));
    }
    http_response_code(404);
    exit(json_encode([
      "responseCode" => 404,
      'responseStatus' => false,
      'responseMessage' =>  "NO DATA FOUND",
      'responseData' =>  []
    ]));
  }
  private function search_api_media()
  {
    $keyword = $this->input->get('keyword');
    if($keyword == ''){
      exit($this->getMediaByPages());
    }
    $this->db->select('*');
    $this->db->from('attachments');
    $this->db->like('ATT_TITLE', $keyword, 'both');
    $data_count =  $this->db->get()->num_rows();
    $results_per_page = 20;
    if ($this->input->get("page") == "") {
      $page = 1;
    } else {
      $page = intval($this->input->get("page"));
    }
    $total_pages = ceil($data_count / $results_per_page);
    $page_first_result = ($page - 1) * $results_per_page;
    $this->db->select('*');
    $this->db->from('attachments');
    $this->db->like('ATT_TITLE', $keyword, 'both');
    $this->db->limit($results_per_page, $page_first_result);
    $this->db->order_by("ATT_ID", "desc");
    $media = $this->db->get();
    if ($media->num_rows() > 0) {
      exit(json_encode([
        "responseCode" => 200,
        'responseStatus' => true,
        'responseMessage' =>  "Bad Request",
        'responseData' =>  [
          'data' => $media->result(),
          'current_page' => $page,
          "total_result" => $data_count,
          'total_pages' => $total_pages,
          "current_page_results" => "Showing " . (($page * $results_per_page) - ($results_per_page - 1)) . " to " . ((($page - 1) * $results_per_page) + $media->num_rows()) . " of " . $data_count . " entries"
        ],
      ]));
    } else {
      exit(json_encode([
        "responseCode" => 404,
        'responseStatus' => true,
        'responseMessage' =>  "no record found",
        'responseData' =>  "",
      ]));
    }
  }  
  public function add_api_media()
  {
    if (!empty($_FILES['file']['name']) == "") {
      exit(json_encode([
        "responseCode" => 400,
        'responseStatus' => true,
        'responseMessage' =>  "Request not Acceptable",
        'responseData' =>  "Bad Request"
      ]));
    }
    $uploadMessage = $this->upload_files();
    if ($uploadMessage !== true) {
      exit(json_encode([
        "responseCode" => 404,
        'responseStatus' => false,
        'responseMessage' =>  "file Upload Error",
        'responseData' => $uploadMessage
      ]));
    }
    exit(json_encode([
      "responseCode" => 200,
      'responseStatus' => false,
      'responseMessage' =>  "OK",
      'responseData' =>  'File Upload Success'
    ]));
  }
  public function delete_api_media()
  {
    $id = $this->input->get('id');
    if ($id == "") {
      http_response_code(400);
      exit(json_encode([
        "responseCode" => 400,
        'responseStatus' => true,
        'responseMessage' =>  "Request not Acceptable",
        'responseData' =>  "Bad Request"
      ]));
    }
    $deleteData = $this->db->select('*')->from('attachments')->where('ATT_ID', $id)->get();
    if ($deleteData->num_rows() > 0) {
      $deleteData = $deleteData->row();
      $filename = $deleteData->ATT_TITLE;
      $this->db->trans_start();
      if ($this->db->where('ATT_ID', $id)->delete('attachments')) {
        unlink("./assets/om-upload/" . $filename);
        unlink("./assets/om-upload/thumbnail/" . $filename);
        $this->db->trans_complete();
        http_response_code(200);
        exit(json_encode([
          "responseCode" => 200,
          'responseStatus' => true,
          'responseMessage' =>  "OK",
          'responseData' =>  $filename . " has been deleted successfully"
        ]));
      } else {
        $this->db->trans_rollback();
        http_response_code(404);
        exit(json_encode([
          "responseCode" => 404,
          'responseStatus' => false,
          'responseMessage' =>  "NO DATA FOUND",
          'responseData' => "no record found"
        ]));
      }
    } else {
      http_response_code(404);
      exit(json_encode([
        "responseCode" => 404,
        'responseStatus' => false,
        'responseMessage' =>  "NO DATA FOUND",
        'responseData' => "no record found"
      ]));
    }
  }
  private function upload_files()
  {
    $config['upload_path'] = './assets/om-upload';
    $config['allowed_types']  = 'gif|jpg|jpeg|webp|png|pdf|svg|wmv|mp4|avi|mov';
    $config['max_size'] = 10240;
    $config['file_name'] = $this->mediaCreateUrlSlug($_FILES['file']['name']);
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('file')) {
      return $this->upload->display_errors();
    }
    $img = array('upload_data' => $this->upload->data());
    $filearray = explode(".", $img['upload_data']['file_name']);
    $fileextention = "." . $filearray[count($filearray) - 1];
    $filename = str_replace($fileextention, "", $img['upload_data']['file_name']);
    $dataMeta = [
      'Size' => $img['upload_data']['file_size'],
      'Extension' => $img['upload_data']['file_ext'],
      'Width' => $img['upload_data']['image_width'],
      'Height' =>  $img['upload_data']['image_height'],
    ];
    $this->db->trans_start();
    if (!$this->db->insert('attachments', [
      'ATT_META' => json_encode($dataMeta),
      'ATT_TITLE' => $img['upload_data']['file_name'],
      'ATT_SLUG' => $filename,
      'ATT_ENTRY_PATH' => "assets/om-upload/",
      'ATT_BASE_PATH' => base_url(),
      'ATT_TYPE' => $fileextention,
    ])) {
      $this->db->trans_rollback();
      unlink(base_url() . "assets/om-upload/" . $img['upload_data']['file_name']);
      return "File Upload Error (DB Error)";
    } else {
      $allowThumbnail = ['gif', 'jpg', 'jpeg', 'webp', 'png', 'svg'];
      $ext = str_replace('.', "", $img['upload_data']['file_ext']);
      if (in_array($ext, $allowThumbnail)) {
        $thumbnailMsg = $this->resizeAndCreateThumbnail($img['upload_data']['file_name']);
        if ($thumbnailMsg !== true) {
          $this->db->trans_rollback();
          unlink("./assets/om-upload/" . $img['upload_data']['file_name']);
          return $thumbnailMsg;
        } else {
          $this->db->trans_complete();
          return true;
        }
      } else {
        $this->db->trans_complete();
        return true;
      }
    }
  }
  private function mediaCreateUrlSlug($urlString)
  {
    $urlArray = explode(".", $urlString);
    $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $urlArray[0]);
    return strtolower($slug);
  }
  private function resizeAndCreateThumbnail($image_name)
  {
    // Set the source image path
    $source_image = './assets/om-upload/' . $image_name;
    // Set the target image path for thumbnail
    $thumbnail_image = './assets/om-upload/thumbnail/' . $image_name;
    // Initialize the image manipulation settings for creating a thumbnail
    $config['image_library'] = 'gd2';
    $config['source_image'] = $source_image;
    $config['new_image'] = $thumbnail_image;
    // $config['create_thumb'] = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = 300; // Set the desired thumbnail width
    $config['height'] = 300;
    $this->load->library('image_lib', $config);
    // Create the thumbnail
    if (!$this->image_lib->resize()) {
      return $this->image_lib->display_errors();
    } else {
      return true;
    }
  }
}
