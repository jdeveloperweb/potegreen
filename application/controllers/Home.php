<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller
{
	public function __construct() {
        parent::__construct();
        $this->lang->load("files","pt");
		$this->load->model('Auth_model', 'auth');
   }


	public function index()
	{
		
		
		$result = $this->auth->get(1);
		
		$data = array(
			'title_meta' => "Dashboard",
			'page_title' => "Seu saldo é de:"
		);
		$data['user'] =  $result;
		$this->import_head($data);
		$this->import_menu($data);
		$this->load->view('index');
		$this->import_footer($data);



	}

	public function my_profile($id = null)
	{
		$result = $this->auth->get(1);
		
		$data = array(
			'title_meta' => "Dashboard",
			'page_title' => "Seu saldo é de:"
		);
		$data['user'] =  $result;
		
		$this->import_head($data);
		$this->import_menu($data);
		$this->load->view('my_profile');
		$this->import_footer($data);



	}







/*
	// Vertical Layout Pages Routes
	public function show_layouts_compact_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Compact_Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Compact Sidebar', 'li_1' => 'Layouts', 'li_2' => 'Compact Sidebar'])
		];
		$this->load->view('layouts-compact-sidebar', $data);
	}

	public function show_layouts_icon_sidebar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Icon_Sidebar']),
			'page_title' => view('partials/page-title', ['title' => 'Icon Sidebar', 'li_1' => 'Layouts', 'li_2' => 'Icon Sidebar'])
		];
		$this->load->view('layouts-icon-sidebar', $data);
	}

	public function show_layouts_boxed()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed_Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed', 'li_1' => 'Layouts', 'li_2' => 'Boxed'])
		];
		$this->load->view('layouts-boxed', $data);
	}
	public function show_layouts_preloader()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Preloader']),
			'page_title' => view('partials/page-title', ['title' => 'Preloader', 'li_1' => 'Layouts', 'li_2' => 'Preloader'])
		];
		$this->load->view('layouts-preloader', $data);
	}

	// Horizontal Layout Pages Routes
	public function show_layouts_horizontal()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Horizontal']),
			'page_title' => view('partials/page-title', ['title' => 'Horizontal', 'li_1' => 'Layouts', 'li_2' => 'Horizontal'])
		];
		$this->load->view('layouts-horizontal', $data);
	}

	public function show_layouts_hori_topbarlight()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Topbar_Light']),
			'page_title' => view('partials/page-title', ['title' => 'Topbar Light', 'li_1' => 'Layouts', 'li_2' => 'Topbar Light'])
		];
		$this->load->view('layouts-hori-topbarlight', $data);
	}

	public function show_layouts_hori_boxed()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxed_Layout']),
			'page_title' => view('partials/page-title', ['title' => 'Boxed', 'li_1' => 'Layouts', 'li_2' => 'Boxed'])
		];
		$this->load->view('layouts-hori-boxed', $data);
	}

	public function show_layouts_hori_preloader()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Preloader']),
			'page_title' => view('partials/page-title', ['title' => 'Preloader', 'li_1' => 'Layouts', 'li_2' => 'Preloader'])
		];
		$this->load->view('layouts-hori-preloader', $data);
	}

	// Calender
	public function show_calendar()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Calendar']),
			'page_title' => view('partials/page-title', ['title' => 'Calendar', 'li_1' => 'Calendar'])
		];
		$this->load->view('calendar', $data);
	}

	// Email
	public function show_email_inbox()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Inbox']),
			'page_title' => view('partials/page-title', ['title' => 'Inbox', 'li_1' => 'Email', 'li_2' => 'Inbox'])
		];
		$this->load->view('email-inbox', $data);
	}
	
	public function show_email_read()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Read_Email']),
			'page_title' => view('partials/page-title', ['title' => 'Read Email', 'li_1' => 'Email', 'li_2' => 'Read Email'])
		];
		$this->load->view('email-read', $data);
	}

	// Tasks
	public function show_tasks_list()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Task_List']),
			'page_title' => view('partials/page-title', ['title' => 'Task List', 'li_1' => 'Tasks', 'li_2' => 'Task List'])
		];
		$this->load->view('tasks-list', $data);
	}

	public function show_tasks_kanban()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Kanban_Board']),
			'page_title' => view('partials/page-title', ['title' => 'Kanban Board', 'li_1' => 'Tasks', 'li_2' => 'Kanban Board'])
		];
		$this->load->view('tasks-kanban', $data);
	}
	public function show_tasks_create()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Create_Task']),
			'page_title' => view('partials/page-title', ['title' => 'Create Task', 'li_1' => 'Tasks', 'li_2' => 'Create Task'])
		];
		$this->load->view('tasks-create', $data);
	}

	// Pages
	public function show_pages_login()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Login'])
		];
		$this->load->view('pages-login', $data);
	}
	public function show_pages_register()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Register'])
		];
		$this->load->view('pages-register', $data);
	}
	public function show_pages_recoverpw()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Recover_Password'])
		];
		$this->load->view('pages-recoverpw', $data);
	}
	public function show_pages_lock_screen()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lock_Screen'])
		];
		$this->load->view('pages-lock-screen', $data);
	}
	public function show_pages_starter()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Starter_Page']),
			'page_title' => view('partials/page-title', ['title' => 'Starter Page', 'li_1' => 'Pages', 'li_2' => 'Starter Page'])
		];
		$this->load->view('pages-starter', $data);
	}
	public function show_pages_invoice()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Invoice']),
			'page_title' => view('partials/page-title', ['title' => 'Invoice', 'li_1' => 'Pages', 'li_2' => 'Invoice'])
		];
		$this->load->view('pages-invoice', $data);
	}
	public function show_pages_profile()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Profile']),
			'page_title' => view('partials/page-title', ['title' => 'Profile', 'li_1' => 'Pages', 'li_2' => 'Profile'])
		];
		$this->load->view('pages-profile', $data);
	}
		public function show_my_profile()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Profile']),
			'page_title' => view('partials/page-title', ['title' => 'Profile', 'li_1' => 'Pages', 'li_2' => 'Profile'])
		];
		$this->load->view('my-profile' , $data);
	}
	public function show_how_it_works()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'How_it_works']),
			'page_title' => view('partials/page-title', ['title' => 'How it Works', 'li_1' => 'Pages', 'li_2' => 'How it Works'])
		];
		$this->load->view('how-it-works' , $data);
		
	}
	public function show_my_reviews()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'My_reviews']),
			'page_title' => view('partials/page-title', ['title' => 'My reviews', 'li_1' => 'Pages', 'li_2' => 'My reviews'])
		];
		$this->load->view('my-reviews' , $data);
		
	}
	public function show_my_ranking()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'My_ranking']),
			'page_title' => view('partials/page-title', ['title' => 'My ranking', 'li_1' => 'Pages', 'li_2' => 'My ranking'])
		];
		$this->load->view('my-ranking' , $data);
		
	}
	public function show_financial_transfer_coins()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Financial_transfer_coins']),
			'page_title' => view('partials/page-title', ['title' => 'Coins Transfer', 'li_1' => 'Pages', 'li_2' => 'Coins Transfer'])
		];
		$this->load->view('financial-transfer-coins' , $data);
		
	}
	public function show_financial_buy_coins()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Financial_buy_coins']),
			'page_title' => view('partials/page-title', ['title' => 'Buy Coins', 'li_1' => 'Pages', 'li_2' => 'Buy Coins'])
		];
		$this->load->view('financial-buy-coins' , $data);
		
	}
	public function show_financial_withdraw()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Financial_withdraw']),
			'page_title' => view('partials/page-title', ['title' => 'Withdraw', 'li_1' => 'Pages', 'li_2' => 'Withdraw'])
		];
		$this->load->view('financial-withdraw' , $data);
		
	}
	public function show_financial_rates()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Financial_rates']),
			'page_title' => view('partials/page-title', ['title' => 'Rates', 'li_1' => 'Pages', 'li_2' => 'Rates'])
		];
		$this->load->view('financial-rates' , $data);
		
	}
	public function show_extract_purchases()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Extract_purchases']),
			'page_title' => view('partials/page-title', ['title' => 'Purchases', 'li_1' => 'Pages', 'li_2' => 'Purchases'])
		];
		$this->load->view('extract-purchases' , $data);
		
	}
		public function show_extract_coins()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Extract_coins']),
			'page_title' => view('partials/page-title', ['title' => 'Coins', 'li_1' => 'Pages', 'li_2' => 'Coins'])
		];
		$this->load->view('extract-coins' , $data);
		
	}
		public function show_extract_transfers()
		{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Extract_transfers']),
			'page_title' => view('partials/page-title', ['title' => 'Transfers', 'li_1' => 'Pages', 'li_2' => 'Tranfers'])
		];
		$this->load->view('extract-tranfers' , $data);
		
	}
	public function show_pages_maintenance()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Maintenance'])
		];
		$this->load->view('pages-maintenance', $data);
	}
	public function show_pages_comingsoon()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Coming_Soon'])
		];
		$this->load->view('pages-comingsoon', $data);
	}
	public function show_pages_timeline()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Timeline']),
			'page_title' => view('partials/page-title', ['title' => 'Timeline', 'li_1' => 'Pages', 'li_2' => 'Timeline'])
		];
		$this->load->view('pages-timeline', $data);
	}
	public function show_pages_faqs()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'FAQs']),
			'page_title' => view('partials/page-title', ['title' => 'FAQS', 'li_1' => 'Pages', 'li_2' => 'FAQS'])
		];
		$this->load->view('pages-faqs', $data);
	}
	public function show_pages_pricing()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Pricing']),
			'page_title' => view('partials/page-title', ['title' => 'Pricing', 'li_1' => 'Pages', 'li_2' => 'Pricing'])
		];
		$this->load->view('pages-pricing', $data);
	}
	public function show_pages_404()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error_404'])
		];
		$this->load->view('pages-404', $data);
	}
	public function show_pages_500()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Error_500'])
		];
		$this->load->view('pages-500', $data);
	}

	// UI Elements
	public function show_ui_alerts()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Alerts']),
			'page_title' => view('partials/page-title', ['title' => 'Alerts', 'li_1' => 'UI Elements', 'li_2' => 'Alerts'])
		];
		$this->load->view('ui-alerts', $data);
	}
	public function show_ui_buttons()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Buttons']),
			'page_title' => view('partials/page-title', ['title' => 'Buttons', 'li_1' => 'UI Elements', 'li_2' => 'Buttons'])
		];
		$this->load->view('ui-buttons', $data);
	}
	public function show_ui_cards()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Cards']),
			'page_title' => view('partials/page-title', ['title' => 'Cards', 'li_1' => 'UI Elements', 'li_2' => 'Cards'])
		];
		$this->load->view('ui-cards', $data);
	}
	public function show_ui_carousel()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Carousel']),
			'page_title' => view('partials/page-title', ['title' => 'Carousel', 'li_1' => 'UI Elements', 'li_2' => 'Carousel'])
		];
		$this->load->view('ui-carousel', $data);
	}
	public function show_ui_dropdowns()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dropdowns']),
			'page_title' => view('partials/page-title', ['title' => 'Dropdowns', 'li_1' => 'UI Elements', 'li_2' => 'Dropdowns'])
		];
		$this->load->view('ui-dropdowns', $data);
	}
	public function show_ui_grid()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Grid']),
			'page_title' => view('partials/page-title', ['title' => 'Grid', 'li_1' => 'UI Elements', 'li_2' => 'Grid'])
		];
		$this->load->view('ui-grid', $data);
	}
	public function show_ui_images()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Images']),
			'page_title' => view('partials/page-title', ['title' => 'Images', 'li_1' => 'UI Elements', 'li_2' => 'Images'])
		];
		$this->load->view('ui-images', $data);
	}
	public function show_ui_lightbox()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Lightbox']),
			'page_title' => view('partials/page-title', ['title' => 'Lightbox', 'li_1' => 'UI Elements', 'li_2' => 'Lightbox'])
		];
		$this->load->view('ui-lightbox', $data);
	}
	public function show_ui_modals()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Modals']),
			'page_title' => view('partials/page-title', ['title' => 'Modals', 'li_1' => 'UI Elements', 'li_2' => 'Modals'])
		];
		$this->load->view('ui-modals', $data);
	}
	public function show_ui_rangeslider()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Range_Slider']),
			'page_title' => view('partials/page-title', ['title' => 'Range Slider', 'li_1' => 'UI Elements', 'li_2' => 'Range Slider'])
		];
		$this->load->view('ui-rangeslider', $data);
	}
	public function show_ui_session_timeout()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Session_Timeout']),
			'page_title' => view('partials/page-title', ['title' => 'Session Timeout', 'li_1' => 'UI Elements', 'li_2' => 'Session Timeout'])
		];
		$this->load->view('ui-session-timeout', $data);
	}
	public function show_ui_progressbars()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Progress_Bars']),
			'page_title' => view('partials/page-title', ['title' => 'Progress Bars', 'li_1' => 'UI Elements', 'li_2' => 'Progress Bars'])
		];
		$this->load->view('ui-progressbars', $data);
	}
	public function show_ui_sweet_alert()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Sweet_Alert']),
			'page_title' => view('partials/page-title', ['title' => 'SweetAlert 2', 'li_1' => 'UI Elements', 'li_2' => 'SweetAlert 2'])
		];
		$this->load->view('ui-sweet-alert', $data);
	}
	public function show_ui_tabs_accordions()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Tabs_and_Accordions']),
			'page_title' => view('partials/page-title', ['title' => 'Tabs & Accordions', 'li_1' => 'UI Elements', 'li_2' => 'Tabs & Accordions'])
		];
		$this->load->view('ui-tabs-accordions', $data);
	}
	public function show_ui_typography()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Typography']),
			'page_title' => view('partials/page-title', ['title' => 'Typography', 'li_1' => 'UI Elements', 'li_2' => 'Typography'])
		];
		$this->load->view('ui-typography', $data);
	}
	public function show_ui_video()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Video']),
			'page_title' => view('partials/page-title', ['title' => 'Video', 'li_1' => 'UI Elements', 'li_2' => 'Video'])
		];
		$this->load->view('ui-video', $data);
	}
	public function show_ui_general()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'General']),
			'page_title' => view('partials/page-title', ['title' => 'General UI', 'li_1' => 'UI Elements', 'li_2' => 'General UI'])
		];
		$this->load->view('ui-general', $data);
	}
	public function show_ui_colors()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Colors']),
			'page_title' => view('partials/page-title', ['title' => 'Colors', 'li_1' => 'UI Elements', 'li_2' => 'Colors'])
		];
		$this->load->view('ui-colors', $data);
	}
	public function show_ui_rating()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Rating']),
			'page_title' => view('partials/page-title', ['title' => 'Rating', 'li_1' => 'UI Elements', 'li_2' => 'Rating'])
		];
		$this->load->view('ui-rating', $data);
	}

	// Forms
	public function show_form_elements()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Elements']),
			'page_title' => view('partials/page-title', ['title' => 'Form Elements', 'li_1' => 'Forms', 'li_2' => 'Form Elements'])
		];
		$this->load->view('form-elements', $data);
	}
	public function show_form_validation()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Validation']),
			'page_title' => view('partials/page-title', ['title' => 'Form Validation', 'li_1' => 'Forms', 'li_2' => 'Form Validation'])
		];
		$this->load->view('form-validation', $data);
	}
	public function show_form_advanced()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Advanced']),
			'page_title' => view('partials/page-title', ['title' => 'Form Advanced', 'li_1' => 'Forms', 'li_2' => 'Form Advanced'])
		];
		$this->load->view('form-advanced', $data);
	}
	public function show_form_editors()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Editors']),
			'page_title' => view('partials/page-title', ['title' => 'Form Editors', 'li_1' => 'Forms', 'li_2' => 'Form Editors'])
		];
		$this->load->view('form-editors', $data);
	}
	public function show_form_uploads()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_File_Upload']),
			'page_title' => view('partials/page-title', ['title' => 'Form File Upload', 'li_1' => 'Forms', 'li_2' => 'Form File Upload'])
		];
		$this->load->view('form-uploads', $data);
	}
	public function show_form_xeditable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Xeditable']),
			'page_title' => view('partials/page-title', ['title' => 'Form Xeditable', 'li_1' => 'Forms', 'li_2' => 'Form Xeditable'])
		];
		$this->load->view('form-xeditable', $data);
	}
	public function show_form_repeater()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Repeater']),
			'page_title' => view('partials/page-title', ['title' => 'Form Repeater', 'li_1' => 'Forms', 'li_2' => 'Form Repeater'])
		];
		$this->load->view('form-repeater', $data);
	}
	public function show_form_wizard()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Wizard']),
			'page_title' => view('partials/page-title', ['title' => 'Form Wizard', 'li_1' => 'Forms', 'li_2' => 'Form Wizard'])
		];
		$this->load->view('form-wizard', $data);
	}
	public function show_form_mask()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Form_Mask']),
			'page_title' => view('partials/page-title', ['title' => 'Form Mask', 'li_1' => 'Forms', 'li_2' => 'Form Mask'])
		];
		$this->load->view('form-mask', $data);
	}

	// Tables
	public function show_tables_basic()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Basic_Tables']),
			'page_title' => view('partials/page-title', ['title' => 'Basic Tables', 'li_1' => 'Tables', 'li_2' => 'Basic Tables'])
		];
		$this->load->view('tables-basic', $data);
	}
	public function show_tables_datatable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Data_Tables']),
			'page_title' => view('partials/page-title', ['title' => 'Data Tables', 'li_1' => 'Tables', 'li_2' => 'Data Tables'])
		];
		$this->load->view('tables-datatable', $data);
	}
	public function show_tables_responsive()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Responsive_Table']),
			'page_title' => view('partials/page-title', ['title' => 'Responsive Table', 'li_1' => 'Tables', 'li_2' => 'Responsive Table'])
		];
		$this->load->view('tables-responsive', $data);
	}
	public function show_tables_editable()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Editable_Table']),
			'page_title' => view('partials/page-title', ['title' => 'Editable Table', 'li_1' => 'Tables', 'li_2' => 'Editable Table'])
		];
		$this->load->view('tables-editable', $data);
	}

	// Charts
	public function show_charts_apex()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Apex_charts']),
			'page_title' => view('partials/page-title', ['title' => 'Apex charts', 'li_1' => 'Charts', 'li_2' => 'Apex charts'])
		];
		$this->load->view('charts-apex', $data);
	}
	public function show_charts_chartjs()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Chartjs_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Chartjs', 'li_1' => 'Charts', 'li_2' => 'Chartjs'])
		];
		$this->load->view('charts-chartjs', $data);
	}
	public function show_charts_flot()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Flot_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Flot charts', 'li_1' => 'Charts', 'li_2' => 'Flot charts'])
		];
		$this->load->view('charts-flot', $data);
	}
	public function show_charts_knob()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Jquery_Knob_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Jquery Knob Chart', 'li_1' => 'Charts', 'li_2' => 'Jquery Knob Chart'])
		];
		$this->load->view('charts-knob', $data);
	}
	public function show_charts_sparkline()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Sparkline_Chart']),
			'page_title' => view('partials/page-title', ['title' => 'Sparkline chart', 'li_1' => 'Charts', 'li_2' => 'Sparkline chart'])
		];
		$this->load->view('charts-sparkline', $data);
	}

	// Icons
	public function show_icons_boxicons()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Boxicons']),
			'page_title' => view('partials/page-title', ['title' => 'Boxicons', 'li_1' => 'Icons', 'li_2' => 'Boxicons'])
		];
		$this->load->view('icons-boxicons', $data);
	}
	public function show_icons_materialdesign()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Material_Design']),
			'page_title' => view('partials/page-title', ['title' => 'Material Design', 'li_1' => 'Icons', 'li_2' => 'Material Design'])
		];
		$this->load->view('icons-materialdesign', $data);
	}
	public function show_icons_dripicons()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Dripicons']),
			'page_title' => view('partials/page-title', ['title' => 'Dripicons', 'li_1' => 'Icons', 'li_2' => 'Dripicons'])
		];
		$this->load->view('icons-dripicons', $data);
	}
	public function show_icons_fontawesome()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Font_awesome']),
			'page_title' => view('partials/page-title', ['title' => 'Font Awesome', 'li_1' => 'Icons', 'li_2' => 'Font Awesome'])
		];
		$this->load->view('icons-fontawesome', $data);
	}

	// Maps
	public function show_maps_google()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Google_Maps']),
			'page_title' => view('partials/page-title', ['title' => 'Google Maps', 'li_1' => 'Maps', 'li_2' => 'Google Maps'])
		];
		$this->load->view('maps-google', $data);
	}
	public function show_maps_vector()
	{
		$data = [
			'title_meta' => view('partials/title-meta', ['title' => 'Vector_Maps']),
			'page_title' => view('partials/page-title', ['title' => 'Vector Maps', 'li_1' => 'Maps', 'li_2' => 'Vector Maps'])
		];
		$this->load->view('maps-vector', $data);
	}
	*/


	private function import_head($data = null){
		$this->load->view('partials/main');
		$this->load->view('partials/head-css', $data);
		$this->load->view('partials/body');
	}
	private function import_menu($data = null){
		$this->load->view('partials/topbar');
		$this->load->view('partials/nsidebar', $data);
		
	}

	private function import_footer($data = null){
		$this->load->view('partials/footer');
		$this->load->view('partials/vendor-scripts');
		$this->load->view('partials/scripts');
	}

}

