 <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Home extends MY_Controller
    {

        function __construct()
        {
            parent::__construct();
            parent::setModuleUrl('home');
            $this->load->model('Home_model', 'oMainModel');
        }

        function _remap($method = 'index', ...$params)
        {
            $this->checkTheme();
            if (config_item('is_suspended') == "1") {
                suspended();
            } else if (config_item('is_underconstruction') == "1") {
                underconstruction();
            } else if (method_exists($this, $method)) {
                call_user_func_array(array($this, $method), $params);
            } else {
                debug('Method ' . $method . ' not found on Home Controller.');
            }
        }

        function load_common_data($page_name)
        {
            $cms = get_row('cms', array('page_name' => $page_name));
            if (empty($cms)) {
                debug("There is no CMS page entry, please do entry for page name : " . $page_name);
            }
            $data['cms'] = $cms;
            $data['menu'] = $cms->menu;
            $data['aBlog'] = $this->oMainModel->blog_list();
            $data['aService'] = $this->oMainModel->service_list();
            return $data;
        }


        function index($params)
        {
            $view_name = 'index';
            $data = $this->load_common_data($view_name);
            load_home_view($view_name, $data);
        }

        function page($params)
        {
            $view_name = 'page';
            $data = $this->load_common_data($params[0]);
            load_home_view($view_name, $data);
        }

        function service($params)
        {
            $view_name = 'service';
            $data = $this->load_common_data($view_name);
            $data['aContentInfo'] = get_row('service', ['slug' => $params[0]]);
            if (empty($data['aContentInfo'])) {
                redirect(base_url());
            }
            load_home_view($view_name, $data);
        }

        private function blog($params)
        {
            $post_id = 0;
            if (isset($_GET['post_id']) && $_GET['post_id'] != "") {
                $post_id = base64_decode($_GET['post_id']);
            }
            $aBlogDetails = $this->oMainModel->blog_details(array("t1.post_id" => $post_id));
            if (isset($aBlogDetails->post_id)) {
                $data['aPopularBlog'] = $this->oMainModel->popular_blog_list();
                $data['aBlogCategory'] = $this->oMainModel->blog_category_list();
                $data['aBlogDetails'] = $this->oMainModel->blog_details(array("t1.post_id" => $post_id));
                $data['cms']->page_title = $data['aBlogDetails']->title;
                $data['aOgData'] = array(
                    "url" => get_current_url(),
                    "title" => $aBlogDetails->title,
                    "description" => $aBlogDetails->content,
                    "image" => media_url($aBlogDetails->featured_image, 'post')
                );
                update_post_view($post_id);
            } else {
                redirect(base_url() . 'blog');
            }
            return $data;
        }

        function save_enquiry($url)
        {
            if (!empty($_POST['submit'])) {
                echo "Hello";
                $res = $this->oMainModel->save_enquiry();
                if ($res['is_error'] == 0) {
                    set_message('Thanks for submitting enquiry, we will contact you soon.');
                } else {
                    set_message($response['msg'], 'e');
                }
                redirect(base_url() . $url);
            }
        }
    }
