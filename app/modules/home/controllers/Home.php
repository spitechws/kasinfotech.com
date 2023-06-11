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
            $data['title'] = $cms->page_title;
            $data['menu'] = $cms->menu;
            $data['aBlog'] = $this->oMainModel->blog_list();
            $data['aService'] = $this->oMainModel->service_list();
            return $data;
        }      

        //--------DEV CHANGES NEEDED BELOW ONLY ---------------

        function index($params)
        {
            $view_name = 'index';
            $data = $this->load_common_data($view_name);
            $data['aTestimonial'] = get_rows('testimonial');
            $data['aClient'] = get_rows('client');
            $data['aProject'] = get_rows('project');
            $data['aPost'] = get_rows('post');
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
            if (isset($_POST['submit'])) {
                $res = $this->oMainModel->save_enquiry();
                set_message($res['msg']);
            }
            $view_name = 'service';
            $data = $this->load_common_data($view_name);
            $data['aContentInfo'] = get_row('service', ['slug' => $params[0]]);
            if (empty($data['aContentInfo'])) {
                redirect(base_url());
            }
            load_home_view($view_name, $data);
            hide_message();
        }

        function contact($params)
        {
            $view_name = 'contact';
            $data = $this->load_common_data($view_name);
            load_home_view($view_name, $data);
        }

        function blog($params)
        {
            $view_name = 'blog';
            $data = $this->load_common_data($view_name);
            $aBlogDetails = $this->oMainModel->blog_details(array("t1.slug" => $params[1]));
            if (isset($aBlogDetails->post_id)) {
                $view_name = 'blog-details';
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
            }
            load_home_view($view_name, $data);
        }
       
    }
