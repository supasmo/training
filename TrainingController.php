<?php

/**
* Updated
*/

/* Security measure */
if (!defined('IN_CMS')) { exit(); }



class TrainingController extends PluginController {

    private static function _checkPermission() {
        AuthUser::load();
        if ( ! AuthUser::isLoggedIn()) {
            redirect(get_url('login'));
        }
    }
	
	public function __construct() {
        self::_checkPermission();
        
        define('TRAINING_VIEWS_BASE', 'training/views');

        $this->setLayout('backend');
        $this->assignToLayout('sidebar', new View('../../plugins/training/views/sidebar'));
    }
	
	// Take me to all Courses
    public function index() {
        $this->display(TRAINING_VIEWS_BASE.'/documentation');
    }
	
	// Documentation
    public function documentation() {
        $this->display(TRAINING_VIEWS_BASE.'/documentation');
    }
	


// Add New
    public function createnewbenefits(){
        $this->display(TRAINING_VIEWS_BASE.'/newbenefits');
    }
	public function createnewhcm(){
        $this->display(TRAINING_VIEWS_BASE.'/newhcm');
    }
	public function createnewpayroll(){
        $this->display(TRAINING_VIEWS_BASE.'/newpayroll');
    }
	public function createnewcompensation(){
        $this->display(TRAINING_VIEWS_BASE.'/newcompensation');
    }
	
	
	
// List all
	// benefits
    public function benefitstask() {
        $benefits = Benefits::findAllFrom('Benefits','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/benefitstask', array('benefits' => $benefits));
    }
    
    public function updatebenefits($id){
        $benefits = Benefits::findByIdFrom('Benefits', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatebenefits', array('benefits' => $benefits));
    }

    public function showbenefits($id){
        $benefits = Benefits::findByIdFrom('Benefits', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showbenefits', array('benefits' => $benefits));
    }
	
	// hcm
	public function hcmtask() {
        $hcm = Hcm::findAllFrom('Hcm','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/hcmtask', array('hcm' => $hcm));
    }
    
    public function updatehcm($id){
        $hcm = Hcm::findByIdFrom('Hcm', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatehcm', array('hcm' => $hcm));
    }

    public function showhcm($id){
        $hcm = Hcm::findByIdFrom('Hcm', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showhcm', array('hcm' => $hcm));
    }
	
	// payroll
	public function payrolltask() {
        $payroll = Payroll::findAllFrom('Payroll','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/payrolltask', array('payroll' => $payroll));
    }
    
    public function updatepayroll($id){
        $payroll = Payroll::findByIdFrom('Payroll', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatepayroll', array('payroll' => $payroll));
    }

    public function showpayroll($id){
        $payroll = Payroll::findByIdFrom('Payroll', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showpayroll', array('payroll' => $payroll));
    }
	
	// compensation
	public function compensationtask() {
        $compensation = Compensation::findAllFrom('Compensation','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/compensationtask', array('compensation' => $compensation));
    }
    
    public function updatecompensation($id){
        $compensation = Compensation::findByIdFrom('Compensation', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatecompensation', array('compensation' => $compensation));
    }

    public function showcompensation($id){
        $compensation = Compensation::findByIdFrom('Compensation', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showcompensation', array('compensation' => $compensation));
    }
	

    // Delete
    public function deletebenefits($id) {
        $benefits = Benefits::findByIdFrom('Benefits', $id);
        $benefits->delete();
        Flash::set('success', __('Your Benefits Fundamentals Course was successfully deleted'));

        redirect(get_url('plugin/training/benefitstask'));
    }
	public function deletehcm($id) {
        $hcm = Hcm::findByIdFrom('Hcm', $id);
        $hcm->delete();
        Flash::set('success', __('Your HCM Fundamentals Course was successfully deleted'));

        redirect(get_url('plugin/training/hcmtask'));
    }
	public function deletepayroll($id) {
        $payroll = Payroll::findByIdFrom('Payroll', $id);
        $payroll->delete();
        Flash::set('success', __('Your Payroll Processing was successfully deleted'));

        redirect(get_url('plugin/training/payrolltask'));
    }
	public function deletecompensation($id) {
        $compensation = Compensation::findByIdFrom('Compensation', $id);
        $compensation->delete();
        Flash::set('success', __('Your Compensation Fundamentals Course was successfully deleted'));

        redirect(get_url('plugin/training/compensationtask'));
    }
	
	
	// Functions
/* Create new benefits fundamentals */
	public function newbenefits(){
		//
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not save this course!'));
			}
			else {
				$data = $_POST['benefits'];
				$benefits = new Benefits();
				$benefits->title = $data['title'];
				$benefits->filter_id = $data['filter_id'];
				$benefits->created_on = date('Y-m-d');
				$benefits->start_date = $data['start_date'];
				$benefits->end_date = $data['end_date'];
				$benefits->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/benefitstask'));
		}
	}
/* Update benefits fundamentals */
	/* public function updatebenefits(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not update this course!'));
			}
			else {
				$data = $_POST['benefits'];
				use_helper('Kses');
				$data['id'] = kses(trim($data['id']), array());
				$benefits = new Benefits();
				$benefits->id = $data['id'];
				$benefits->title = $data['title'];
				$benefits->filter_id = $data['filter_id'];
				$benefits->updated_on = date('Y-m-d');
				$benefits->start_date = $data['start_date'];
				$benefits->end_date = $data['end_date'];
				$benefits->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/benefitstask'));
		}
	} */
	
	
/* Create new hcm fundamentals */
	public function newhcm(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not save this HCM Fundamentals course!'));
			}
			else {
				$data = $_POST['hcm'];
				$hcm = new Hcm();
				$hcm->title = $data['title'];
				$hcm->filter_id = $data['filter_id'];
				$hcm->created_on = date('Y-m-d');
				$hcm->start_date = $data['start_date'];
				$hcm->end_date = $data['end_date'];
				$hcm->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/hcmtask'));
		}
	}
/* Update hcm fundamentals */
	/* public function updatehcm(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not update this HCM Fundamentals course!'));
			}
			else {
				$data = $_POST['hcm'];
				use_helper('Kses');
				$data['id'] = kses(trim($data['id']), array());
				$hcm = new Hcm();
				$hcm->id = $data['id'];
				$hcm->title = $data['title'];
				$hcm->filter_id = $data['filter_id'];
				$hcm->updated_on = date('Y-m-d');
				$hcm->start_date = $data['start_date'];
				$hcm->end_date = $data['end_date'];
				$hcm->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/hcmtask'));
		}
	} */


/* Create new payroll processing */
    public function newpayroll(){
            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not save this Payroll Course!'));
            }
            else {
                $data = $_POST['payroll'];
                $payroll = new Payroll();
                $payroll->title = $data['title'];
                $payroll->filter_id = $data['filter_id'];
                $payroll->created_on = date('Y-m-d');
				$payroll->start_date = $data['start_date'];
				$payroll->end_date = $data['end_date'];
                $payroll->save();
                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/training/payrolltask'));
        }
    }
/* Update note */
    /* public function updatepayroll(){
            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not update this Payroll Course!'));
            }
            else {
                $data = $_POST['payroll'];
                use_helper('Kses');
                $data['id'] = kses(trim($data['id']), array());
                $payroll = new Payroll();
                $payroll->id = $data['id'];
                $payroll->title = $data['title'];
                $payroll->filter_id = $data['filter_id'];
                $payroll->updated_on = date('Y-m-d');
				$payroll->start_date = $data['start_date'];
				$payroll->end_date = $data['end_date'];
                $payroll->save();
                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/training/payrolltask'));
        }
    } */


/* Create new compensation fundamentals */
    public function newcompensation(){
            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not save this compensation!'));
            }
            else {
                $data = $_POST['compensation'];
                $compensation = new Compensation();
                $compensation->title = $data['title'];
                $compensation->filter_id = $data['filter_id'];
                $compensation->created_on = date('Y-m-d');
				$compensation->start_date = $data['start_date'];
				$compensation->end_date = $data['end_date'];
                $compensation->save();
                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/training/compensationtask'));
        }
    }
/*Update note */
    /* public function updatecompensation(){
            if (!isset($_POST['save'])) {
                Flash::set('error', __('Could not update this compensation course!'));
            }
            else {
                $data = $_POST['compensation'];
                use_helper('Kses');
                $data['id'] = kses(trim($data['id']), array());
                $compensation = new Compensation();
                $compensation->id = $data['id'];
                $compensation->title = $data['title'];
                $compensation->filter_id = $data['filter_id'];
                $compensation->updated_on = date('Y-m-d');
				$compensation->start_date = $data['start_date'];
				$compensation->end_date = $data['end_date'];
                $compensation->save();
                Flash::set('success', __('All went well.'));
                redirect(get_url('plugin/training/compensationtask'));
        }
    } */

    
}