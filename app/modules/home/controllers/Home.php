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

        function load_common_data($page_name)
        {
            $cms = get_row('cms', array('page_name' => $page_name));
            if (empty($cms->page_title)) {
                //debug("There is no CMS page entry, please do entry for page name : " . $page_name);
                $aInput = array(
                    "page_name" => filterValue($page_name),
                    "menu" => filterValue($page_name),
                    "page_title" => ucwords(strtolower(str_replace('-', ' ', $page_name))),
                    "page_content" => '',
                    "meta_keywords" => $page_name,
                    "meta_description" => $page_name,
                    "meta_robots" => ''
                );
                $this->db->insert(tbl_prefix() . 'cms', $aInput);
                $cms = get_row('cms', array('page_name' => $page_name));
            }
            $data['cms'] = $cms;
            $data['title'] = $cms->page_title;
            $data['menu'] = $cms->menu;
            $data['aBlog'] = $this->oMainModel->blog_list();
            $data['aProductList'] = $this->curlCall('product');
            $data['aServiceList'] = $this->curlCall('service');

            return $data;
        }

        //--------DEV CHANGES NEEDED BELOW ONLY ---------------

        function index()
        {
            $view_name = 'index';
            $data = $this->load_common_data($view_name);
            $data['aTestimonial'] = get_rows('testimonial');
            $data['aBanner'] = get_rows('banner');
            $data['aPost'] = get_rows('post');
            load_home_view($view_name, $data);
        }

        function cms($page_name)
        {

            $data = $this->load_common_data($page_name);
            load_home_view('cms', $data);
        }

        function page($page_name)
        {
            $data = $this->load_common_data($page_name);
            load_home_view($page_name, $data);
        }


        function contact()
        {
            $view_name = 'contact';
            $data = $this->load_common_data($view_name);
            load_home_view($view_name, $data);
        }

        function get_quote()
        {
            $view_name = 'get_quote';
            $data = $this->load_common_data($view_name);
            if (isset($_POST['submit'])) {
                $res = $this->oMainModel->save_enquiry();
                set_message($res['msg']);
            }
            load_home_view($view_name, $data);
        }

        function blog($slug = '')
        {
            $view_name = 'blog';
            $data = $this->load_common_data($view_name);
            $aBlogDetails = $this->oMainModel->blog_details(array("t1.slug" => $slug));
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

        function product($slug = '')
        {
            $view_name = 'product-details';
            $data = $this->load_common_data($view_name);
            $data['aProductDetails'] = $this->curlCall('product/' . $slug);
            $data['aProductDetails'] =  $data['aProductDetails']->data;

            load_home_view($view_name, $data);
        }

        function service($slug = '')
        {
            $view_name = 'service';
            $data = $this->load_common_data($view_name);
            $data['aServiceDetails'] = $this->curlCall('service/' . $slug);
            $data['aServiceDetails'] = $data['aServiceDetails']->data;

            load_home_view($view_name, $data);
        }
    }
