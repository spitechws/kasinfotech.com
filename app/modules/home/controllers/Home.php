 <?php

    if (!defined('BASEPATH'))
        exit('No direct script access allowed');

    class Home extends MY_Controller
    {

        function __construct()
        {
            parent::__construct();
            parent::setModuleUrl('home');
            $this->load->model('HomeModel', 'oMainModel');
        }

        function _remap($method = "index")
        {
            $rows = get_rows('cms', array(), 'page_name');
            $pages = [];
            foreach ($rows as $row) {
                $pages[] = $row->page_name;
            }
            $this->checkTheme();
            if (config_item('is_suspended') == "1") {
                suspended();
            } else if (config_item('is_underconstruction') == "1") {
                underconstruction();
            } else if (in_array($method, $pages)) {
                $this->cms_page($method);
            } else {
                page_not_found();
            }
        }

        function load_common_data($page_name)
        {
            $cms = get_row('cms', array('page_name' => $page_name));
            $data['cms'] = $cms;
            $data['menu'] = $cms->menu;
            $data['aBlog'] = $this->oMainModel->blog_list();
            $data['aFacilityMenu'] = $this->oMainModel->facility_list();
            return $data;
        }

        function cms_page($page_name)
        {
            $data = $this->load_common_data($page_name);
            $view_name = $page_name;
            switch ($page_name) {
                case "index":
                    $data['aBanner'] = get_rows('banner');
                    $data['aGalleryImages'] = $this->oMainModel->gallery_image_list();
                    $data['aTestimonial'] = $this->oMainModel->testimonial_list();
                    $data['aToppers'] = $this->oMainModel->topper_list();
                    $data['aCourse'] = $this->oMainModel->course_list();
                    $data['aFaculty'] = $this->oMainModel->faculty_list();
                    break;

                case "facility-details":
                    $facility_id = 0;
                    if (isset($_GET['id']) && $_GET['id'] != "") {
                        $facility_id = base64_decode($_GET['id']);
                    }
                    $aFacility = get_row('facility', array("facility_id" => $facility_id));
                    if (isset($aFacility->facility_id)) {
                        $data['aFacility'] = $aFacility;
                        $data['cms']->page_title = $aFacility->title;
                        $data['cms']->page_content = $aFacility->description;
                    } else {
                        page_not_found();
                    }
                    break;

                case "tc":
                    $data['aTc'] = $this->oMainModel->get_tc();
                    break;

                case "kids-gallery":
                    $data['aGallery'] = $this->oMainModel->gallery_list();
                    break;

                case "event-gallery":
                    $data['aEventGallery'] = $this->oMainModel->event_gallery_list();
                    break;

                case "video-gallery":
                    $data['aVideoGallery'] = get_rows(tbl_prefix() . 'video');
                    break;

                case "category":
                    if (isset($_GET['category'])) {
                        $category_id = base64_decode($_GET['category']);
                    }
                    $data['aCategoryDetails'] = get_row('category', array("category_id" => $category_id));
                    break;

                case "blog-details":
                    $data = $this->blog_details($data);
                    break;

                case "academic-calendar":
                    $data['aCalendar'] = $this->oMainModel->academic_calendar_list();
                    break;

                case "notification":
                    $data['aNotification'] = $this->oMainModel->latest_notification_list();
                    break;

                case "contact":
                    $this->save_enquiry('contact');
                    break;

                case "oppening":
                    $data['aCareer'] = get_rows('career', array("status" => "1"));
                    break;

                case "career":
                    $data['aCareer'] = get_rows('career', array("status" => "1"));
                    break;

                case "career-apply":
                    $career_id = 0;
                    if (isset($_GET['career_id']) && $_GET['career_id'] != "") {
                        $career_id = base64_decode($_GET['career_id']);
                    }
                    $data['aCareer'] = get_row('career', array("career_id" => $career_id));
                    $data['cms']->page_title = $data['aCareer']->job_title;
                    if (isset($_POST['submitform']) && $_POST['submitform'] != "") {
                        $res = $this->oMainModel->job_apply();
                        if ($res['status'] == "1") {
                            set_message($res['message']);
                        } else {
                            set_message($res['message'], 'e');
                        }
                        redirect(base_url() . "career-apply?career_id=" . base64_encode($career_id));
                    }
                    break;

                case "admission-notification":
                    $data['aAdmissionNotification'] = $this->oMainModel->admission_notification_list();
                    break;

                case "sports-department":
                    $data['aSports'] = $this->oMainModel->sports_dept_list();
                    break;

                case "courses":
                    $data['aCourse'] = $this->oMainModel->course_list();
                    break;

                case "alumni":
                    if (isset($_POST['submitform']) && $_POST['submitform'] != "") {
                        $res = $this->oMainModel->alumni_register();
                        if ($res['status'] == "1") {
                            set_message($res['message']);
                        } else {
                            set_message($res['message'], 'e');
                        }
                        redirect(base_url() . "alumni");
                    }
                    break;

                case "blog":
                    if (isset($_GET['cat_id']) && $_GET['cat_id'] != "") {
                        $category_id = base64_decode($_GET['cat_id']);
                        $aCategory = get_row('post_category', array('category_id' => $category_id));
                        $data['aCategory'] = $aCategory;
                        if (isset($aCategory->title)) {
                            $data['cms']->page_title = $aCategory->title;
                        }
                    }
                    $data['aBlogCategory'] = $this->oMainModel->blog_category_list();
                    break;

                case "recognition":
                    break;

                case "admission":
                    $res = array('status' => 0, 'message' => '');
                    $data['aCourse'] = $this->oMainModel->course_list();
                    if (isset($_POST['submitform']) && $_POST['submitform'] != "") {
                        $res = $this->oMainModel->admission();
                        if ($res['status'] == "1") {
                            set_message($res['message']);
                            redirect(base_url() . "admission/");
                        } else {
                            set_message($res['message'], 'e');
                            redirect(base_url() . "admission/");
                        }
                    }
                    $data['msg_status'] = $res['status'];
                    $data['msg'] = $res['message'];
                    break;

                case "meritlist":
                    $data['aMerit'] = $this->oMainModel->merit_list();
                    break;

                case "college-ssr":
                    $data['aSsr'] = $this->oMainModel->ssr_list();
                    break;

                case "admission-lists":
                    $data['aAdmissionList'] = $this->oMainModel->admission_list();
                    break;

                case "download":
                    $data['aDownload'] = $this->oMainModel->download_list();
                    break;

                case "news":
                    $data['aNews'] = $this->oMainModel->news_list();
                    break;

                case "important-links":
                    $data['aLinks'] = $this->oMainModel->links_list();
                    break;

                case "feedback":
                    if (isset($_POST['submitform']) && $_POST['submitform'] != "") {
                        $res = $this->oMainModel->feedback();
                        if ($res['status'] == "1") {
                            set_message($res['message']);
                        } else {
                            set_message($res['message'], 'e');
                        }
                        redirect(base_url() . "feedback/");
                    }
                    break;

                case "events-notification":
                    $data['aEvents'] = $this->oMainModel->events_list();
                    break;

                case "about":

                    break;

                case "teachers":
                    $data['aFaculty'] = $this->oMainModel->faculty_list();
                    break;

                case "syllabus":
                    break;

                default:
                    $view_name = 'cms';
                    break;
            }
            load_home_view($view_name, $data);
        }

        private function blog_details($data)
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
