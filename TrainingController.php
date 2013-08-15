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
	public function createnewprocess(){
        $this->display(TRAINING_VIEWS_BASE.'/newprocess');
    }
	public function createnewcalculated(){
        $this->display(TRAINING_VIEWS_BASE.'/newcalculated');
    }
	public function createnewsecurity(){
        $this->display(TRAINING_VIEWS_BASE.'/newsecurity');
    }
	public function createnewreport(){
        $this->display(TRAINING_VIEWS_BASE.'/newreport');
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
	
	// process
    public function taskprocess() {
        $process = Process::findAllFrom('Process','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/taskprocess', array('process' => $process));
    }
    
    public function updateprocess($id){
        $process = Process::findByIdFrom('Process', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updateprocess', array('process' => $process));
    }

    public function showprocess($id){
        $process = Process::findByIdFrom('Process', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showprocess', array('process' => $process));
    }
	
	// calculated
    public function taskcalculated() {
        $calculated = Calculated::findAllFrom('Calculated','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/taskcalculated', array('calculated' => $calculated));
    }
    
    public function updatecalculated($id){
        $calculated = Calculated::findByIdFrom('Calculated', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatecalculated', array('calculated' => $calculated));
    }

    public function showcalculated($id){
        $calculated = Calculated::findByIdFrom('Calculated', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showcalculated', array('calculated' => $calculated));
    }
	
	// security
    public function tasksecurity() {
        $security = Security::findAllFrom('Security','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/tasksecurity', array('security' => $security));
    }
    
    public function updatesecurity($id){
        $security = Security::findByIdFrom('Security', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatesecurity', array('security' => $security));
    }

    public function showsecurity($id){
        $security = Security::findByIdFrom('Security', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showsecurity', array('security' => $security));
    }
	
	// report
    public function taskreport() {
        $report = Report::findAllFrom('Report','id=id ORDER BY start_date ASC');
        $this->display(TRAINING_VIEWS_BASE.'/taskreport', array('report' => $report));
    }
    
    public function updatereport($id){
        $report = Report::findByIdFrom('Report', $id);
        $this->display(TRAINING_VIEWS_BASE.'/updatereport', array('report' => $report));
    }

    public function showreport($id){
        $report = Report::findByIdFrom('Report', $id);
        $this->display(TRAINING_VIEWS_BASE.'/showreport', array('report' => $report));
    }
	

// Deleting
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
	public function deleteprocess($id) {
        $process = Process::findByIdFrom('Process', $id);
        $process->delete();
        Flash::set('success', __('Your Business Process Fundamentals Course was successfully deleted'));
        redirect(get_url('plugin/training/taskprocess'));
    }
	public function deletecalculated($id) {
        $calculated = Calculated::findByIdFrom('Calculated', $id);
        $calculated->delete();
        Flash::set('success', __('Your Calculated Fields Course was successfully deleted'));
        redirect(get_url('plugin/training/taskcalculated'));
    }
	public function deletesecurity($id) {
        $security = Security::findByIdFrom('Security', $id);
        $security->delete();
        Flash::set('success', __('Your Configurable Security Fundamentals Course was successfully deleted'));
        redirect(get_url('plugin/training/tasksecurity'));
    }
	public function deletereport($id) {
        $report = Report::findByIdFrom('Report', $id);
        $report->delete();
        Flash::set('success', __('Your Report Writer Course was successfully deleted'));
        redirect(get_url('plugin/training/taskreport'));
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
		public function updatebenefitscourse(){
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
	}
	
	
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
		public function updatehcmcourse(){
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
	}


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
		public function updatepayrollcourse(){
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
    }


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
		public function updatecompensationcourse(){
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
    }
	
	
	/* Create new business process fundamentals */
		public function newprocess(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not save this course!'));
			}
			else {
				$data = $_POST['process'];
				$process = new Process();
				$process->title = $data['title'];
				$process->filter_id = $data['filter_id'];
				$process->created_on = date('Y-m-d');
				$process->start_date = $data['start_date'];
				$process->end_date = $data['end_date'];
				$process->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/taskprocess'));
		}
	}
	/* Update business process fundamentals */
		public function updateprocesscourse(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not update this course!'));
			}
			else {
				$data = $_POST['process'];
				use_helper('Kses');
				$data['id'] = kses(trim($data['id']), array());
				$process = new Process();
				$process->id = $data['id'];
				$process->title = $data['title'];
				$process->filter_id = $data['filter_id'];
				$process->updated_on = date('Y-m-d');
				$process->start_date = $data['start_date'];
				$process->end_date = $data['end_date'];
				$process->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/taskprocess'));
		}
	}
	
	
	/* Create new calculated fields */
		public function newcalculated(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not save this course!'));
			}
			else {
				$data = $_POST['calculated'];
				$calculated = new Calculated();
				$calculated->title = $data['title'];
				$calculated->filter_id = $data['filter_id'];
				$calculated->created_on = date('Y-m-d');
				$calculated->start_date = $data['start_date'];
				$calculated->end_date = $data['end_date'];
				$calculated->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/taskcalculated'));
		}
	}
	/* Update calculated fields */
		public function updatecalculatedcourse(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not update this course!'));
			}
			else {
				$data = $_POST['calculated'];
				use_helper('Kses');
				$data['id'] = kses(trim($data['id']), array());
				$calculated = new Calculated();
				$calculated->id = $data['id'];
				$calculated->title = $data['title'];
				$calculated->filter_id = $data['filter_id'];
				$calculated->updated_on = date('Y-m-d');
				$calculated->start_date = $data['start_date'];
				$calculated->end_date = $data['end_date'];
				$calculated->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/taskcalculated'));
		}
	}
	
	
	/* Create new configurability security fundamentals */
		public function newsecurity(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not save this course!'));
			}
			else {
				$data = $_POST['security'];
				$security = new Security();
				$security->title = $data['title'];
				$security->filter_id = $data['filter_id'];
				$security->created_on = date('Y-m-d');
				$security->start_date = $data['start_date'];
				$security->end_date = $data['end_date'];
				$security->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/tasksecurity'));
		}
	}
	/* Update configurability security fundamentals */
		public function updatesecuritycourse(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not update this course!'));
			}
			else {
				$data = $_POST['security'];
				use_helper('Kses');
				$data['id'] = kses(trim($data['id']), array());
				$security = new Security();
				$security->id = $data['id'];
				$security->title = $data['title'];
				$security->filter_id = $data['filter_id'];
				$security->updated_on = date('Y-m-d');
				$security->start_date = $data['start_date'];
				$security->end_date = $data['end_date'];
				$security->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/tasksecurity'));
		}
	}
	
	
	/* Create new report writer */
		public function newreport(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not save this course!'));
			}
			else {
				$data = $_POST['report'];
				$report = new Report();
				$report->title = $data['title'];
				$report->filter_id = $data['filter_id'];
				$report->created_on = date('Y-m-d');
				$report->start_date = $data['start_date'];
				$report->end_date = $data['end_date'];
				$report->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/taskreport'));
		}
	}
	/* Update report writer */
		public function updatereportcourse(){
			if (!isset($_POST['save'])) {
				Flash::set('error', __('Could not update this course!'));
			}
			else {
				$data = $_POST['report'];
				use_helper('Kses');
				$data['id'] = kses(trim($data['id']), array());
				$report = new Report();
				$report->id = $data['id'];
				$report->title = $data['title'];
				$report->filter_id = $data['filter_id'];
				$report->updated_on = date('Y-m-d');
				$report->start_date = $data['start_date'];
				$report->end_date = $data['end_date'];
				$report->save();
				Flash::set('success', __('All went well.'));
				redirect(get_url('plugin/training/taskreport'));
		}
	}

    
}