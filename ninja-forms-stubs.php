<?php
/**
 * Generated stub declarations for Ninja Forms.
 * @see https://ninjaforms.com/
 * @see https://github.com/mralaminahamed/phpstan-ninja-forms-stubs
 */

namespace NinjaForms\Blocks\Authentication {
    /**
     * Creats randomly generated strings for use as public and private keys.
     */
    class KeyFactory
    {
        /**
         * @param int $length
         * 
         * @return string
         */
        public static function make($length = 40)
        {
        }
    }
    /**
     * Manages a stored secret and guarentees that one is always available.
     */
    class SecretStore
    {
        /** @var string */
        const OPTION_KEY = 'ninja-forms-views-secret';
        /**
         * Gets the SECRET or creates the SECRET if it does not exist.
         * 
         * If defined, defaults to NINJA_FORMS_VIEWS_SECRET constant.
         * If a secret does not exist, then it creates a secret and stores the value.
         * If the secret is wrongly typed, then it self-corrects by creating a new secret.
         * 
         * @return string
         */
        public static function getOrCreate()
        {
        }
        /**
         * @param mixed $secret
         */
        public static function validate($secret)
        {
        }
    }
    /**
     * Creates an encoded public/private key hash and validates it.
     */
    class Token
    {
        /** @var string */
        protected $privateKey;
        /**
         * @param string $privateKey
         */
        public function __construct($privateKey)
        {
        }
        /**
         * @param string $publicKey
         * 
         * @return string
         */
        public function create($publicKey)
        {
        }
        /**
         * @param string $token
         * 
         * @return bool
         */
        public function validate($token)
        {
        }
        /**
         * @param string $publicKey
         * 
         * @return string
         */
        protected function hash($publicKey)
        {
        }
    }
    /**
     * Creates a new token using the stored secret.
     */
    class TokenFactory
    {
        /**
         * @return Token
         */
        public static function make()
        {
        }
    }
}
namespace NinjaForms\Blocks\DataBuilder {
    class FieldsBuilder
    {
        protected $fields;
        public function __construct($fields)
        {
        }
        public function get()
        {
        }
        protected function toArray($field)
        {
        }
    }
    class FieldsBuilderFactory
    {
        public function make($formID)
        {
        }
    }
    class FormsBuilder
    {
        protected $forms;
        public function __construct($forms)
        {
        }
        public function get()
        {
        }
        protected function toArray($form)
        {
        }
    }
    class FormsBuilderFactory
    {
        public function make()
        {
        }
    }
    class SubmissionsBuilder
    {
        protected $submissions;
        /**
         * Fieldset Repeater object to contain fieldset functionality 
         * 
         * @var \NF_Handlers_FieldsetRepeater 
         */
        protected $fieldsetRepeater;
        public static function make($formID)
        {
        }
        public function __construct($submissions)
        {
        }
        public function get()
        {
        }
        protected function toArray($values)
        {
        }
        protected function formatValue($value)
        {
        }
        /**
         * Construct string representation of fieldset repeater data for block
         * 
         * 
         *
         * @param array $fieldsetSubmissionValues
         * @return string
         */
        protected function constructOutputForFieldset(array $fieldsetSubmissionValues) : string
        {
        }
        protected function normalizeArrayKeys($values)
        {
        }
        /**
         * Isolate construction of FieldsetRepeater
         */
        protected function initializeFieldsetRepeater() : void
        {
        }
    }
    class SubmissionsBuilderFactory
    {
        /**
         * @param int $formID
         * @param int $perPage
         * @param int $page
         * 
         * @return SubmissionsBuilder
         */
        public function make($formID, $perPage = -1, $page = 0)
        {
        }
        protected static function flattenPostmeta($postmeta)
        {
        }
    }
}
namespace {
    abstract class NF_Abstracts_Controller
    {
        /**
         * Data (Misc.) passed back to the client in the Response.
         *
         * @var array
         */
        protected $_data = array();
        /**
         * Errors passed back to the client in the Response.
         *
         * @var array
         */
        protected $_errors = array();
        /**
         * Debug Messages passed back to the client in the Response.
         *
         * @var array
         */
        protected $_debug = array();
        /*
         * PUBLIC METHODS
         */
        /**
         * NF_Abstracts_Controller constructor.
         */
        public function __construct()
        {
        }
        /*
         * PROTECTED METHODS
         */
        /**
         * Respond
         *
         * A wrapper for the WordPress AJAX response pattern.
         */
        protected function _respond($data = array())
        {
        }
    }
    class NF_AJAX_Controllers_DeleteAllData extends \NF_Abstracts_Controller
    {
        public function __construct()
        {
        }
        public function delete_all_data()
        {
        }
        private function prepare_in($sql, $vals)
        {
        }
    }
    class NF_AJAX_Controllers_DispatchPoints
    {
        /*
         * Constructor method
         */
        public function __construct()
        {
        }
        /*
         * Function called when the undo manager is used in the builder.
         * 
         * @since 3.2
         */
        public function undo_click()
        {
        }
        /*
         * Function to startup our form data telemtry.
         * 
         * @since 3.2
         */
        public function form_telemetry()
        {
        }
    }
    class NF_AJAX_Controllers_Fields extends \NF_Abstracts_Controller
    {
        private $publish_processing;
        public function __construct()
        {
        }
        /**
         * Check if the field has data, if so let the front-end know to show
         * delete field modal
         */
        public function maybe_delete_field()
        {
        }
    }
    class NF_AJAX_Controllers_Form extends \NF_Abstracts_Controller
    {
        private $publish_processing;
        public function __construct()
        {
        }
        public function plugins_loaded()
        {
        }
        public function save()
        {
        }
        public function delete()
        {
        }
        /**
         * This function will take all form out of maintenance mode( in case some
         * are still in maintenance mode after some required updates )
         * 
         * @since 3.4.0
         */
        public function remove_maintenance_mode()
        {
        }
        /**
         * Let's generate a unique nonce for each form render so that we don't get
         * caught with an expiring nonce accidentally and fail to allow a submission
         * @since 3.2
         */
        public function get_new_nonce()
        {
        }
    }
    class NF_AJAX_Controllers_FormEndpoints extends \NF_Abstracts_Controller
    {
        /*
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         *
         */
        public function get_forms()
        {
        }
        /*
         *
         */
        public function get_new_form_templates()
        {
        }
        /*
         *
         */
        public function delete()
        {
        }
        public function duplicate()
        {
        }
    }
    class NF_AJAX_Controllers_JSError
    {
        public function __construct()
        {
        }
        public function log_error()
        {
        }
    }
    class NF_AJAX_Controllers_Preview extends \NF_Abstracts_Controller
    {
        private static $transient_prefix = 'nf_form_preview_';
        public function __construct()
        {
        }
        public function update()
        {
        }
        public function filter_action_settings($action_settings, $form_id, $action_id, $form_settings)
        {
        }
        private function get_form_data($form_id)
        {
        }
        private function update_form_data($form_data)
        {
        }
    }
    class NF_AJAX_Controllers_SavedFields extends \NF_Abstracts_Controller
    {
        public function __construct()
        {
        }
        public function create()
        {
        }
        public function update()
        {
        }
        public function delete()
        {
        }
    }
    class NF_AJAX_Controllers_Submission extends \NF_Abstracts_Controller
    {
        protected $_form_data = array();
        protected $_form_cache = array();
        protected $_preview_data = array();
        protected $_form_id = '';
        public function __construct()
        {
        }
        public function submit()
        {
        }
        public function resume()
        {
        }
        protected function process()
        {
        }
        /**
         * Upon request, preserve a resumed action's  extra data from before halt
         *
         * @return void
         */
        private function maybePreserveExtraData() : void
        {
        }
        protected function validate_field($field_settings)
        {
        }
        protected function process_field($field_settings)
        {
        }
        protected function maybe_halt($action_id)
        {
        }
        protected function sort_form_actions($a, $b)
        {
        }
        public function shutdown()
        {
        }
        protected function form_data_check()
        {
        }
        protected function is_preview()
        {
        }
        /*
         * Overwrite method for parent class.
         */
        protected function _respond($data = array())
        {
        }
        /**
         * Process fields merge tags for fields inside a repeater fieldset
         * 
         * @param object $field The Repeater Fieldset
         * 
         */
        protected function process_repeater_fields_merge_tags($field)
        {
        }
    }
    /**
     * Abstract WP_Async_Request class.
     *
     * @abstract
     */
    abstract class WP_Async_Request
    {
        /**
         * Prefix
         *
         * (default value: 'wp')
         *
         * @var string
         * @access protected
         */
        protected $prefix = 'wp';
        /**
         * Action
         *
         * (default value: 'async_request')
         *
         * @var string
         * @access protected
         */
        protected $action = 'async_request';
        /**
         * Identifier
         *
         * @var mixed
         * @access protected
         */
        protected $identifier;
        /**
         * Data
         *
         * (default value: array())
         *
         * @var array
         * @access protected
         */
        protected $data = array();
        /**
         * Initiate new async request
         */
        public function __construct()
        {
        }
        /**
         * Set data used during the request
         *
         * @param array $data Data.
         *
         * @return $this
         */
        public function data($data)
        {
        }
        /**
         * Dispatch the async request
         *
         * @return array|WP_Error
         */
        public function dispatch()
        {
        }
        /**
         * Get query args
         *
         * @return array
         */
        protected function get_query_args()
        {
        }
        /**
         * Get query URL
         *
         * @return string
         */
        protected function get_query_url()
        {
        }
        /**
         * Get post args
         *
         * @return array
         */
        protected function get_post_args()
        {
        }
        /**
         * Maybe handle
         *
         * Check for correct nonce and pass to handler.
         */
        public function maybe_handle()
        {
        }
        /**
         * Handle
         *
         * Override this method to perform any actions required
         * during the async request.
         */
        protected abstract function handle();
    }
    /**
     * Abstract WP_Background_Process class.
     *
     * @abstract
     * @extends WP_Async_Request
     */
    abstract class WP_Background_Process extends \WP_Async_Request
    {
        /**
         * Action
         *
         * (default value: 'background_process')
         *
         * @var string
         * @access protected
         */
        protected $action = 'background_process';
        /**
         * Start time of current process.
         *
         * (default value: 0)
         *
         * @var int
         * @access protected
         */
        protected $start_time = 0;
        /**
         * Cron_hook_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_hook_identifier;
        /**
         * Cron_interval_identifier
         *
         * @var mixed
         * @access protected
         */
        protected $cron_interval_identifier;
        /**
         * Initiate new background process
         */
        public function __construct()
        {
        }
        /**
         * Dispatch
         *
         * @access public
         * @return void
         */
        public function dispatch()
        {
        }
        /**
         * Push to queue
         *
         * @param mixed $data Data.
         *
         * @return $this
         */
        public function push_to_queue($data)
        {
        }
        /**
         * Save queue
         *
         * @return $this
         */
        public function save()
        {
        }
        /**
         * Update queue
         *
         * @param string $key Key.
         * @param array  $data Data.
         *
         * @return $this
         */
        public function update($key, $data)
        {
        }
        /**
         * Delete queue
         *
         * @param string $key Key.
         *
         * @return $this
         */
        public function delete($key)
        {
        }
        /**
         * Generate key
         *
         * Generates a unique key based on microtime. Queue items are
         * given a unique key so that they can be merged upon save.
         *
         * @param int $length Length.
         *
         * @return string
         */
        protected function generate_key($length = 64)
        {
        }
        /**
         * Maybe process queue
         *
         * Checks whether data exists within the queue and that
         * the process is not already running.
         */
        public function maybe_handle()
        {
        }
        /**
         * Is queue empty
         *
         * @return bool
         */
        protected function is_queue_empty()
        {
        }
        /**
         * Is process running
         *
         * Check whether the current process is already running
         * in a background process.
         */
        protected function is_process_running()
        {
        }
        /**
         * Lock process
         *
         * Lock the process so that multiple instances can't run simultaneously.
         * Override if applicable, but the duration should be greater than that
         * defined in the time_exceeded() method.
         */
        protected function lock_process()
        {
        }
        /**
         * Unlock process
         *
         * Unlock the process so that other instances can spawn.
         *
         * @return $this
         */
        protected function unlock_process()
        {
        }
        /**
         * Get batch
         *
         * @return stdClass Return the first batch from the queue
         */
        protected function get_batch()
        {
        }
        /**
         * Handle
         *
         * Pass each queue item to the task handler, while remaining
         * within server memory and time limit constraints.
         */
        protected function handle()
        {
        }
        /**
         * Memory exceeded
         *
         * Ensures the batch process never exceeds 90%
         * of the maximum WordPress memory.
         *
         * @return bool
         */
        protected function memory_exceeded()
        {
        }
        /**
         * Get memory limit
         *
         * @return int
         */
        protected function get_memory_limit()
        {
        }
        /**
         * Time exceeded.
         *
         * Ensures the batch never exceeds a sensible time limit.
         * A timeout limit of 30s is common on shared hosting.
         *
         * @return bool
         */
        protected function time_exceeded()
        {
        }
        /**
         * Complete.
         *
         * Override if applicable, but ensure that the below actions are
         * performed, or, call parent::complete().
         */
        protected function complete()
        {
        }
        /**
         * Schedule cron healthcheck
         *
         * @access public
         * @param mixed $schedules Schedules.
         * @return mixed
         */
        public function schedule_cron_healthcheck($schedules)
        {
        }
        /**
         * Determine the interval
         *
         * Prefer filtered property `cron_interval`,  fallback to filtered
         * hardcoded value
         *
         * @return integer
         */
        protected function determineInterval()
        {
        }
        /**
         * Handle cron healthcheck
         *
         * Restart the background process if not already running
         * and data exists in the queue.
         */
        public function handle_cron_healthcheck()
        {
        }
        /**
         * Schedule event
         */
        protected function schedule_event()
        {
        }
        /**
         * Clear scheduled event
         */
        protected function clear_scheduled_event()
        {
        }
        /**
         * Cancel Process
         *
         * Stop processing queue items, clear cronjob and delete batch.
         *
         */
        public function cancel_process()
        {
        }
        /**
         * Task
         *
         * Override this method to perform any actions required on each
         * queue item. Return the modified item for further processing
         * in the next pass through. Or, return false to remove the
         * item from the queue.
         *
         * @param mixed $item Queue item to iterate over.
         *
         * @return mixed
         */
        protected abstract function task($item);
    }
    final class NF_AJAX_Processes_NullProcess extends \WP_Background_Process
    {
        protected $action = 'nf_null_process';
        protected function task($item)
        {
        }
    }
    final class NF_AJAX_Processes_UpdateFields extends \WP_Background_Process
    {
        protected $action = 'nf_update_fields';
        protected function task($item)
        {
        }
    }
    /**
     * A controller extensions for mapping REST requests to an admin-ajax action.
     */
    abstract class NF_AJAX_REST_Controller extends \NF_Abstracts_Controller
    {
        /**
         * The name of the admin-ajax action.
         * @var string
         */
        protected $action;
        /**
         * Setup admin-ajax to access the endpoint router.
         */
        public function __construct()
        {
        }
        /**
         * Map admin-ajax requests to the corresponding method callback.
         */
        public function route()
        {
        }
        /**
         * [OVERRIDE THIS] Get sanitized request data for use in method callbacks.
         * @return array
         */
        protected function get_request_data()
        {
        }
        /**
         * Returns debugging data when a fatal error is triggered.
         */
        public function shutdown()
        {
        }
    }
    class NF_AJAX_REST_BatchProcess extends \NF_AJAX_REST_Controller
    {
        protected $action = 'nf_batch_process';
        public function __construct()
        {
        }
        /**
         * POST /forms/<id>/
         * @param array $request_data [ int $clone_id ]
         * @return array $data [ int $new_form_id ]
         */
        public function post($request_data)
        {
        }
        protected function get_request_data()
        {
        }
    }
    class NF_AJAX_REST_Forms extends \NF_AJAX_REST_Controller
    {
        protected $action = 'nf_forms';
        private $forms_controller;
        public function __construct()
        {
        }
        /**
         * POST /forms/<id>/
         * @param array $request_data [ int $clone_id ]
         * @return array $data [ int $new_form_id ]
         */
        public function post($request_data)
        {
        }
        /**
         * GET forms/
         * @return array [ $forms ]
         */
        public function get($request_data)
        {
        }
        /**
         * DELETE forms/<id>/
         * @param array $request_data => [ form_id ]
         * @return array $data => [ delete => null ]
         */
        public function delete($request_data)
        {
        }
        /**
         * Form ID, Clone ID
         * @return array $request_data
         */
        protected function get_request_data()
        {
        }
    }
    class NF_AJAX_REST_NewFormTemplates extends \NF_AJAX_REST_Controller
    {
        protected $action = 'nf_new_form_templates';
        /**
         * GET new-form-templates/
         * @return array [ $new_form_templates ]
         */
        public function get()
        {
        }
        /**
         * Comparison function used to sort templates alphabetically by title
         * @since  3.2.22
         * @param  array   $a item being compared
         * @param  array   $b item being compared
         * @return int
         */
        private function cmp($a, $b)
        {
        }
    }
    class NF_AJAX_REST_RequiredUpdate extends \NF_AJAX_REST_Controller
    {
        private $updates = array();
        private $running = array();
        protected $action = 'nf_required_update';
        public function __construct()
        {
        }
        /**
         * POST
         * @param array $request_data [ int $clone_id ]
         * @return array $data [ int $new_form_id ]
         */
        public function post($request_data)
        {
        }
        /**
         * GET
         * @param $request_data (Array)
         * @return $data (Array)
         * 
         * @since 3.4.0
         */
        public function get($request_data)
        {
        }
        protected function get_request_data()
        {
        }
        /**
         * Function to get the list of updates that need to run.
         * 
         * @param $processed (Array) The list of updates that have already run on this install.
         * @return Array
         */
        private function get_current_updates($processed)
        {
        }
        /**
         * Function to sort the updates to be run.
         * 
         * @param $current (Array) The list of updates to be run.
         * @param $previous (Array) The list of updates that have already been run.
         * @return Array
         */
        private function sort_updates($current, $previous)
        {
        }
    }
    final class NF_AJAX_Requests_DeleteField extends \WP_Async_Request
    {
        protected $action = 'nf_delete_field';
        protected function handle()
        {
        }
    }
    final class NF_AJAX_Requests_NullRequest extends \WP_Async_Request
    {
        protected $action = 'nf_null_request';
        protected function handle()
        {
        }
    }
    /**
     * Class NF_Abstracts_Action
     */
    abstract class NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = '';
        /**
         * @var string
         */
        protected $_nicename = '';
        /**
         * @var string
         */
        protected $_section = 'installed';
        /**
         * @var string
         */
        protected $_group = '';
        /**
         * @var string
         */
        protected $_image = '';
        /**
         * @var string
         */
        protected $_documentation_url = '';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_timing = 'normal';
        /** @var int */
        public $timing;
        /**
         * @var int
         */
        protected $_priority = '10';
        /** @var int */
        public $priority;
        /**
         * @var array
         */
        protected $_settings = array();
        /**
         * @var array
         */
        protected $_settings_all = array('label', 'active');
        /**
         * @var array
         */
        protected $_settings_exclude = array();
        /**
         * @var array
         */
        protected $_settings_only = array();
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        //-----------------------------------------------------
        // Public Methods
        //-----------------------------------------------------
        /**
         * Save
         */
        public function save($action_settings)
        {
        }
        /**
         * Process
         */
        public abstract function process($action_id, $form_id, $data);
        /**
         * Get Timing
         *
         * Returns the timing for an action.
         *
         * @return mixed
         */
        public function get_timing()
        {
        }
        /**
         * Get Priority
         *
         * Returns the priority for an action.
         *
         * @return int
         */
        public function get_priority()
        {
        }
        /**
         * Get Name
         *
         * Returns the name of an action.
         *
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Get Nicename
         *
         * Returns the nicename of an action.
         *
         * @return string
         */
        public function get_nicename()
        {
        }
        /**
         * Get Section
         *
         * Returns the drawer section for an action.
         *
         * @return string
         */
        public function get_section()
        {
        }
        /**
         * Get Group
         *
         * Returns the drawer group for an action.
         *
         * @return string
         */
        public function get_group()
        {
        }
        /**
         * Get Image
         *
         * Returns the url of a branded action's image.
         *
         * @return string
         */
        public function get_image()
        {
        }
        /**
         * Get Documentation URL
         *
         * Returns the action's documentation URL.
         *
         * @return string
         */
        public function get_doc_url()
        {
        }
        /**
         * Get Settings
         *
         * Returns the settings for an action.
         *
         * @return array|mixed
         */
        public function get_settings()
        {
        }
        /**
         * Sort Actions
         *
         * A static method for sorting two actions by timing, then priority.
         *
         * @param $a
         * @param $b
         * @return int
         */
        public static function sort_actions($a, $b)
        {
        }
        protected function load_settings($only_settings = array())
        {
        }
    }
    /**
     * Class NF_Abstracts_ActionNewsletter
     */
    abstract class NF_Abstracts_ActionNewsletter extends \NF_Abstracts_Action
    {
        /**
         * @var array
         */
        protected $_tags = array('newsletter');
        /**
         * @var string
         */
        protected $_timing = 'normal';
        /**
         * @var int
         */
        protected $_priority = '10';
        protected $_settings = array();
        protected $_transient = '';
        protected $_transient_expiration = '';
        protected $_setting_labels = array('list' => 'List', 'fields' => 'List Field Mapping', 'groups' => 'Interest Groups');
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        public function process($action_settings, $form_id, $data)
        {
        }
        public function _get_lists()
        {
        }
        /*
         * PROTECTED METHODS
         */
        protected abstract function get_lists();
        /*
         * PRIVATE METHODS
         */
        private function get_list_settings()
        {
        }
        private function cache_lists($lists)
        {
        }
    }
    /**
     * Class NF_Abstracts_Batch_Process
     */
    abstract class NF_Abstracts_BatchProcess
    {
        protected $_db;
        protected $_flag;
        /**
         * Array that holds data we're sending back to the JS front-end.
         * @var array
         */
        protected $response = array('batch_complete' => \false);
        /**
         * Constructor
         */
        public function __construct($data = array())
        {
        }
        /**
         * Decides whether we need to run startup or restart and then calls processing.
         *
         * @since  3.4.0
         * @return void
         */
        public function init()
        {
        }
        /**
         * Function to loop over the batch.
         *
         * @since 3.4.0
         * @return  void
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         *
         * @since 3.4.0
         * @return  void
         */
        public function startup()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing for steps after the first.
         *
         * @since 3.4.0
         * @return  void
         */
        public function restart()
        {
        }
        /**
         * Returns how many steps we have in this process.
         *
         * If this method isn't overwritten by a child, it defaults to 1.
         *
         * @since 3.4.0
         * @return  int
         */
        public function get_steps()
        {
        }
        /**
         * Adds an error to the response object.
         *
         * @param $slug (String) The slug for this error code.
         * @param $msg (String) The error message to be displayed.
         * @param $type (String) warning or fatal, depending on the error.
         *                       Defaults to warning.
         *
         * @since 3.4.11
         */
        public function add_error($slug, $msg, $type = 'warning')
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a batch process after completion.
         *
         * @since 3.4.0
         * @return  void
         */
        public function cleanup()
        {
        }
        /**
         * Method called when we are finished with this process.
         *
         * Deletes our "doing" option.
         * Set's our response 'batch_complete' to true.
         * Runs cleanup().
         * Responds to the JS front-end.
         *
         * @since 3.4.0
         * @return  void
         */
        public function batch_complete()
        {
        }
        /**
         * Method that immediately moves on to the next step.
         *
         * Used in child methods to stop processing the current step an dmove to the next.
         *
         * @since 3.4.0
         * @return  void
         */
        public function next_step()
        {
        }
        /**
         * Method that encodes $this->response and sends the data to the front-end.
         *
         * @since 3.4.0
         * @updated 3.4.11
         * @return  void
         */
        public function respond()
        {
        }
        /**
         * Method to check or modify our processor flag.
         *
         * @since 3.5.0
         * @param $flag (String) The flag to check
         * @param $action (String) The type of interaction to be performed
         * @return Mixed
         */
        public function flag($flag, $action)
        {
        }
    }
    /**
     * Class NF_Abstracts_Element
     */
    abstract class NF_Abstracts_Element
    {
    }
    /*************************************************************/
    /**
     * Class NF_Abstracts_Extension
     */
    final class NF_Abstracts_Extension
    {
        /**
         * @since 3.0
         */
        const VERSION = '';
        /**
         * @var NF_Abstracts_Extension
         * @since 3.0
         */
        private static $instance;
        /**
         * Plugin Directory
         *
         * @since 3.0
         * @var string $dir
         */
        public static $dir = '';
        /**
         * Plugin URL
         *
         * @since 3.0
         * @var string $url
         */
        public static $url = '';
        /**
         * Form Fields
         *
         * @since 3.0
         * @var array
         */
        public $fields = array();
        /**
         * Form Actions
         *
         * @since 3.0
         * @var array
         */
        public $actions = array();
        protected $autoloader_prefix = '';
        /**
         * Main Plugin Instance
         *
         * Insures that only one instance of a plugin class exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         *
         * @since 3.0
         * @static
         * @staticvar array $instance
         * @return Plugin Highlander Instance
         */
        public static function instance()
        {
        }
        public function autoloader($class_name)
        {
        }
    }
    /**
     * Class NF_Abstracts_Field
     */
    abstract class NF_Abstracts_Field extends \NF_Abstracts_Element
    {
        /**
         * @var string
         */
        protected $_name = '';
        /**
         * @var string
         */
        protected $_nicename = '';
        /**
         * @var string
         */
        protected $_section = '';
        /**
         * @var string
         */
        protected $_icon = 'square-o';
        /**
         * @var array
         */
        protected $_aliases = array();
        /**
         * @var array
         */
        protected $_settings = array();
        /**
         * @var array
         */
        protected $_settings_all_fields = array();
        /**
         * @var array
         */
        protected $_settings_exclude = array();
        /**
         * @var array
         */
        protected $_settings_only = array();
        /**
         * @var array
         */
        protected $_use_merge_tags = array('user', 'post', 'system', 'fields');
        /**
         * @var array
         */
        protected $_use_merge_tags_include = array();
        /**
         * @var array
         */
        protected $_use_merge_tags_exclude = array();
        /**
         * @var string
         */
        protected $_test_value = 'test';
        /**
         * @var string
         */
        protected $_attr = '';
        /**
         * @var string
         */
        protected $_type = '';
        /**
         * @var string
         */
        protected $_parent_type = '';
        /**
         * @var string
         */
        public static $_base_template = 'input';
        /**
         * @var array
         */
        protected $_templates = array();
        /**
         * @var string
         */
        protected $_wrap_template = 'wrap';
        /**
         * @var array
         */
        protected $_old_classname = '';
        /**
         * @var bool
         */
        protected $_show_in_builder = \true;
        //-----------------------------------------------------
        // Public Methods
        //-----------------------------------------------------
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Validate
         *
         * @param $field
         * @param $data
         * @return array $errors
         */
        public function validate($field, $data)
        {
        }
        public function process($field, $data)
        {
        }
        /**
         * Admin Form Element
         *
         * Returns the output for editing fields in a submission.
         *
         * @param $id
         * @param $value
         * @return string
         */
        public function admin_form_element($id, $value)
        {
        }
        public function get_name()
        {
        }
        public function get_nicename()
        {
        }
        public function get_section()
        {
        }
        public function get_icon()
        {
        }
        public function get_aliases()
        {
        }
        public function get_type()
        {
        }
        public function get_parent_type()
        {
        }
        public function get_settings()
        {
        }
        public function use_merge_tags()
        {
        }
        public function get_test_value()
        {
        }
        public function get_templates()
        {
        }
        public function get_wrap_template()
        {
        }
        public function get_old_classname()
        {
        }
        public function show_in_builder()
        {
        }
        protected function load_settings($only_settings = array())
        {
        }
        public static function get_base_template()
        {
        }
        public static function sort_by_order($a, $b)
        {
        }
        public function localize_settings($settings, $form_id)
        {
        }
    }
    /**
     * Class NF_Abstracts_Input
     */
    abstract class NF_Abstracts_Input extends \NF_Abstracts_Field
    {
        protected $_name = 'input';
        protected $_section = 'common';
        protected $_type = 'text';
        protected $_settings_all_fields = array('key', 'label', 'label_pos', 'required', 'default', 'placeholder', 'classes', 'input_limit_set', 'manual_key', 'disable_input', 'admin_label', 'help', 'description');
        public function __construct()
        {
        }
        public function get_parent_type()
        {
        }
    }
    /**
     * Class NF_Abstracts_FieldOptIn
     *
     * Opt-In fields should extend this class.
     *
     * Supports:
     * - Checkbox value processing
     *
     * Planned Support:
     * - Single / Multiple Type Opt-In
     */
    abstract class NF_Abstracts_FieldOptIn extends \NF_Abstracts_Input
    {
        protected $_name = 'optin';
        protected $_section = 'misc';
        protected $_parent_type = 'checkbox';
        protected $_templates = 'optin';
        protected $_settings = array('type', 'fieldset', 'checkbox_default_value');
        protected $_settings_exclude = array('default', 'required', 'placeholder', 'input_limit_set', 'disable_input');
        protected $_lists = array();
        public function __construct()
        {
        }
        protected function addList($name, $label)
        {
        }
        protected function addLists(array $lists = array())
        {
        }
        public function get_parent_type()
        {
        }
    }
    /**
     * Class NF_Abstracts_List
     */
    abstract class NF_Abstracts_List extends \NF_Abstracts_Field
    {
        protected $_name = '';
        protected $_section = 'common';
        protected $_type = 'list';
        protected $_test_value = \FALSE;
        protected $_settings_all_fields = array('key', 'label', 'label_pos', 'required', 'options', 'classes', 'admin_label', 'help', 'description');
        public static $_base_template = 'list';
        public function __construct()
        {
        }
        public function get_parent_type()
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        /*
         * Appropriate output for a column cell in submissions list.
         */
        public function custom_columns($value, $field)
        {
        }
        public function query_string_default($options, $settings)
        {
        }
    }
    /**
    * Describes log levels
    */
    class NF_Abstracts_LogLevel
    {
        const EMERGENCY = 'emergency';
        const ALERT = 'alert';
        const CRITICAL = 'critical';
        const ERROR = 'error';
        const WARNING = 'warning';
        const NOTICE = 'notice';
        const INFO = 'info';
        const DEBUG = 'debug';
    }
    /**
    * Describes a logger instance
    *
    * The message MUST be a string or object implementing __toString().
    *
    * The message MAY contain placeholders in the form: {foo} where foo
    * will be replaced by the context data in key "foo".
    *
    * The context array can contain arbitrary data, the only assumption that
    * can be made by implementors is that if an Exception instance is given
    * to produce a stack trace, it MUST be in a key named "exception".
    *
    * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
    * for the full interface specification.
    */
    interface NF_Abstracts_LoggerInterface
    {
        /**
         * System is unusable.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function emergency($message, array $context = array());
        /**
         * Action must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function alert($message, array $context = array());
        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function critical($message, array $context = array());
        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function error($message, array $context = array());
        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function warning($message, array $context = array());
        /**
         * Normal but significant events.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function notice($message, array $context = array());
        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function info($message, array $context = array());
        /**
         * Detailed debug information.
         *
         * @param string $message
         * @param array $context
         * @return null
         */
        public function debug($message, array $context = array());
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         * @return null
         */
        public function log($level, $message, array $context = array());
    }
    /**
     * This is a simple Logger implementation that other Loggers can inherit from.
     *
     * It simply delegates all log-level-specific methods to the `log` method to
     * reduce boilerplate code that a simple Logger that does the same thing with
     * messages regardless of the error level has to implement.
     */
    abstract class NF_Abstracts_Logger implements \NF_Abstracts_LoggerInterface
    {
        /**
         * System is unusable.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function emergency($message, array $context = array())
        {
        }
        /**
         * Action must be taken immediately.
         *
         * Example: Entire website down, database unavailable, etc. This should
         * trigger the SMS alerts and wake you up.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function alert($message, array $context = array())
        {
        }
        /**
         * Critical conditions.
         *
         * Example: Application component unavailable, unexpected exception.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function critical($message, array $context = array())
        {
        }
        /**
         * Runtime errors that do not require immediate action but should typically
         * be logged and monitored.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function error($message, array $context = array())
        {
        }
        /**
         * Exceptional occurrences that are not errors.
         *
         * Example: Use of deprecated APIs, poor use of an API, undesirable things
         * that are not necessarily wrong.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function warning($message, array $context = array())
        {
        }
        /**
         * Normal but significant events.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function notice($message, array $context = array())
        {
        }
        /**
         * Interesting events.
         *
         * Example: User logs in, SQL logs.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function info($message, array $context = array())
        {
        }
        /**
         * Detailed debug information.
         *
         * @param string $message
         * @param array  $context
         *
         * @return null
         */
        public function debug($message, array $context = array())
        {
        }
    }
    /**
     * WordPress Menu Page Base Class
     */
    abstract class NF_Abstracts_Menu
    {
        /**
         * (required) The text to be displayed in the title tags of the page when the menu is selected
         *
         * @var string
         */
        public $page_title = '';
        /**
         * (required) The on-screen name text for the menu
         *
         * @var string
         */
        public $menu_title = '';
        /**
         * (required) The capability required for this menu to be displayed to the user.
         *
         * @var string
         */
        public $capability = 'manage_options';
        /**
         * (required) The slug name to refer to this menu by (should be unique for this menu).
         *
         * @var string
         */
        public $menu_slug = '';
        /**
         * (optional) The function that displays the page content for the menu page.
         *
         * @var string
         */
        public $function = 'display';
        /**
         * (optional) The icon for this menu.
         *
         * @var string
         */
        public $icon_url = '';
        /**
         * (optional) The position in the menu order this menu should appear.
         *
         * @var string
         */
        public $position = \NULL;
        /**
         * Constructor
         *
         * Translate text and add the 'admin_menu' action.
         */
        public function __construct()
        {
        }
        /**
         * Register the menu page.
         */
        public function register()
        {
        }
        public function get_page_title()
        {
        }
        public function get_menu_title()
        {
        }
        public function get_menu_slug()
        {
        }
        public function get_capability()
        {
        }
        /**
         * Display the menu page.
         */
        public abstract function display();
    }
    /**
     * Class NF_Abstracts_MergeTags
     */
    abstract class NF_Abstracts_MergeTags
    {
        protected $id = '';
        protected $title = '';
        protected $merge_tags = array();
        protected $_default_group = \TRUE;
        protected $use_safe = \FALSE;
        public function __construct()
        {
        }
        public function action_replace($subject)
        {
        }
        /**
         * 
         * @param string|array $subject
         * @return string
         */
        public function replace($subject)
        {
        }
        public function get_id()
        {
        }
        public function get_title()
        {
        }
        public function get_merge_tags()
        {
        }
        public function is_default_group()
        {
        }
    }
    abstract class NF_Abstracts_Metabox
    {
        protected $_id = '';
        // Dynamically set in constructor using the class name.
        protected $_title = '';
        // Should be set (and translated) in the constructor.
        protected $_callback = 'render_metabox';
        protected $_post_types = array();
        protected $_context = 'side';
        protected $_priority = 'default';
        protected $_callback_args = array();
        protected $_capability = 'edit_post';
        public function __construct()
        {
        }
        public function add_meta_boxes()
        {
        }
        public abstract function render_metabox($post, $metabox);
        public function _save_post($post_id)
        {
        }
        protected function save_post($post_id)
        {
        }
    }
    abstract class NF_Abstracts_Migration
    {
        public $table_name = '';
        public $charset_collate = '';
        public $flag = '';
        /**
         * Constructor method for the NF_Abstracts_Migration class.
         * 
         * @param $table_name (String) The database table name managed by the extension.
         * @param $flag (String) The wp option set to determine if this migration has already been run.
         * 
         * @since 3.0.0
         */
        public function __construct($table_name, $flag)
        {
        }
        /**
         * Function to retrieve the full table name of the extension.
         * 
         * @return (String) The full table name, including database prefix.
         * 
         * @since 3.0.28
         */
        public function table_name()
        {
        }
        /**
         * Function to check for the existence of a column in the extension's table.
         * 
         * @param $column (String) The name of the column to search for.
         * 
         * @return (Boolean) Whether or not the column exists.
         * 
         * @since 3.4.0
         */
        public function column_exists($column)
        {
        }
        /**
         * Funciton to get the charset and collate for migrations.
         * 
         * @param $use_default (Boolean) Whether or not to include the DEFAULT keyword in the return pattern.
         * 
         * @return (String) A SQL formatted charset and collate for use by table definition.
         * 
         * @since 3.0.28
         * @updated 3.1.14
         */
        public function charset_collate($use_default = \false)
        {
        }
        /**
         * Function to run our required update functions.
         * 
         * @param $callback (String) The function to be run by this call.
         * 
         * @since 3.4.0
         */
        public function _do_upgrade($callback)
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         */
        public function _run()
        {
        }
        /**
         * Abstract protection of inherited funciton run.
         * 
         * @since 3.0.0
         */
        protected abstract function run();
        /**
         * Function to drop the table managed by this migration.
         * 
         * @since 3.0.28
         */
        public function _drop()
        {
        }
        /**
         * Protection of inherited function drop.
         * 
         * @since 3.0.28
         */
        protected function drop()
        {
        }
    }
    /**
     * Class NF_Abstracts_Model
     */
    class NF_Abstracts_Model
    {
        /**
         * Database Object
         *
         * @var string
         */
        protected $_db = '';
        /**
         * ID
         *
         * The ID is assigned after being saved to the database.
         *
         * @var int
         */
        protected $_id = '';
        /**
         * Temporary ID
         *
         * The temporary ID is used to reference unsaved objects
         *   before they are stored in the database.
         *
         * @var string
         */
        protected $_tmp_id = '';
        /**
         * Type
         *
         * The type is used to pragmatically identify the type
         *   of an object without inspecting the class.
         *
         * @var string
         */
        protected $_type = '';
        /**
         * Parent ID
         *
         * The ID of the parent object.
         *
         * @var string
         */
        protected $_parent_id = '';
        /**
         * Parent Type
         *
         * The type of the parent object.
         *
         * @var string
         */
        protected $_parent_type = '';
        /**
         * Table Name
         *
         * The name of the table where the model objects are stored.
         *
         * @var string
         */
        protected $_table_name = '';
        /**
         * Meta Table Name
         *
         * The name of the table where the object settings are stored.
         *
         * @var string
         */
        protected $_meta_table_name = '';
        /**
         * ? Deprecated ?
         * @var string
         */
        protected $_relationships_table = 'nf3_relationships';
        /**
         * Columns
         *
         * A list of settings that are stored in the main table as columns.
         *   These settings are NOT stored in the meta table.
         *
         * @var array
         */
        protected $_columns = array();
        /**
         * Settings
         *
         * A list of settings that are stored in the meta table.
         *
         * @var array
         */
        protected $_settings = array();
        /**
         * Results
         *
         * The last results returned by a query.
         *
         * @var array
         */
        protected $_results = array();
        /**
         * Cache
         *
         * A Flag for using or bypassing caching.
         *
         * @var bool
         */
        protected $_cache = \TRUE;
        /**
         * A Flag for testing whether or not we've completed stage 1 of our db.
         * 
         * @var boolean
         */
        private $db_stage_1_complete = \TRUE;
        //-----------------------------------------------------
        // Public Methods
        //-----------------------------------------------------
        /**
         * NF_Abstracts_Model constructor.
         *
         * @param $db
         * @param $id
         * @param $parent_id
         */
        public function __construct($db, $id = \NULL, $parent_id = '')
        {
        }
        /**
         * Get the Permanent ID
         *
         * @return int
         */
        public function get_id()
        {
        }
        /**
         * Get the Temporary ID
         *
         * @return null|string
         */
        public function get_tmp_id()
        {
        }
        /**
         * Get the Type
         *
         * @return string
         */
        public function get_type()
        {
        }
        /**
         * Get a single setting with a default fallback
         *
         * @param string $setting
         * @param bool $default optional
         * @return string|int|bool
         */
        public function get_setting($setting, $default = \FALSE)
        {
        }
        /**
         * Get Settings
         *
         * @param string ...$only returns a subset of the object's settings
         * @return array
         */
        public function get_settings()
        {
        }
        /**
         * Update Setting
         *
         * @param $key
         * @param $value
         * @return bool|false|int
         */
        public function update_setting($key, $value)
        {
        }
        /**
         * Update Settings
         *
         * @param $data
         * @return bool
         */
        public function update_settings($data)
        {
        }
        /**
         * Delete
         *
         * Delete the object, its children, and its relationships.
         *
         * @return bool
         */
        public function delete()
        {
        }
        /**
         * Find
         *
         * @param string $parent_id
         * @param array $where
         * @return array
         */
        public function find($parent_id = '', array $where = array())
        {
        }
        public function get_object_settings($obj_array)
        {
        }
        /*
         * UTILITY METHODS
         */
        /**
         * Save
         */
        public function save()
        {
        }
        public function _insert_row($data = array())
        {
        }
        /**
         * Cache Flag
         *
         * @param string $cache
         * @return $this
         */
        public function cache($cache = '')
        {
        }
        /**
         * Add Parent
         *
         * Set the Parent ID and Parent Type properties
         *
         * @param $parent_id
         * @param $parent_type
         * @return $this
         */
        public function add_parent($parent_id, $parent_type)
        {
        }
        //-----------------------------------------------------
        // Protected Methods
        //-----------------------------------------------------
        /**
         * Save Setting
         *
         * Save a single setting.
         *
         * @param $key
         * @param $value
         * @return bool|false|int
         */
        protected function _save_setting($key, $value)
        {
        }
        /**
         * Save Settings
         *
         * Save all settings.
         *
         * @return bool
         */
        protected function _save_settings()
        {
        }
        /**
         * Save Parent Relationship
         *
         * @return $this
         */
        protected function _save_parent_relationship()
        {
        }
        /**
         * Build Meta Query
         *
         * @param string $parent_id
         * @param array $where
         * @return string
         */
        protected function build_meta_query($parent_id = '', array $where = array())
        {
        }
    }
    /**
     * Class NF_Abstracts_ModelFactory
     */
    class NF_Abstracts_ModelFactory
    {
        /**
         * Database Object
         *
         * @var
         */
        protected $_db;
        /**
         * The last set object.
         *   Used to create context between two objects in a chain.
         *
         * @var object
         */
        protected $_object;
        /**
         * Form
         */
        protected $_form;
        /**
         * Fields
         *
         * An array of field model objects.
         *
         * @var array
         */
        protected $_fields = array();
        /**
         * Actions
         *
         * An array of action model objects.
         *
         * @var array
         */
        protected $_actions = array();
        /**
         * Objects
         *
         * An array of generic model objects.
         *
         * @var array
         */
        protected $_objects = array();
        //-----------------------------------------------------
        // Public Methods
        //-----------------------------------------------------
        /**
         * NF_Abstracts_ModelFactory constructor.
         * @param $db
         * @param $id
         */
        public function __construct($db, $id)
        {
        }
        /**
         * PHP MAGIC method for catching undefined methods.
         * Use this as a passthrough for methods of the form model.
         * 
         * @param $method (String) The name of the called method.
         * @param $args (Array) The arguments supplied to the method.
         * 
         * @return (Mixed) Will match the return type of the supplied method.
         * 
         * @since UPDATE_VERSION_ON_MERGE
         */
        public function __call($method, $args)
        {
        }
        /**
         * Returns the parent object set by the constructor for chained methods.
         *
         * @return object
         */
        public function get()
        {
        }
        /**
         * Get Forms
         *
         * Returns an array of Form Model Objects.
         *
         * @param array $where
         * @return array|bool
         */
        public function get_forms(array $where = array())
        {
        }
        /**
         * Export Form
         *
         * A wrapper for the Form Model export method.
         *
         * @param bool|FALSE $return
         * @return array
         */
        public function export_form($return = \FALSE)
        {
        }
        /**
         * Import Form
         *
         * A wrapper for the Form Model import method.
         *
         * @param $import
         * @param $decode_utf8
         * @param $id
         * @param $is_conversion
         */
        public function import_form($import, $decode_utf8 = \TRUE, $id = \FALSE, $is_conversion = \FALSE)
        {
        }
        /*
         * FIELDS
         */
        /**
         * Sets the parent object for chained methods as a Field.
         *
         * @param string $id
         * @return $this
         */
        public function field($id = '')
        {
        }
        /**
         * Returns a field object.
         *
         * @param $id
         * @return NF_Database_Models_Field
         */
        public function get_field($id)
        {
        }
        /**
         * Returns an array of field objects for the set form (object).
         *
         * @param array $where
         * @param bool|FALSE $fresh
         * @return array
         */
        public function get_fields($where = array(), $fresh = \FALSE)
        {
        }
        /**
         * Import Field
         *
         * A wrapper for the Form Model import method.
         *
         * @param $import
         */
        public function import_field($settings, $field_id = '', $is_conversion = \FALSE)
        {
        }
        /*
         * ACTIONS
         */
        /**
         * Sets the parent object for chained methods as an Action.
         *
         * @param string $id
         * @return $this
         */
        public function action($id = '')
        {
        }
        /**
         * Returns an action object.
         *
         * @param $id
         * @return NF_Database_Models_Action
         */
        public function get_action($id)
        {
        }
        /**
         * Returns an array of action objects for the set form (object).
         *
         * @param array $where
         * @param bool|FALSE $fresh
         * @return array
         */
        public function get_actions($where = array(), $fresh = \FALSE)
        {
        }
        /*
         * OBJECTS
         */
        /**
         * Sets the parent object for chained methods as an Object.
         *
         * @param string $id
         * @return $this
         */
        public function object($id = '')
        {
        }
        /**
         * Returns an object.
         *
         * @param $id
         * @return NF_Database_Models_Object
         */
        public function get_object($id)
        {
        }
        /**
         * Returns an array of objects for the set object.
         *
         * @param array $where
         * @param bool|FALSE $fresh
         * @return array
         */
        public function get_objects($where = array(), $fresh = \FALSE)
        {
        }
        /*
         * SUBMISSIONS
         */
        /**
         * Submission
         *
         * Returns a single submission by ID,
         *   or an empty submission.
         *
         * @param string $id
         * @return $this
         */
        public function sub($id = '')
        {
        }
        /**
         * Get Submission
         *
         * Returns a single submission by ID.
         *
         * @param $id
         * @return NF_Database_Models_Submission
         */
        public function get_sub($id)
        {
        }
        /**
         * Get Submissions
         *
         * Returns an array of Submission Model Objects.
         *
         * @param array $where
         * @param bool|FALSE $fresh
         * @return array
         */
        public function get_subs($where = array(), $fresh = \FALSE, $sub_ids = array())
        {
        }
        /**
         * Export Submissions
         *
         * A wrapper for the Submission Model export method.
         *
         * @param array $sub_ids
         * @param bool|FALSE $return
         * @return string
         */
        public function export_subs(array $sub_ids = array(), $return = \FALSE)
        {
        }
        /*
         * GENERIC
         */
        /**
         * Get Model
         *
         * A generic method call for any object model type.
         *
         * @param $id
         * @param $type
         * @return bool|NF_Database_Models_Action|NF_Database_Models_Field|NF_Database_Models_Form|NF_Database_Models_Object
         */
        public function get_model($id, $type)
        {
        }
    }
    /**
     * Class NF_Abstracts_PaymentGateway
     */
    abstract class NF_Abstracts_PaymentGateway
    {
        protected $_slug = '';
        protected $_name = '';
        protected $_settings = array();
        public function __construct()
        {
        }
        public function get_slug()
        {
        }
        public function get_name()
        {
        }
        public function get_settings()
        {
        }
        public function _process($action_settings, $form_id, $data)
        {
        }
        protected abstract function process($action_settings, $form_id, $data);
    }
    /**
     * Class NF_Abstracts_RequiredUpdate
     */
    abstract class NF_Abstracts_RequiredUpdate
    {
        protected $_slug = '';
        protected $_requires = array();
        protected $_class_name = '';
        protected $db;
        public $response = array();
        public $debug = \false;
        public $lock_process = \false;
        /**
         * Constructor
         * 
         * @since 3.4.0
         */
        public function __construct($data = array())
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of required updates after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * Function to dump our JSON response and kill processing.
         * 
         * @since 3.4.0
         */
        public function respond()
        {
        }
        /**
         * Function to run our table migrations.
         * 
         * @param $callback (String) The callback function in the migration file.
         * 
         * @since 3.4.0
         */
        protected function migrate($callback)
        {
        }
        /**
         * Function to prepare our query values for insert.
         * 
         * @param $value (Mixed) The value to be escaped for SQL.
         * @return (String) The escaped (and possibly serialized) value of the string.
         * 
         * @since 3.4.0
         */
        public function prepare($value)
        {
        }
        /**
         * Function used to call queries that are gated by debug.
         * 
         * @param $sql (String) The query to be run.
         * @return (Object) The response to the wpdb query call.
         * 
         * @since 3.4.0
         */
        protected function query($sql)
        {
        }
        /**
         * Function to record the completion of our update in the DB.
         * 
         * @since 3.4.0
         */
        protected function confirm_complete()
        {
        }
        /**
         * Enable Maintenance mode
         * Enables maintenance mode so the form will not render on the front end while updates are running.
         *
         * @since 3.4.0
         *
         * @param $prefix - the db prefix.
         * @param $form_id - The id of the form.
         */
        public function enable_maintenance_mode($prefix, $form_id)
        {
        }
        /**
         * Disable Maintenance Mode
         * Disables maintenance mode, so the form will be displayed on the front end..
         *
         * @since 3.4.0
         *
         * @param $prefix - the db prefix.
         * @param $form_id - The id of the form.
         */
        public function disable_maintenance_mode($prefix, $form_id)
        {
        }
    }
    /**
     * Class NF_Abstracts_Routes
     */
    abstract class NF_Abstracts_Routes
    {
        /**
         * Register the API routes
         *
         *  @since 3.4.33
         */
        public function __construct()
        {
        }
        /**
         * Register Routes
         */
        public abstract function register_routes();
    }
    /**
     * WordPress Menu Page Base Class
     */
    abstract class NF_Abstracts_Submenu
    {
        /**
         * (required) The slug name for the parent menu (or the file name of a standard WordPress admin page)
         *
         * @var string
         */
        public $parent_slug = '';
        /**
         * (required) The text to be displayed in the title tags of the page when the menu is selected
         *
         * @var string
         */
        public $page_title = '';
        /**
         * (required) The on-screen name text for the menu
         *
         * @var string
         */
        public $menu_title = '';
        /**
         * (required) The capability required for this menu to be displayed to the user.
         *
         * @var string
         */
        public $capability = 'manage_options';
        /**
         * (required) The slug name to refer to this menu by (should be unique for this menu).
         *
         * @var string
         */
        public $menu_slug = '';
        /**
         * (optional) The function that displays the page content for the menu page.
         *
         * @var string
         */
        public $function = 'display';
        /**
         * (Optional) The position in the menu order this item should appear.
         * 
         * @var int
         */
        public $position = \NULL;
        /**
         * Used to specify the order in which the submenu is registered on the admin_menu hook.
         * This is not the submenu position passed to add_submenu_page
         * 
         * @var int
         */
        public $priority = 10;
        /**
         * Constructor
         *
         * Translate text and add the 'admin_menu' action.
         */
        public function __construct()
        {
        }
        /**
         * Register the menu page.
         */
        public function register()
        {
        }
        public function get_page_title()
        {
        }
        public function get_menu_title()
        {
        }
        public function get_menu_slug()
        {
        }
        public function get_capability()
        {
        }
        /**
         * Display the menu page.
         */
        public abstract function display();
    }
}
namespace NinjaForms\Includes\Contracts {
    /**
     * Contract to perform actions on a Single Submission
     *
     * Used on the Submissions Page, these handlers provide a standard means for
     * registering additional actions to be performed on a single submission.  For
     * example, PDF Submissions would register a handler that receives the
     * submission and export a PDF
     */
    interface SubmissionHandler
    {
        /**
         * Return an identifying slug for the handler
         * @return string 
         */
        public function getSlug() : string;
        /**
         * Return a label for the handler
         * @return string 
         */
        public function getLabel() : string;
        /**
         * Return class name of SubmissionHandler
         * @return string 
         */
        public function getHandlerClassName() : string;
        /**
         * Perform action on a single submission
         *
         * @param SingleSubmission $singleSubmission
         * @return void
         */
        public function handle(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : array;
        /**
         * Returns downloadable
         * 
         * @return string 
         */
        public function getDownload() : string;
    }
}
namespace NinjaForms\Includes\Abstracts {
    /**
     * Abstract class implementing SubmissionHandler
     *
     * Child class sets responseType, download, blobType, filename
     *
     * $this->responseType can be 'none' or 'download'.  'none' means that some
     * action is performed but there is no returned data to be downloaded.
     * 'download' means that there is data to be downloaded, such as a PDF or CSV.
     *
     * $this->download is the data that is to be downloaded
     *
     * $this->blobType is the application type of the download, instructing the
     * fetch command the format of the downloadable data
     *
     * $this->result is a summary message for the request, usually 'ok'  or a
     * failure message
     */
    abstract class SubmissionHandler implements \NinjaForms\Includes\Contracts\SubmissionHandler
    {
        /**
         * camelCase slug of class
         */
        protected $slug = '';
        /**
         * Response can be 'none' or `download`
         */
        protected $responseType = 'none';
        /**
         * Result of request (usu. 'ok' or failure message)
         *
         * @var string
         */
        protected $result = '';
        /**
         * Base 64 encoded downloadable string
         *
         * @var string
         */
        protected $download = '';
        /**
         * Application type of download (for constructing download)
         */
        protected $blobType = '';
        /**
         * Filename of the download, including file extension
         *
         * @var string
         */
        protected $filename = '';
        /**
         * Label for single row command
         *
         * @var string
         */
        protected $label;
        /**
         * Registers command to export single submission as PDF
         * @return void 
         */
        public function __construct()
        {
        }
        /**
         * Construct translatable label property
         *
         * @return void
         */
        protected abstract function constructLabel() : void;
        public function addSubmissionHandler(array $handlerCollection, ?\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : array
        {
        }
        /**
         * Determine if handler is added to submission row
         *
         * @param SingleSubmission $singleSubmission
         * @return boolean
         */
        protected abstract function doesAddHandler(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : bool;
        /**
         * Perform extra handler action on a single submission
         *
         * @param SingleSubmission $singleSubmission
         * @return array
         */
        public function handle(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : array
        {
        }
        /**
         * Perform functionality on submission, update properties for return
         *
         * @param SingleSubmission $singleSubmission
         * @return void
         */
        protected abstract function handleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : void;
        /**
         * Returns payload for download
         * 
         * @return string 
         */
        public function getDownload() : string
        {
        }
        /**
         * Return an identifying slug for the handler
         * @return string 
         */
        public function getSlug() : string
        {
        }
        /**
         * Return a label for the handler
         * @return string 
         */
        public function getLabel() : string
        {
        }
        /**
         * Return class name of SubmissionHandler
         * @return string 
         */
        public abstract function getHandlerClassName() : string;
    }
}
namespace {
    abstract class NF_Abstracts_SubmissionMetabox extends \NF_Abstracts_Metabox
    {
        /**
         * @var array
         */
        protected $_post_types = array('nf_sub');
        /**
         * @var NF_Database_Models_Submission
         */
        protected $sub;
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Field_Textbox
     */
    class NF_Fields_Textbox extends \NF_Abstracts_Input
    {
        protected $_name = 'textbox';
        protected $_section = 'common';
        protected $_icon = 'text-width';
        protected $_aliases = array('input');
        protected $_type = 'textbox';
        protected $_templates = 'textbox';
        protected $_test_value = 'Lorem ipsum';
        protected $_settings = array('disable_browser_autocomplete', 'mask', 'custom_mask', 'custom_name_attribute', 'personally_identifiable');
        public function __construct()
        {
        }
        public function filter_csv_value($field_value, $field)
        {
        }
    }
    /**
     * Class NF_Abstracts_UserInfo
     */
    abstract class NF_Abstracts_UserInfo extends \NF_Fields_Textbox
    {
        protected $_name = 'input';
        protected $_section = 'userinfo';
        protected $_type = 'textbox';
        public static $_base_template = 'textbox';
        public function __construct()
        {
        }
        public abstract function filter_default_value($default_value, $field_class, $settings);
    }
    /**
     * Class NF_Actions_Akismet
     */
    final class NF_Actions_Akismet extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'akismet';
        /**
         * @var array
         */
        protected $_tags = array('spam', 'filtering', 'akismet');
        /**
         * @var string
         */
        protected $_timing = 'normal';
        /**
         * @var int
         */
        protected $_priority = '10';
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove the action registration if Akismet functions not available.
         *
         * @param array $action_type_settings
         *
         * @return array
         */
        public function maybe_remove_action($action_type_settings)
        {
        }
        /**
         * Is Akismet installed and connected with a valid key?
         *
         * @return bool
         */
        protected function akismet_available()
        {
        }
        /**
         * Process the action
         *
         * @param array $action_settings
         * @param int   $form_id
         * @param array $data
         *
         * @return array
         */
        public function process($action_settings, $form_id, $data)
        {
        }
        /**
         * Verify submission
         *
         * @param $name
         * @param $email
         * @param $url
         * @param $message
         *
         * @return bool
         */
        protected function is_submission_spam($name, $email, $url, $message)
        {
        }
    }
    /**
     * Class NF_Action_CollectPayment
     */
    final class NF_Actions_CollectPayment extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'collectpayment';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = 0;
        /**
         * @var array
         */
        protected $payment_gateways = array();
        /**
         * Constructor
         *
         * @param string $cp_nice_name
         * @param string $cp_name
         */
        public function __construct($cp_nice_name = 'Collect Payment', $cp_name = 'collectpayment')
        {
        }
        public function save($action_settings)
        {
        }
        public function process($action_settings, $form_id, $data)
        {
        }
        public function register_payment_gateways()
        {
        }
        public function maybe_remove_action($action_type_settings)
        {
        }
    }
    /**
     * Class NF_Action_Custom
     */
    final class NF_Actions_Custom extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'custom';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/wp-hook/';
        /**
         * @var string
         */
        protected $_timing = 'normal';
        /**
         * @var int
         */
        protected $_priority = 10;
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        public function process($action_settings, $form_id, $data)
        {
        }
    }
    /**
     * Class NF_Actions_DataRemoval
     */
    final class NF_Actions_DeleteDataRequest extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'deletedatarequest';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/delete-data-request-action/';
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = 10;
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        /**
         * Creates a Erase Personal Data request for the user with the email
         * provided
         *
         * @param $action_settings
         * @param $form_id
         * @param $data
         *
         * @return array
         */
        public function process($action_settings, $form_id, $data)
        {
        }
    }
    /**
     * Class NF_Action_Email
     */
    final class NF_Actions_Email extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'email';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/email/';
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = 10;
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function process($action_settings, $form_id, $data)
        {
        }
        /**
         * Sanitizes email address settings
         * @since 3.2.2
         *
         * @param  array $action_settings
         * @return array
         */
        protected function sanitize_address_fields($action_settings)
        {
        }
        protected function check_for_errors($action_settings)
        {
        }
        private function _get_headers($settings)
        {
        }
        private function _get_attachments($settings, $data)
        {
        }
        private function _format_from($settings)
        {
        }
        private function _format_recipients($settings)
        {
        }
        private function _format_recipient($type, $email, $name = '')
        {
        }
        private function _create_csv($fields)
        {
        }
        /**
         * Function to delete csv file from temp directory after Email Action has completed.
         */
        private function _drop_csv()
        {
        }
        /*
         * Backwards Compatibility
         */
        private function _backwards_compatibility()
        {
        }
        public function ninja_forms_sub_csv_delimiter($delimiter)
        {
        }
        public function ninja_sub_csv_enclosure($enclosure)
        {
        }
        public function ninja_sub_csv_terminator($terminator)
        {
        }
        public function ninja_forms_action_email_attachments($attachments, $form_data, $action_settings)
        {
        }
        private function format_plain_text_message($message)
        {
        }
    }
    /**
     * Class NF_Actions_ExportPersonalData
     */
    final class NF_Actions_ExportDataRequest extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'exportdatarequest';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/export-data-request-action/';
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = 10;
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        /**
         * Creates a Export Personal Data request for the user with the email
         * provided
         *
         * @param $action_settings
         * @param $form_id
         * @param $data
         *
         * @return array
         */
        public function process($action_settings, $form_id, $data)
        {
        }
    }
    /**
     * Class NF_Actions_Recaptcha
     */
    final class NF_Actions_Recaptcha extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'recaptcha';
        /**
         * @var array
         */
        protected $_tags = array('spam', 'filtering', 'recaptcha');
        /**
         * @var string
         */
        protected $_timing = 'normal';
        /**
         * @var int
         */
        protected $_priority = '10';
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * @var string
         */
        protected $site_key;
        /**
         * @var string
         */
        protected $site_secret;
        /**
         * @var int
         */
        protected $form_id;
        /**
         * @var array
         */
        protected $forms_with_action;
        /**
         * @var array
         */
        protected $_settings_exclude = array('conditions');
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Setter method for the form_id and callback for the nf_get_form_id action.
         * @since 3.2.2
         *
         * @param string $form_id The ID of the current form.
         * @return void
         */
        public function set_form_id($form_id)
        {
        }
        public function get_form_id()
        {
        }
        /**
         * Remove the action registration if Akismet functions not available.
         *
         * @param array $action_type_settings
         *
         * @return array
         */
        public function maybe_remove_action($action_type_settings)
        {
        }
        /**
         * @return bool
         */
        protected function is_action_enabled_for_form()
        {
        }
        /**
         * Is the reCAPTCHA configured correctly
         *
         * @return bool
         */
        protected function is_recaptcha_configured()
        {
        }
        /**
         * Is the reCAPTCHA action enabled
         *
         * @return bool
         */
        protected function is_action_configured()
        {
        }
        public function maybe_output_field_template()
        {
        }
        protected function get_field_id_hash($form_id)
        {
        }
        /**
         * Remove v2 reCAPTCHA fields if still configured, when using the v3 Action
         *
         * @param array $fields
         *
         * @return array
         */
        public function maybe_remove_v2_field($fields)
        {
        }
        /**
         * Don't show the v2 reCAPTCHA field in the builder when using the v3 Action
         *
         * @param bool               $show
         * @param NF_Abstracts_Field $field
         *
         * @return bool
         */
        public function maybe_remove_v2_field_from_builder($show, $field)
        {
        }
        /**
         * @param array $fields
         * @param int $form_id
         *
         * @return array
         */
        public function maybe_inject_field($fields, $form_id)
        {
        }
        public function enqueue_script()
        {
        }
        /**
         * Check to not load the Google reCAPTCHA JS if other plugins are doing it
         * 
         * @return bool
         */
        protected function maybe_enqueue_recaptcha_js()
        {
        }
        protected function get_form_data()
        {
        }
        protected function get_recaptcha_response()
        {
        }
        /**
         * Process the action
         *
         * @param array $action_settings
         * @param int   $form_id
         * @param array $data
         *
         * @return array
         */
        public function process($action_settings, $form_id, $data)
        {
        }
        protected function is_submission_human($token, $score_threshold)
        {
        }
    }
    /**
     * Class NF_Action_Redirect
     */
    final class NF_Actions_Redirect extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'redirect';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/redirect-action/';
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = 20;
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        public function process($action_settings, $form_id, $data)
        {
        }
    }
    /**
     * Class NF_Action_Save
     */
    class NF_Actions_Save extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'save';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/record-submission-action/';
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = '-1';
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        /**
         * Submission Expiration Processing
         * Decides if the submission expiration data should be added to the
         * submission expiration option or not.
         *
         * @param $action_settings - array.
         * @param $form_id - ( int ) The ID of the Form.
         *
         * @return void
         */
        public function submission_expiration_processing($action_settings, $form_id)
        {
        }
        /**
         * Retrieve a stored option
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         */
        protected function getOption(string $key, $default)
        {
        }
        /**
         * Update a stored value in option table
         *
         * @param string $key
         * @param mixed $value
         * @return void
         */
        protected function updateOption(string $key, $value) : void
        {
        }
        /**
         * Compare Expiration Option
         * Accepts $expiration_data and checks to see if the values already exist in the array.
         * This allows to resave the option with new cron interval if it is set and just remove the form from the option if it is not set
         * @since 3.6.35
         *
         * @param string $expiration_value - key/value pair
         *      $expiration_value[ 'form_id' ]      = form_id(int)
         *      $expiration_value[ 'expire_time' ]  = subs_expire_time(int)
         * @param array $expiration_option - list of key/value pairs of the expiration options.
         *
         * @return array $expiration_option without current saved form 
         */
        public function clean_form_option($expiration_value, $expiration_option)
        {
        }
        public function process($action_settings, $form_id, $data)
        {
        }
        /**
         * Ensure extra data is valid
         * 
         * 1. Ensure that extra data is array
         * 2. Check that count of extra data is within allowed limit
         * 3. If count exceeds limit, consolidate data into single value
         *
         * The purpose of 'extraDataOverflowOnSave' is to attempt to store the data submitted in the case that the data truly is valid, but an add-on is storing too many values as individually keyed.  It has the added benefit of providing insight on the nature of an attack should that be the case instead of an errant add-on.
         * 
         * @param array $dataExtra
         * @param int $form_id
         * @return array
         */
        protected function validateExtraData($dataExtra, $form_id) : array
        {
        }
    }
    /**
     * Class NF_Action_SuccessMessage
     */
    final class NF_Actions_SuccessMessage extends \NF_Abstracts_Action
    {
        /**
         * @var string
         */
        protected $_name = 'successmessage';
        /**
         * @var array
         */
        protected $_tags = array();
        /**
         * @var string
         */
        protected $_documentation_url = 'https://ninjaforms.com/docs/success-message/';
        /**
         * @var string
         */
        protected $_timing = 'late';
        /**
         * @var int
         */
        protected $_priority = 10;
        /**
         * @var string
         */
        protected $_group = 'core';
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /*
         * PUBLIC METHODS
         */
        public function save($action_settings)
        {
        }
        public function process($action_settings, $form_id, $data)
        {
        }
        public function import_form_action_success_message($import)
        {
        }
    }
    class NF_Adapters_SubmissionsFields implements \ArrayAccess, \Iterator
    {
        protected $fields;
        protected $fields_by_key = [];
        public function __construct($fields, $form_id)
        {
        }
        public function get_value($id)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | ArrayAccess
        |--------------------------------------------------------------------------
        */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $value)
        {
        }
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Iterator
        |--------------------------------------------------------------------------
        */
        #[\ReturnTypeWillChange]
        public function key()
        {
        }
        #[\ReturnTypeWillChange]
        public function current()
        {
        }
        #[\ReturnTypeWillChange]
        public function next()
        {
        }
        #[\ReturnTypeWillChange]
        public function rewind()
        {
        }
        #[\ReturnTypeWillChange]
        public function valid()
        {
        }
    }
    // namespace NinjaForms\Pdf\Adapters;
    final class NF_Adapters_SubmissionsSubmission extends \NF_Adapters_SubmissionsFields
    {
        protected $fields;
        protected $submission;
        public function __construct($fields, $form_id, $submission)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | ArrayAccess
        |--------------------------------------------------------------------------
        */
        public function offsetExists($offset)
        {
        }
        public function offsetGet($offset)
        {
        }
        protected function offsetMaybeCreate($offset)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Iterator
        |--------------------------------------------------------------------------
        */
        public function current()
        {
        }
    }
    /**
     * Add a button to tinyMCE editors when eidting posts/pages.
     *
     * @since 2.9.22
     */
    class NF_Admin_AddFormModal
    {
        function __construct()
        {
        }
        /**
         * Output our tinyMCE field buttons
         *
         * @access public
         * @since 2.8
         * @return void
         */
        public function insert_form_tinymce_buttons($context)
        {
        }
        /**
         * Output our tinyMCE field buttons
         *
         * @access public
         * @since 2.8
         * @return void
         */
        public function output_tinymce_button_js($context)
        {
        }
    }
    class NF_Admin_AllFormsTable extends \WP_List_Table
    {
        /** Class constructor */
        public function __construct()
        {
        }
        public function no_items()
        {
        }
        /**
         * Prepare the items for the table to process
         *
         * @return Void
         */
        public function prepare_items()
        {
        }
        /**
         * Override the parent columns method. Defines the columns to use in your listing table
         *
         * @return Array
         */
        public function get_columns()
        {
        }
        /**
         * Define which columns are hidden
         *
         * @return Array
         */
        public function get_hidden_columns()
        {
        }
        /**
         * Define the sortable columns
         *
         * @return Array
         */
        public function get_sortable_columns()
        {
        }
        /**
         * Get the table data
         *
         * @return Array
         */
        private function table_data()
        {
        }
        /**
         * Define what data to show on each column of the table
         *
         * @param  Array $item        Data
         * @param  String $column_name - Current column name
         *
         * @return Mixed
         */
        public function column_default($item, $column_name)
        {
        }
        /**
         * Allows you to sort the data by the variables set in the $_GET
         *
         * @return Mixed
         */
        private function sort_data($a, $b)
        {
        }
        function column_cb($item)
        {
        }
        function column_title($item)
        {
        }
        public function single_row($item)
        {
        }
        /**
         * Returns an associative array containing the bulk action
         *
         * @return array
         */
        public function get_bulk_actions()
        {
        }
        public static function process_bulk_action()
        {
        }
        public static function delete_item($id)
        {
        }
    }
    /**
     * Class for performing actions incrementally. Internally used for converting submissions, exporting submissions, etc.
     * Very useful when interacting with large amounts of data.
     *
     * @package     Ninja Forms
     * @subpackage  Classes/Step Processing
     * @copyright   Copyright (c) 2014, WPNINJAS
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       2.7.4
     */
    abstract class NF_Step_Processing
    {
        /**
         * @var action
         */
        var $action = '';
        /**
         * @var step
         */
        var $step = '';
        /**
         * @var total_steps
         */
        var $total_steps = '';
        /**
         * @var redirect
         */
        var $redirect = '';
        /**
         * @var array
         */
        var $errors = array();
        /**
         * @var args
         */
        var $args = array();
        /**
         * Get things rolling
         *
         * @since 2.7.4
         * @return void
         */
        function __construct()
        {
        }
        /**
         * Process our request.
         * Call the appropriate loading or step functions.
         *
         * @since 2.7.6
         * @return void
         */
        public function processing()
        {
        }
        /**
         * Should processing continue?
         *
         * @return boolean
         */
        protected abstract function allowProcessing() : bool;
        /**
         * Run our loading process.
         * This function should be overwritten in child classes.
         *
         * @since 2.7.4
         * @return array $args
         */
        public function loading()
        {
        }
        /**
         * This function is called for every step.
         * This function should be overwritten in child classes.
         *
         * @since 2.7.4
         * @return array $args
         */
        public function step()
        {
        }
        /**
         * This function is called for every step.
         * This function should be overwritten in child classes.
         *
         * @since 2.7.4
         * @return array $args
         */
        public function complete()
        {
        }
    }
    class NF_Admin_CPT_DownloadAllSubmissions extends \NF_Step_Processing
    {
        function __construct()
        {
        }
        protected function allowProcessing() : bool
        {
        }
        public function loading()
        {
        }
        public function step()
        {
        }
        public function complete()
        {
        }
        /**
         * Add an integar to the end of our filename to make sure it is unique
         *
         * @access public
         * @since 2.7.6
         * @return $filename
         */
        public function random_filename($filename)
        {
        }
        public function bulk_admin_footer()
        {
        }
        function get_sub_count($form_id, $post_status = 'publish')
        {
        }
    }
    /**
     * Class NF_Admin_CPT_Submission
     */
    class NF_Admin_CPT_Submission
    {
        protected $cpt_slug = 'nf_sub';
        public $screen_options;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Custom Post Type
         */
        function custom_post_type()
        {
        }
        public function nf_trash_sub($post_id)
        {
        }
        public function enqueue_scripts()
        {
        }
        public function post_row_actions($actions, $sub)
        {
        }
        public function change_columns($columns)
        {
        }
        public function custom_columns($column, $sub_id)
        {
        }
        public function save_nf_sub($nf_sub_id, $nf_sub)
        {
        }
        /**
         * Meta Boxes
         */
        public function add_meta_boxes($post_type)
        {
        }
        /**
         * Fields Meta Box
         *
         * @param $post
         */
        public function fields_meta_box($post)
        {
        }
        public static function sort_fields($a, $b)
        {
        }
        /**
         * Info Meta Box
         *
         * @param $post
         */
        public function info_meta_box($post)
        {
        }
        /**
         * Remove Meta Boxes
         */
        public function remove_meta_boxes()
        {
        }
        public function cap_filter($allcaps, $cap, $args)
        {
        }
        /**
         * Filter our hidden columns so that they are handled on a per-form basis.
         *
         * @access public
         * @since 2.7
         * @return void
         */
        public function filter_hidden_columns()
        {
        }
        /**
         * Convert Hidden Columns
         * Looks for 2.9.x hidden columns formatting and converts it to the formatting 3.0 expects.
         * @param $form_id
         * @param $hidden_columns
         * @return mixed
         */
        private function convert_hidden_columns($form_id, $hidden_columns)
        {
        }
        /**
         * Save our hidden columns per form id.
         *
         * @access public
         * @since 2.7
         * @return void
         */
        public function hide_columns()
        {
        }
        /*
         * PRIVATE METHODS
         */
        private function not_found_message()
        {
        }
    }
    /**
     * Update the admin footer text for
     * Ninja Forms pages
     *
     * @since 3.6.12
     */
    class NF_Admin_FooterMessage
    {
        /**
         *
         */
        public function __construct()
        {
        }
        /**
         * Changes the admin footer text
         *
         * Adds Ninja Forms review request.
         *
         * @return String
         */
        public function nf_admin_footer_text()
        {
        }
    }
}
namespace NinjaForms\Includes\Admin {
    /**
     * Deregister completed or incorrectly structured updates
     */
    class ManageUpdates
    {
        /**
         * Function to deregister already completed updates from the list of required updates.
         *
         * @since 3.3.14
         *
         * @param $updates (Array) Our array of required updates.
         * @return $updates (Array) Our array of required updates.
         */
        public function removeCompletedUpdates($updates)
        {
        }
        /**
         * Function to deregister updates that have required updates that either
         * don't exist, or are malformed
         * @param $updates (Array) Our array of required updates.
         * @return $updates (Array) Our array of required updates.
         */
        public function removeBadUpdates($updates)
        {
        }
        /**
         * Retrieve required updates array from stored location
         *
         * Note that until retrieved value is validated as an array, we do not
         * declare return type to prevent error
         * 
         * @return array
         */
        protected function getRequiredUpdates()
        {
        }
        /**
         * Update value of 'required updates' in storage location
         *
         * @param array $updates
         * @return void
         */
        protected function updateRequiredUpdates(array $updates) : void
        {
        }
        /**
         * Return formatted date string
         *
         * @return string
         */
        protected function getDate() : string
        {
        }
    }
}
namespace {
    final class NF_Admin_Menus_AddNew extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $page_title = 'Add New';
        public $menu_slug = 'ninja-forms#new-form';
        public $position = 2;
        public function __construct()
        {
        }
        /**
         * If we have required updates, unregister the menu item
         */
        public function nf_upgrade_redirect()
        {
        }
        public function get_page_title()
        {
        }
        public function get_capability()
        {
        }
        public function display()
        {
        }
    }
    final class NF_Admin_Menus_Addons extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $menu_slug = 'ninja-forms#add-ons';
        public $position = 7;
        public function __construct()
        {
        }
        /**
         * If we have required updates, unregister the menu item
         */
        public function nf_upgrade_redirect()
        {
        }
        public function get_page_title()
        {
        }
        public function get_capability()
        {
        }
        public function display()
        {
        }
        public static function filterItemsByCategroy($items, $category)
        {
        }
        public static function getItemStatus($item)
        {
        }
    }
    final class NF_Admin_Menus_Dashboard extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $page_title = 'Dashboard';
        public $menu_slug = 'ninja-forms';
        public $position = 1;
        public function __construct()
        {
        }
        public function get_page_title()
        {
        }
        public function get_capability()
        {
        }
        public function display()
        {
        }
        /**
         * Enqueue dashboard page elements
         */
        public function enqueue_dashboard_script($page)
        {
        }
    }
    final class NF_Admin_Menus_Divider extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $page_title = '';
        public $menu_title = '<span style="display:block;margin:1px 0 1px -5px;padding:0;height:1px;line-height:1px;background:#CCCCCC;"></span>';
        public $menu_slug = '#';
        public $position = 9001;
        public function __construct()
        {
        }
        public function display()
        {
        }
    }
    final class NF_Admin_Menus_Forms extends \NF_Abstracts_Menu
    {
        public $page_title = 'Ninja Forms';
        public $menu_slug = 'ninja-forms';
        public $icon_url = 'dashicons-feedback';
        public $position = '35.1337';
        public $ver = \Ninja_Forms::VERSION;
        //Data needed into nfDasboard wp_localize_script
        private $preloadedFormData;
        private $fieldTypeData;
        private $fieldSettings;
        private $fieldTypeSections;
        private $actionTypeData;
        private $actionSettings;
        private $formSettingTypeData;
        private $formSettings;
        private $mergeTags;
        // Stores whether or not this form has a password field.
        private $legacy_password = \false;
        public function __construct()
        {
        }
        /**
         * If we have required updates, redirect to the main Ninja Forms page
         */
        public function nf_upgrade_redirect()
        {
        }
        public function body_class($classes)
        {
        }
        public function get_page_title()
        {
        }
        public function admin_init()
        {
        }
        public function display()
        {
        }
        public function submenu_separators()
        {
        }
        /**
         * TODO: Remove this function and its hook because we are handling template imports via the batch processor.
         * @since  3.0
         * @return void
         */
        private function import_from_template()
        {
        }
        private function _enqueue_the_things($form_id)
        {
        }
        private function _localize_form_data($form_id)
        {
        }
        /**
         * Null Data Check
         * Accepts array of settings and removes null data the array.
         *
         * @param $settings - a key/value pair of settings.
         * @return array
         */
        private function null_data_check($settings)
        {
        }
        /**
         * Sanitize any field setting that can cause vulnerabilities
         *
         * @param array $fieldSettings
         * @return array
         */
        private function sanitizeFieldSettings(array $fieldSettings) : array
        {
        }
        /**
         * Remove known script triggers that can be output on screen
         *
         * @param string $string
         * @return string
         */
        private function removeScriptTriggers(string $string) : string
        {
        }
        private function _localize_field_type_data()
        {
        }
        private function _localize_action_type_data()
        {
        }
        protected function _localize_form_settings()
        {
        }
        protected function _localize_merge_tags()
        {
        }
        protected function _group_settings($settings, $groups)
        {
        }
        protected function _unique_settings($settings)
        {
        }
        protected function _setting_defaults($settings)
        {
        }
        protected function _fetch_action_feed()
        {
        }
        protected function _fetch_settings_feed()
        {
        }
        protected function _fetch_field_feed()
        {
        }
        protected function setting_group_priority($a, $b)
        {
        }
        public function get_capability()
        {
        }
    }
    class NF_Admin_Menus_ImportExport extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $menu_slug = 'nf-import-export';
        /**
         * @var int
         */
        public $position = 4;
        public final function __construct()
        {
        }
        /**
         * If we have required updates, redirect to the main Ninja Forms page
         */
        public final function nf_upgrade_redirect()
        {
        }
        public final function get_page_title()
        {
        }
        public final function import_form_listener()
        {
        }
        public final function export_form_listener()
        {
        }
        public final function import_fields_listener()
        {
        }
        /**
         * Ensure unserialized value is sanitized against malicious objects
         *
         * @param string $serializedValue
         * @return array Expected return is indexed array
         */
        protected function sanitizeUnserialize($serializedValue)
        {
        }
        public final function export_fields_listener()
        {
        }
        public final function display()
        {
        }
        public final function add_meta_boxes()
        {
        }
        public final function template_import_forms()
        {
        }
        public final function template_export_forms()
        {
        }
        public final function template_import_favorite_fields()
        {
        }
        public final function template_export_favorite_fields()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Backwards Compatibility
        |--------------------------------------------------------------------------
        */
        public final function import_fields_backwards_compatibility($field)
        {
        }
        private function upload_error_check($file)
        {
        }
        public final function get_capability()
        {
        }
    }
    /**
     * Class NF_Admin_Menus_Licenses
     */
    final class NF_Admin_Menus_Licenses
    {
        private $licenses = array();
        public function __construct()
        {
        }
        public function submit_listener()
        {
        }
        public function register_licenses()
        {
        }
        public function add_meta_boxes()
        {
        }
        public function display()
        {
        }
        private function get_license($name)
        {
        }
        private function activate_license($name, $key)
        {
        }
        private function deactivate_license($name)
        {
        }
    }
    final class NF_Admin_Menus_MockData extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $page_title = 'Mock Data';
        public $position = 9002;
        public function __construct()
        {
        }
        public function mock_and_redirect()
        {
        }
        public function display()
        {
        }
        private function mock_data()
        {
        }
    }
    final class NF_Admin_Menus_Settings extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $menu_slug = 'nf-settings';
        public $position = 5;
        protected $_prefix = 'ninja_forms';
        public function __construct()
        {
        }
        public function body_class($classes)
        {
        }
        /**
         * Function to notify users of CF7 conflict
         * 
         * Since 3.0
         *
         * @param (array) $notices
         * @return (array) $notices
         */
        public function ninja_forms_cf7_notice($notices)
        {
        }
        public function get_page_title()
        {
        }
        public function get_capability()
        {
        }
        public function display()
        {
        }
        public function update_settings()
        {
        }
        private function get_settings()
        {
        }
        private function prefix($value)
        {
        }
    }
    /**
     * Class NF_Admin_Menus_Submissions
     */
    final class NF_Admin_Menus_Submissions extends \NF_Abstracts_Submenu
    {
        /**
         * @var string
         */
        public $parent_slug = 'ninja-forms';
        /**
         * @var string
         */
        public $page_title = 'Submissions';
        /**
         * @var string
         */
        public $menu_slug = 'nf-submissions';
        /**
         * @var int
         */
        public $position = 3;
        /** @var int */
        public $load_legacy;
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Remove the old Submissions page link when legacy mode is not enabled
         *
         * @param $screen object of current screen details
         */
        public function remove_legacy_submissions_page($screen)
        {
        }
        /**
         * Add an option in the bulk action select field
         */
        public function manage_bulk_actions($bulk_actions)
        {
        }
        /**
         * If we have required updates, redirect to the main Ninja Forms page
         */
        public function nf_upgrade_redirect()
        {
        }
        /**
         * Change Views
         * WordPress hook that modifies the links on our submissions CPT to allow
         * users to switch between completed and trashed submissions.
         * @since 3.2.17
         *
         * @param $views The views that are associated with this CPT.
         *      $views[ 'view' ]
         * @return array Returns modified views to allow our users access to the trash.
         */
        public function change_views($views)
        {
        }
        /**
         * Change Columns
         *
         * @return array
         */
        public function change_columns()
        {
        }
        /**
         * Custom Columns
         *
         * @param $column
         * @param $sub_id
         */
        public function custom_columns($column, $sub_id)
        {
        }
        /**
         * Remove Filter: Show All Dates
         *
         * @param $months
         * @return array
         */
        public function remove_filter_show_all_dates($months)
        {
        }
        /**
         * Add Filters
         *
         * @return bool
         */
        public function add_filters()
        {
        }
        public function table_filter($query)
        {
        }
        /**
         * @updated 3.3.21.2
         */
        public function search($pieces)
        {
        }
        public function remove_bulk_edit($actions)
        {
        }
        public function bulk_admin_footer()
        {
        }
        public function export_listen()
        {
        }
        public function hide_page_title_action()
        {
        }
        /**
         * Custom Columns: ID
         *
         * @param $sub
         * @return mixed
         */
        private function custom_columns_seq_num($sub)
        {
        }
        /**
         * Custom Columns: Submission Date
         *
         * @param $sub
         * @return mixed
         */
        private function custom_columns_sub_date($sub)
        {
        }
        /**
         * Custom Columns: Field
         *
         * @param $sub
         * @param $column
         * @return bool
         */
        private function custom_columns_field($sub, $column)
        {
        }
        private function table_filter_by_form($vars, $form_id)
        {
        }
        private function table_filter_by_date($vars)
        {
        }
        public function enqueue_legacy_scripts()
        {
        }
        public function get_page_title()
        {
        }
        /**
         * Display
         */
        public function display()
        {
        }
        public function body_class($classes)
        {
        }
        /**
         * enqueue scripts here
         */
        public function enqueue_scripts($page)
        {
        }
        /*
         * PRIVATE METHODS
         */
        public function get_capability()
        {
        }
    }
    final class NF_Admin_Menus_SystemStatus extends \NF_Abstracts_Submenu
    {
        public $parent_slug = 'ninja-forms';
        public $menu_slug = 'nf-system-status';
        public $position = 6;
        public function __construct()
        {
        }
        public function get_page_title()
        {
        }
        public function get_capability()
        {
        }
        public function display()
        {
        }
    }
    final class NF_Admin_Metaboxes_AppendAForm extends \NF_Abstracts_Metabox
    {
        protected $_post_types = array('post', 'page');
        public function __construct()
        {
        }
        public function append_form($content)
        {
        }
        public function save_post($post_id)
        {
        }
        public function render_metabox($post, $metabox)
        {
        }
    }
    final class NF_Admin_Metaboxes_Calculations extends \NF_Abstracts_SubmissionMetabox
    {
        public function __construct()
        {
        }
        public function render_metabox($post, $metabox)
        {
        }
        /**
         * Register the React metabox for calculations
         *
         * @return void
         */
        protected function registerReactMetabox() : void
        {
        }
        /**
         * Add a metabox constructor to the react.js submissions page
         *
         * @param array $metaboxHandlers
         * @return array
         */
        public function nfAddMetabox(array $metaboxHandlers) : array
        {
        }
    }
}
namespace NinjaForms\Includes\Admin\Metaboxes {
    /**
     * Construct Calculations metabox for the React Submissions page
     *
     * Class must have a public function handle that can receive the $extraValue
     * and a NF submission.
     * 
     * Output of handle method is a \NinjaForms\Includes\Entities\MetaboxOutputEntity with two properties:
     * 
     * 'title' (string output of metabox title/header)
     * 'labelValueCollection' – indexed array of label values
     * 
     * Each label value array has three keys:
     *   'label' – label of the output
     *   'value' –  value of that being output
     *   'styling' – currently accepts 'alert' to add an 'alert' class for CSS styling
     */
    class CalculationsReact
    {
        /**
         * Given submission '$extra' data and the complete submission, return array
         * construct for metabox If nothing to output, then return null
         *
         * If the '$extra' data contains all required information, then simply
         * construct that as label/value/styling arrays.
         *
         * If your output requires other information from the submission, use the
         * $nfSub to extract the required information.
         *
         * Note that in this example, we want additional information from the
         * submission for output so we disregard the $extraValue and work directly
         * with the $nfSub to extract the information.
         * 
         * @param mixed $extraValue
         * @param NF_Database_Models_Submission $nfSub
         * @return \NinjaForms\Includes\Entities\MetaboxOutputEntity|null
         */
        public function handle($extraValue, $nfSub) : ?\NinjaForms\Includes\Entities\MetaboxOutputEntity
        {
        }
        /**
         * Construct calculations output
         */
        protected static function extractResponses($calculations, ?bool $debug = false) : array
        {
        }
        /**
         * Determine/return if calc debug is set
         * 
         * Checks for string `&calcs_debug` in URI
         *
         * @return boolean
         */
        protected function isDebugSet() : bool
        {
        }
        /**
         * Get the input server referer
         *
         * @return mixed
         */
        protected function getReferer()
        {
        }
    }
}
namespace {
    final class NF_Admin_Metaboxes_Example extends \NF_Abstracts_SubmissionMetabox
    {
        public function __construct()
        {
        }
        public function render_metabox($post, $metabox)
        {
        }
    }
    /**
     * NF_Notices Class
     *
     * Can be simply used be adding another line into the nf_admin_notices() function under notices.php
     *
     * Can be extended to create more advanced notices to include triggered events
     *
     * @since 2.9
     */
    class NF_Admin_Notices
    {
        // Highlander the instance
        static $instance;
        public static function instance()
        {
        }
        public $notice_spam = 0;
        public $notice_spam_max = 1;
        // Basic actions to run
        public function __construct()
        {
        }
        // Checks to ensure notices aren't disabled and the user has the correct permissions.
        public function nf_admin_notice()
        {
        }
        // Primary notice function that can be called from an outside function sending necessary variables
        public function admin_notice($admin_notices)
        {
        }
        // Spam protection check
        public function anti_notice_spam()
        {
        }
        // Ignore function that gets ran at admin init to ensure any messages that were dismissed get marked
        public function admin_notice_ignore()
        {
        }
        // Temp Ignore function that gets ran at admin init to ensure any messages that were temp dismissed get their start date changed
        public function admin_notice_temp_ignore()
        {
        }
        public function admin_notice_pages_blacklist($pages)
        {
        }
        // Page check function - This should be called from class extensions if the notice should only show on specific admin pages
        // Expects an array in the form of IE: array( 'dashboard', 'ninja-forms', array( 'ninja-forms', 'builder' ) )
        // Function accepts dashboard as a special check and also whatever is passed to page or tab as parameters
        // The above example will display on dashboard and all of the pages that have page=ninja-forms and any page=ninja-forms&tab=builder which is redundant in the example
        public function admin_notice_pages($pages)
        {
        }
        // Required fields check
        public function required_fields($fields)
        {
        }
        // Special parameters function that is to be used in any extension of this class
        public function special_parameters($admin_notices)
        {
        }
    }
    /**
     * Class NF_Abstracts_Batch_Process
     */
    class NF_Admin_Processes_ChunkPublish extends \NF_Abstracts_BatchProcess
    {
        //	header( 'Content-Type: application/json' );
        private $data;
        private $form_id;
        protected $response = array('last_request' => 'failure', 'batch_complete' => \false);
        protected $_data = array();
        protected $_errors = array();
        protected $_debug = array();
        /**
         * Constructor
         */
        public function __construct($data = array())
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @return JSON
         *  Str last_response = success/failure
         *  Bool batch_complete = true/false
         *  Int requesting = x
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         */
        public function startup()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a batch process after completion.
         */
        public function cleanup()
        {
        }
        /**
         * Function to get our chunk data from the chunks table.
         * 
         * @param $slug (string) The name of the option in the db.
         * @return string or FALSE
         */
        public function get_chunk($slug)
        {
        }
        /**
         * Function to replace update_option.
         * 
         * @param $slug (string) The name of the option in the db.
         * @param $content (string) The data to be stored in the option.
         */
        public function add_chunk($slug, $content)
        {
        }
        /*
         * Function to remove our management option and remove any temporary chunk data.
         */
        public function remove_option()
        {
        }
    }
}
namespace NinjaForms\Includes\Admin\Processes {
    /**
     * Deletes a file given file path
     * 
     * 
     */
    class DeleteBatchFile
    {
        /**
         * Delete a file, given a filepath
         *
         * @param string $filePath
         * @return string Result of the attempt to delete file
         */
        public function delete(string $filePath) : string
        {
        }
    }
}
namespace {
    /**
     * Class NF_Abstracts_Batch_Process
     */
    class NF_Admin_Processes_ExpiredSubmissionCleanup extends \NF_Abstracts_BatchProcess
    {
        protected $_slug = 'expired_submission_cleanup';
        protected $expired_subs = array();
        /**
         * Function to run any setup steps necessary to begin processing.
         */
        public function startup()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing for steps after the first.
         *
         * @since 3.4.0
         * @return  void 
         */
        public function restart()
        {
        }
        /**
         * Function to loop over the batch.
         *
         * @since 3.4.0
         * @return  void 
         */
        public function process()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a batch process after completion.
         *
         * @since 3.4.0
         * @return  void 
         */
        public function cleanup()
        {
        }
        /**
         * Get Steps
         * Determines the amount of steps needed for the step processors.
         *
         * @since 3.4.0
         * @return int of the number of steps.
         */
        public function get_steps()
        {
        }
        /**
         * Get Expired Subs
         * Gathers our expired subs puts them into an array and returns it.
         *
         * @param $form_id - ( int ) ID of the Form.
         * @param $expiration_time - ( int ) number of days the submissions
         *                                  are set to expire in
         *
         * @return array of all the expired subs that were found.
         */
        public function get_expired_subs($form_id, $expiration_time)
        {
        }
    }
    /**
     * Class NF_Abstracts_Batch_Process
     */
    class NF_Admin_Processes_ExportSubmissions extends \NF_Abstracts_BatchProcess
    {
        protected $_slug = 'export_submissions';
        protected $form = '';
        protected $subs_per_step = 25;
        protected $sub_count = 0;
        protected $format = 'csv';
        protected $offset = 0;
        protected $delimiter = ',';
        protected $enclosure = '"';
        protected $terminator = "\n";
        protected $currentPosition = 0;
        /**
         * Filepath of downloaded file in default directory
         *
         * @param array $forms
         */
        protected $file_path = '';
        /**
         * File URL of downloaded file in default directory
         *
         * @param array $forms
         */
        protected $fileUrl = '';
        /**
         * @var NF_Exports_SubmissionCsvExport
         */
        protected $csvObject;
        /**
         * Aggregated submission keys in output order
         *
         * @var array
         */
        protected $indexedLookup;
        /**
         * Override parent construct to pass form Ids
         *
         * @param array $forms
         */
        public function __construct($form = '')
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         */
        public function startup()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing for steps after the first.
         *
         * @since 3.5.0
         * @return  void 
         */
        public function restart()
        {
        }
        /**
         * Function to loop over the batch.
         *
         * @since 3.5.0
         * @return  void 
         */
        public function process()
        {
        }
        /** 
         * Delete temp file before calling parent method
         * @inheritDoc 
         */
        public function batch_complete() : void
        {
        }
        public function writeBatch() : void
        {
        }
        /**
         * Method that encodes $this->response and sends the data to the front-end.
         * 
         * @since 3.4.0
         * @updated 3.4.11
         * @return  void 
         */
        public function respond()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a batch process after completion.
         *
         * @since 3.5.0
         * @return  void 
         */
        public function cleanup()
        {
        }
        /**
         * Get Steps
         * Determines the amount of steps needed for the step processors.
         *
         * @since 3.5.0
         * @return int of the number of steps.
         */
        public function get_steps()
        {
        }
        /**
         * Get the filepath of our constructed csv.
         * 
         * @return string
         */
        protected function constructFilepath()
        {
        }
        /**
         * Overwrites the default flag method to use user options
         * instead of using the default options.
         * 
         * @since 3.5.0
         * @param $flag (String) The flag to check
         * @param $action (String) The type of interaction to be performed
         * @return Mixed
         */
        public function flag($flag, $action)
        {
        }
        /**
         * Get file URL of downloaded file in default directory
         */
        public function getFileUrl() : string
        {
        }
        /**
         * Get filepath of downloaded file in default directory
         */
        public function getFilePath() : string
        {
        }
    }
    /**
     * Class NF_Abstracts_Batch_Process
     */
    class NF_Admin_Processes_ImportForm extends \NF_Abstracts_BatchProcess
    {
        protected $_slug = 'import_form';
        private $fields_per_step = 20;
        protected $form;
        /**
         * Store an array of columns that we want to store in our table rather than meta.
         *
         * This array stores the column name and the name of the setting that it maps to.
         *
         * The format is:
         *
         * array( 'COLUMN_NAME' => 'SETTING_NAME' )
         */
        protected $forms_db_columns = array('title' => 'title', 'created_at' => 'created_at', 'form_title' => 'title', 'default_label_pos' => 'default_label_pos', 'show_title' => 'show_title', 'clear_complete' => 'clear_complete', 'hide_complete' => 'hide_complete', 'logged_in' => 'logged_in', 'seq_num' => 'seq_num');
        protected $fields_db_columns = array('parent_id' => 'parent_id', 'id' => 'id', 'key' => 'key', 'type' => 'type', 'label' => 'label', 'field_key' => 'key', 'field_label' => 'label', 'order' => 'order', 'required' => 'required', 'default_value' => 'default', 'label_pos' => 'label_pos', 'personally_identifiable' => 'personally_identifiable');
        protected $actions_db_columns = array('title' => 'title', 'key' => 'key', 'type' => 'type', 'active' => 'active', 'parent_id' => 'parent_id', 'created_at' => 'created_at', 'updated_at' => 'updated_at', 'label' => 'label');
        /**
         * Function to run any setup steps necessary to begin processing.
         *
         * @since 3.4.0
         * @return  void
         */
        public function startup()
        {
        }
        /**
         * Check field settings data before it is being cached
         *
         * @since  3.6.10
         * @return array of $data
         */
        public function sanitize_field_settings($data)
        {
        }
        /**
         * On processing steps after the first, we need to grab our data from our saved option.
         *
         * @since  3.4.0
         * @return void
         */
        public function restart()
        {
        }
        /**
         * Function to loop over the batch.
         *
         * @since  3.4.0
         * @return void
         */
        public function process()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a batch process after completion.
         */
        public function cleanup()
        {
        }
        /*
         * Get Steps
         * Determines the amount of steps needed for the step processors.
         *
         * @return int of the number of steps.
         */
        public function get_steps()
        {
        }
        /**
         * Insert our form using $this->_db->insert by building an array of column => value pairs and %s, %d types.
         *
         * @since  3.4.0
         * @return void
         */
        public function insert_form()
        {
        }
        /**
         * Construct columns and column types from form settings
         *
         * @return array
         */
        protected function constructFormColumnsAndTypes() : array
        {
        }
        /**
         * Insert Form Meta.
         *
         * Loop over our remaining form settings that we need to insert into meta.
         * Add them to our "Values" string for insertion later.
         *
         * @since  3.4.0
         * @return void
         */
        public function insert_form_meta()
        {
        }
        /**
         * Insert Actions and Action Meta.
         *
         * Loop over actions for this form and insert actions and action meta.
         *
         * @since  3.4.0
         * @return void
         */
        public function insert_actions()
        {
        }
        /**
         * If we have a Form ID set, then we've already inserted our Form, Form Meta, Actions, and Action Meta.
         * All we have left to insert are fields.
         *
         * Loop over our fields array and insert up to $this->fields_per_step.
         * After we've inserted the field, unset it from our form array.
         * Update our processing option with $this->form.
         * Respond with the remaining steps.
         *
         * @since  3.4.0
         * @return void
         */
        public function insert_fields()
        {
        }
        protected function modifyFieldsetIds($newFieldId, $fieldsData)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Backwards Compatibility
        |--------------------------------------------------------------------------
        */
        public function import_form_backwards_compatibility($import)
        {
        }
        public function import_merge_tags_backwards_compatibility($import)
        {
        }
        public function import_action_backwards_compatibility($action)
        {
        }
        public function import_field_backwards_compatibility($field)
        {
        }
        /**
         * Method to obfuscate the global base64_decode method.
         * @since 3.6.10.1
         * @param String $data A base64 encoded string.
         * @return String
         */
        private function base64_decode($data)
        {
        }
    }
    /**
     * Class NF_Abstracts_Batch_Process
     */
    class NF_Admin_Processes_ImportFormTemplate extends \NF_Admin_Processes_ImportForm
    {
        protected $_slug = 'import_form_template';
        /**
         * Function to run any setup steps necessary to begin processing.
         */
        public function startup()
        {
        }
    }
}
namespace NinjaForms\Includes\Admin {
    /**
     * Configuration of what can be called and extended by NF_AJAX_REST_Controller
     */
    class RestControllerSafeList
    {
        const ALLOWED_METHOD_CALLS = ['NF_AJAX_Controllers_Form' => ['delete'], 'NF_AJAX_REST_Forms' => ['delete']];
        public static function isClassMethodAllowed(string $fqcn, string $method) : bool
        {
        }
    }
}
namespace {
    /**
     * NF_Slim_Promo Class
     *
     * @since 3.6
     */
    class NF_Admin_SlimPromo
    {
        /**
         *
         */
        public function __construct()
        {
        }
        public function isNFAdminPage()
        {
        }
        /**
         * Check if we should show the slim promo
         *
         * @return bool
         */
        public function maybeShowSlimPromo()
        {
        }
        /**
         * Set the ninja_forms_disable_slim_promo transient
         *
         * @return Void
         */
        public function setTransient()
        {
        }
        /**
         * Echo the html for the notice
         *
         * @return Void
         */
        public function getNoticeHtml()
        {
        }
    }
    /**
     * NF_Survey_Promo Class
     *
     * @since 3.6
     */
    class NF_Admin_SurveyPromo
    {
        public $isDashboard = \false;
        /**
         *
         */
        public function __construct()
        {
        }
        public function show()
        {
        }
        public function isTargetPage()
        {
        }
        /**
         * Check if we should show the survey promo
         *
         * @return bool
         */
        public function shouldShow()
        {
        }
        public function isDashboard()
        {
        }
        /**
         * Set the ninja_forms_disable_survey_promo transient
         *
         * @return Void
         */
        public function dismiss()
        {
        }
        /**
         * Echo the html for the notice
         *
         * @return Void
         */
        public function getNoticeHtml()
        {
        }
    }
    class NF_Admin_UserDataRequests
    {
        /**
         * @var array
         */
        protected $ignored_field_types = array('html', 'submit', 'hr', 'recaptcha', 'spam', 'creditcard', 'creditcardcvc', 'creditcardexpiration', 'creditcardfullname', 'creditcardnumber', 'creditcardzip');
        /**
         * @var WP_User
         */
        protected $user;
        /**
         * @var string
         */
        protected $request_email;
        /** Class constructor */
        public function __construct()
        {
        }
        /**
         * Register exporter for Plugin user data.
         *
         * @param array $exporters
         *
         * @return array
         */
        function plugin_register_exporters($exporters = array())
        {
        }
        /**
         * Register eraser for Plugin user data.
         *
         * @param array $erasers
         *
         * @return array
         */
        function plugin_register_erasers($erasers = array())
        {
        }
        /**
         * Adds Ninja Forms Submission data to the default HTML export file that
         * WordPress creates on converted request
         *
         * @param $email_address
         * @param int $page
         *
         * @return array
         */
        function plugin_user_data_exporter($email_address, $page = 1)
        {
        }
        /**
         * Eraser for Plugin user data. This will completely erase all Ninja Form
         * submission data for the user when converted by the admin.
         *
         * @param $email_address
         * @param int $page
         *
         * @return array
         */
        function plugin_user_data_eraser($email_address, $page = 1)
        {
        }
        /**
         * Retrieve all submissions related(by author id or email address) to the
         * given email address
         *
         * @param $email_address
         *
         * @return array
         */
        private function get_related_subs($email_address)
        {
        }
        /**
         * Get submission ids where the submission has the give email address as
         * data
         *
         * @param $email_address
         *
         * @return array
         */
        private function get_subs_by_email($email_address)
        {
        }
        /**
         * Delete Submissions
         *
         * @param $subs
         */
        private function delete_submissions($subs)
        {
        }
        /**
         * This will (redact) personal data and anonymize submissions
         *
         * @param $subs
         */
        private function anonymize_submissions($subs)
        {
        }
        /**
         * This will anonymize personally identifiable fields and anonymize
         * submissions submitted by the user with the provided email address
         *
         * @param $sub
         * @param $fields
         */
        private function anonymize_fields($sub, $fields)
        {
        }
    }
}
namespace NinjaForms\Includes\Admin {
    class VersionCompatibilityCheck
    {
        /**
         * Array construct requirements for compatibility check
         *
         * @var array
         */
        const COMPATIBILITY_CHECK_REQUIREMENTS = ['className' => 'string', 'minVersion' => 'string', 'title' => 'string', 'message' => 'string', 'int' => 'integer', 'link' => 'string'];
        /** @var array */
        protected $compatiblityCheckCollection;
        /**
         * Notices to add
         * 
         * Uses NF notices array structure
         *
         * @var array
         */
        protected $compatibilityNotices = [];
        /**
         * Activate checks and notices for plugin's envirnoment compatibility 
         *
         * @return void
         */
        public function activate() : void
        {
        }
        /**
         * If Authorize.net and NF core versions re incompatible, display user notice
         *
         * NOTE: this does not stop functioning of plugin, but warns user that
         * functionality may be affected
         *
         * @return void
         */
        public function ensureVersionCompatibility() : void
        {
        }
        /**
         * Load compatibility check configuration 
         *
         * @return void
         */
        protected function loadCompatibilityConfiguration() : void
        {
        }
        /**
         * Iterate collection, check compatibility, append notices
         *
         * @return void
         */
        protected function constructCompatiblityNotices() : void
        {
        }
        /**
         * Ensure compatibility check construct is valid
         *
         * @param array $compatiblityCheck
         * @return boolean false on invalid construct
         */
        protected function isValidConstruct(array $compatiblityCheck) : bool
        {
        }
        /**
         * Check that required versions are installed for proper functionality
         *
         * Default is to pass checks; only fail if known version incompatibility
         * 
         * @return boolean Compatible TRUE, incompatible FALSE
         */
        protected function checkVersionCompatibility(string $className, string $requiredVersion) : bool
        {
        }
        /**
         * Append a notice to the internal collection of notices
         *
         * @param string $className
         * @param string $title
         * @param string $message
         * @param integer $int
         * @return void
         */
        protected function appendNotice(string $className, string $title, string $message, int $int, string $link) : void
        {
        }
        /**
         * Determine the version of the request class name
         *
         * @param string $className Name of class to check 
         * @return string Version of the class, empty string if class doesn't exist or
         * does not have VERSION constant defined
         */
        protected function getClassVersion(string $className) : string
        {
        }
        /**
         * Add NF admin notice for incompatible versions
         *
         * @param array $notices
         * @return array
         */
        public function addIncompatibleVersionsNotice($notices) : array
        {
        }
    }
}
namespace NinjaForms\Includes\Contracts {
    /**
     * Contract that mimics methods from NF_Database_Models_Field
     *
     * Provides functionality normally handled by the field object created by
     * \Ninja_Forms()->form()->get_field( $fieldId )
     *
     *
     */
    interface Field
    {
        /**
         * Get field type
         *
         * @return string
         */
        public function get_type() : string;
        /** 
         * Get a field setting
         *
         * @param string $setting
         * @param mixed $default
         * @return mixed
         */
        public function get_setting($setting, $default = FALSE);
        /**
         * Get all field settings
         * 
         * @return array
         */
        public function get_settings() : array;
        /** 
         * Update a field setting
         *
         * @param string $key
         * @param mixed $value
         */
        public function update_setting($key, $value) : \NinjaForms\Includes\Contracts\Field;
        /**
         * Update all settings
         *
         * @param array $data
         * @return Field
         */
        public function update_settings($data) : \NinjaForms\Includes\Contracts\Field;
        /**
         * Delete field
         *
         * @return void
         */
        public function delete();
        /**
         * Find
         *
         * @param string $parent_id
         * @param array $where
         * @return array
         */
        public function find($parent_id = '', array $where = array()) : array;
        /**
         * Get object settings
         *
         * @param [type] $obj_array
         * @return array
         */
        public function get_object_settings($obj_array) : array;
        /**
         * Save field
         *
         * @return void
         */
        public function save();
        /**
         * Insert row
         *
         * @param array $data
         * @return void
         */
        public function _insert_row($data = array()) : void;
        /**
         * Cache
         *
         * @param string $cache
         * @return Field
         */
        public function cache($cache = '') : \NinjaForms\Includes\Contracts\Field;
        /**
         * Add parent
         *
         * @param [type] $parent_id
         * @param [type] $parent_type
         * @return Field
         */
        public function add_parent($parent_id, $parent_type) : \NinjaForms\Includes\Contracts\Field;
        /**
         * Import field
         *
         * @param array $settings
         * @param string $field_id
         * @param boolean $is_conversion
         * @return void
         */
        public static function import(array $settings, $field_id = '', $is_conversion = FALSE) : void;
    }
    /**
     * Contract to retrieve a collection of single submissions from a data source
     *
     * Note that the collection has two parts - the submission meta and the
     * submission values.  
     *
     * The meta describes details about the submission such as timestamp, NF form
     * id, data storage location, and a record id.
     *
     * The values portion is a collection of submission values associated with a
     * given submission.
     *
     * The two are retrieved separately.  This enables fast filtering of submissions
     * to generate a collection of submission records; then, after initial
     * filtering, the submission values for just the intended records can be
     * retrieved.
     */
    interface SubmissionDataSource
    {
        /**
         * Retrieve a collection of submissions meta given filtering args
         *
         * @param array $args
         * @return SingleSubmission[]
         */
        public function retrieveSubmissionMeta(\NinjaForms\Includes\Entities\SubmissionFilter $submissionFilter) : array;
        /**
         * Populate with submission values a single submission in a collection
         *
         * Submission collection may initially only contain submission meta to save
         * time/memory.  When called, this method retrieves the complete submission
         * values for the provided SingleSubmision
         *
         * @param SingleSubmission $singleSubmission
         * @return SingleSubmission
         */
        public function retrieveSubmissionValues(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission;
        /**
         * Retrieve a single submission with values 
         *
         * Absent a previously filtered collection of single submissions within the
         * aggregate, request a single submission, fully populate it, and return.
         *
         * @param SingleSubmission $singleSubmission
         * @return SingleSubmission
         */
        public function retrieveSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission;
        /**
         * Delete a submission from the data source
         *
         * @param SingleSubmission $singleSubmission
         * @return SubmissionDataSource
         */
        public function deleteSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource;
        /**
         * Restore a submission from the data source
         *
         * @param SingleSubmission $singleSubmission
         * @return SubmissionDataSource
         */
        public function restoreSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource;
        /**
         * Update a submission from the data source
         *
         * @param SingleSubmission $singleSubmission
         * @return SubmissionDataSource
         */
        public function updateSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource;
        /**
         * Return the dataSource id
         *
         * Identifies the implementing class, enabling retrieval of submission
         * specifics by calling the implementing class
         * 
         * @return string 
         */
        public function getDataSource() : string;
    }
}
namespace NinjaForms\Includes\Database {
    /**
     * Retrieves a single Caldera Forms submission by its entry id 
     */
    class CalderaSubmissionDataSource implements \NinjaForms\Includes\Contracts\SubmissionDataSource
    {
        const TIMESTAMP_FORMAT = 'Y-m-d H:i:s';
        /**
         * Identifier of where submission is stored
         *
         * @var string
         */
        protected $dataSource = 'cf_form_entries';
        /**
         * Collection of submissions keyed on Submission Record Id
         *
         * @var SingleSubmission[]
         */
        protected $submissionCollection = [];
        /** @var SubmissionFilter   */
        protected $submissionFilter;
        /**
         * Cross reference from NF Form Id to the CF form Id
         *
         * Array is in format:
         *   [ 
         *      nfFormId => cfFormId,  
         * ex:  '174' => 'CF60b547cfac102'
         *   ]
         * @var array
         */
        protected $formIdLookup = [];
        /** @inheritDoc */
        public function retrieveSubmissionMeta(\NinjaForms\Includes\Entities\SubmissionFilter $submissionFilter) : array
        {
        }
        /** @inheritDoc */
        public function retrieveSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Apply search string filter to submission collection
         *
         * Runs a WP Query to search for all post Ids with both a form Id from the
         * submission filter and also a search string in any meta value of the same
         * form.  It then filters the submission collection to only those
         * submissions that meet these additional requirements.
         *
         * @return void
         */
        protected function applySearchCriterion() : void
        {
        }
        /**
         * Adds CF lookup for given NF form id
         *
         * If given NF id lookup is not set, checks to see if there is a
         * corresponding CF form.  If not, the value is set to `null` so that
         * the instance knows that the form id has been checked.
         *
         * @param string $nfFormId
         * @return void
         */
        protected function lookupCfFormIdByNfFormId(string $nfFormId) : void
        {
        }
        /** @inheritDoc */
        public function retrieveSubmissionValues(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /** @inheritDoc */
        public function deleteSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource
        {
        }
        /** @inheritDoc */
        public function restoreSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource
        {
        }
        /** @inheritDoc */
        public function updateSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource
        {
        }
        /**
         * Retrieve submissions for a given CF form Id
         * @return void 
         */
        protected function retrieveSubmissionMetaByCfFormId(string $formId) : void
        {
        }
        /**
         * Boolean to include as per date filter
         * 
         * true=>include, false=>omit
         *
         * @return boolean
         */
        protected function includeByDateFilter($subDate) : bool
        {
        }
        /** @inheritDoc */
        public function getDataSource() : string
        {
        }
    }
    /**
     * Retrieves a CPT Ninja Forms submission by its form id
     * 
     * CPT indicates NF submissions stored as custom post type
     */
    class CptSubmissionDataSource implements \NinjaForms\Includes\Contracts\SubmissionDataSource
    {
        const TIMESTAMP_FORMAT = 'Y-m-d H:i:s';
        /**
         * Identifier of where submission is stored
         *
         * @var string
         */
        protected $dataSource = 'nf_post';
        /**
         * Collection of submissions
         *
         * @var SingleSubmission[]
         */
        protected $submissionCollection = [];
        /** @var SubmissionFilter   */
        protected $submissionFilter;
        /**
         * Form Id of the primary form
         *
         * Form Id used to define fields; other forms can be included in results.
         *
         * @var [type]
         */
        protected $formId = null;
        /** @inheritDoc */
        public function retrieveSubmissionMeta(\NinjaForms\Includes\Entities\SubmissionFilter $submissionFilter) : array
        {
        }
        /** @inheritDoc */
        public function retrieveSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /** @inheritDoc */
        public function retrieveSubmissionValues(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /** @inheritDoc */
        public function deleteSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource
        {
        }
        /** @inheritDoc */
        public function restoreSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource
        {
        }
        /** @inheritDoc */
        public function updateSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Contracts\SubmissionDataSource
        {
        }
        /**
         * Get the NF_Submission for a SingleSubmission entity
         */
        protected function getNfSub(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NF_Database_Models_Submission
        {
        }
        /**
         * Populate submission values, extra values, handlers
         *
         * @param SingleSubmission $singleSubmission
         * @param NF_Database_Models_Submission $nfSub
         * @return SingleSubmission
         */
        protected function fullyPopulateSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission, \NF_Database_Models_Submission $nfSub) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Populate a single submissin with submitted values
         * @param SingleSubmission $singleSubmission
         * @param NF_Database_Models_Submission $nfSub
         * @return SingleSubmission
         */
        protected function populateSubmissionValues(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission, \NF_Database_Models_Submission $nfSub) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Provide a filtered list of extra value keys storing extra data
         * 
         * Non-core actions can filter the list to provide their keys for retrieval
         * 
         * @return array 
         */
        protected function getExtraValueHandlers() : array
        {
        }
        /**
         * Retrieve extraValues as constructed into MetaboxOutputEntities
         *
         * @param NF_Database_Models_Submission $nfSub
         * @param array $extraValueHandlers
         * @return array
         */
        protected function retrieveExtraValues($nfSub, array $extraValueHandlers) : array
        {
        }
        /**
         * Apply search string filter to submission collection
         *
         * Runs a WP Query to search for all post Ids with both a form Id from the
         * submission filter and also a search string in any meta value of the same
         * form.  It then filters the submission collection to only those
         * submissions that meet these additional requirements.
         *
         * @return void
         */
        protected function applySearchCriterion() : void
        {
        }
        /**
         * Retrieve submissions Ids for a given NF form Id
         *
         * User Id is conditionally added if submission filter's property is
         * explicityly set (-1 is default value, indicating that no filtering on
         * User Id).
         *
         * WPDB query args is changed from individual args to being passed as array;
         * this makes for cleaner structure when sequence of arguments is variable.
         * 
         *
         * @return void 
         */
        protected function retrieveSubmissionMetaByNfFormId(string $formId) : void
        {
        }
        /**
         * Boolean to include as per date filter
         * 
         * true=>include, false=>omit
         *
         * @return boolean
         */
        protected function includeByDateFilter($subDate) : bool
        {
        }
        /** @inheritDoc */
        public function getDataSource() : string
        {
        }
    }
}
namespace {
    class NF_Database_FieldsController
    {
        private $db;
        private $form_id;
        private $fields_data;
        private $new_field_ids;
        private $insert_fields;
        private $insert_field_meta = array();
        private $insert_field_meta_chunk = 0;
        /**
         * An array of UPDATE SQL strings.
         *
         * i.e. array( 'key' => 'WHERE `id` = X THEN...' )
         * 
         * @var array
         */
        private $update_fields = array('id' => '', 'key' => '', 'label' => '', 'type' => '', 'field_key' => '', 'field_label' => '', 'order' => '', 'default_value' => '', 'label_pos' => '', 'required' => '', 'personally_identifiable' => '');
        private $update_field_meta = array();
        private $update_field_meta_chunk = 0;
        private $db_stage_1_complete = \true;
        /**
         * Store an array of columns that we want to store in our table rather than meta.
         *
         * This array stores the column name and the name of the setting that it maps to.
         * 
         * The format is:
         *
         * array( 'COLUMN_NAME' => 'SETTING_NAME' )
         */
        private $db_columns = array('parent_id' => 'parent_id', 'id' => 'id', 'key' => 'key', 'type' => 'type', 'label' => 'label', 'field_key' => 'key', 'field_label' => 'label', 'order' => 'order', 'required' => 'required', 'default_value' => 'default', 'label_pos' => 'label_pos', 'personally_identifiable' => 'personally_identifiable');
        private $db_bit_columns = array('required', 'personally_identifiable');
        public function __construct($form_id, $fields_data)
        {
        }
        public function run()
        {
        }
        public function get_updated_fields_data()
        {
        }
        private function parse_fields()
        {
        }
        private function parse_field_meta()
        {
        }
        private function get_existing_meta()
        {
        }
        private function update_new_field_ids()
        {
        }
        //Check IDs stored for each repeater fields, if a temporary ID is detected we'll assign an ID based on the higher value amongst other ID values.
        private function check_update_new_repeater_field_ids()
        {
        }
        public function get_new_field_ids()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | INSERT (NEW) FIELDS
        |--------------------------------------------------------------------------
        */
        private function insert_field($settings)
        {
        }
        public function get_insert_fields_query()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | UPDATE (EXISTING) FIELDS
        |--------------------------------------------------------------------------
        */
        private function update_field($field_id, $settings)
        {
        }
        public function get_update_fields_query()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | INSERT (NEW) META
        |--------------------------------------------------------------------------
        */
        private function insert_field_meta($field_id, $key, $value)
        {
        }
        public function run_insert_field_meta_query()
        {
        }
        /*
        |--------------------------------------------------------------------------
        | UPDATE (EXISTING) META
        |--------------------------------------------------------------------------
        */
        private function update_field_meta($field_id, $key, $value)
        {
        }
        public function run_update_field_meta_query()
        {
        }
    }
    final class NF_Database_FormsController
    {
        private $db;
        private $factory;
        private $forms_data = array();
        public function __construct()
        {
        }
        public function setFormsData()
        {
        }
        public function getFormsData()
        {
        }
    }
    /**
     * Class NF_Abstracts_logger
     *
     * Handles custom logging for Ninja Forms and Ninja Forms Extensions.
     *
     * PSR-3 and WordPress Compliant where applicable.
     */
    final class NF_Database_Logger extends \NF_Abstracts_Logger
    {
        protected $_current = array();
        /**
         * Logs with an arbitrary level.
         *
         * @param mixed $level
         * @param string $message
         * @param array $context
         * @return null
         */
        public function log($level, $message, array $context = array())
        {
        }
        /**
         * Get current logs for the request lifecycle
         *
         * @param string $level
         * @return array
         */
        public function get_current($level = '')
        {
        }
        /**
         * Interpolates context values into the message placeholders.
         *
         * @param $message
         * @param array $context
         * @return string
         */
        protected function interpolate($message, array $context = array())
        {
        }
    }
    class NF_Database_Migrations
    {
        protected $migrations = array();
        /**
         * Constructor method for the NF_Database_Migrations class.
         * 
         * @since 3.0.0
         * 
         * @updated 3.3.8
         */
        public function __construct()
        {
        }
        /**
         * Function to run each migration on the stack.
         * 
         * @since 3.0.0
         */
        public function migrate()
        {
        }
        /**
         * Function to run any required database upgrades.
         * 
         * @param $callback (String) The method this upgrade will call from individual migration files.
         * 
         * @since 3.4.0
         */
        public function do_upgrade($callback)
        {
        }
        /**
         * This function drops ninja forms tables and options
         * 
         * @param $areYouSure (Boolean)
         * @param $areYouReallySure (Boolean)
         * @param $nuke_multisite (Boolean)
         * 
         * @since 2.9.34
         * @updated 3.3.16
         */
        public function nuke($areYouSure = \FALSE, $areYouReallySure = \FALSE, $nuke_multisite = \TRUE)
        {
        }
        /**
         * Function to handle the actual deletion of tables and caches.
         * 
         * @since 3.1.0
         */
        private function _nuke()
        {
        }
        /**
         * Function to nuke our 3.0 settings.
         * 
         * @param $areYouSure (Boolean)
         * @param $areYouReallySure (Boolean)
         * 
         * @since 3.1.0
         */
        public function nuke_settings($areYouSure = \FALSE, $areYouReallySure = \FALSE)
        {
        }
        /**
         * Function to handle the actual deletion of our 3.0 settings.
         * 
         * @since 3.1.0
         */
        private function _nuke_settings()
        {
        }
        /**
         * Function to nuke our 2.9 database tables.
         * 
         * @param $areYouSure (Boolean)
         * @param $areYouReallySure (Boolean)
         * 
         * @since 3.1.0
         */
        public function nuke_deprecated($areYouSure = \FALSE, $areYouReallySure = \FALSE)
        {
        }
        /**
         * Function to handle the actual deletion of deprecated tables and options.
         * 
         * @since 3.1.0
         */
        private function _nuke_deprecated()
        {
        }
    }
    class NF_Database_Migrations_ActionMeta extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_ActionMeta class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to be run as part of our CacheCollateActions required update.
         *
         * @since 3.3.12
         * 
         * @updated 3.4.0
         */
        public function cache_collate_actions()
        {
        }
    }
    class NF_Database_Migrations_Actions extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Actions class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to be run as part of our CacheCollateActions required update.
         *
         * @since 3.3.12
         * 
         * @updated 3.4.0
         */
        public function cache_collate_actions()
        {
        }
    }
    class NF_Database_Migrations_Chunks extends \NF_Abstracts_Migration
    {
        /**
         * Constructor function for the chunks table migration.
         */
        public function __construct()
        {
        }
        /**
         * Function to define the chunks table.
         */
        public function run()
        {
        }
    }
    class NF_Database_Migrations_FieldMeta extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_FieldMeta class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to run our stage three upgrades.
         *
         * @since 3.3.12
         * 
         * @updated 3.4.0
         */
        public function cache_collate_fields()
        {
        }
    }
    class NF_Database_Migrations_Fields extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Fields class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to run our stage two upgrades.
         *
         * @since 3.3.12
         * 
         * @updated 3.4.0
         */
        public function cache_collate_fields()
        {
        }
    }
    class NF_Database_Migrations_FormMeta extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Actions class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to be run as part of our CacheCollateForms required update.
         *
         * @since 3.4.0
         */
        public function cache_collate_forms()
        {
        }
    }
    class NF_Database_Migrations_Forms extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Actions class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to be run as part of our CacheCollateForms required update.
         *
         * @since 3.4.0
         */
        public function cache_collate_forms()
        {
        }
    }
    class NF_Database_Migrations_ObjectMeta extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_ObjectMeta class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to ensure proper collation of the object_meta table.
         *
         * @since 3.4.0
         */
        public function cache_collate_objects()
        {
        }
    }
    class NF_Database_Migrations_Objects extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Objects class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to ensure proper collation of the objects table.
         *
         * @since 3.4.0
         */
        public function cache_collate_objects()
        {
        }
    }
    class NF_Database_Migrations_Relationships extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Relationships class.
         * 
         * @since 3.0.0
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.0.0
         */
        public function run()
        {
        }
        /**
         * Function to ensure proper collation of the relationships table.
         *
         * @since 3.4.0
         */
        public function cache_collate_objects()
        {
        }
    }
    class NF_Database_Migrations_Settings extends \NF_Abstracts_Migration
    {
        protected $_defaults = array();
        public function __construct()
        {
        }
        public function run()
        {
        }
    }
    class NF_Database_Migrations_Upgrades extends \NF_Abstracts_Migration
    {
        /**
         * Constructor method for the NF_Database_Migrations_Fields class.
         * 
         * @since 3.3.11
         */
        public function __construct()
        {
        }
        /**
         * Function to run our initial migration.
         * 
         * @since 3.3.11
         * 
         * @updated 3.4.0
         */
        public function run()
        {
        }
        /**
         * Function to define our maintenance column.
         *
         * @since 3.4.0
         */
        public function cache_collate_fields()
        {
        }
    }
    final class NF_Database_MockData
    {
        public function __construct()
        {
        }
        public function saved_fields()
        {
        }
        public function form_blank_form()
        {
        }
        public function form_contact_form_1()
        {
        }
        public function form_contact_form_2()
        {
        }
        public function form_kitchen_sink()
        {
        }
        public function form_bathroom_sink()
        {
        }
        public function form_long_form($num_fields = 500)
        {
        }
        public function form_email_submission()
        {
        }
        public function form_product_1()
        {
        }
        public function form_product_2()
        {
        }
        public function form_product_3()
        {
        }
        public function form_calc_form()
        {
        }
        private function _migrate()
        {
        }
    }
    /**
     * Class NF_Database_Models_Action
     */
    final class NF_Database_Models_Action extends \NF_Abstracts_Model
    {
        private $form_id = '';
        protected $_type = 'action';
        protected $_table_name = 'nf3_actions';
        protected $_meta_table_name = 'nf3_action_meta';
        protected $_columns = array('title', 'key', 'type', 'active', 'created_at', 'label');
        public function __construct($db, $id, $parent_id = '')
        {
        }
    }
    /**
     * Class NF_Database_Models_Field
     */
    final class NF_Database_Models_Field extends \NF_Abstracts_Model
    {
        private $form_id = '';
        protected $_type = 'field';
        protected $_table_name = 'nf3_fields';
        protected $_meta_table_name = 'nf3_field_meta';
        protected $_columns = array('label', 'key', 'parent_id', 'type', 'created_at');
        public function __construct($db, $id, $parent_id = '')
        {
        }
        /**
         * Delete
         *
         * Delete the object, its children, and its relationships.
         *
         * Also deletes data associated with field
         *
         * @return bool
         */
        public function delete()
        {
        }
        public static function import(array $settings, $field_id = '', $is_conversion = \FALSE)
        {
        }
    }
    /**
     * Class NF_Database_Models_Form
     */
    final class NF_Database_Models_Form extends \NF_Abstracts_Model
    {
        protected $_type = 'form';
        protected $_table_name = 'nf3_forms';
        protected $_meta_table_name = 'nf3_form_meta';
        protected $_columns = array('title', 'created_at', 'form_title', 'default_label_pos', 'show_title', 'clear_complete', 'hide_complete', 'logged_in', 'seq_num');
        protected $_fields;
        protected static $imported_form_id;
        public function __construct($db, $id = '')
        {
        }
        public function delete()
        {
        }
        private function delete_submissions()
        {
        }
        private function prepare_in($sql, $vals)
        {
        }
        public static function get_next_sub_seq($form_id)
        {
        }
        public static function import(array $import, $id = '', $is_conversion = \false)
        {
        }
        public static function import_admin_notice()
        {
        }
        /**
         * This static method is called to duplicate a form using the form ID.
         *
         * To duplicate a form we:
         *
         *  Check to see if we've ran stage one of the db update process.
         *  Use SQL to insert a copy of our form and form meta.
         *  Grab all fields for a specific form.
         *  Loop over those fields and insert fields and field meta.
         *  Run ->update_settings() and ->save() on the form model.
         *  Call our WPN_Helper method to build a form cache.
         * 
         * @since  3.0
         * @update 3.4.0
         * @param  int  $form_id ID of the form being duplicated.
         * @return $new_form_id  ID of our form duplicate.
         */
        public static function duplicate($form_id)
        {
        }
        /**
         * When duplicating a form, we need to build specific SQL queries.
         *
         * This is a fairly repetative task, so we've extrapolated the code to its own function.
         * 
         * @since  3.4.0
         * @param  string  $table_name Name of the table we want to update.
         * @return array   Associative array like: ['insert' => "`column1`, "`column2`", etc", 'select' => "`column1`, etc."]
         */
        private static function get_sql_queries($table_name, $db_stage_one_complete = \true)
        {
        }
        public static function export($form_id, $return = \FALSE)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Backwards Compatibility
        |--------------------------------------------------------------------------
        */
        public function import_form_backwards_compatibility($import)
        {
        }
        public function import_merge_tags_backwards_compatibility($import)
        {
        }
        public function import_action_backwards_compatibility($action)
        {
        }
        public function import_field_backwards_compatibility($field)
        {
        }
    }
    /**
     * Class NF_Database_Models_Object
     */
    final class NF_Database_Models_Object extends \NF_Abstracts_Model
    {
        protected $_type = 'object';
        protected $_table_name = 'nf3_objects';
        protected $_meta_table_name = 'nf3_object_meta';
        protected $_columns = array('type', 'created_at', 'object_title');
        public function __construct($db, $id, $parent_id = '', $parent_type = '')
        {
        }
        public function save()
        {
        }
    }
    /**
     * Class NF_Database_Models_Submission
     */
    class NF_Database_Models_Submission
    {
        protected $_id = '';
        protected $_status = '';
        protected $_user_id = '';
        protected $_form_id = '';
        protected $_seq_num = '';
        protected $_sub_date = '';
        protected $_mod_date = '';
        protected $_field_values = array();
        protected $_extra_values = array();
        /**
         * Delimiter that uniquely identifies a field as type 'repeater'
         * 
         * Requests for a field can be made by either an (int) field id or a 
         * (string) field reference, which prior to fieldset repeaters had been
         * for the field key only.  For disambiguation, a fieldset repeater field
         * request for a specific field within the fieldset is in the form of: 
         * {fieldsetFieldId}{delimiter}{fieldIdOfFieldWithinFieldset}
         * 
         * @var string
         */
        protected $_fieldsetDelimiter = '.';
        /**
         * Delimiter that uniquely identifies multiple fieldset repeater submissions
         * 
         * Fieldset Repeaters can have multiple values submitted on any given 
         *  submission.  Each repeated value for a field in the fieldset is
         * delimited in the submission data with an incremented index value
         * @var string
         */
        protected $_fieldsetRepetitionDelimiter = '_';
        public function __construct($id = '', $form_id = '')
        {
        }
        /**
         * Get post object
         * 
         * Uses WP functionality
         *
         * @param string $id
         * @return object
         */
        protected function retrieveSub($id)
        {
        }
        /**
         * Get the Form Id
         * 
         * Uses WP functionality
         *
         * @return int
         */
        protected function retrieveFormId($id)
        {
        }
        /**
         * Get the sequence number
         * 
         * Uses WP functionality
         *
         * @return int
         */
        protected function retrieveSeqNum($id)
        {
        }
        /**
         * Get post meta value for given post Id and key
         *
         * @param int $id
         * @param string $key
         * @param bool $bool
         * @return mixed
         */
        protected function getPostMeta($id, $key, $bool = \TRUE)
        {
        }
        /**
         * Get Submission ID
         *
         * @return int
         */
        public function get_id()
        {
        }
        public function get_status()
        {
        }
        public function get_user()
        {
        }
        public function get_form_id()
        {
        }
        public function get_form_title()
        {
        }
        public function get_seq_num()
        {
        }
        public function get_sub_date($format = 'm/d/Y')
        {
        }
        public function get_mod_date($format = 'm/d/Y')
        {
        }
        /**
         * Get Field Value
         *
         * Returns a single submission value by field ID or field key.
         *
         * @param int|string $field_ref
         * @return string
         */
        public function get_field_value($field_ref)
        {
        }
        /**
         * Get field values of a single child field within a fieldset repeater field
         * 
         * get_field_value(), which calls this method, is expected to return a 
         *  string.  Fieldset Repeater child fields have a unique field reference,
         *  differentiated by their delimiter that ensures that the requesting
         *  external caller knows that it is requesting a fieldset repeater field.
         *  This this method returns a serialized string of values, honoring the
         *  get_field_value() method with the expectation that the external
         *  caller will unserialize this value.
         * 
         * @param int $fieldsetId
         * @param int $childFieldId
         */
        protected function get_field_value_for_fieldset_child($fieldsetId, $childFieldId)
        {
        }
        /**
         * Get Field Values
         *
         * @return array|mixed
         */
        public function get_field_values()
        {
        }
        /**
         * Update Field Value
         *
         * @param $field_ref
         * @param $value
         * @return $this
         */
        public function update_field_value($field_ref, $value)
        {
        }
        /**
         * Update Field Values
         *
         * @param $data
         * @return $this
         */
        public function update_field_values($data)
        {
        }
        public function get_extra_value($key)
        {
        }
        public function get_extra_values($keys)
        {
        }
        public function update_extra_value($key, $value)
        {
        }
        public function update_extra_values($values)
        {
        }
        /**
         * Find Submissions
         *
         * @param $form_id
         * @param array $where
         * @return array
         */
        public function find($form_id, array $where = array(), array $ids = array())
        {
        }
        /**
         * Delete Submission
         */
        public function delete()
        {
        }
        /**
         * Trash Submission
         */
        public function trash()
        {
        }
        /**
         * Save Submission
         *
         * @return $this|NF_Database_Models_Submission|void
         */
        public function save()
        {
        }
        public static function export($form_id, array $sub_ids = array(), $return = \FALSE)
        {
        }
        /*
         * PROTECTED METHODS
         */
        /**
         * Save Field Value
         *
         * @param $field_id
         * @param $value
         * @return $this
         */
        protected function _save_field_value($field_id, $value)
        {
        }
        /**
         * Save Field Values
         *
         * @return $this|void
         */
        protected function _save_field_values()
        {
        }
        protected function _save_extra_values()
        {
        }
        /*
         * UTILITIES
         */
        /**
         * Format Meta Query
         *
         * @param array $where
         * @return array
         */
        protected function format_meta_query(array $where = array())
        {
        }
        /**
         * Get Field ID By Key
         *
         * @param $field_key
         * @return mixed
         */
        protected function get_field_id_by_key($field_key)
        {
        }
        public static function sort_fields($a, $b)
        {
        }
    }
    final class NF_Database_PublishProcessing extends \WP_Background_Process
    {
        protected $action = 'ninja-forms-publish';
        protected function task($item)
        {
        }
    }
    final class NF_Database_SubmissionExpirationCron
    {
        /**
         * NF_Database_SubmissionExpirationCron constructor.
         * Sets up our our submission expiration CRON job.
         *
         */
        public function __construct()
        {
        }
        /**
         * Expired Submission Cron
         * Checks our subs to see if any are expired and sends them to be
         * deleted if there are any that need to be removed.
         *
         * @param $options
         * @return void
         */
        public function expired_submission_cron()
        {
        }
        /**
         * Get Expired Subs
         * Gathers our expired subs puts them into an array and returns it.
         *
         * @param $form_id - ( int ) ID of the Form.
         * @param $expiration_time - ( int ) number of days the submissions
         *                                  are set to expire in
         *
         * @return array of all the expired subs that were found.
         */
        public function get_expired_subs($form_id, $expiration_time)
        {
        }
        /**
         * Delete Expired Subs
         * Helper method that removes our expired subs.
         *
         * @param $expired_subs - array of sub ids that need to be deleted.
         * @param $cap - The cap of the amount of subs you want deleted at 1 time.
         *
         * @return void
         */
        public function delete_expired_subs($expired_subs)
        {
        }
    }
    /**
     * Handles sending information to our api.ninjaforms.com endpoint.
     *
     * @since  3.2
     */
    final class NF_Dispatcher
    {
        private $api_url = 'http://api.ninjaforms.com/';
        /**
         * Returns bool true if we are opted-in or have a premium add-on.
         * If a premium add-on is installed, then users have opted into tracked via our terms and conditions.
         * If no premium add-ons are installed, check to see if the user has opted in or out of anonymous usage tracking.
         *
         * @since  3.2.0
         * @return bool
         */
        public function should_we_send()
        {
        }
        /**
         * Package up our environment variables and send those to our API endpoint.
         * 
         * @since  3.2
         * @return void
         * 
         * @updated 3.3.17
         */
        public function update_environment_vars()
        {
        }
        /**
         * Package up our form data and send it to our API endpoint.
         * 
         * @since 3.2
         * @return void
         */
        public function form_data()
        {
        }
        /**
         * Sends a campaign slug and data to our API endpoint.
         * Checks to ensure that the user has 1) opted into tracking or 2) they have a premium add-on installed.
         * 
         * @since  3.2
         * @param  string       $slug   Campaign slug
         * @param  array        $data   Array of data being sent. Should NOT already be a JSON string.
         * @return void
         */
        public function send($slug, $data = array())
        {
        }
    }
    abstract class NF_Display_Page
    {
        protected $_wp_query;
        public function __construct()
        {
        }
        /**
         * @return string HTML
         */
        public function get_content()
        {
        }
        /**
         * @return string
         */
        public abstract function get_title();
        /**
         * @return string
         */
        public abstract function get_guid();
        /**
         * Modifies the WP Query to our liking
         *
         * @return void
         */
        public function modify_wp_query()
        {
        }
    }
    class NF_Display_PageEmbedForm extends \NF_Display_Page
    {
        public function __construct($form_id)
        {
        }
        /**
         * @return string HTML
         */
        public function get_content()
        {
        }
        /**
         * @return string
         */
        public function get_title()
        {
        }
        /**
         * @return string
         */
        public function get_guid()
        {
        }
    }
    class NF_Display_PagePublicLink extends \NF_Display_Page
    {
        protected $form_id;
        protected $form;
        public function __construct($form_id)
        {
        }
        /**
         * @return string HTML
         */
        public function get_content()
        {
        }
        /**
         * @return string
         */
        public function get_title()
        {
        }
        /**
         * @return string
         */
        public function get_guid()
        {
        }
    }
    /**
     * Class NF_Display_Preview
     */
    final class NF_Display_Preview
    {
        protected $form_id = '';
        protected $_form_id = '';
        public function __construct()
        {
        }
        public function pre_get_posts($query)
        {
        }
        /**
         * @return string
         */
        function the_title($title)
        {
        }
        /**
         * @return string
         */
        function the_content()
        {
        }
        /**
         * Locate_template will be loaded using second argument of the get_query_templates() function
         * First argument will be prefixed with _template to create a hook
         * @return void
         */
        function template_include()
        {
        }
        function post_thumbnail_html()
        {
        }
    }
    class NF_Display_Render
    {
        protected static $render_instance_count = array();
        protected static $loaded_templates = array('app-layout', 'app-before-form', 'app-after-form', 'app-before-fields', 'app-after-fields', 'app-before-field', 'app-after-field', 'form-layout', 'form-hp', 'field-layout', 'field-before', 'field-after', 'fields-wrap', 'fields-wrap-no-label', 'fields-wrap-no-container', 'fields-label', 'fields-error', 'form-error', 'field-input-limit', 'field-null');
        public static $use_test_values = \FALSE;
        protected static $form_uses_recaptcha = array();
        protected static $form_uses_datepicker = array();
        protected static $form_uses_inputmask = array();
        protected static $form_uses_currencymask = array();
        protected static $form_uses_rte = array();
        protected static $form_uses_textarea_media = array();
        protected static $form_uses_helptext = array();
        protected static $form_uses_starrating = array();
        protected static $thread_id = 1;
        protected static $recorded_forms = [];
        protected static $inline_vars_recorded = [];
        public static function localize($form_id)
        {
        }
        /**
         * Transform the inline JS into a variable passed to wp_localize_script
         *
         * @param array $fields
         * @param string $form_id
         * @param object $form
         * @return void
         * */
        protected static function transformInlineVars($fields, $form_id, $form_settings)
        {
        }
        /**
         * Ensure that product related costs on `localize` method have intended number format
         *
         * @param array $settings
         * @param string $decimal_point
         * @param string $thousands_sep
         * @return array
         */
        protected static function ensureProductRelatedCostLocalizeSettings(array $settings, $decimal_point, $thousands_sep, $currencySymbol) : array
        {
        }
        /**
         * Construct field array for an unknown field type
         *
         * @param array $field
         * @return array
         */
        protected static function constructUnknownField($field) : array
        {
        }
        /**
         * Apply localize filters to field
         *
         * Property types are not declared because we cannot guarantee what is
         * returned from apply_filters.
         * 
         * @param array $field
         * @param string $field_type
         * @return array
         */
        protected static function applyLocalizeFilters($field, $field_type)
        {
        }
        /**
         * Ensure that field array has proper construction after localize filters
         *
         * After any WP filter, we cannot assume that all properties are intact, so
         * ensure that our structure is valid.  Checks field type and calls method
         * that ensures validity of that field typ.
         *
         * @param array $field
         * @param array $fieldBeforeFilters
         * @return array
         */
        protected static function ensureFieldArrayStructureValidity($field, array $fieldBeforeFilters) : array
        {
        }
        /**
         * Ensure that Recaptcha field array structure is correct
         *
         * @param array $field
         * @param array $fieldBeforeFilters
         * @return void
         */
        protected static function ensureRecaptchaFieldStructureValidity(array $field) : array
        {
        }
        /**
         * Determine currency symbol
         *
         * @param array $currencySymbolLookup Currency symbol lookups
         * @param string $currency
         * @return string
         */
        protected static function getCurrencySymbol($currencySymbolLookup, $currency) : string
        {
        }
        public static function checkRepeaterChildType($field, $type)
        {
        }
        public static function checkRepeaterChildSetting($field, $setting, $value)
        {
        }
        public static function localize_preview($form_id)
        {
        }
        /**
         * Set root element that will insert the WP element
         * 
         * @since 3.7.4
         * 
         * @param string Form ID
         * 
         * @return void
         */
        public static function localize_iframe($form_id)
        {
        }
        /**
         * Enqueue scripts and localize data needed to insert the iFrame
         * 
         * @since 3.7.4
         * 
         * @param string Form ID
         * 
         * @return void
         */
        public static function enqueue_iframe_scripts($form_id)
        {
        }
        protected static function ensureProductRelatedCostPreviewFormats(array $field, string $currencySymbol) : array
        {
        }
        /**
         * Decode a number by locale into string
         *
         * @return array
         */
        protected static function decodeNumberByLocale($incoming) : string
        {
        }
        public static function enqueue_scripts($form_id, $is_preview = \false)
        {
        }
        /**
         * Enqueue NF frontend basic display styles.
         *
         * @param string $css_dir
         */
        public static function enqueue_styles_display($css_dir)
        {
        }
        public static function load_template($file_name = '')
        {
        }
        public static function output_templates()
        {
        }
        /*
         * UTILITY
         */
        protected static function is_template_loaded($template_name)
        {
        }
    }
    final class NF_Display_Shortcodes
    {
        public function __construct()
        {
        }
        public function display_form_preview($atts = array())
        {
        }
        public function display_form_front_end($atts = array())
        {
        }
        /**
         * TODO: Extract output to template files.
         * @return string
         */
        private function display_no_id()
        {
        }
    }
    /**
     * Measure email throughput to determine the potential scale of email related issues.
     * @TODO: Remove this entire file at a later date.
     */
    class NF_EmailTelemetry
    {
        private $is_opted_in = \false;
        /**
         * Constructor which takes in a paremeter to tell the class whether the site is opted 
         * in for telemetry or not
         * 
         * @param $opted_in
         * 
         * @since 3.3.21
         */
        public function __construct($opted_in = \false)
        {
        }
        /**
         * @hook phpmailer_init The last action before the email is sent.
         */
        public function setup()
        {
        }
        /** 
         * @NOTE No need to return $phpmailer as it is passed in by reference (aka Output Parameter). 
         */
        public function update_metrics(&$phpmailer)
        {
        }
        public function maybe_schedule_push()
        {
        }
        public function push_telemetry()
        {
        }
    }
}
namespace NinjaForms\Includes\Entities {
    /**
     * Simple entity abstract upon which all entities are built
     *
     * Entities are classes that pass well defined data honoring contracts.
     * Single parameters and arrays, when passed into an entity, can be relied
     * upon to provide the data defined by the entity, even if the original data
     * did not fully define values.
     */
    class SimpleEntity implements \JsonSerializable
    {
        /**
         * Constructs an array representation
         */
        public function toArray() : array
        {
        }
        /**
         * Sets data for json_encode
         *
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function jsonSerialize()
        {
        }
        /**
         * Magic method getter for properties
         *
         * @param string $name
         * @return void
         */
        public function __get($name)
        {
        }
        /**
         * Magic method setter for properties
         *
         * Usually does not support setting undefined properties, but this class is
         * enabling that, although it is kept as a separate command in case it must
         * be modified.  This is because field definitions can have an undetermined
         * collection of settings and this class will enable setting of all those
         * values, while maintaining the ability to define sets and gets that filter
         * values for proper types.
         *
         * @param string $name
         * @param mixed $value
         * @return SimpleEntity
         */
        public function __set($name, $value)
        {
        }
    }
    /**
     * Entity holding title and label/value/styling output for metaboxes
     */
    class MetaboxOutputEntity extends \NinjaForms\Includes\Entities\SimpleEntity
    {
        /**
         * Metabox title
         *
         * @var string
         */
        protected $title = '';
        /**
         * Collection of label/value/styling pairs for output
         *
         * @var array
         */
        protected $labelValueCollection = [];
        /**
         * Construct entity from associative array
         *
         * @param array $items
         * @return SingleSubmission
         */
        public static function fromArray(array $items) : \NinjaForms\Includes\Entities\MetaboxOutputEntity
        {
        }
        /**
         * Constructs an array representation
         */
        public function toArray() : array
        {
        }
        protected function validateLabelValueCollection($incomingLabelValueCollection) : array
        {
        }
        /**
         * Get metabox title
         *
         * @return  string
         */
        public function getTitle() : string
        {
        }
        /**
         * Set metabox title
         *
         * @param  string  $title  Metabox title
         *
         * @return  MetaboxOutputEntity
         */
        public function setTitle(string $title) : \NinjaForms\Includes\Entities\MetaboxOutputEntity
        {
        }
        /**
         * Get the value of labelValueCollection
         */
        public function getLabelValueCollection() : array
        {
        }
        /**
         * Set the value of labelValueCollection
         *
         * @return  MetaboxOutputEntity
         */
        public function setLabelValueCollection($labelValueCollection) : \NinjaForms\Includes\Entities\MetaboxOutputEntity
        {
        }
    }
    /**
     * Entity defining Single Submission data structure
     */
    class SingleSubmission extends \NinjaForms\Includes\Entities\SimpleEntity
    {
        const TIMESTAMP_FORMAT = 'Y-m-d H:i:s';
        /**
         * Submission Id
         *
         * @var string
         */
        protected $submissionRecordId = '';
        /**
         * Submission time stamp
         * 
         *
         * @var string
         */
        protected $timestamp = '';
        /**
         * Form Id to which the submission belongs
         *
         * @var string
         */
        protected $formId = '';
        /**
         * Identifier of where submission is stored
         *
         * It is a programmatic name to uniquely identify any given storage
         * location, such as NF post, CF table
         * 
         * @var string
         */
        protected $dataSource = '';
        /**
         * Submission status
         *
         * @var array
         */
        protected $status = [];
        /**
         * Collection of submitted values stored as SubmissionField entities
         *
         * Keyed on field slug within the collection.  The collection may be empty
         * if the submission data has not been retrieved yet.
         *
         * @var SubmissionField[]
         */
        protected $submissionFieldCollection = [];
        /**
         * Extra data values stored with submission
         *
         * Data structured as indexed array of MetaboxOutputEntity->toArray()
         * @var array
         */
        protected $extraValues = [];
        /**
         * Associative array (string) of classes providing additional submission handling
         *
         * @var array
         */
        protected $submissionHandlers = [];
        /**
         * Sequence number
         *
         * @var int
         */
        protected $seq_num;
        /**
         * User ID of the submitter, "0" if user non logged-in
         *
         * @var string
         */
        protected $submitterId = "";
        /**
         * Get a field value by the field slug
         *
         * @param string $fieldSlug
         * @return void
         */
        public function getSubmissionFieldValue(string $fieldSlug)
        {
        }
        /**
         * Construct entity from associative array
         *
         * @param array $items
         * @return SingleSubmission
         */
        public static function fromArray(array $items) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Constructs an array representation
         */
        public function toArray() : array
        {
        }
        /**
         * Get submission Id
         *
         * @return  string
         */
        public function getSubmissionRecordId() : string
        {
        }
        /**
         * Set submission Id
         *
         * @param  string  $submissionRecordId  Submission Id
         *
         * @return  self
         */
        public function setSubmissionId(string $submissionRecordId) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Get submission time stamp
         *
         * @return  string
         */
        public function getTimestamp() : string
        {
        }
        /**
         * Set submission time stamp
         *
         * Force standard format 
         * @param  string  $timestamp  Submission time stamp
         *
         * @return  self
         */
        public function setTimestamp(string $timestamp)
        {
        }
        /**
         * Get form Id to which the submission belongs
         *
         * @return  string
         */
        public function getFormId() : string
        {
        }
        /**
         * Set form Id to which the submission belongs
         *
         * @param  string  $formId  Form Id to which the submission belongs
         *
         * @return  self
         */
        public function setFormId(string $formId) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Get dataSource
         * 
         * Typical locations include NF post, CF table
         *
         * @return  string
         */
        public function getDataSource() : string
        {
        }
        /**
         * Set submitted values as collection of SubmissionField entities
         *
         * @param  array  $submissionFieldCollection  SubmissionField entities keyed on field slug
         *
         * @return  SingleSubmission
         */
        public function setSubmissionFieldCollection(array $submissionFieldCollection) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Get submitted values as collection of SubmissionField entities
         *
         * @return  array
         */
        public function getSubmissionFieldCollection() : array
        {
        }
        /**
         * Return array of field slugs for submissionFieldCollection
         * @return array 
         */
        public function getFieldSlugs() : array
        {
        }
        /**
         * Get extra data values stored with submission
         *
         * @return  array
         */
        public function getExtraValues() : array
        {
        }
        /**
         * Set extra data values stored with submission
         *
         * @param  array  $extraValues  Extra data values stored with submission
         *
         * @return  SingleSubmission
         */
        public function setExtraValues(array $extraValues) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Get associative array (string) of classes providing additional submission handling
         *
         * [slug]=>(string)ClassName implements SubmissionHandler
         * @return  array
         */
        public function getSubmissionHandlers() : array
        {
        }
        /**
         * Set associative array (string) of classes providing additional submission handling
         *
         * @param  array  $submissionHandlers  Associative array (string) of classes providing additional submission handling
         *
         * @return  SingleSubmission
         */
        public function setSubmissionHandlers(array $submissionHandlers) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Get submission status
         *
         * @return  array
         */
        public function getStatus() : array
        {
        }
        /**
         * Set submission status
         *
         * @param  array  $status  Submission status
         *
         * @return  SingleSubmission
         */
        public function setStatus(array $status) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
    }
    /**
     * Defines data passed from SubmissionHandlers to  submissions page NF>=3.6.1
     */
    class SubmissionExtraHandlerResponse extends \NinjaForms\Includes\Entities\SimpleEntity
    {
        /**
         * Response type - 'none' or `download`
         *
         * @var string
         */
        protected $responseType = '';
        /**
         * Base 64 encoded downloadable string
         *
         * @var string
         */
        protected $download = '';
        /**
         * Application type of download (for constructing download)
         *
         * @var string
         */
        protected $blobType = '';
        /**
         * Result of request (usu. 'ok' or failure message)
         *
         * @var string
         */
        protected $result = '';
        /**
         * Filename of the download, including file extension
         *
         * @var string
         */
        protected $filename = '';
        /**
         * Construct entity from associative array
         *
         * @param array $items
         * @return SubmissionExtraHandlerResponse
         */
        public static function fromArray(array $items) : \NinjaForms\Includes\Entities\SubmissionExtraHandlerResponse
        {
        }
        /**
         * Get response type
         *
         * @return  string
         */
        public function getResponseType() : string
        {
        }
        /**
         * Set response type
         *
         * @param  string  $responseType  Response type
         *
         * @return  SubmissionExtraHandlerResponse
         */
        public function setResponseType(string $responseType) : \NinjaForms\Includes\Entities\SubmissionExtraHandlerResponse
        {
        }
        /**
         * Get download
         *
         * @return  string
         */
        public function getDownload() : string
        {
        }
        /**
         * Set download
         *
         * @param  string  $download  Download
         *
         * @return  SubmissionExtraHandlerResponse
         */
        public function setDownload(string $download) : \NinjaForms\Includes\Entities\SubmissionExtraHandlerResponse
        {
        }
        /**
         * Get blob type
         *
         * @return  string
         */
        public function getBlobType() : string
        {
        }
        /**
         * Set blob type
         *
         * @param  string  $blobType  Blob type
         *
         * @return  SubmissionExtraHandlerResponse
         */
        public function setBlobType(string $blobType) : \NinjaForms\Includes\Entities\SubmissionExtraHandlerResponse
        {
        }
        /**
         * Get result
         *
         * @return  string
         */
        public function getResult() : string
        {
        }
        /**
         * Set result
         *
         * @param  string  $result  Result
         *
         * @return  SubmissionExtraHandlerResponse
         */
        public function setResult(string $result) : \NinjaForms\Includes\Entities\SubmissionExtraHandlerResponse
        {
        }
        /**
         * Get filename of the download, including file extension
         *
         * @return  string
         */
        public function getFilename() : string
        {
        }
        /**
         * Set filename of the download, including file extension
         *
         * @param  string  $filename  Filename of the download, including file extension
         *
         * @return  SubmissionExtraHandlerResponse
         */
        public function setFilename(string $filename) : \NinjaForms\Includes\Entities\SubmissionExtraHandlerResponse
        {
        }
    }
    /**
     * Entity defining a submission field, including value if present
     * 
     * Submission field is the submission value for a single field within a form's field collection
     */
    class SubmissionField extends \NinjaForms\Includes\Entities\SimpleEntity
    {
        /**
         * Record id for the stored data
         *
         * @var string
         */
        protected $id = '';
        /**
         * Field slug
         *
         * @var string
         */
        protected $slug = '';
        /**
         * Field label
         *
         * @var string
         */
        protected $label = '';
        /**
         * Admin label
         *
         * @var string
         */
        protected $adminLabel = '';
        /**
         * Field type
         *
         * @var string
         */
        protected $type = '';
        /**
         * Indexed collection of option label/value/calc
         *
         * @var array
         */
        protected $options = [];
        /**
         * Indexed collection of fieldset repeater fields as arrays within parent field
         *
         * @var array
         */
        protected $fieldsetRepeaterFields = [];
        /**
         * Array of complete field settings
         * 
         * Original source is from NF DB tables
         *
         * @var array
         */
        protected $original = [];
        /**
         * Submission value, null by default
         *
         * @var mixed
         */
        protected $value = null;
        /**
         * Construct entity from associative array
         *
         * @param array $items
         * @return SubmissionField
         */
        public static function fromArray(array $items) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get field Id
         *
         * @return  string
         */
        public function getId()
        {
        }
        /**
         * Set field database record id
         *
         * @param  string  $id  Field Id
         *
         * @return  SubmissionField
         */
        public function setId(string $id) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get field slug
         *
         * @return  string
         */
        public function getSlug() : string
        {
        }
        /**
         * Set field slug
         *
         * @param  string  $slug  Field slug
         *
         * @return  SubmissionField
         */
        public function setSlug(string $slug) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get field label
         *
         * @return  string
         */
        public function getLabel() : string
        {
        }
        /**
         * Set field label
         *
         * @param  string  $label  Field label
         *
         * @return  SubmissionField
         */
        public function setLabel(string $label) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get amdin label
         *
         * @return  string
         */
        public function getAdminLabel() : string
        {
        }
        /**
         * Set amdin label
         *
         * @param  string  $adminLabel  Admin label
         *
         * @return  SubmissionField
         */
        public function setAdminLabel(string $adminLabel) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get field type
         *
         * @return  string
         */
        public function getType() : string
        {
        }
        /**
         * Set field type
         *
         * @param  string  $type  Field type
         *
         * @return  SubmissionField
         */
        public function setType(string $type) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get submission Value
         *
         * @return  mixed
         */
        public function getValue()
        {
        }
        /**
         * Set submission Value
         *
         * @param  mixed  $value  Submission Value
         *
         * @return  self
         */
        public function setValue($value) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get indexed collection of option label/value/calc
         *
         * @return  array
         */
        public function getOptions() : array
        {
        }
        /**
         * Set indexed collection of option label/value/calc
         *
         * @param  array  $options  Indexed collection of option label/value/calc
         *
         * @return  SubmissionField
         */
        public function setOptions(array $options) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get Indexed collection of fieldset repeater fields within parent field
         *
         * @return  array
         */
        public function getFieldsetRepeaterFields() : array
        {
        }
        /**
         * Set Indexed collection of fieldset repeater fields within parent field
         *
         * @param  SubmissionField[]  $fieldsetRepeater  Indexed collection of fieldset repeater fields within parent field
         *
         * @return  SubmissionField
         */
        public function setFieldsetRepeaterFields(array $fieldsetRepeaterCollection) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
        /**
         * Get original field settings as stored in NF DB tables
         *
         * @return  array
         */
        public function getOriginal() : array
        {
        }
        /**
         * Set original source field settings (from NF DB tables)
         *
         * @param  array  $original  Original source is from NF DB tables
         *
         * @return  SubmissionField
         */
        public function setOriginal(array $original) : \NinjaForms\Includes\Entities\SubmissionField
        {
        }
    }
    /**
     * Define parameters used to filter submissions
     */
    class SubmissionFilter extends \NinjaForms\Includes\Entities\SimpleEntity
    {
        /**
         * Indexed array of string NF form Ids
         *
         * @var array
         */
        protected $nfFormIds = [];
        /**
         * Start date for filter submissions
         *
         * @var int
         */
        protected $startDate = 0;
        /**
         * End date for filter submissions
         *
         * @var int
         */
        protected $endDate = 0;
        /**
         * Search string
         *
         * @var string
         */
        protected $searchString = '';
        /**
         *  Filter submissions by status
         * 
         * @var array
         */
        protected $status = [];
        /**
         * Submissions IDs
         *
         * @var array
         */
        protected $submissionsIDs = [];
        /**
         * Filter submissions by user ID
         *
         * Default value is null, signifying that no filter for user ID is to be
         * applied.  This is to differentiate from a user Id of 0, which indicates
         * that the submission was created by a non-logged in user.
         * 
         * @var integer
         */
        protected $userId = null;
        /**
         * Construct entity from associative array
         *
         * @param array $items
         * @return SubmissionFilter
         */
        public static function fromArray(array $items) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get indexed array of string NF form Ids
         *
         * @return  array
         */
        public function getNfFormIds() : array
        {
        }
        /**
         * Set indexed array of string NF form Ids
         *
         * @param  array  $nfFormIds  Indexed array of string NF form Ids
         *
         * @return  self
         */
        public function setNfFormIds(array $nfFormIds) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get start date for filter submissions
         *
         * @return  int
         */
        public function getStartDate() : int
        {
        }
        /**
         * Set start date for filter submissions
         *
         * @param  int  $startDate  Start date for filter submissions
         *
         * @return  SubmissionFilter
         */
        public function setStartDate(int $startDate) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get end date for filter submissions
         *
         * @return  int
         */
        public function getEndDate() : int
        {
        }
        /**
         * Set end date for filter submissions
         *
         * @param  int  $endDate  End date for filter submissions
         *
         * @return  SubmissionFilter
         */
        public function setEndDate(int $endDate) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get search string
         *
         * @return  string
         */
        public function getSearchString() : string
        {
        }
        /**
         * Set search string
         *
         * @param  string  $searchString  Search string
         *
         * @return  SubmissionFilter
         */
        public function setSearchString(string $searchString) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get filter submissions by status
         *
         * @return  array
         */
        public function getStatus() : array
        {
        }
        /**
         * Set filter submissions by status
         *
         * @param  array  $status  Filter submissions by status
         *
         * @return  SubmissionFilter
         */
        public function setStatus(array $status) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get user Id for filter submissions
         *
         * @return  int
         */
        public function getUserId() : ?int
        {
        }
        /**
         * Set user Id for filter submissions
         *
         * @param  int  $userId  User Id for filter submissions
         *
         * @return  SubmissionFilter
         */
        public function setUserId(int $userId) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Get included submission IDs
         *
         * @return array
         */
        public function getSubmissionsIDs() : array
        {
        }
        /**
         * Set submissions IDs
         *
         * @param array $submissionsIDs of Submissions IDs to include
         *
         * @return  SubmissionFilter
         */
        public function setSubmissionsIDs(array $submissionsIDs) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
    }
}
namespace {
    /**
     * Email exported submissions as an attachment
     */
    class NF_Exports_BulkSubmissionEmail
    {
        /**
         * Bulk Submission Email Parameters
         * @var BulkSubmissionEmailParameters 
         */
        protected $bulkSubmissionEmailParameters;
        /**
         * Comma delineated `To` addresses
         * @var string
         */
        protected $toAddresses;
        /**
         * `From` address
         * @var string
         */
        protected $fromAddress;
        /**
         * `Reply To` address
         * @var string
         */
        protected $replyTo;
        /**
         * `Subject`
         * @var string
         */
        protected $subject;
        /**
         * CSV string content, stored in array for multiple attachments
         * @var array
         */
        protected $content;
        /**
         *
         * @var resource
         */
        protected $tempFile;
        /**
         * Directory of final file location
         * @var string
         */
        protected $dir;
        /**
         * Temp file name at time of upload, before renaming
         * @var string
         */
        protected $basename;
        /**
         * Full file name with path as attached to email
         * @var string
         */
        protected $attachmentFilename;
        /**
         * Instantiated with BulkSubmissionEmailParameters and string CSV content
         * 
         * @param BulkSubmissionEmailParameters $bulkSubmissionEmailParameters
         * @param array $attachmentFilenames Array of string filenames ready for attachment
         */
        public function __construct($bulkSubmissionEmailParameters, array $attachmentFilenames)
        {
        }
        /**
         * Set default properties
         */
        protected function setDefaults()
        {
        }
        /**
         * Generate email, attach content, submit email
         */
        public function handle()
        {
        }
        /**
         * Put every email address through a sanitizing method
         */
        protected function sanitizeAddressFields()
        {
        }
        /**
         * Sanitize a given email address
         * 
         * @param string $incoming
         * @return string
         */
        protected function sanitizeEmail($incoming)
        {
        }
        /**
         * Construct and return header array
         * 
         * Note that variable headers are run through sanitize_header method
         * @return array
         */
        private function getHeaders()
        {
        }
        /**
         * Sanitize header to prevent attacker is able to create new headers using charecter encoding.
         *
         * @param string $header
         * @return void
         */
        protected function sanitize_header($header)
        {
        }
        /**
         * Construct and return attachments
         * @return array
         */
        private function getAttachments()
        {
        }
        /**
         * Format Reply-To, CC, and BCC address header
         * @return array
         */
        private function constructRecipientsHeader()
        {
        }
        /**
         * Format address for header
         * 
         * @param string $type
         * @param string $email
         * @param string $name
         * @return string
         */
        private function formatAddress($type, $email, $name = '')
        {
        }
    }
    /**
     * Entity to pass bulk export submission parameters
     * 
     * Provides a guarantee that any requested or required parameters have a known
     * default value and type
     *
     */
    class NF_Exports_BulkSubmissionEmailParameters
    {
        /**
         * Form ID
         * @var int
         */
        protected $formId;
        /**
         * Comma-delimited email 'To' addresses
         * @var string
         */
        protected $emailTo;
        /**
         * Email 'From' address
         * @var string
         */
        protected $emailFrom;
        /**
         * Email 'Reply To' address
         * @var string
         */
        protected $emailReplyTo;
        /**
         * Email 'Subject'
         * @var string
         */
        protected $emailSubject;
        /**
         * Output format - e.g. CSV, PDF
         * @var string
         */
        protected $format;
        /**
         * Get output format
         * @return string
         */
        public function getFormat()
        {
        }
        /**
         * Get form Id
         * @return int
         */
        public function getFormId()
        {
        }
        /**
         * Get Email `To` addresses string - comma delimited
         * @return string
         */
        public function getEmailTo()
        {
        }
        /**
         * Get Email `From` address
         * @return string
         */
        public function getEmailFrom()
        {
        }
        /**
         * Get Email `Reply To` address
         * @return string
         */
        public function getEmailReplyTo()
        {
        }
        /**
         * Get Email `Subject`
         * @return string
         */
        public function getEmailSubject()
        {
        }
        /**
         * Set Email `To` addresses - comma delimited
         * 
         * @param string $emailTo
         * @return $this
         */
        public function setEmailTo($emailTo)
        {
        }
        /**
         * Set Email `From` address
         * @param string $emailFrom
         * @return $this
         */
        public function setEmailFrom($emailFrom)
        {
        }
        /**
         * Set Email `Reply To` address
         * @param string $emailReplyTo
         * @return $this
         */
        public function setEmailReplyTo($emailReplyTo)
        {
        }
        /**
         * Set Email `Subject` address
         * @param string $emailSubject
         * @return $this
         */
        public function setEmailSubject($emailSubject)
        {
        }
        /**
         * Set form Id
         * @param int $formId
         * @return NF_Database_Models_SubmissionExportSettingsParameters
         */
        public function setFormId($formId)
        {
        }
        /**
         * Set output format
         * 
         * @param string $format
         * @return NF_Database_Models_SubmissionExportSettingsParameters
         */
        public function setFormat($format)
        {
        }
        /**
         * Convert instance to associative array
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Instantiate instance from associative array
         * 
         * @param array $items
         * @return NF_Database_Models_SubmissionCollectionInterfaceParameters
         */
        public static function fromArray(array $items)
        {
        }
        /**
         * Magic method to return property
         * 
         * @param string $name
         * @return mixed
         */
        public function __get($name)
        {
        }
        /**
         * 
         * @param string $name
         * @param mixed $value
         * @return NF_Database_Models_SubmissionCollectionInterfaceParameters
         */
        public function __set($name, $value)
        {
        }
    }
    /**
     * Contract defining single submission storage and retrieval
     * 
     * NOTE: File location would not permanently be in the Models folder;  it
     *  currently resides here during initial development. 
     */
    interface NF_Exports_Interfaces_SingleSubmissionInterface
    {
        /**
         * Get Field Value
         *
         * Return a single submission value by field ID or field key.
         *
         * @param int|string $field_ref
         * @return string
         */
        public function getFieldValue($field_ref);
        /**
         * Get all submission field values for a single, pre-defined submission 
         *
         * @return array|mixed
         */
        public function getFieldValues();
        /**
         * Return the submission Id
         * @return int
         */
        public function getId();
        /**
         * Return the Sequence Number of a predefined submission Id
         */
        public function getSeqNum();
        /**
         * Return the submission date for predefined submission Id
         * @param string $format Optional date format
         */
        public function getSubmissionDate($format = 'm/d/Y');
        /**
         * Filter field values to return only provided keys
         * 
         * NOTE: filter is performed on array KEYS of incoming parameter.  This
         *  enables use of `field labels` array generated at the collection level, 
         *  which is keyed off the same field keys as the submission for perfect 
         *  matching of array columns.
         * 
         * @param array $fieldKeys Array keyed on field keys with optional value
         * @return array
         */
        public function filterFieldValues($fieldKeys);
        /**
         * Set timestamp of export
         * @param int $unixTimestamp
         */
        public function setExportDatetime(int $unixTimestamp);
        /**
         * Return true if submission has been exported
         * 
         * @return bool
         */
        public function wasExported();
        /**
         * Return bool `true` if submission is unread
         * @return bool
         */
        public function isUnread();
    }
    /**
     * Contract defining required methods for handling submission collection
     * 
     */
    interface NF_Exports_Interfaces_SubmissionCollectionInterface
    {
        /**
         * Return the form Id
         * @return int
         */
        public function getFormId();
        /**
         * Return the form title
         * @return string
         */
        public function getFormTitle();
        /**
         * Return count of submissions, exported, and unread
         */
        public function getCounts() : array;
        /**
         * Set all parameters using NF_Database_Models_SubmissionCollectionInterfaceParameters
         * 
         * Using the object ensures all properties are set, with known defaults;
         *  this enables the requesting class to set only values that concerns it
         *  without needing to set any other value or default.  The Submission
         *  Collection class knows that all values have valid parameters and can
         *  immediately run the filter.
         * 
         * @param SubmissionCollectionFilterParameters $params
         */
        public function filterByParameters(
            /* SubmissionCollectionFilterParameters */
            $params
        );
        /**
         * Set start and end dates to filter submissions
         * @param int|null $startDate Starting date
         * @param int|null $endDate Ending date
         */
        public function setDateParameters($startDate = \null, $endDate = \null);
        /**
         * Set parameter to filter submissions by `isUnread` = true or false
         * 
         * @param bool $isUnread
         */
        public function setIsUnreadParameter(bool $isUnread = \null);
        /**
         * Set parameter to filter submissions by `previouslyExported` = true or false
         * 
         * @param bool $previouslyExported
         */
        public function setPreviouslyExportedParameter(bool $previouslyExported = \null);
        /**
         * Set max number of submissions to return in a request
         * 
         * @param int $maxReturnCount
         */
        public function setMaxReturnCount($maxReturnCount = \null);
        /**
         * Filter collection of submissions based on previously set parameters
         * 
         * @return array
         */
        public function filterSubmissions();
        /**
         * Return submission collection array
         * @return SingleSubmissionInterface[]
         */
        public function getSubmissions();
        /**
         * Return array of submission Ids in the collection
         */
        public function getSubmissionIds();
        /**
         * Return array of field labels keyed on field keys
         * 
         * If hiddenFieldTypes array is set, labels filtered to hide those types
         * 
         * @param bool $useAdminLabels Optionally use admin_labels
         * @return array
         */
        public function getLabels(?bool $useAdminLabels = \false);
        /**
         * Return array of field types keyed on field keys
         * 
         * @return array
         */
        public function getFieldTypes();
        /**
         * Return array of field Ids keyed on field keys
         */
        public function getFieldIds();
        /**
         * Set field types to be removed before output
         * 
         * Provided as indexed array of NF field types
         * 
         * @param array $hidden
         */
        public function setHiddenFieldTypes(array $hidden);
    }
    /**
     * Contract defining required methods CSV export
     */
    interface NF_Exports_Interfaces_SubmissionCsvExportInterface
    {
        /**
         * Generate CSV output and return
         * 
         * @return string
         */
        public function handle() : string;
        /**
         * Provide submissionCollection indices in reverse order
         * 
         * CSV output sorts earliest to current; submissionAggregate returns in reverse order
         *
         * @return array
         */
        public function reverseSubmissionOrder() : array;
        /**
         * Construct a CSV row for record at given submission aggregate's index
         *
         * @param mixed $aggregatedKey
         * @return array
         */
        public function constructRow($aggregatedKey) : array;
        /**
         * Set submission collection used in generating the CSV
         * @param SubmissionCollectionInterface $submissionCollection
         */
        public function setSubmissionCollection(\NF_Exports_Interfaces_SubmissionCollectionInterface $submissionCollection) : \NF_Exports_Interfaces_SubmissionCsvExportInterface;
        /**
         * Set boolean useAdminLabels
         * @param bool $useAdminLabels
         * @return NF_Exports_Interfaces_SubmissionCsvExportInterface
         */
        public function setUseAdminLabels($useAdminLabels) : \NF_Exports_Interfaces_SubmissionCsvExportInterface;
        /**
         * Return array of labels
         * 
         * @return array 
         */
        public function getLabels() : array;
        /**
         * Set date format
         * @param string $dateFormat
         */
        public function setDateFormat(string $dateFormat) : \NF_Exports_Interfaces_SubmissionCsvExportInterface;
    }
    /**
     * Provides and stores single submission data using Custom Post Type
     * 
     * 
     */
    final class NF_Exports_SingleSubmissionCPT implements \NF_Exports_Interfaces_SingleSubmissionInterface
    {
        /**
         * Key under which export timestamp is stored
         * 
         * Submissions without this value set are considered `not exported`
         */
        const EXPORT_TIMESTAMP_KEY = 'export_timestamp';
        /**
         * Key under which isRead boolean is stored
         * 
         * `true` indicates submission is unread; `false` indicates submission has
         *  been read
         */
        const UNREAD_KEY = 'is_unread';
        /**
         * Submission Id
         * @var string
         */
        protected $subId = '';
        /**
         * Status of the submission
         * 
         * Modeled after Wordpress' post status.  Such modeling is required when
         *  using Wordpress' custom post type, but not required in other 
         *  database structures
         * 
         * @var string
         */
        protected $_status = '';
        /**
         * User Id of the submission
         * 
         * Not sure where this is used.
         * @var string
         */
        protected $_user_id = '';
        /**
         * Form Id for the submission
         * @var string
         */
        protected $_form_id = '';
        /**
         * Submission sequence number
         * @var string
         */
        protected $_seq_num = '';
        /**
         * Submission date
         * @var string
         */
        protected $_sub_date = '';
        /**
         * Submission Modified on date
         * @var string
         */
        protected $_mod_date = '';
        /**
         * Array of field submission values using NF_Database_Models_Submission
         * 
         * 
         * @var array
         */
        protected $_field_values = array();
        /**
         * Array of non-field data stored with submission
         * @var array
         */
        protected $extraValues = array();
        /**
         * 
         * @param string|int $id
         */
        public function __construct($id)
        {
        }
        /**
         * Get Submission ID
         *
         * @return int
         */
        public function getId()
        {
        }
        /**
         * @inheritDoc
         * @return int
         */
        public function getSeqNum()
        {
        }
        /**
         * @inheritDoc
         * @param string $format
         * @return string
         */
        public function getSubmissionDate($format = 'm/d/Y')
        {
        }
        /**
         * Filter field values to return only provided keys
         * 
         * NOTE: filter is performed on array KEYS of incoming parameter.  This
         *  enables use of a previously generated `field labels` array, which is
         *  keyed off the same field keys as the submission for perfect matching
         *  of array columns.
         * 
         * @param array $fieldKeys Array keyed on field keys with optional value
         * @return array
         */
        public function filterFieldValues($fieldKeys)
        {
        }
        /**
         * Get Field Value
         *
         * Returns a single submission value by field ID or field key.
         *
         * @param int|string $field_ref
         * @return string
         */
        public function getFieldValue($field_ref)
        {
        }
        /**
         * Get Field Values - from existing NF_Database_Models_Submission
         * 
         * Returns all post meta
         *
         * @return array|mixed
         */
        public function getFieldValues()
        {
        }
        public function getExtraValue($key)
        {
        }
        /**
         * Get Field ID By Key
         *
         * @param $field_key
         * @return mixed
         */
        protected function getFieldIdByKey($field_key)
        {
        }
        /**
         * Set timestamp of export
         * 
         * @param int $unixTimestamp
         * @return NF_Database_Models_SingleSubmissionInterface
         */
        public function setExportDatetime(int $unixTimestamp)
        {
        }
        /**
         * Return bool true if submission has exported datetime set
         * @return bool
         */
        public function wasExported()
        {
        }
        /**
         * Return bool `is submission unread?`
         * 
         * If not set, default is false (submission has been read).  Thus new
         *  submissions must be explicitly set as unread.  Without this, all 
         *  preexisting submissions will be marked as unread and can confuse
         *  existing installations.
         * 
         * @return boolean
         */
        public function isUnread()
        {
        }
        /**
         * Mark the submission as `unread` via post_meta
         */
        public function markAsRead()
        {
        }
        /**
         * Mark the submission as `read` via post_meta
         */
        public function markAsUnread()
        {
        }
    }
    /**
     * Provides and stores collection of submissions for a single form using CPT
     */
    final class NF_Exports_SubmissionCollectionCPT implements \NF_Exports_Interfaces_SubmissionCollectionInterface
    {
        /**
         * Form Id
         * @var string
         */
        protected $formId = '';
        /**
         * Array of NF field objects for the form id
         * 
         * Constructed once, on first request requiring fields; after that, use
         *  previously retrieved property that can be filtered or adjusted as
         *  needed, reducing DB calls
         * 
         * @var array
         */
        protected $fields = [];
        /**
         * Array of labels keyed on field key
         * 
         * Option to use admin_label set on request
         * 
         * @var array
         */
        protected $labels = [];
        /**
         * Array of field types keyed on field key
         * @var array
         */
        protected $fieldTypes = [];
        /**
         * Array of field Ids keyed on field key
         * @var array
         */
        protected $fieldIds = [];
        /**
         * Indexed array collection of single submissions
         * @var SingleSubmission[]
         */
        protected $submissionCollection = [];
        /**
         * Indexed array of field types to be omitted in output
         * @var array
         */
        protected $hiddenFieldTypes = [];
        /**
         * Starting date for filtering submissions
         * 
         * @var int|null
         */
        protected $startDate = \null;
        /**
         * Ending date for filtering submissions
         * 
         * @var int|null
         */
        protected $endDate = \null;
        /**
         * Boolean to filter submissions by `isUnread?`
         * @var bool
         */
        protected $isUnread = \null;
        /**
         * Boolean to filter submissions by `previouslyExported?`
         * @var bool
         */
        protected $previouslyExported = \null;
        /**
         * Maximum amount of submissions to return in a single request
         * 
         * @var int 
         */
        protected $maxReturnCount = \null;
        /**
         * Total count of submissions
         * @var int
         */
        protected $totalCount;
        /**
         * Count of submissions that have been marked `Unread`
         * @var int
         */
        protected $isUnreadCount;
        /**
         * Count of submissions that have been previously exported
         * @var int
         */
        protected $previouslyExportedCount;
        /**
         * Construct submission collection with provided form Id
         * @param string|int $form_id
         */
        public function __construct($form_id)
        {
        }
        /**
         * Return form Id
         * @return int
         */
        public function getFormId()
        {
        }
        /**
         * Return form title
         * @return string
         */
        public function getFormTitle()
        {
        }
        /**
         * Set start and end dates to filter submissions
         * @param int|null $startDate Starting date
         * @param int|null $endDate Ending date
         */
        public function setDateParameters($startDate = \null, $endDate = \null)
        {
        }
        /**
         * Set parameter to filter submissions by `isUnread` = true or false
         * 
         * @param bool $isUnread
         */
        public function setIsUnreadParameter(bool $isUnread = \null)
        {
        }
        /**
         * Set parameter to filter submissions by `previouslyExported` = true or false
         * 
         * @param bool $previouslyExported
         */
        public function setPreviouslyExportedParameter(bool $previouslyExported = \null)
        {
        }
        /**
         * Set max number of submissions to return in a request
         * 
         * @param int $maxReturnCount
         */
        public function setMaxReturnCount($maxReturnCount = \null)
        {
        }
        /**
         * Set all parameters using NF_Database_Models_SubmissionCollectionInterfaceParameters
         * 
         * Using the object ensures all properties are set, with known defaults;
         *  this enables the requesting class to set only values that concerns it
         *  without needing to set any other value or default.  The Submission
         *  Collection class knows that all values have valid paramters and can
         *  immediately run the filter.
         * 
         * @param NF_Database_Models_SubmissionCollectionInterfaceParameters $params
         * @return SubmissionCollectionInterface
         */
        public function filterByParameters(
            /* NF_Database_Models_SubmissionCollectionInterfaceParameters*/
            $params
        )
        {
        }
        /**
         * Filter collection of submissions based on previously set parameters
         * 
         * @return array
         */
        public function filterSubmissions()
        {
        }
        /**
         * Return count of submissions, exported, and unread
         */
        public function getCounts() : array
        {
        }
        /**
         * Add meta query filters
         * 
         * @param array $filter
         * @return array
         */
        protected function addMetaFilters($filter)
        {
        }
        /**
         * Construct/return default filter args array for WP's get_post
         * @return array
         */
        protected function constructDefaultFilter()
        {
        }
        /**
         * Construct meta query for isUnread; empty array if null param
         * 
         * @return array
         */
        protected function constructIsUnreadQuery()
        {
        }
        /**
         * Construct meta query for previously exported; empty array if null parameter
         * 
         * @param bool|null $previouslyExported
         * @return array
         */
        protected function constructPreviouslyExportedQuery()
        {
        }
        /**
         * Construct meta query for start/end dates; empty array if null parameters
         * 
         * @return array
         */
        protected function constructDateQuery()
        {
        }
        /**
         * Return submission collection array
         * @return \NF_Database_Models_SingleSubmissionInterface[]
         */
        public function getSubmissions()
        {
        }
        /**
         * Return array of submission Ids in the collection
         * 
         * Generated at time of request to ensure it is up to date after last
         *  query / construction
         * @return array
         */
        public function getSubmissionIds()
        {
        }
        /**
         * Return array of field labels keyed on field key
         * 
         * If hiddenFieldTypes array is set, labels filtered to hide those types
         * 
         * @param bool|null $useAdminLabels
         * @return array
         */
        public function getLabels($useAdminLabels = \null)
        {
        }
        /**
         * Return array of field types keyed on field key
         * 
         * @return array
         */
        public function getFieldTypes()
        {
        }
        /**
         * Return array of field Ids keyed on field keys
         */
        public function getFieldIds()
        {
        }
        /**
         * Get all fields for the instantiated form Id
         * 
         * Stored as $this->fields for additional use w/o calling DB
         * 
         */
        protected function getFields()
        {
        }
        /**
         * Convert Unix date stamp to Wordpress post date format
         * 
         * @param int|null $incoming
         * @return string
         */
        protected function formatDate(
            /* ?int */
            $incoming = \null
        )
        {
        }
        /**
         * Set field types to be removed before output
         * 
         * Provided as indexed array of NF field types
         * 
         * @param array $hidden
         */
        public function setHiddenFieldTypes(array $hidden = \null)
        {
        }
    }
    /**
     * Entity of parameters to filter a submission collection
     * 
     * Provides a guarantee that any requested or required parameters have a known
     *  default value and type.  The default value for all unset parameters is `null`
     *  to differentiate an unset or purposefully null value from a boolean false or
     *  an empty array.  This tells the caller that the value is not to be used in
     *  a filter, which is different than filtering on false, or empty array.
     * 
     */
    class NF_Exports_SubmissionCollectionFilterParameters
    {
        /**
         * Start date for filtering submissions
         * @var int|null
         */
        protected $startDate = \null;
        /**
         * End date for filtering submissions
         * @var int|null
         */
        protected $endDate = \null;
        /**
         * Boolean to filter submission on `is unread?`
         * @var bool|null
         */
        protected $isUnread = \null;
        /**
         * Boolean to filter submission on `has been previously exported?`
         * @var bool
         */
        protected $previouslyExported = \null;
        /**
         * Maximum records to return
         * @var int
         */
        protected $maxReturnCount = \null;
        /**
         * Boolean to use admin labels in lieu of labels
         * @var bool
         */
        protected $useAdminLabels = \null;
        /**
         * Indexed array of field types to be omitted in output
         * @var array
         */
        protected $hiddenFieldTypes = \null;
        /**
         * Get start date
         * @return int|null
         */
        public function getStartDate()
        {
        }
        /**
         * Get end date
         * @return int|null
         */
        public function getEndDate()
        {
        }
        /**
         * Get IsUnread? boolean
         * @return bool|null
         */
        public function getIsUnread()
        {
        }
        /**
         * Get IsPreviouslyExported? boolean
         * @return bool|null
         */
        public function getPreviouslyExported()
        {
        }
        /**
         * Get MaxReturnCount
         * @return int|null
         */
        public function getMaxReturnCount()
        {
        }
        /**
         * Get UseAdminLabels? boolean
         * @return bool|null
         */
        public function getUseAdminLabels()
        {
        }
        /**
         * Get hidden field types array
         * @return array
         */
        public function getHiddenFieldTypes()
        {
        }
        /**
         * Set start date
         * 
         * @param int|null $startDate
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setStartDate(
            /* int*/
            $startDate = \null
        )
        {
        }
        /**
         * Set end date
         * 
         * @param int|null $endDate
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setEndDate(
            /*int */
            $endDate = \null
        )
        {
        }
        /**
         * Set IsUnread? boolean
         * 
         * @param bool $isUnread
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setIsUnread(bool $isUnread = \null)
        {
        }
        /**
         * Set PreviouslyExported? boolean
         * 
         * @param boolean $previouslyExported
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setPreviouslyExported(bool $previouslyExported = \null)
        {
        }
        /**
         * Set Maximum return count
         * 
         * @param int $maxReturnCount
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setMaxReturnCount(int $maxReturnCount = \null)
        {
        }
        /**
         * Set UseAdminLabels? boolean
         * 
         * @param bool $useAdminLabels
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setUseAdminLabels(bool $useAdminLabels = \null)
        {
        }
        /**
         * Set HiddenFieldTypes array
         * 
         * @param array $hiddenFieldTypes
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function setHiddenFieldTypes(array $hiddenFieldTypes = \null)
        {
        }
        /**
         * Convert instance to associative array
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * Instantiate instance from associative array
         * 
         * @param array $items
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public static function fromArray(array $items)
        {
        }
        /**
         * Magic method to return property
         * 
         * @param string $name
         * @return mixed
         */
        public function __get($name)
        {
        }
        /**
         * 
         * @param string $name
         * @param mixed $value
         * @return NF_Exports_SubmissionCollectionFilterParameters
         */
        public function __set($name, $value)
        {
        }
    }
    /**
     * 
     */
    class NF_Exports_SubmissionCsvExport implements \NF_Exports_Interfaces_SubmissionCsvExportInterface
    {
        /**
         * Submission Collection
         * @var SubmissionCollectionInterface
         */
        public $submissionCollection;
        /** @var SubmissionAggregate */
        protected $submissionAggregate;
        /** @var  SubmissionAggregateCsvExportAdapter */
        protected $submissionAggregateCsvExportAdapter;
        /**
         * Use admin labels boolean
         * @var bool
         */
        protected $useAdminLabels = \false;
        /**
         * Date format
         * @var string
         */
        protected $dateFormat = 'm/d/Y';
        /**
         * Array of submission ids contained in collection
         * 
         * @var array
         */
        protected $submissionIds;
        /**
         * Lookup of NF submission SeqNum by collection Index
         * 
         * @var array
         */
        protected $seqNumLookup;
        /**
         * Field labels keyed on field key
         * @var array
         */
        protected $fieldLabels = [];
        /**
         * Field types keyed on field key
         * @var array
         */
        protected $fieldTypes = [];
        /**
         * Field Ids keyed on field key
         * @var array
         */
        protected $fieldIds = [];
        /**
         * Labels row for CSV
         * @var array
         */
        protected $csvLabels = [];
        /**
         * Complete array for CSV, including labels row
         * @var array
         */
        protected $csvValuesCollection = [];
        /**
         * Generate CSV output and return
         * @return string
         */
        public function handle() : string
        {
        }
        /**
         * Append each submission from the collection as a row
         */
        protected function appendRows()
        {
        }
        /** @inheritDoc */
        public function reverseSubmissionOrder() : array
        {
        }
        /** @inheritDoc */
        public function constructRow($aggregatedKey) : array
        {
        }
        /**
         * Construct string output from previously set params, mark submissions read
         * @return string
         */
        protected function prepareCsv()
        {
        }
        /**
         * For NF CPT, construct lookup from index for SeqNum
         *
         * @param string $aggregatedKey
         * @param SingleSubmission $singleSubmission
         * @return void
         */
        protected function constructSeqNumLookup(string $aggregatedKey, \NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : void
        {
        }
        /**
         * Construct a single row in the CSV from a submission 
         * 
         * @todo Refactor to remove DB call for NF()->form()->field() on each iteration
         * @param SingleSubmission $submission
         * @return array
         */
        protected function constructSubmissionRow(string $aggregatedKey, \NinjaForms\Includes\Entities\SingleSubmission $submission)
        {
        }
        /**
         * Format timestamp for output
         *
         * @param string $timestamp
         * @return string
         */
        protected function formatTimestamp(string $timestamp) : string
        {
        }
        /**
         * Construct labels array
         * 
         * Indexed array of labels, which serves as the column headers
         */
        protected function constructLabels()
        {
        }
        /**
         * Return labels for the CSV, including SeqNum and Date
         *
         * @return array
         */
        public function getLabels() : array
        {
        }
        /**
         * Return array of labels preceding fields
         * 
         * @return array
         */
        protected function getFieldLabelsBeforeFields()
        {
        }
        /**
         * Set submission collection used in generating the CSV
         * 
         * @todo Investigate reason for commented out type declarations
         * @param SubmissionCollectionInterface $submissionCollection
         * @return SubmissionCsvExportInterface
         */
        public function setSubmissionCollection(\NF_Exports_Interfaces_SubmissionCollectionInterface $submissionCollection) : \NF_Exports_Interfaces_SubmissionCsvExportInterface
        {
        }
        /**
         * Set SubmissionAggregateCsvExport Adapter used in generating the CSV
         *
         * @param SubmissionAggregateCsvExportAdapter $submissionAggregateCsvExportAdapter
         * @return SubmissionCsvExportInterface
         */
        public function setSubmissionAggregateCsvExportAdapter(\NinjaForms\Includes\Handlers\SubmissionAggregateCsvExportAdapter $submissionAggregateCsvExportAdapter) : \NF_Exports_Interfaces_SubmissionCsvExportInterface
        {
        }
        /**
         * Set boolean useAdminLabels
         * 
         * @param bool $useAdminLabels
         * @return SubmissionCsvExportInterface
         */
        public function setUseAdminLabels($useAdminLabels) : \NF_Exports_Interfaces_SubmissionCsvExportInterface
        {
        }
        /**
         * Set date format
         * 
         * @param string $dateFormat
         * @return SubmissionCsvExportInterface
         */
        public function setDateFormat(string $dateFormat = \null) : \NF_Exports_Interfaces_SubmissionCsvExportInterface
        {
        }
    }
    /**
     * Writes temporary files for attachment and uploading
     */
    class NF_Exports_TempFileWriter
    {
        /**
         * Content to be written to file
         * 
         * Can send a single string or an array of stringed content
         * @var string|array
         */
        protected $content;
        /**
         *
         * @var resource
         */
        protected $tempFile;
        /**
         * Directory of final file location 
         * @var array
         */
        protected $dir = [];
        /**
         * Temp file name at time of upload, before renaming
         * @var array
         */
        protected $basename = [];
        /**
         * Full file name with path as attached to email
         * @var array
         */
        protected $attachmentFilename = [];
        /**
         * File path information
         * @var array
         */
        protected $fileinfo = [];
        /**
         * Upload directory path
         * @var string
         */
        protected $uploadDir;
        /**
         * Construct with the content to be written
         * @param string $content
         */
        public function __construct($content)
        {
        }
        /**
         * Write files to temporary location
         * @return NfScheduledSubmissionExports\Storage\TempFileWriter
         */
        public function writeFiles()
        {
        }
        /**
         * Returns array of temp filenames, first file name if single
         * @param bool $single
         */
        public function getFileInfo(bool $single = \false)
        {
        }
        public function getAttachmentNames(bool $single = \false)
        {
        }
        protected function constructFileInfo()
        {
        }
        /**
         * Generate the FileInfo for a given filename
         * 
         * @param string $filename
         * @return array
         */
        public static function generateFileInfo($filename)
        {
        }
        /**
         * Write contents to temporary file location
         */
        protected function writeTempFile()
        {
        }
        /**
         * Rename temp file to permanent file name
         * @param string $filename
         * @return string
         */
        protected function renameFile()
        {
        }
        /**
         * Delete file from directory after email with attachment has been sent
         */
        public function dropAttachmentFiles()
        {
        }
        /**
         * Drop (delete) a given filename
         * 
         * @param string $filename
         */
        public static function dropAttachmentFile($filename)
        {
        }
    }
}
namespace NinjaForms\Includes\Factories {
    class SubmissionAggregateFactory
    {
        /**
         * Construct SubmissionAggregate class with data sources
         * 
         * @return SubmissionAggregate 
         */
        public function submissionAggregate() : \NinjaForms\Includes\Handlers\SubmissionAggregate
        {
        }
        /**
         * Constructs SubmissionAggregateCsvExportAdapter with SubmissionAggregate
         * 
         * @return SubmissionAggregateCsvExportAdapter 
         */
        public function SubmissionAggregateCsvExportAdapter() : \NinjaForms\Includes\Handlers\SubmissionAggregateCsvExportAdapter
        {
        }
        /**
         * Construct a Caldera submissions data source
         *
         * @return CalderaSubmissionDataSource
         */
        public function makeCalderaDataSource() : \NinjaForms\Includes\Database\CalderaSubmissionDataSource
        {
        }
        /**
         * Construct a Ninja Forms CPT data source
         *
         * @return CptSubmissionDataSource
         */
        public function makeCptSubmissionDataSource() : \NinjaForms\Includes\Database\CptSubmissionDataSource
        {
        }
        /**
         * Check that both CF entry and values tables exist
         *
         * @return boolean
         */
        protected function cfTablesExist() : bool
        {
        }
    }
    /**
     * Standardize the instantiation of a SubmissionFilter object
     */
    class SubmissionFilterFactory
    {
        /**
         * Empty submission filter with default properties
         *
         * @return SubmissionFilter
         */
        public function unfiltered() : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * SubmissionFilter with start and end dates
         *
         * @param integer $startDate Epoch date
         * @param integer $endDate Epoch date
         * @return SubmissionFilter
         */
        public function startEndDates(int $startDate, int $endDate) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Add logged in user to SubmissionFilter
         *
         * If user is not logged in, value is set to -1 because all non-logged in
         * user submissions are set to user ID = 0, which is not desired output
         *
         * @return SubmissionFilter
         */
        public function loggedInUser() : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Add userId to SubmissionFilter conditionally by WP filter
         *
         * Override SubmissionFilter userId default value if an applied WP filter specifies it 
         *
         * @return SubmissionFilter
         */
        public function maybeLimitByLoggedInUser() : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Return logged in user's ID
         *
         * @return integer If user not logged in, return 0
         */
        protected function getUserId() : int
        {
        }
        /**
         * Provide WP filter to add logged in user to SubmissionFilter
         *
         * Default is to retrieve all submissions, so return FALSE.  This applies a
         * filter that enables external code to change default behaviour.
         * 
         * @return boolean
         */
        protected function provideLimitByLoggedInUserFilter() : bool
        {
        }
    }
}
namespace {
    /**
     * Class NF_Fields_Address
     */
    class NF_Fields_Address extends \NF_Fields_Textbox
    {
        protected $_name = 'address';
        protected $_type = 'address';
        protected $_nicename = 'Address';
        protected $_section = 'userinfo';
        protected $_icon = 'map-marker';
        protected $_templates = 'address';
        protected $_test_value = '123 Main Street';
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_Address2
     */
    class NF_Fields_Address2 extends \NF_Fields_Textbox
    {
        protected $_name = 'address2';
        protected $type = 'address2';
        protected $_nicename = 'Address 2';
        protected $_icon = 'map-marker';
        protected $_section = '';
        protected $_templates = array('address2', 'address');
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Field_Button
     */
    class NF_Fields_Button extends \NF_Abstracts_Field
    {
        protected $_name = 'button';
        protected $_nicename = 'Button';
        protected $_section = '';
        protected $_type = 'button';
        protected $_templates = 'button';
        protected $_settings_only = array('label');
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_Checkbox
     */
    class NF_Fields_Checkbox extends \NF_Abstracts_Input
    {
        protected $_name = 'checkbox';
        protected $_nicename = 'Checkbox';
        protected $_section = 'common';
        protected $_icon = 'check-square-o';
        protected $_type = 'checkbox';
        protected $_templates = 'checkbox';
        protected $_test_value = 0;
        protected $_settings = array('checkbox_default_value', 'checkbox_values', 'checked_calc_value', 'unchecked_calc_value');
        protected $_settings_exclude = array('default', 'placeholder', 'input_limit_set');
        /**
         * NF_Fields_Checkbox constructor.
         * @since 3.0
         */
        public function __construct()
        {
        }
        /**
         * Admin Form Element
         * Display the checkbox on the edit submissions area.
         * @since 3.0
         *
         * @param $id Field ID.
         * @param $value Field value.
         * @return string HTML used for display of checkbox.
         */
        public function admin_form_element($id, $value)
        {
        }
        /**
         * Custom Columns
         * Creates what is displayed in the columns on the submissions page.
         * @since 3.0
         *nf_subs_export_pre_value
         * @param $value checkbox value
         * @param $field field model.
         * @return $value string|void
         */
        public function custom_columns($value, $field)
        {
        }
        /**
         * Filter Merge Tag Value
         * This is what provides the merge tag with the fields value.
         * @since 3.0
         *
         * @param $value Field value
         * @param $field field model
         * @return string|void
         */
        public function filter_merge_tag_value($value, $field)
        {
        }
        /**
         * Filter Merge Tag Value Calc
         * Provides the calculation value when the merge tag is used.
         * @since 3.0
         *
         * @param $value checkbox value
         * @param $field field model
         * @return $field
         */
        public function filter_merge_tag_value_calc($value, $field)
        {
        }
        /**
         * Export Value
         * Determines the value to send to submission export.
         * @since 3.0
         *
         * @param $value checkbox field value
         * @param $field checkbox field model
         * @return string|void
         */
        public function export_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_City
     */
    class NF_Fields_City extends \NF_Fields_Textbox
    {
        protected $_name = 'city';
        protected $_type = 'city';
        protected $_nicename = 'City';
        protected $_section = 'userinfo';
        protected $_icon = 'map-marker';
        protected $_templates = 'city';
        protected $_test_value = 'Cleveland';
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_Confirm
     */
    class NF_Fields_Confirm extends \NF_Abstracts_Input
    {
        protected $_name = 'confirm';
        protected $_type = 'confirm';
        protected $_nicename = 'Confirm';
        protected $_section = 'misc';
        protected $_icon = 'check-circle-o';
        protected $_error_message = '';
        protected $_settings = array('confirm_field');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
        public function validate($field, $data)
        {
        }
    }
    /**
     * Class NF_Fields_CreditCard
     */
    class NF_Fields_CreditCard extends \NF_Abstracts_Field
    {
        protected $_name = 'creditcard';
        protected $_type = 'creditcard';
        protected $_section = 'misc';
        protected $_icon = 'credit-card';
        protected $_templates = '';
        protected $_test_value = '';
        protected $_settings_exclude = array('input_limit_set', 'disable_input');
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_CreditCardCVC
     */
    class NF_Fields_CreditCardCVC extends \NF_Abstracts_Input
    {
        protected $_name = 'creditcardcvc';
        protected $_type = 'creditcardcvc';
        protected $_section = '';
        protected $_icon = 'credit-card';
        protected $_templates = 'textbox';
        protected $_test_value = '1234';
        protected $_settings_exclude = array('input_limit_set', 'disable_input');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_CreditCardExpiration
     */
    class NF_Fields_CreditCardExpiration extends \NF_Abstracts_Input
    {
        protected $_name = 'creditcardexpiration';
        protected $_type = 'creditcardexpiration';
        protected $_section = '';
        protected $_icon = 'credit-card';
        protected $_templates = 'textbox';
        protected $_test_value = '01/2025';
        protected $_settings_exclude = array('input_limit_set', 'disable_input');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_CreditCardFullName
     */
    class NF_Fields_CreditCardFullName extends \NF_Abstracts_Input
    {
        protected $_name = 'creditcardfullname';
        protected $_type = 'creditcardfullname';
        protected $_section = '';
        protected $_icon = 'credit-card';
        protected $_templates = 'textbox';
        protected $_test_value = 'Tester T. Test';
        protected $_settings_exclude = array('input_limit_set', 'disable_input');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_CreditCardNumber
     */
    class NF_Fields_CreditCardNumber extends \NF_Abstracts_Input
    {
        protected $_name = 'creditcardnumber';
        protected $_type = 'creditcardnumber';
        protected $_section = '';
        protected $_icon = 'credit-card';
        protected $_templates = 'textbox';
        protected $_test_value = '4242424242424242';
        protected $_settings_exclude = array('default', 'input_limit_set', 'disable_input');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_Zip
     */
    class NF_Fields_Zip extends \NF_Fields_Textbox
    {
        protected $_name = 'zip';
        protected $_type = 'zip';
        protected $_nicename = 'Zip';
        protected $_section = 'userinfo';
        protected $_icon = 'map-marker';
        protected $_templates = array('zip', 'textbox', 'input');
        protected $_test_value = '37312';
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_CreditCardZip
     */
    class NF_Fields_CreditCardZip extends \NF_Fields_Zip
    {
        protected $_name = 'creditcardzip';
        protected $_type = 'creditcardzip';
        protected $_section = '';
        protected $_icon = 'credit-card';
        protected $_templates = array('zip', 'textbox');
        protected $_settings_exclude = array('disable_input', 'input_limit_set');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_Date
     */
    class NF_Fields_Date extends \NF_Fields_Textbox
    {
        protected $_name = 'date';
        protected $_nicename = 'Date';
        protected $_section = 'common';
        protected $_icon = 'calendar';
        protected $_type = 'date';
        protected $_templates = 'date';
        protected $_test_value = '12/12/2022';
        protected $_settings = array('date_mode', 'date_default', 'date_format', 'year_range', 'time_settings');
        protected $_settings_exclude = array('default', 'input_limit_set', 'disable_input');
        public function __construct()
        {
        }
        public function process($field, $data)
        {
        }
        private function get_format($format)
        {
        }
        /**
         * 
         * 
         * @since  3.0
         * @param  array  $field  Array of field settings
         * @return void
         */
        public function localizeField($field)
        {
        }
        public function custom_columns($field_value, $field)
        {
        }
        public function filter_csv_value($field_value, $field)
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        private function stringify_value($field_value, $field)
        {
        }
        private function get_hours_options($hour, $field)
        {
        }
        private function get_minutes_options($minute, $field)
        {
        }
        /**
         * Filter Merge Tag Value
         * This is what provides the merge tag with the fields value.
         * @since 3.0
         *
         * @param $value Field value
         * @param $field field model
         * @return string|void
         */
        public function filter_merge_tag_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_Email
     */
    class NF_Fields_Email extends \NF_Abstracts_UserInfo
    {
        protected $_name = 'email';
        protected $_nicename = 'Email';
        protected $_type = 'email';
        protected $_section = 'userinfo';
        protected $_icon = 'envelope-o';
        protected $_templates = 'email';
        protected $_test_value = 'foo@bar.dev';
        protected $_settings_all_fields = array('custom_name_attribute', 'personally_identifiable');
        public function __construct()
        {
        }
        public function validate($field, $data)
        {
        }
        public function filter_default_value($default_value, $field_class, $settings)
        {
        }
    }
    /**
     * Class NF_Fields_FirstName
     */
    class NF_Fields_FirstName extends \NF_Abstracts_UserInfo
    {
        protected $_name = 'firstname';
        protected $_type = 'firstname';
        protected $_nicename = 'First Name';
        protected $_section = 'userinfo';
        protected $_icon = 'user';
        protected $_templates = 'firstname';
        protected $_test_value = 'John';
        public function __construct()
        {
        }
        public function filter_default_value($default_value, $field_class, $settings)
        {
        }
    }
    /**
     * Class NF_Fields_HTML
     */
    class NF_Fields_HTML extends \NF_Abstracts_Input
    {
        protected $_name = 'html';
        protected $_section = 'layout';
        protected $_icon = 'code';
        protected $_aliases = array('html');
        protected $_type = 'html';
        protected $_templates = 'html';
        protected $_settings_only = array('label', 'default', 'classes');
        protected $_use_merge_tags_include = array('calculations');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
        /**
         * Localizaiton filter.
         * @param Array $field The field to be localized.
         * @return Array The localized field.
         */
        public function localizeField($field)
        {
        }
        /**
         * Bypass method for wp_filter_content_tags.
         * @param String $content The HTML content.
         * @return String The filtered content.
         */
        private function filter_tags($content)
        {
        }
    }
    /**
     * Class NF_Fields_Hidden
     */
    class NF_Fields_Hidden extends \NF_Abstracts_Input
    {
        protected $_name = 'hidden';
        protected $_nicename = 'Hidden';
        protected $_section = 'misc';
        protected $_icon = 'eye-slash';
        protected $_type = 'hidden';
        protected $_templates = 'hidden';
        protected $_wrap_template = 'wrap-no-label';
        protected $_settings_only = array('key', 'label', 'default', 'admin_label');
        protected $_use_merge_tags_include = array('calculations');
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_FirstName
     */
    class NF_Fields_LastName extends \NF_Abstracts_UserInfo
    {
        protected $_name = 'lastname';
        protected $_type = 'lastname';
        protected $_nicename = 'Last Name';
        protected $_section = 'userinfo';
        protected $_icon = 'user';
        protected $_templates = 'lastname';
        protected $_test_value = 'Doe';
        public function __construct()
        {
        }
        public function filter_default_value($default_value, $field_class, $settings)
        {
        }
    }
    /**
     * Class NF_Fields_CheckboxList
     */
    class NF_Fields_ListCheckbox extends \NF_Abstracts_List
    {
        protected $_name = 'listcheckbox';
        protected $_type = 'listcheckbox';
        protected $_nicename = 'Checkbox List';
        protected $_section = 'common';
        protected $_icon = 'list';
        protected $_templates = 'listcheckbox';
        protected $_old_classname = 'list-checkbox';
        public function __construct()
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        public function get_calc_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_CountryList
     */
    class NF_Fields_ListCountry extends \NF_Abstracts_List
    {
        protected $_name = 'listcountry';
        protected $_type = 'listcountry';
        protected $_nicename = 'Country';
        protected $_section = 'userinfo';
        protected $_templates = array('listcountry', 'listselect');
        public function __construct()
        {
        }
        public function custom_columns($value, $field)
        {
        }
        public function filter_options($options, $settings)
        {
        }
        private function sort_options_by_label($option_a, $option_b)
        {
        }
        public function filter_options_preview($field_settings)
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        private function get_default_value_options()
        {
        }
        private function get_options()
        {
        }
        public function filter_csv_value($field_value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_ListImage
     */
    class NF_Fields_ListImage extends \NF_Abstracts_List
    {
        protected $_name = 'listimage';
        protected $_type = 'listimage';
        protected $_nicename = 'Select Image';
        protected $_section = 'common';
        protected $_icon = 'image';
        protected $_templates = 'listimage';
        protected $option_type = 'radio';
        protected $_settings = ['label', 'image_options', 'show_option_labels', 'allow_multi_select', 'list_orientation', 'num_columns'];
        protected $_settings_exclude = ['options'];
        public function __construct()
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        /*
         * Appropriate output for a column cell in submissions list.
         */
        public function custom_columns($value, $field)
        {
        }
        public function get_calc_value($value, $field)
        {
        }
        public function localizeField($field)
        {
        }
    }
    /**
     * Class NF_Fields_MultiselectList
     */
    class NF_Fields_ListMultiselect extends \NF_Abstracts_List
    {
        protected $_name = 'listmultiselect';
        protected $_type = 'listmultiselect';
        protected $_nicename = 'Mulit-Select';
        protected $_section = 'common';
        protected $_templates = 'listselect';
        protected $_old_classname = 'list-multiselect';
        protected $_settings = array('multi_size');
        public function __construct()
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        public function get_calc_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_RadioList
     */
    class NF_Fields_ListRadio extends \NF_Abstracts_List
    {
        protected $_name = 'listradio';
        protected $_type = 'listradio';
        protected $_section = 'common';
        protected $_icon = 'dot-circle-o';
        protected $_templates = 'listradio';
        protected $_old_classname = 'list-radio';
        public function __construct()
        {
        }
        public function get_calc_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_SelectList
     */
    class NF_Fields_ListSelect extends \NF_Abstracts_List
    {
        protected $_name = 'listselect';
        protected $_type = 'listselect';
        protected $_nicename = 'Select';
        protected $_section = 'common';
        protected $_icon = 'chevron-down';
        protected $_templates = 'listselect';
        protected $_old_classname = 'list-select';
        public function __construct()
        {
        }
        public function get_calc_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_ListState
     */
    class NF_Fields_ListState extends \NF_Abstracts_List
    {
        protected $_name = 'liststate';
        protected $_type = 'liststate';
        protected $_nicename = 'US States';
        protected $_section = 'userinfo';
        protected $_icon = 'map-marker';
        protected $_templates = array('liststate', 'listselect');
        protected $_old_classname = 'list-select';
        public function __construct()
        {
        }
        private function get_options()
        {
        }
    }
    /**
     * Class NF_Fields_Note
     */
    class NF_Fields_Note extends \NF_Fields_Hidden
    {
        protected $_name = 'note';
        protected $_type = 'note';
        protected $_nicename = 'Note';
        protected $_section = '';
        protected $_icon = 'sticky-note-o';
        protected $_templates = 'null';
        protected $_aliases = array('notes', 'info');
        protected $_settings_only = array('label', 'default');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_Number
     */
    class NF_Fields_Number extends \NF_Abstracts_Input
    {
        protected $_name = 'number';
        protected $_section = 'misc';
        protected $_icon = 'hashtag';
        protected $_type = 'number';
        protected $_templates = 'number';
        protected $_test_value = 0;
        protected $_settings = array('number');
        protected $_settings_exclude = array('input_limit_set', 'disable_input');
        public function __construct()
        {
        }
        public function get_parent_type()
        {
        }
    }
    /**
     * Class NF_Fields_Password
     */
    class NF_Fields_Password extends \NF_Abstracts_Input
    {
        protected $_name = 'password';
        protected $_nicename = 'Password';
        protected $_section = '';
        protected $_type = 'password';
        protected $_templates = array('password', 'textbox', 'input');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_PasswordConfirm
     */
    class NF_Fields_PasswordConfirm extends \NF_Fields_Password
    {
        protected $_name = 'passwordconfirm';
        protected $_type = 'passwordconfirm';
        protected $_nicename = 'Password Confirm';
        protected $_section = '';
        protected $_error_message = '';
        protected $_settings = array('confirm_field');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
        public function validate($field, $data)
        {
        }
        private function get_password_fields($data)
        {
        }
        private function is_matching_values($a, $b)
        {
        }
        private function get_error_message()
        {
        }
    }
    /**
     * Class NF_Fields_Phone
     */
    class NF_Fields_Phone extends \NF_Fields_Textbox
    {
        protected $_name = 'phone';
        protected $_nicename = 'Phone';
        protected $_section = 'userinfo';
        protected $_icon = 'phone';
        protected $_type = 'textbox';
        protected $_templates = 'tel';
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_Product
     */
    class NF_Fields_Product extends \NF_Abstracts_Input
    {
        protected $_name = 'product';
        protected $_section = '';
        protected $_icon = 'tag';
        protected $_aliases = array();
        protected $_type = 'product';
        protected $_templates = array('product', 'textbox', 'hidden', 'listselect');
        protected $_test_value = '0';
        protected $processing_fields = array('quantity', 'modifier', 'shipping', 'tax', 'total');
        protected $_settings = array('product_use_quantity', 'product_price', 'product_type', 'product_type');
        protected $_settings_exclude = array('input_limit_set', 'disable_input', 'required');
        public function __construct()
        {
        }
        public function process($product, $data)
        {
        }
        /**
         * Validate
         *
         * @param $field
         * @param $data
         * @return array $errors
         */
        public function validate($field, $data)
        {
        }
        public function filter_required_setting($field)
        {
        }
        public function merge_tag_value($value, $field)
        {
        }
        public function custom_columns($value, $field, $sub_id)
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        /**
         * Determine currency symbol
         *
         * @return string
         */
        protected function getCurrencySymbol() : string
        {
        }
    }
    /**
     * Class NF_Fields_ProductQuantity
     */
    class NF_Fields_Quantity extends \NF_Fields_Number
    {
        protected $_name = 'quantity';
        protected $_section = '';
        protected $_icon = 'hashtag';
        protected $_aliases = array();
        protected $_type = 'quantity';
        protected $_templates = 'number';
        protected $_test_value = 'Lorem ipsum';
        protected $_settings = array('product_assignment', 'number');
        protected $_settings_exclude = array('required', 'input_limit_set');
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Fields_Recaptcha
     */
    class NF_Fields_Recaptcha extends \NF_Abstracts_Field
    {
        protected $_name = 'recaptcha';
        protected $_type = 'recaptcha';
        protected $_section = 'misc';
        protected $_icon = 'filter';
        protected $_templates = 'recaptcha';
        protected $_test_value = '';
        protected $_settings = array('label', 'classes');
        public function __construct()
        {
        }
        public function localize_settings($settings, $form)
        {
        }
        public function validate($field, $data)
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_RecaptchaV3
     *
     * This is a dynamically injected field based on if a form has the reCAPTCHA action.
     * It doesn't appear in the builder.
     */
    class NF_Fields_RecaptchaV3 extends \NF_Abstracts_Field
    {
        protected $_name = 'recaptcha_v3';
        protected $_type = 'recaptcha_v3';
        protected $_templates = 'recaptcha-v3';
        protected $_show_in_builder = \false;
    }
    /**
     * Class NF_Fields_Repeater
     */
    class NF_Fields_Repeater extends \NF_Abstracts_Field
    {
        protected $_name = 'repeater';
        protected $_section = 'layout';
        protected $_icon = 'clone';
        protected $_aliases = array('repeater');
        protected $_type = 'repeater';
        protected $_templates = 'repeater';
        protected $_wrap_template = 'wrap-no-label';
        protected $_settings_only = array('label', 'classes', 'description', 'help_text');
        public function __construct()
        {
        }
        public function display_filter($fieldset, $form)
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        /**
         * Apply before field filters.
         * @param Array $field
         * @return Array
         */
        private function before_field($field)
        {
        }
        /**
         * Apply after field filters.
         * @param Array $field
         * @return Array
         */
        private function after_field($field)
        {
        }
        /**
         * Custom Columns
         * Creates what is displayed in the columns on the submissions page.
         * @since 3.4.34
         *  nf_subs_export_pre_value
         * @param $value checkbox value
         * @param $field field model.
         * @return $value string|void
         */
        public function custom_columns($value, $field)
        {
        }
    }
    /**
     * Class NF_Field_Shipping
     */
    class NF_Fields_Shipping extends \NF_Abstracts_Input
    {
        protected $_name = 'shipping';
        protected $_section = '';
        protected $_icon = 'truck';
        protected $_aliases = array();
        protected $_type = 'shipping';
        protected $_templates = 'shipping';
        protected $_test_value = '0.00';
        protected $_settings = array('shipping_type', 'shipping_cost', 'shipping_options');
        protected $_settings_exclude = array('input_limit_set', 'disable_input', 'required');
        public function __construct()
        {
        }
        public function add_setting_group($groups)
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        public function merge_tag_value($value, $field)
        {
        }
    }
    /**
     * Class NF_Fields_Spam
     */
    class NF_Fields_Spam extends \NF_Abstracts_Input
    {
        protected $_name = 'spam';
        protected $_type = 'spam';
        protected $_section = 'misc';
        protected $_icon = 'ban';
        protected $_templates = 'textbox';
        protected $_settings = array('spam_answer');
        public function __construct()
        {
        }
        /**
         * Validate
         *
         * @param $field
         * @param $data
         * @return array $errors
         */
        public function validate($field, $data)
        {
        }
        public function get_parent_type()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_StarRating
     */
    class NF_Fields_StarRating extends \NF_Abstracts_Input
    {
        protected $_name = 'starrating';
        protected $_section = 'misc';
        protected $_icon = 'star-half-o';
        protected $_aliases = array('rating');
        protected $_type = 'starrating';
        protected $_templates = 'starrating';
        protected $_settings_only = array('label', 'label_pos', 'default', 'number_of_stars', 'required', 'classes', 'key', 'admin_label');
        public function __construct()
        {
        }
    }
    /**
     * Class NF_Field_Button
     */
    class NF_Fields_Submit extends \NF_Fields_Button
    {
        protected $_name = 'submit';
        protected $_section = 'common';
        protected $_icon = 'square';
        protected $_type = 'submit';
        protected $_templates = 'submit';
        protected $_wrap_template = 'wrap-no-label';
        protected $_settings = array('label', 'timed_submit', 'processing_label', 'classes', 'key');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
    /**
     * Class NF_Fields_Terms
     */
    class NF_Fields_Terms extends \NF_Fields_ListCheckbox
    {
        protected $_name = 'terms';
        protected $_type = 'terms';
        protected $_nicename = 'Terms List';
        protected $_section = '';
        protected $_icon = 'tags';
        protected $_templates = array('terms', 'listcheckbox');
        protected $_settings = array('taxonomy', 'add_new_terms');
        protected $_settings_exclude = array('required');
        protected $_excluded_taxonomies = array('post_format');
        public function __construct()
        {
        }
        public function process($field, $data)
        {
        }
        public function init_settings()
        {
        }
        public function active_taxonomy_field_check($field)
        {
        }
        public function add_term_options($field)
        {
        }
        public function merge_tag_value($value, $field)
        {
        }
        public function get_parent_type()
        {
        }
    }
    /**
     * Class NF_Field_Textarea
     */
    class NF_Fields_Textarea extends \NF_Abstracts_Input
    {
        protected $_name = 'textarea';
        protected $_section = 'common';
        protected $_icon = 'paragraph';
        protected $_type = 'textarea';
        protected $_templates = 'textarea';
        protected $_test_value = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.';
        protected $_settings = array('input_limit_set', 'rte_enable', 'rte_media', 'rte_mobile', 'disable_browser_autocomplete', 'textarea_rte', 'disable_rte_mobile', 'textarea_media');
        public function __construct()
        {
        }
        public function admin_form_element($id, $value)
        {
        }
        public function filter_csv_value($field_value, $field)
        {
        }
    }
    /**
     * Class NF_Field_Total
     */
    class NF_Fields_Total extends \NF_Abstracts_Input
    {
        protected $_name = 'total';
        protected $_section = '';
        protected $_icon = 'money';
        protected $_aliases = array();
        protected $_type = 'total';
        protected $_templates = 'total';
        protected $_test_value = '0.00';
        protected $_settings_exclude = array('placeholder', 'default', 'input_limit_set', 'disable_input', 'required');
        public function __construct()
        {
        }
        public function process($total, $data)
        {
        }
    }
    /**
     * Class NF_Fields_Unknown
     */
    class NF_Fields_Unknown extends \NF_Fields_Hidden
    {
        protected $_name = 'unknown';
        protected $_type = 'unknown';
        protected $_section = '';
        protected $_icon = 'question';
        protected $_templates = 'null';
        protected $_aliases = array();
        protected $_settings_only = array('label', 'default');
        public function __construct()
        {
        }
        public function validate($field, $data)
        {
        }
        function hide_field_type($field_types)
        {
        }
        public static function create($field)
        {
        }
    }
    /**
     * Class NF_Fields_Hr
     */
    class NF_Fields_Hr extends \NF_Abstracts_Input
    {
        protected $_name = 'hr';
        protected $_section = 'layout';
        protected $_icon = 'arrows-h';
        protected $_aliases = array('html');
        protected $_type = 'hr';
        protected $_templates = 'hr';
        protected $_settings_only = array('classes');
        public function __construct()
        {
        }
        function hide_field_type($field_types)
        {
        }
    }
}
namespace NinjaForms\Includes\Handlers {
    /**
     * Converts timestamps between formats, cognizant of WordPress settings
     *
     * This class is aware of the WordPress timezone settings and can convert
     * stringed times into integer timestamps and vice-versa, relieving all other
     * classes of this responsibility. 
     */
    class DateTimeConverter
    {
        /**
         * Convert datetime string into epoch integer adjusted for WP timezone
         *
         * @param string $dateTime
         * @return integer
         */
        public static function localizeDateTimeStringIntoEpoch(string $dateTimeString) : int
        {
        }
        /**
         * Convert timestamp into local time adjusted for WP timezone
         *
         * @param integer $epochTimestamp
         * @param string|null $format
         * @return string
         */
        public static function localizeEpochIntoString(int $epochTimestamp, ?string $format = 'Y-m-d H:i:s') : string
        {
        }
        /**
         *  Returns the blog timezone
         *
         * Gets timezone settings from the db. If a timezone identifier is used just
         * turns it into a DateTimeZone. If an offset is used, it tries to find a
         * suitable timezone. If all else fails it uses UTC.
         *
         * credit:
         * https://wordpress.stackexchange.com/questions/198435/how-to-convert-datetime-to-display-time-based-on-wordpress-timezone-setting#198453
         * @return \DateTimeZone The blog timezone
         */
        public static function getWpTimezoneSetting() : \DateTimeZone
        {
        }
        /**
         * Returns stored WP options values for timezone_string, gmt_offset
         *
         * @return array
         */
        protected static function getWpTimezoneOptions() : array
        {
        }
    }
    /**
     * Honor Field contract providing NF Field object methods
     *
     * Provides functionality normally handled by the field object created by
     * \Ninja_Forms()->form()->get_field( $fieldId )
     * 
     * 
     */
    class Field implements \NinjaForms\Includes\Contracts\Field
    {
        /**
         * Field Id
         *
         * @var int
         */
        protected $id = 0;
        /**
         * Field type
         *
         * @var string
         */
        protected $type = '';
        /**
         * Field settings
         *
         * @var array
         */
        protected $settings = [];
        /**
         * @inheritDoc
         */
        public function get_id() : int
        {
        }
        /** @inheritDoc */
        public function get_tmp_id()
        {
        }
        /** @inheritDoc */
        public function get_type() : string
        {
        }
        /** @inheritDoc */
        public function get_setting($setting, $default = FALSE)
        {
        }
        /** @inheritDoc */
        public function get_settings() : array
        {
        }
        /** @inheritDoc */
        public function update_setting($key, $value) : \NinjaForms\Includes\Handlers\Field
        {
        }
        /** @inheritDoc */
        public function update_settings($data) : \NinjaForms\Includes\Handlers\Field
        {
        }
        /** @inheritDoc */
        public function delete()
        {
        }
        /** @inheritDoc */
        public function find($parent_id = '', array $where = array()) : array
        {
        }
        /** @inheritDoc */
        public function get_object_settings($obj_array) : array
        {
        }
        /** @inheritDoc */
        public function save()
        {
        }
        /** @inheritDoc */
        public function _insert_row($data = array()) : void
        {
        }
        /** @inheritDoc */
        public function cache($cache = '') : \NinjaForms\Includes\Handlers\Field
        {
        }
        /** @inheritDoc */
        public function add_parent($parent_id, $parent_type) : \NinjaForms\Includes\Handlers\Field
        {
        }
        /** @inheritDoc */
        public static function import(array $settings, $field_id = '', $is_conversion = FALSE) : void
        {
        }
        /**
         * Construct entity from associative array
         *
         * @param array $items
         * @return Field
         */
        public static function fromArray(array $items) : \NinjaForms\Includes\Handlers\Field
        {
        }
        /**
         * Magic method getter for properties
         *
         * @param string $name
         * @return void
         */
        public function __get($name)
        {
        }
        /**
         * Magic method setter for properties
         *
         *
         * @param string $name
         * @param mixed $value
         */
        public function __set(string $name, $value)
        {
        }
    }
}
namespace {
    /**
     * Handles data of a FieldsetRepeater
     * 
     * Fieldset repeater field data are stored as part of the single fieldset
     * repeater field.  This includes both settings and submission data.  Since these
     * data are not managed by NF standard data handling, this class manages it.
     * 
     * Requests for a field can be made by either an (int) field id or a 
     * (string) field reference, which prior to fieldset repeaters had been
     * for the field key only.  
     * 
     * Fieldset fields are stored as {fieldsetRepeaterFieldId}{fieldsetDelimiter}{fieldsetFieldId}{submissionIndexDelimiter}{submissionIndex}
     * 
     * FieldSettings are passed into this class so that this class is not dependent
     * on NF core
     */
    class NF_Handlers_FieldsetRepeater
    {
        /**
         * Delimiter separating fieldId from fieldsetFieldId
         * 
         * Fieldset fields are individual fields within a fieldset.
         * 
         * @var string
         */
        protected $fieldsetDelimiter = '.';
        /**
         * Delimiter that uniquely identifies multiple fieldset repeater submissions
         * 
         * Fieldset Repeaters can have multiple values submitted on any given 
         *  submission.  Each repeated value for a field in the fieldset is
         * delimited in the submission data with an incremented index value
         * @var string
         */
        protected $submissionIndexDelimiter = '_';
        /**
         * Returns labels for the fieldset's fields keyed on id of each fieldset field
         * 
         * @param string $fieldId ID of the Fieldset Repeater field
         * @param array $fieldSettings Provided by (obj)$field->get_settings()
         * @param bool $useAdminLabels
         * @return array
         */
        public function getFieldsetLabels($fieldId, $fieldSettings, $useAdminLabels = \false)
        {
        }
        /**
         * Returns fieldsetField types keyed on fieldsetField ids
         * @param string $fieldId ID of the Fieldset Repeater field
         * @param array $fieldSettings Provided by (obj)$field->get_settings()
         * @return array
         */
        public function getFieldsetTypes($fieldId, $fieldSettings)
        {
        }
        /**
         * Given a field reference (ID or Key), return boolean for 'is repeater field'
         * 
         * Determines if the given field reference is a fieldset repeater construct.
         *  This is NOT the parent field; this is a request for a child field within
         *  the fieldset repeater.  The field settings and values for such a field
         *  are stored differently than a standard field, so we need to know how
         *  to make requests for its settings/data.
         * 
         * For disambiguation, a fieldset repeater field
         * request for a specific field within the fieldset is in the form of: 
         * {fieldsetFieldId}{fieldsetDelimiter}{submissionIndexDelimiter}
         * 
         * 
         * @param int|string $fieldReference ID or key for the field
         * @return bool
         */
        public function isRepeaterFieldByFieldReference($fieldReference)
        {
        }
        /**
         * Determine if data matches fieldset repeater construct
         *
         * When given only a submission value without any meta data, check the
         * construct of the value to asssert with some level of confidence that the
         * value is from a fieldset repeater.
         *
         * Logic: 
         *  - is submission empty? then NO, we don't assert is is fieldset repeater
         *    data
         *  - can the array key be parsed as a fieldset repeater key?  If not, then
         *    NO...
         *  - is each value an array with 'id' and 'value' keys, and the `id`
         *    matches the id of its parent?  If not, then NO...
         *
         * If  all the above conditions  are met for every entry in the submission,
         * we assert that the submission value is that of a fieldset repeater.
         * 
         *  
         * @param array $submission
         * @return boolean
         */
        public function isFieldsetData(array $submission)
        {
        }
        /**
         * Parse field id, fieldset id, and submission index
         *
         * Returns array of fieldId, fieldsetFieldId, submissionId
         * If failing, fieldsetFieldId = -1
         * 
         * @param string $reference
         * @return array
         */
        public function parseSubmissionReference($reference)
        {
        }
        /**
         * Given field reference, return field Id and fieldset field id
         * 
         * Fieldset field is a field within the fieldset repeater.  The child's field
         *  settings and its submission data are not stored individually in the
         *  field or submission tables, but rather as nested data inside the
         *  parent's keyed location.
         * 
         * Caller should ensure field is fieldset type before calling.
         * 
         * @param string $fieldReference
         *
         * @return array Keys: 'fieldId', 'fieldsetFieldId'
         */
        public function parseFieldsetFieldReference($fieldReference)
        {
        }
        /**
         * Parses fieldsetFieldId and submissionIndex keys 
         *
         * Given string of expect fieldsetField and submissionIndex as a key under
         * which submission data is stored, returns the fieldsetFieldId and
         * submissionIndex id 
         * 
         * If cannot be parsed as expected, default values of -1 are returned to
         * notify of failure
         * 
         * @param string $submissionIndex
         * @return array
         */
        public function parseSubmissionIndex($submissionIndex)
        {
        }
        /**
         * Returns field type of a field within a fieldset, given the field reference
         * 
         * Field reference is the id of the field WITHIN the fieldset.  The fieldset
         *  has a numerical field id under which all settings and submission values
         *  are stored for any field within the fieldset.  Access to that setting
         *  and submission data are not handled by the standard core functions and
         *  are done through this class.
         * 
         * @param string $fieldsetFieldId Fieldset Field reference
         * @param array $fieldSettings Field settings (from (obj)$field->get_settings())
         * @return string
         */
        public function getFieldtype($fieldsetFieldId, $fieldSettings)
        {
        }
        /**
         * Extract all repeater submission values for a given fieldset field
         * 
         * Fieldset data is all stored within the main fieldset field.  To prevent
         *  every caller from having to know the internal structure of the stored
         *  data, this method enables callers to provide the requested Fieldset
         *  Field's reference id with the full submission data and receive in 
         *  return all the submitted values for that given field.
         * 
         * @param string $fieldsetFieldId Fieldset Field reference
         * @param array $fieldSubmissionValue Submission data for entire fieldset
         */
        public function extractSubmissionsByFieldsetField($fieldsetFieldId, $fieldSubmissionValue)
        {
        }
        /**
         * Extract fieldset repeater submissions by submission index and fieldset
         * field
         *
         * Unknown values can be passed as empty string or arrays; the method will
         * fill in what it can and set default values for those it can't
         * 
         * @todo Refactor this method after unit testing is in place.  It is being
         * used to share a common structure for output but refactoring should wait
         * until unit testing can ensure the data structure of responses don't
         * change during refactor.
         *
         * @param string $fieldId
         * @param array $fieldSubmissionValue Submission data array for entire field
         * @param array $fieldSettings Field settings (from
         * (obj)$field->get_settings())
         * @return array Array of submission values
         *
         * {submissionIndex}=> {fieldsetFieldId}=>['value'=>{submitted value}
         *      'type'=> {field type}, 'label'=> {label}
         * ]
         */
        public function extractSubmissions($fieldId, $fieldSubmissionValue, $fieldSettings, $useAdminLabels = \false)
        {
        }
    }
    class NF_Handlers_LocaleNumberFormatting
    {
        const NBSP = '&nbsp;';
        protected $locale;
        public function __construct($locale)
        {
        }
        public static function create()
        {
        }
        public function locale_decode_number($number)
        {
        }
        public function locale_encode_number($number, $decimal = \null, $thousand = \null)
        {
        }
        public function locale_decode_equation($eq)
        {
        }
    }
}
namespace NinjaForms\Includes\Handlers {
    /**
     * Sanitize output for enhanced functionality while maintaining security
     */
    class Sanitizer
    {
        const DISALLOWED_SCRIPT_TRIGGERS = [
            '/<\\s*(script)/i',
            // < script (includes empty spaces after opening tag)
            '/(onload)/i',
            // word 'onload'
            '/(onerror)/i',
            // word 'onerror'
            '/(onfocus)/i',
            // word 'onfocus'
            '/(javascript)/i',
        ];
        /**
         * Block disallowed script triggering text
         *
         * @param string $string
         * @return string
         */
        public static function preventScriptTriggerInHtmlOutput(string $string) : string
        {
        }
    }
    /**
     * Aggregates submissions from all provided data sources
     *
     * Data sources include NF submissions stored as posts; may include pre-existing
     * Caldera Forms submissions
     */
    class SubmissionAggregate
    {
        /**
         * NF Id of the master form
         *
         * There can be multiple forms in the aggregate; the master form defines the
         * fields and the data within the aggregate.
         *
         * @var string
         */
        protected $masterFormId = '';
        /** @var SubmissionFilter */
        protected $submissionFilter;
        /**
         * Collection of submission data sources
         *
         * @var SubmissionDataSource[];
         */
        protected $dataSourceCollection = [];
        /**
         * Collection of all SingleSubmissions
         * 
         * Indexed collection of submissions meeting the filtering parameters
         *
         * @var SingleSubmission[]
         */
        protected $aggregatedSubmissions = [];
        /**
         * Collection of SubmissionFields defining the form
         *
         * @var SubmissionField[]
         */
        protected $submissionFieldCollection = [];
        /**
         * Filter submissions to return a collection of SingleSubmission meta data only
         *
         * @param string $formId
         * @return array
         */
        public function filterSubmissions(\NinjaForms\Includes\Entities\SubmissionFilter $submissionFilter) : array
        {
        }
        /**
         * Retrieve a single submission populated with submission/extra values
         *
         * Also populates the submissionAggregate such that the aggregate can be
         * passed for handling elsewhere
         * 
         * @param SingleSubmission $singleSubmission
         * @return SingleSubmission
         */
        public function requestSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Retrieve a submissions by precise list of submissions IDs
         * 
         * @param SubmissionFilter $submissionFilter
         * @return SubmissionFilter
         */
        public function requestSubmissionsByIds(\NinjaForms\Includes\Entities\SubmissionFilter $submissionFilter) : \NinjaForms\Includes\Entities\SubmissionFilter
        {
        }
        /**
         * Retrieve submissionValues from submission at a given aggregated key
         *
         * @param string $key
         * @return SingleSubmission
         * @see constructUniqueAgreggatedSubmissionKey()
         */
        public function getSubmissionValuesByAggregatedKey(string $key) : \NinjaForms\Includes\Entities\SingleSubmission
        {
        }
        /**
         * Delete a single submission
         *
         * @param SingleSubmission $singleSubmission
         * @return SubmissionAggregate
         */
        public function deleteSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Handlers\SubmissionAggregate
        {
        }
        /**
         * Restore a single submission
         *
         * @param SingleSubmission $singleSubmission
         * @return SubmissionAggregate
         */
        public function restoreSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Handlers\SubmissionAggregate
        {
        }
        /**
         * Update a single submission
         *
         * @param SingleSubmission $singleSubmission
         * @return SubmissionAggregate
         */
        public function updateSingleSubmission(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : \NinjaForms\Includes\Handlers\SubmissionAggregate
        {
        }
        /**
         * Construct field definition collection from formId
         *
         * @param string $formId
         * @return void
         */
        protected function constructFieldDefinitionCollection(string $formId) : void
        {
        }
        /**
         * Extract option array from a given array
         * 
         * Ensures that required defaults are set if missing in incoming array
         *
         * @param array $optionDefinition
         * @return array
         */
        protected function extractOptionsFromDefinition(array $optionDefinition) : array
        {
        }
        /**
         * Return the Ninja Forms field collection
         *
         * @param string $formId
         * @return array
         */
        protected function getFieldsCollection(string $formId) : array
        {
        }
        /**
         * Construct a unique aggregated submission key for each submission
         *
         * Uses the dataSource's id plus the submission record id.  Each submission
         * is is unique within its dataSource, and each dataSource is unique, thus
         * the combined string is unique
         *
         * @param SingleSubmission $singleSubmission
         * @return string
         */
        protected function constructUniqueAgreggatedSubmissionKey(\NinjaForms\Includes\Entities\SingleSubmission $singleSubmission) : string
        {
        }
        /**
         * Set collection of submission data sources
         *
         * @param  SubmissionDataSource  $dataSource Submission data source
         *
         * @return  SubmissionAggregate
         */
        public function addDataSource(\NinjaForms\Includes\Contracts\SubmissionDataSource $dataSource) : \NinjaForms\Includes\Handlers\SubmissionAggregate
        {
        }
        /**
         * Get collection of SubmissionFields
         *
         * @return  SubmissionField[]
         */
        public function getFieldDefinitionCollection() : array
        {
        }
        /**
         * Get submission count
         *
         * @return integer
         */
        public function getSubmissionCount() : int
        {
        }
        /**
         * Get indexed collection of submissions meeting the filtering parameters
         *
         * @return  SingleSubmission[]
         */
        public function getAggregatedSubmissions() : array
        {
        }
        /**
         * Get fields and the data within the aggregate.
         *
         * @return  string
         */
        public function getMasterFormId() : string
        {
        }
        /**
         * Set keyed collection of submissions
         *
         * This method enables re-setting the aggregated submissions after
         * performing array methods on it.  This is useful to get a subset of the
         * collection without needing to re-filter and run DB requests
         *
         * @param  Array  $aggregatedSubmissions  Keyed collection of
         * submissions meeting the filtering parameters
         *
         * @return  self
         */
        public function setAggregatedSubmissions(array $aggregatedSubmissions)
        {
        }
    }
    /**
     * Adapts SubmissionAggregate to provide data required by CSV Export
     *
     * CSV Export requires specific structuring of submission data, too specialized
     * to be included in the SubmissionAggregate.  This class structures submission
     * data as needed for CSV export
     */
    class SubmissionAggregateCsvExportAdapter
    {
        /**
         * Field labels, keyed on field key
         *
         * @var array
         */
        protected $labels;
        /**
         * Admin field labels, keyed on field key
         *
         * @var array
         */
        protected $adminLabels;
        /**
         * Indexed array of field types to be omitted in output
         * @var array
         */
        protected $hiddenFieldTypes;
        /**
         * Array of field types keyed on field key
         * @var array
         */
        protected $fieldTypes = [];
        /**
         * Array of field Ids keyed on field key
         * @var array
         */
        protected $fieldIds = [];
        /**
         * Array of column values keyed on field key
         *
         * Property is reset and reused for each request; column count must equal
         * that of $labels, $adminLabels, $fieldtypes, and $fieldIds
         *
         * @var array
         */
        protected $columnValues = [];
        /**
         * @var SubmissionAggregate
         */
        public $submissionAggregate;
        /**
         * Construct with SubmissionAggregate
         *
         * Lookup array properties are not populated until the first request for
         * either fieldTypes, label/adminLable, or fieldIds.
         *
         * @param SubmissionAggregate $submissionAggregate
         */
        public function __construct(\NinjaForms\Includes\Handlers\SubmissionAggregate $submissionAggregate)
        {
        }
        /**
         * Return array of field labels keyed on field keys
         * 
         * If hiddenFieldTypes array is set, labels filtered to hide those types
         * 
         * @param bool $useAdminLabels Optionally use admin_labels
         * @return array
         */
        public function getLabels(?bool $useAdminLabels = false) : array
        {
        }
        /**
         * Return array of field types keyed on field keys
         * 
         * @return array
         */
        public function getFieldTypes() : array
        {
        }
        /**
         * Return array of field Ids keyed on field keys
         */
        public function getFieldIds() : array
        {
        }
        /**
         * Return array of submission Ids in the collection
         * 
         * Generated at time of request to ensure it is up to date after last
         *  query / construction
         * @return array
         */
        public function getSubmissionIds() : array
        {
        }
        /**
         * Get column values for a given submission aggregated key
         *
         * @param string $aggregatedKey
         * @return array
         */
        public function getColumnValuesByAggregatedKey(string $aggregatedKey) : array
        {
        }
        /**
         * Construct labels/adminLabels from submission aggregate
         *
         * @return void
         */
        protected function constructFieldLookups() : void
        {
        }
        /**
         * Given submission field, extract labels + meta, or submission values
         *
         * @param SubmissionField $submissionField
         * @param boolean|null $labelsOnly
         * @return void
         */
        protected function extractSubmissionFieldData(\NinjaForms\Includes\Entities\SubmissionField $submissionField, ?bool $labelsOnly = false) : void
        {
        }
        /**
         * Construct NF Field from SubmissionField
         * 
         * NF Field is needed to apply existing NF filters
         *
         *
         * @param SubmissionField $submissionField
         * @return Field
         */
        protected function convertSubmissionFieldToNfField(\NinjaForms\Includes\Entities\SubmissionField $submissionField) : \NinjaForms\Includes\Handlers\Field
        {
        }
        /**
         * Extract repeater field column headers
         *
         * @todo Enable external setting of in-CSV delimiter
         * @todo ~L258 - adjust deconstructed value to handle listmultiselect arrays (other fields may also have arrays)
         * @param SubmissionField $submissionField
         * @return void
         */
        protected function extractRepeaterFieldColumns(\NinjaForms\Includes\Entities\SubmissionField $submissionField, bool $labelsOnly) : void
        {
        }
        /**
         * Extracts collection of SubmissionFields within a fieldset repeater
         *
         * @param SubmissionField $submissionField
         * @return SubmissionField[]
         */
        protected function extractRepeaterFieldsFromSubmisionField(\NinjaForms\Includes\Entities\SubmissionField $submissionField) : array
        {
        }
        /**
         * Construct lookup of field settings for fields within fieldset repeater field
         *
         * @param SubmissionField $submissionField
         * @return array
         */
        protected function constructRepeaterFieldSettingsLookup(\NinjaForms\Includes\Entities\SubmissionField $submissionField) : array
        {
        }
        /**
         * Ensure each repeater field value is a string
         *
         * @param SubmissionField $submissionField
         * @param array $deconstructedValue
         * @param string $repeatedValueDelimiter
         * @return string
         */
        protected function getStringedValue(\NinjaForms\Includes\Entities\SubmissionField $submissionField, array $deconstructedValue, string $repeatedValueDelimiter) : string
        {
        }
        /**
         * Deconstruct repeater field array by repeated fields
         * 
         * 
         * @todo Add exception handling for unexpected key structure
         * @param array $constructedValue
         * @return array
         */
        protected function deconstructRepeaterFieldValue(array $constructedValue) : array
        {
        }
        /**
         * Add key value lookups for labels and admin labels
         *
         * @param string $slug
         * @param string $label
         * @param string $adminLabel
         * @return void
         */
        protected function setFieldLabels(\NinjaForms\Includes\Entities\SubmissionField $submissionField) : void
        {
        }
        /**
         * Add key value lookups for Id and type on all fields in collection
         * 
         * This includes hidden fields and parent fieldset repeater fields
         *
         * @param SubmissionField $submissionField
         * @return void
         */
        protected function setFieldMetaData(\NinjaForms\Includes\Entities\SubmissionField $submissionField) : void
        {
        }
        /**
         * Set column value for a given field
         *
         * @param string $key
         * @param string||array $value
         * @return void
         */
        protected function setColumnValue(string $key, $value) : void
        {
        }
        protected function filterRawValue(string $key, $rawValue, \NinjaForms\Includes\Handlers\Field $nfField)
        {
        }
        /**
         * Set indexed array of field types to be omitted in output
         *
         * @param  array  $hiddenFieldTypes  Indexed array of field types to be omitted in output
         *
         * @return  SubmissionAggregateCsvExportAdapter
         */
        public function setHiddenFieldTypes(array $hiddenFieldTypes) : \NinjaForms\Includes\Handlers\SubmissionAggregateCsvExportAdapter
        {
        }
    }
}
namespace {
    /**
     * Class WPN_Helper
     *
     * The WP Ninjas Static Helper Class
     *
     * Provides additional helper functionality to WordPress helper functions.
     */
    final class WPN_Helper
    {
        /**
         * @param $value
         * @return array|string
         */
        public static function addslashes($value)
        {
        }
        /**
         * @param $input
         * @return array|string
         */
        public static function utf8_encode($input)
        {
        }
        /**
         * Replace utf8_encode with mimicked functionaliy
         * 
         * Deprecated in PHP8 and removed in PHP9
         * 
         * Replacement credit: https://php.watch/versions/8.2/utf8_encode-utf8_decode-deprecated
         * and https://github.com/symfony/polyfill-php72/blob/v1.26.0/Php72.php#L32-39
         *
         * @param string $string
         * @return string
         */
        public static function iso8859_1_to_utf8($s)
        {
        }
        /**
         * @param $input
         * @return array|string
         */
        public static function utf8_decode($input)
        {
        }
        /**
         * Replace utf8_decode with mimicked functionaliy
         * 
         * Deprecated in PHP8 and removed in PHP9
         * 
         * Replacement credit: https://php.watch/versions/8.2/utf8_encode-utf8_decode-deprecated
         * and https://github.com/symfony/polyfill-php72/blob/v1.26.0/Php72.php#L40-69
         *
         * @param string $string
         * @return string
         */
        public static function utf8_to_iso8859_1($string)
        {
        }
        /**
         * Function to clean json data before json_decode.
         * @since 3.2
         * @param $input String
         * @return String
         */
        public static function json_cleanup($input)
        {
        }
        /**
         * @param $search
         * @param $replace
         * @param $subject
         * @return mixed
         */
        public static function str_replace($search, $replace, $subject)
        {
        }
        /**
         * @param $value
         * @param int $flag
         * @return array|string
         */
        public static function html_entity_decode($value, $flag = \ENT_COMPAT)
        {
        }
        /**
         * @param $value
         * @return array|string
         */
        public static function htmlspecialchars($value)
        {
        }
        /**
         * @param $value
         * @return array|string
         */
        public static function stripslashes($value)
        {
        }
        /**
         * @param $value
         * @return array|string
         */
        public static function esc_html($value)
        {
        }
        /**
         * @param $value
         * @return array|string
         */
        public static function kses_post($value)
        {
        }
        /**
         * @param $value
         * @return array|string
         */
        public static function strip_tags($value)
        {
        }
        /**
         * String to Bytes
         *
         * Converts PHP settings from a string to bytes.
         *
         * @param $size
         * @return float
         */
        public static function string_to_bytes($size)
        {
        }
        public static function str_putcsv($array, $delimiter = ',', $enclosure = '"', $terminator = "\n")
        {
        }
        public static function get_query_string($key, $default = \FALSE)
        {
        }
        public static function sanitize_text_field($data)
        {
        }
        public static function get_plugin_version($plugin)
        {
        }
        public static function is_func_disabled($function)
        {
        }
        public static function maybe_unserialize($original)
        {
        }
        /**
         * Function to fetch our cache from the upgrades table (if it exists there).
         * 
         * @param $id (int) The form ID.
         * 
         * @since 3.3.7
         */
        public static function get_nf_cache($id)
        {
        }
        /**
         * Function to insert or update our cache in the upgrades table (if it exists).
         * 
         * @param $id (int) The form ID.
         * @param $data (string) The form cache.
         * @param $stage (int) The target stage of this update. Default to the current max stage.
         * 
         * @since 3.3.7
         * @updated 3.4.0
         */
        public static function update_nf_cache($id, $data, $stage = 0)
        {
        }
        /**
         * Function to retrieve our upgrade stage.
         * Remove this after the cache has been resolved.
         * 
         * @return int
         * 
         * @since 3.4.0
         */
        public static function get_stage()
        {
        }
        /**
         * Function to build our form cache from the table.
         * 
         * @param $id (int) The form ID.
         * @since 3.3.18
         * @return  $form_cache Array of form data.
         * @updated 3.4.0
         */
        public static function build_nf_cache($id)
        {
        }
        /**
         * Function to delete our cache.
         * 
         * @param $id (int) The form ID.
         * 
         * @since 3.3.7
         */
        public static function delete_nf_cache($id)
        {
        }
        private static function parse_utf8_serialized($matches)
        {
        }
        /**
         * This funtion gets/creates the Ninja Forms gate keeper( a random integer 
         * between 1 and 100 ). We will use this number when deciding whether a
         * particular install is eligible for an upgrade or whatever else we decide
         * to use it for
         * 
         * @return int $zuul
         * 
         * @since 3.4.0
         */
        public static function get_zuul()
        {
        }
        /**
         * This function will return true/false based on an option( ninja_forms_zuul )
         * and a threshold that we set. We can use this to limit updates
         * 
         * @param $threshold
         * 
         * @return bool
         * 
         * @since 3.4.0
         */
        public static function gated_release($threshold = 0)
        {
        }
        /**
         * Is Maintenance
         *
         * Checks the upgrades table to see if the form the user is viewing
         * is under maintenance mode.
         *
         * @since 3.4.0
         *
         * @param $form_id - The ID of the form we are checking.
         *
         * @return boolean
         */
        public static function form_in_maintenance($form_id)
        {
        }
        /**
         * This function either put all forms in maintenance mode or remove maintenance
         * mode for all forms. Depending on the input parameters
         * 
         * @since 3.4.0
         * 
         * @param $mode - Default 0 ( Take all forms out of maintenance mode )
         */
        public static function set_forms_maintenance_mode($mode = 0)
        {
        }
        /**
         * We'll use to determine if we need to use the form cache or not. This will
         * be used for all users not on the newest version of the database
         * 
         * @return boolean
         */
        public static function use_cache()
        {
        }
        /**
         * Sanitizes single/multiple CSS classNames
         *
         * Explodes on space, sanitize each className, implode with space to recombine
         * @param string $value
         * @return string
         */
        public static function sanitize_classes($value) : string
        {
        }
        /**
         * Sanitizes string values for field settings 
         * 
         * WIP methods can still be implemented for this.
         *
         * @param string $key Setting name
         * @param string $value of setting
         * @return string sanitized value for setting
         */
        public static function sanitize_string_setting_value($key, $value) : string
        {
        }
        /**
         * Check the DISALLOW_UNFILTERED_HTML constant value and return early if true. 
         * If false, return opposite for 'unfiltered_html' current user capability
         * 
         * @return bool
         */
        public static function maybe_disallow_unfiltered_html_for_sanitization() : bool
        {
        }
        /**
         * Check the DISALLOW_UNFILTERED_HTML constant value only on the escaping side
         * 
         * @return bool
         */
        public static function maybe_disallow_unfiltered_html_for_escaping() : bool
        {
        }
        /**
         * Sanitize output to csv to prevent formula injection.
         * 
         * @param String $value The value to be escaped.
         * @return String
         */
        public static function maybe_escape_csv_column($value) : string
        {
        }
    }
    /**
     * Allows plugins to use their own update API.
     *
     * @author Easy Digital Downloads
     * @version 1.6.18
     */
    class EDD_SL_Plugin_Updater
    {
        private $api_url = '';
        private $api_data = array();
        private $name = '';
        private $slug = '';
        private $version = '';
        private $wp_override = \false;
        private $cache_key = '';
        private $beta = \false;
        private $health_check_timeout = 5;
        /**
         * Class constructor.
         *
         * @uses plugin_basename()
         * @uses hook()
         *
         * @param string  $_api_url     The URL pointing to the custom API endpoint.
         * @param string  $_plugin_file Path to the plugin file.
         * @param array   $_api_data    Optional data to send with API calls.
         */
        public function __construct($_api_url, $_plugin_file, $_api_data = \null)
        {
        }
        /**
         * Set up WordPress filters to hook into WP's update process.
         *
         * @uses add_filter()
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Check for Updates at the defined API endpoint and modify the update array.
         *
         * This function dives into the update API just when WordPress creates its update array,
         * then adds a custom API call and injects the custom plugin data retrieved from the API.
         * It is reassembled from parts of the native WordPress plugin update code.
         * See wp-includes/update.php line 121 for the original wp_update_plugins() function.
         *
         * @uses api_request()
         *
         * @param array   $_transient_data Update array build by WordPress.
         * @return array Modified update array with custom plugin data.
         */
        public function check_update($_transient_data)
        {
        }
        /**
         * show update nofication row -- needed for multisite subsites, because WP won't tell you otherwise!
         *
         * @param string  $file
         * @param array   $plugin
         */
        public function show_update_notification($file, $plugin)
        {
        }
        /**
         * Updates information on the "View version x.x details" page with custom data.
         *
         * @uses api_request()
         *
         * @param mixed   $_data
         * @param string  $_action
         * @param object  $_args
         * @return object $_data
         */
        public function plugins_api_filter($_data, $_action = '', $_args = \null)
        {
        }
        /**
         * Convert some objects to arrays when injecting data into the update API
         *
         * Some data like sections, banners, and icons are expected to be an associative array, however due to the JSON
         * decoding, they are objects. This method allows us to pass in the object and return an associative array.
         *
         * @since 3.6.5
         *
         * @param stdClass $data
         *
         * @return array
         */
        private function convert_object_to_array($data)
        {
        }
        /**
         * Disable SSL verification in order to prevent download update failures
         *
         * @param array   $args
         * @param string  $url
         * @return object $array
         */
        public function http_request_args($args, $url)
        {
        }
        /**
         * Calls the API and, if successfull, returns the object delivered by the API.
         *
         * @uses get_bloginfo()
         * @uses wp_remote_post()
         * @uses is_wp_error()
         *
         * @param string  $_action The requested action.
         * @param array   $_data   Parameters for the API action.
         * @return false|object
         */
        private function api_request($_action, $_data)
        {
        }
        public function show_changelog()
        {
        }
        public function get_cached_version_info($cache_key = '')
        {
        }
        public function set_version_info_cache($value = '', $cache_key = '')
        {
        }
        /**
         * Returns if the SSL of the store should be verified.
         *
         * @since  1.6.13
         * @return bool
         */
        private function verify_ssl()
        {
        }
    }
    /**
     * This class handles all the update-related stuff for extensions, including adding a license section to the license tab.
     * It accepts two args: Product Name and Version.
     *
     * @param $product_name string
     * @param $version string
     * @since 2.2.47
     * @return void
     */
    class NF_Extension_Updater
    {
        public $product_nice_name = '';
        public $product_name = '';
        public $version = '';
        public $store_url = 'https://ninjaforms.com/update-check/';
        public $file = '';
        public $author = '';
        public $error = '';
        private $_last_error;
        /**
         * Constructor function
         *
         * @since 2.2.47
         * @updated 3.0
         * @return void
         */
        public function __construct($product_name, $version, $author, $file, $slug = '')
        {
        }
        /**
         * Function that adds the license entry fields to the license tab.
         *
         * @updated 3.0
         * @param array $licenses
         * @return array $licenses
         */
        function register($licenses)
        {
        }
        /*
         *
         * Function that activates our license
         *
         * @since 2.2.47
         * @return void
         */
        function activate_license($license_key)
        {
        }
        public function show_license_error_notice($notices)
        {
        }
        /*
         *
         * Function that deactivates our license if the user clicks the "Deactivate License" button.
         *
         * @since 2.2.47
         * @return void
         */
        function deactivate_license()
        {
        }
        /**
         * Function that runs all of our auto-update functionality
         *
         * @since 2.2.47
         * @updates 3.0
         * @return void
         */
        function auto_update()
        {
        }
        // function auto_update
        /**
         * Function that maybe prevents a plugin update from installing if the php version is not high enough.
         *         
         * @since  3.4.24       
         * @param  bool   $default   false
         * @param  array  $extra     array sent by the filter we're using.
         * @return bool/WP_ERROR     $default if we bail early, WP_ERROR if we don't.
         */
        public function maybe_prevent_install($default, $extra)
        {
        }
        /**
         * Check to see if this plugin update has a minimum PHP version.
         * If it does, make sure that we meet it.
         * If we don't meet it, then show the user an error message with a link to WordPress.org's minimum requirements page.
         * 
         * @since  3.4.24
         * @param  string  $plugin_file   plugin file for the row we're looking at
         * @param  array   $plugin_data   update data from the WordPress plugin update check
         * @param  string  $plugin_status is this plugin active, inactive, etc.
         * @return void
         */
        public function maybe_prevent_update_notice($plugin_file, $plugin_data, $plugin_status)
        {
        }
        /**
         * Return whether or not this license is valid.
         *
         * @access public
         * @since 2.9
         * @return bool
         */
        public function is_valid()
        {
        }
        /**
         * Get any error messages for this license field.
         *
         * @access public
         * @since 2.9
         * @return string $error
         */
        public function get_error()
        {
        }
        private function maybe_debug($data, $key = 'debug')
        {
        }
    }
    /**
     * Equation Operating System (EOS) Parser
     *
     * An EOS that can safely parse equations from unknown sources returning
     * the calculated value of it.  Can also handle solving equations with
     * variables, if the variables are defined (useful for the Graph creation
     * that the second and extended class in this file provides. {@see eqGraph})
     * This class was created for PHP4 in 2005, updated to fully PHP5 in 2013.
     *
     * @author Jon Lawrence <jlawrence11@gmail.com>
     * @copyright Copyright �2005-2013, Jon Lawrence
     * @license http://opensource.org/licenses/LGPL-2.1 LGPL 2.1 License
     * @package Math
     * @subpackage EOS
     * @version 2.2.1
     */
    class NF_EOS_Parser
    {
        /**
         * No matching Open/Close pair
         */
        const E_NO_SET = 5500;
        /**
         * Division by 0
         */
        const E_DIV_ZERO = 5501;
        /**
         * No Equation
         */
        const E_NO_EQ = 5502;
        /**
         * No variable replacement available
         */
        const E_NO_VAR = 5503;
        /**
         * Not a number
         */
        const E_NAN = 5504;
        /**
         * @var bool Activate Debug output.
         * @see __construct()
         * @see solveIF()
         */
        public static $debug = \FALSE;
        /**#@+
         *Private variables
         */
        private $postFix;
        private $inFix;
        /**#@-*/
        /**#@+
         * Protected variables
         */
        //What are opening and closing selectors
        protected $SEP = array('open' => array('(', '['), 'close' => array(')', ']'));
        //Top presedence following operator - not in use
        protected $SGL = array('!');
        //Order of operations arrays follow
        protected $ST = array('^', '!');
        protected $ST1 = array('/', '*', '%');
        protected $ST2 = array('+', '-');
        //Allowed functions
        protected $FNC = array('sin', 'cos', 'tan', 'csc', 'sec', 'cot', 'abs', 'log', 'log10', 'sqrt');
        /**#@-*/
        /**
         * Construct method
         *
         * Will initiate the class.  If variable given, will assign to
         * internal variable to solve with this::solveIF() without needing
         * additional input.  Initializing with a variable is not suggested.
         *
         * @see Parser::solveIF()
         * @param String $inFix Standard format equation
         */
        public function __construct($inFix = \null)
        {
        }
        /**
         * Check Infix for opening closing pair matches.
         *
         * This function is meant to solely check to make sure every opening
         * statement has a matching closing one, and throws an exception if
         * it doesn't.
         *
         * @param String $infix Equation to check
         * @throws Exception if malformed.
         * @return Bool true if passes - throws an exception if not.
         */
        private function checkInfix($infix)
        {
        }
        /**
         * Infix to Postfix
         *
         * Converts an infix (standard) equation to postfix (RPN) notation.
         * Sets the internal variable $this->postFix for the Parser::solvePF()
         * function to use.
         *
         * @link http://en.wikipedia.org/wiki/Infix_notation Infix Notation
         * @link http://en.wikipedia.org/wiki/Reverse_Polish_notation Reverse Polish Notation
         * @param String $infix A standard notation equation
         * @throws Exception When parenthesis are mismatched.
         * @return Array Fully formed RPN Stack
         */
        public function in2post($infix = \null)
        {
        }
        //end function in2post
        /**
         * Solve Postfix (RPN)
         *
         * This function will solve a RPN array. Default action is to solve
         * the RPN array stored in the class from Parser::in2post(), can take
         * an array input to solve as well, though default action is preferred.
         *
         * @link http://en.wikipedia.org/wiki/Reverse_Polish_notation Postix Notation
         * @param Array $pfArray RPN formatted array. Optional.
         * @throws Exception On division by zero.
         * @return Float Result of the operation.
         */
        public function solvePF($pfArray = \null)
        {
        }
        //end function solvePF
        public function solve($equation, $values = \null)
        {
        }
        /**
         * Solve Infix (Standard) Notation Equation
         *
         * Will take a standard equation with optional variables and solve it. Variables
         * must begin with '&' or '$'
         * The variable array must be in the format of 'variable' => value. If
         * variable array is scalar (ie 5), all variables will be replaced with it.
         *
         * @param String $infix Standard Equation to solve
         * @param String|Array $vArray Variable replacement
         * @throws Exception On division by zero and on NaN and lack of variable replacement.
         * @return Float Solved equation
         */
        function solveIF($infix, $vArray = \null)
        {
        }
        //end function solveIF
        /**
         * Solve factorial (!)
         *
         * Will take any real positive number and solve for it's factorial. Eg.
         * `5!` will become `1*2*3*4*5` = `120` For integers
         * and
         * 5.2! will become gamma(6.2) for non-integers
         * DONE:
         *    Solve for non-integer factorials  2015/07/02
         *
         * @param Float $num Non-negative real number to get factorial of
         * @throws Exception if number is at or less than 0
         * @return Float Solved factorial
         */
        protected function factorial($num)
        {
        }
        //end function factorial
        /**
         * Gamma Function
         *
         * Because we can. This function exists as a catch-all for different
         * numerical approx. of gamma if I decide to add any past Lanczos'.
         * This method is public because a function doesn't currently exist
         * within this parser to use it.  That will change in the future.
         *
         * @param $z Number to compute gamma from
         * @return Float The gamma (hopefully, I'll test it after writing the code)
         */
        public function gamma($z)
        {
        }
        /**
         * Lanczos Approximation
         *
         * The Lanczos Approximation method of finding gamma values
         *
         * @link http://www.rskey.org/CMS/index.php/the-library/11
         * @link http://algolist.manual.ru/maths/count_fast/gamma_function.php
         * @link https://en.wikipedia.org/wiki/Lanczos_approximation
         * @param float $z Number to obtain the gamma of
         * @return float Gamma of inputted number
         * @throws Exception if Number is less than or equal to 0
         */
        protected function laGamma($z)
        {
        }
    }
    /*
     * MODIFICATIONS
     * - Renamed with prefix to avoid naming collisions.
     */
    /**
     * Basic Stack Class.
     *
     * Created for use with eqEOS. May eventually be replaced with native
     * PHP functions `array_pop()`, `array_push()`, and `end()`
     *
     * @author Jon Lawrence <jlawrence11@gmail.com>
     * @copyright Copyright �2005-2013 Jon Lawrence
     * @license http://opensource.org/licenses/LGPL-2.1 LGPL 2.1 License
     * @package Math
     * @subpackage EOS
     * @version 2.0
     */
    class NF_EOS_Stack
    {
        private $index;
        private $locArray;
        /**
         * Constructor
         *
         * Initializes the stack
         */
        public function __construct()
        {
        }
        /**
         * Peek
         *
         * Will view the last element of the stack without removing it
         *
         * @return Mixed An element of the array or false if none exist
         */
        public function peek()
        {
        }
        /**
         * Poke
         *
         * Will add an element to the end of the stack
         *
         * @param Mixed $data Element to add
         */
        public function poke($data)
        {
        }
        /**
         * Push
         *
         * Alias of {@see Stack::poke()}
         * Adds element to the stack
         *
         * @param Mixed $data Element to add
         */
        public function push($data)
        {
        }
        /**
         * Pop
         *
         * Retrives an element from the end of the stack, and removes it from
         * the stack at the same time. If no elements, returns boolean false
         *
         * @return Mixed Element at end of stack or false if none exist
         */
        public function pop()
        {
        }
        /**
         * Clear
         *
         * Clears the stack to be reused.
         */
        public function clear()
        {
        }
        /**
         * Get Stack
         *
         * Returns the array of stack elements, keeping all, indexed at 0
         *
         * @return Mixed Array of stack elements or false if none exist.
         */
        public function getStack()
        {
        }
    }
    /**
     * Recursive array class to allow multidimensional array access.
     *
     * @package WordPress
     * @since 3.6.0
     */
    class Recursive_ArrayAccess implements \ArrayAccess
    {
        /**
         * Internal data collection.
         *
         * @var array
         */
        protected $container = array();
        /**
         * Flag whether or not the internal collection has been changed.
         *
         * @var bool
         */
        protected $dirty = \false;
        /**
         * Default object constructor.
         *
         * @param array $data
         */
        protected function __construct($data = array())
        {
        }
        /**
         * Allow deep copies of objects
         */
        public function __clone()
        {
        }
        /**
         * Output the data container as a multidimensional array.
         *
         * @return array
         */
        public function toArray()
        {
        }
        /**
         * ArrayAccess Implementation
         **/
        /**
         * Whether a offset exists
         *
         * @link http://php.net/manual/en/arrayaccess.offsetexists.php
         *
         * @param mixed $offset An offset to check for.
         *
         * @return boolean true on success or false on failure.
         */
        #[\ReturnTypeWillChange]
        public function offsetExists($offset)
        {
        }
        /**
         * Offset to retrieve
         *
         * @link http://php.net/manual/en/arrayaccess.offsetget.php
         *
         * @param mixed $offset The offset to retrieve.
         *
         * @return mixed Can return all value types.
         */
        #[\ReturnTypeWillChange]
        public function offsetGet($offset)
        {
        }
        /**
         * Offset to set
         *
         * @link http://php.net/manual/en/arrayaccess.offsetset.php
         *
         * @param mixed $offset The offset to assign the value to.
         * @param mixed $value  The value to set.
         *
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetSet($offset, $data)
        {
        }
        /**
         * Offset to unset
         *
         * @link http://php.net/manual/en/arrayaccess.offsetunset.php
         *
         * @param mixed $offset The offset to unset.
         *
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function offsetUnset($offset)
        {
        }
    }
    /*
    * MODIFICATIONS
    *
    * - Remove `set_cooke()` from constructor
    * - Give `set_cookie()` public access
    */
    /**
     * WordPress Session class for managing user session data.
     *
     * @package WordPress
     * @since   3.7.0
     */
    final class WP_Session extends \Recursive_ArrayAccess implements \Iterator, \Countable
    {
        /**
         * ID of the current session.
         *
         * @var string
         */
        public $session_id;
        /**
         * Unix timestamp when session expires.
         *
         * @var int
         */
        protected $expires;
        /**
         * Unix timestamp indicating when the expiration time needs to be reset.
         *
         * @var int
         */
        protected $exp_variant;
        /**
         * Singleton instance.
         *
         * @var bool|WP_Session
         */
        private static $instance = \false;
        /**
         * Retrieve the current session instance.
         *
         * @param bool $session_id Session ID from which to populate data.
         *
         * @return bool|WP_Session
         */
        public static function get_instance()
        {
        }
        /**
         * Default constructor.
         * Will rebuild the session collection from the given session ID if it exists. Otherwise, will
         * create a new session with that ID.
         *
         * @param $session_id
         * @uses apply_filters Calls `wp_session_expiration` to determine how long until sessions expire.
         */
        protected function __construct()
        {
        }
        /**
         * Set both the expiration time and the expiration variant.
         *
         * If the current time is below the variant, we don't update the session's expiration time. If it's
         * greater than the variant, then we update the expiration time in the database.  This prevents
         * writing to the database on every page load for active sessions and only updates the expiration
         * time if we're nearing when the session actually expires.
         *
         * By default, the expiration time is set to 30 minutes.
         * By default, the expiration variant is set to 24 minutes.
         *
         * As a result, the session expiration time - at a maximum - will only be written to the database once
         * every 24 minutes.  After 30 minutes, the session will have been expired. No cookie will be sent by
         * the browser, and the old session will be queued for deletion by the garbage collector.
         *
         * @uses apply_filters Calls `wp_session_expiration_variant` to get the max update window for session data.
         * @uses apply_filters Calls `wp_session_expiration` to get the standard expiration time for sessions.
         */
        protected function set_expiration()
        {
        }
        /**
         * Set the session cookie
         */
        /*
         * MODIFICATION: Change access to public for manually setting cookie.
         */
        public function set_cookie()
        {
        }
        /**
         * Generate a cryptographically strong unique ID for the session token.
         *
         * @return string
         */
        protected function generate_id()
        {
        }
        /**
         * Checks if is valid md5 string
         *
         * @param string $md5
         * @return int
         */
        protected function is_valid_md5($md5 = '')
        {
        }
        /**
         * Read data from a transient for the current session.
         *
         * Automatically resets the expiration time for the session transient to some time in the future.
         *
         * @return array
         */
        protected function read_data()
        {
        }
        /**
         * Write the data from the current session to the data storage system.
         */
        public function write_data()
        {
        }
        /**
         * Output the current container contents as a JSON-encoded string.
         *
         * @return string
         */
        public function json_out()
        {
        }
        /**
         * Decodes a JSON string and, if the object is an array, overwrites the session container with its contents.
         *
         * @param string $data
         *
         * @return bool
         */
        public function json_in($data)
        {
        }
        /**
         * Regenerate the current session's ID.
         *
         * @param bool $delete_old Flag whether or not to delete the old session data from the server.
         */
        public function regenerate_id($delete_old = \false)
        {
        }
        /**
         * Check if a session has been initialized.
         *
         * @return bool
         */
        public function session_started()
        {
        }
        /**
         * Return the read-only cache expiration value.
         *
         * @return int
         */
        public function cache_expiration()
        {
        }
        /**
         * Flushes all session variables.
         */
        public function reset()
        {
        }
        /*****************************************************************/
        /*                     Iterator Implementation                   */
        /*****************************************************************/
        /**
         * Current position of the array.
         *
         * @link http://php.net/manual/en/iterator.current.php
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function current()
        {
        }
        /**
         * Key of the current element.
         *
         * @link http://php.net/manual/en/iterator.key.php
         *
         * @return mixed
         */
        #[\ReturnTypeWillChange]
        public function key()
        {
        }
        /**
         * Move the internal point of the container array to the next item
         *
         * @link http://php.net/manual/en/iterator.next.php
         *
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function next()
        {
        }
        /**
         * Rewind the internal point of the container array.
         *
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return void
         */
        #[\ReturnTypeWillChange]
        public function rewind()
        {
        }
        /**
         * Is the current key valid?
         *
         * @link http://php.net/manual/en/iterator.rewind.php
         *
         * @return bool
         */
        #[\ReturnTypeWillChange]
        public function valid()
        {
        }
        /*****************************************************************/
        /*                    Countable Implementation                   */
        /*****************************************************************/
        /**
         * Get the count of elements in the container array.
         *
         * @link http://php.net/manual/en/countable.count.php
         *
         * @return int
         */
        #[\ReturnTypeWillChange]
        public function count()
        {
        }
    }
    class NF_Php_Version_Whip
    {
        /**
         * NF_Whip constructor.
         * Hooks into the WordPress admin notice system and calls our whip_message.
         * @Since 3.2.19
         */
        public function __construct()
        {
        }
        /**
         * Whip Message
         * Builds and outputs our message.
         * @Since 3.2.19
         */
        public function whipMessage()
        {
        }
        /**
         * Set Dismiss
         * Sets a transient for 4 weeks out that will remove the whip notice.
         * @Since 3.2.19
         */
        public function set_dismiss()
        {
        }
    }
    /**
     * Class NF_MergeTags_Calcs
     */
    final class NF_MergeTags_Calcs extends \NF_Abstracts_MergeTags
    {
        protected $id = 'calcs';
        protected $_default_group = \FALSE;
        public function __construct()
        {
        }
        public function __call($name, $arguments)
        {
        }
        public function set_merge_tags($key, $value, $round = 2, $dec = '.', $sep = ',')
        {
        }
        public function get_calc_value($key)
        {
        }
        // @TODO: $round is no longer necessary in this context.
        public function get_formatted_calc_value($key, $round = 2, $dec = '.', $sep = ',')
        {
        }
    }
    /**
     * Class NF_MergeTags_WordPress
     */
    final class NF_MergeTags_Deprecated extends \NF_Abstracts_MergeTags
    {
        protected $id = 'deprecated';
        public function __construct()
        {
        }
        protected function post_id()
        {
        }
        protected function post_title()
        {
        }
        protected function post_url()
        {
        }
        protected function post_author()
        {
        }
        protected function post_author_email()
        {
        }
        protected function user_id()
        {
        }
        protected function user_first_name()
        {
        }
        protected function user_last_name()
        {
        }
        protected function user_display_name()
        {
        }
        protected function user_email()
        {
        }
        protected function admin_email()
        {
        }
        protected function site_title()
        {
        }
        protected function site_url()
        {
        }
        protected function system_date()
        {
        }
        protected function system_ip()
        {
        }
    }
    /**
     * Class NF_MergeTags_Fields
     */
    final class NF_MergeTags_Fields extends \NF_Abstracts_MergeTags
    {
        protected $id = 'fields';
        protected $form_id;
        public function __construct()
        {
        }
        public function __call($name, $arguments)
        {
        }
        /**
         * Helps process {all_fields_table} and {fields_table} 
         * 
         * This still requires to run add_field() for all fields in a submission before and after calling his function
         */
        public function include_all_fields_merge_tags()
        {
        }
        public function all_fields()
        {
        }
        public function all_fields_table()
        {
        }
        public function fields_table()
        {
        }
        // TODO: Is this being used?
        public function all_field_plain()
        {
        }
        public function add_field($field)
        {
        }
        /**
         * Generate repeater fieldset calc value based on the number of fieldsets filled by the user
         *
         * @param array $field Array of field information
         * @return int of the number of fieldsets used
         */
        protected function addRepeaterCalcValue($field)
        {
        }
        /**
         * Generate fieldset-specific outputs
         *
         * @param array $field Array of field information
         * @param bool $sanitize
         * @return void
         */
        protected function addFieldsetRepeaterCallbacks($field, $sanitize)
        {
        }
        /**
         * Generate merge tag output for fieldset repeater table values
         *
         * @param array $field Array of field information
         * @return void
         */
        protected function generateFieldsetTableRows($field)
        {
        }
        /**
         * Get List Labels
         * Accepts a field loops over options, compares field values and returns the labels.
         * @since 3.2.22
         *
         * @param $field array
         * @return array - label of the option.
         */
        public function get_list_labels($field)
        {
        }
        /**
         * Add a callback value to the merge tags array
         * 
         * Keyed on callback string, contains an array with tag, value, optional
         * calc_value, sanitize boolean
         * 
         * @param $callback
         * @param $id
         * @param $tag
         * @param $value
         * @param bool $calc_value
         * @param bool $sanitize
         */
        public function add($callback, $id, $tag, $value, $calc_value = \false, $sanitize = \true)
        {
        }
        public function set_form_id($form_id)
        {
        }
        public function maybe_sanitize($field)
        {
        }
        /**
         * Strip shortcodes in value
         *
         * @param int|string $id
         * @param mixed $incoming Incoming value
         * @return mixed 
         */
        protected function stripShortcodesMaybeFieldset($id, $incoming)
        {
        }
        /**
         * Strip tags in value
         *
         * @param int|string $id
         * @param mixed $incoming
         * @return mixed 
         */
        protected function stripTagsMaybeFieldset($id, $incoming)
        {
        }
        /**
         * Determine the field type given a field id or key
         *
         * @param string $id
         * @return string
         */
        protected function determineFieldType($id)
        {
        }
        private function get_fields_sorted()
        {
        }
        public static function sort_fields($a, $b)
        {
        }
        public function calc_replace($subject)
        {
        }
        /*
        |--------------------------------------------------------------------------
        | Calculations
        |--------------------------------------------------------------------------
        | Force {field:...:calc} in this context of calculations.
        |      Example: {field:list} -> {field:list:calc}
        | When parsing the {field:...:calc} tag, if no calc value is found then the value will be used.
        | TODO: This makes explicit list field "values" inaccessible in calculations.
        */
        public function pre_parse_calc_settings($eq)
        {
        }
        private function force_field_calc_tags($matches)
        {
        }
    }
    /**
     * Class NF_MergeTags_Form
     */
    final class NF_MergeTags_Form extends \NF_Abstracts_MergeTags
    {
        protected $id = 'form';
        protected $form_id;
        protected $form_title;
        protected $sub_seq;
        public function __construct()
        {
        }
        /**
         * @return mixed
         */
        public function getSubSeq()
        {
        }
        /**
         * @param mixed $sub_seq
         */
        public function setSubSeq($sub_id)
        {
        }
        /**
         * Getter method for the form_id.
         *
         * @return void
         */
        public function get_form_id()
        {
        }
        /**
         * Getter method for the form title.
         *
         * @return void
         */
        public function get_form_title()
        {
        }
        /**
         * Setter method for the form_id and callback for the nf_get_form_id action.
         * @since 3.2.2
         *
         * @param string $form_id The ID of the current form.
         * @return void
         */
        public function set_form_id($form_id)
        {
        }
        /**
         * Setter method for the form_title
         *
         * @param string $form_title The title of the current form.
         * @return void
         */
        public function set_form_title($form_title)
        {
        }
        /**
         * Gets a count of the form submissions and callback for the sub_count merge tag setting.
         * @since 3.2.2
         *
         * @return array|int Count of the form submissions.
         */
        public function get_sub_count()
        {
        }
    }
    /**
     * Class NF_MergeTags_Other
     */
    class NF_MergeTags_Other extends \NF_Abstracts_MergeTags
    {
        protected $id = 'other';
        public function __construct()
        {
        }
        public function replace($subject)
        {
        }
        public function init()
        {
        }
        /**
         * Construct key-value responses from a referrer string
         *
         * @param string $referrer
         * @return array
         */
        protected function constructVariablesFromReferrer(string $referrer) : array
        {
        }
        public function __call($name, $arguments)
        {
        }
        /**
         * Assign a merge tag construct array to a key
         *
         * @param string $key
         * @param mixed $value
         * @return void
         */
        public function set_merge_tags($key, $value)
        {
        }
        protected function system_date()
        {
        }
        protected function system_time()
        {
        }
        protected function user_ip()
        {
        }
        protected function referer_url()
        {
        }
        protected function mergetag_random($length = 5)
        {
        }
        protected function mergetag_year()
        {
        }
        protected function mergetag_month()
        {
        }
        protected function mergetag_day()
        {
        }
    }
    /**
     * Class NF_MergeTags_System
     */
    final class NF_MergeTags_System extends \NF_Abstracts_MergeTags
    {
        protected $id = 'system';
        public function __construct()
        {
        }
        protected function admin_email()
        {
        }
        protected function site_title()
        {
        }
        protected function site_url()
        {
        }
    }
    /**
     * Class NF_MergeTags_WordPress
     */
    class NF_MergeTags_WP extends \NF_Abstracts_MergeTags
    {
        protected $id = 'wp';
        public function __construct()
        {
        }
        /**
         * Custom replace() method for custom post meta or user meta.
         * @param string|array $subject
         * @return string
         */
        public function replace($subject)
        {
        }
        /**
         * Wrap WP get_user_meta to enable unit testing
         *
         * @param int $user_id
         * @param string $meta_key
         * @return mixed
         */
        protected function getUserMeta($user_id, $meta_key)
        {
        }
        /**
         * Return the current user Id
         *
         * @return void
         */
        protected function getCurrentUserId() : int
        {
        }
        protected function post_id()
        {
        }
        protected function post_title()
        {
        }
        protected function post_url()
        {
        }
        protected function post_author()
        {
        }
        protected function post_author_email()
        {
        }
        protected function user_id()
        {
        }
        protected function user_first_name()
        {
        }
        protected function user_last_name()
        {
        }
        protected function user_display_name()
        {
        }
        protected function user_username()
        {
        }
        protected function user_email()
        {
        }
        protected function user_url()
        {
        }
        protected function admin_email()
        {
        }
        protected function site_title()
        {
        }
        protected function site_url()
        {
        }
    }
    class NF_PromotionManager
    {
        public $promotions;
        /**
         * Accepts a string of location to tell let us know where in the app we are sending promotions to.
         * Then will return an array of promotions to run in the location.
         */
        public function __construct()
        {
        }
        public function get_promotions()
        {
        }
        /**
         * Set our promtions array to our promotions property.
         */
        private function set_promotions()
        {
        }
        /*
         * Membership Checks
         *
         * These funcitons all check to see if the individual add-ons that make up
         * our personal membership are active.
         */
        private function is_layout_styles_active()
        {
        }
        private function is_conditional_logic_active()
        {
        }
        private function is_multi_part_active()
        {
        }
        private function is_file_uploads_active()
        {
        }
        /**
         * Utilizes the helper methods above to determine if a
         * a Membership is active on a site.
         */
        private function is_personal_active()
        {
        }
        /**************************************************************************
         * Promotion Removal Methods
         *
         * These funcitons all check for different add-ons/products and remove
         * promotions for them if they are in use.
         ****************************************************************************/
        private function maybe_remove_sendwp()
        {
        }
        private function maybe_remove_personal()
        {
        }
        /***************************************************************************
         * Helper Methods
         ****************************************************************************/
        /**
         * Pass in a promotion type to have it removed from
         * the list of active promotions.
         *
         * @return void
         */
        private function remove_promotion($type)
        {
        }
        /**
         * Sorts our promotions by where they will appear in app.
         *
         * @return void
         */
        private function sort_active_promotions_by_locations()
        {
        }
        private function is_sendwp_active()
        {
        }
        private function is_ninja_mail_active()
        {
        }
    }
    /**
     * Class NF_Routes_SubmissionsActions
     */
    final class NF_Routes_Submissions extends \NF_Abstracts_Routes
    {
        /**
         * Register REST API routes related to submissions actions
         * 
         * @since 3.4.33
         * 
         * @route "ninja-forms-submissions/export"
         * @route 'ninja-forms-submissions/email-action"
         */
        function register_routes()
        {
        }
        /**
         * Secure endpoint to allow users to read submissions
         * 
         * @since 3.5.8
         * 
         * Already passed Nonce validation via wp_rest and x_wp_nonce header checked against rest_cookie_check_errors()
         */
        public function get_submissions_permission_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Secure endpoint to allow users to delete submissions
         * 
         * @since 3.5.8
         * 
         * Already passed Nonce validation via wp_rest and x_wp_nonce header checked against rest_cookie_check_errors()
         */
        public function delete_submissions_permission_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Secure endpoint to allow users to update a submission
         * 
         * @since 3.5.8
         * 
         * Already passed Nonce validation via wp_rest and x_wp_nonce header checked against rest_cookie_check_errors()
         */
        public function update_submission_permission_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Secure endpoint to allow users to perform extra handling
         * 
         * @since 3.5.8
         * 
         * Already passed Nonce validation via wp_rest and x_wp_nonce header checked against rest_cookie_check_errors()
         */
        public function handle_extra_submission_permission_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Secure endpoint to allowed users and uploads folder
         * 
         * Used to delete files from the uploads directory. Tmp file in our case
         *
         * @since 3.6.25
         *
         * Already passed Nonce validation via wp_rest and x_wp_nonce header checked
         * against rest_cookie_check_errors()
         */
        public function delete_submissions_files_permission_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Secure endpoint to allowed users
         *
         * Security disclosure regarding <=3.5.7 showed that any logged in user
         * could export form data, possibly exposing personally identifiable
         * information.  Permissions changed such that only admin can export
         * submission data; a filter enables one to override that permission if
         * desired.
         * 
         * @since 3.4.33
         *
         * Already passed Nonce validation via wp_rest and x_wp_nonce header checked
         * against rest_cookie_check_errors()
         */
        public function permission_callback(\WP_REST_Request $request)
        {
        }
        /**
         * Bulk_export_submissions
         * 
         * @since 3.4.33
         * 
         * @return array of CSVs by form
         */
        public function bulk_export_submissions(\WP_REST_Request $request)
        {
        }
        /**
         * Download all submissions
         * 
         * 
         * @return array 
         */
        public function download_all_submissions(\WP_REST_Request $request)
        {
        }
        /**
         * Delete a file when provided valid file path
         *
         * @param WP_REST_Request $request Object with `file_path` property
         * @return void
         */
        public function delete_download_file(\WP_REST_Request $request)
        {
        }
        /**
         * Trigger Email Action endpoint callback
         * 
         * @since 3.4.33
         * 
         * @return bool|int depending on the value returned by wp_mail
         */
        public function trigger_email_action(\WP_REST_Request $request)
        {
        }
        /**
         * Process Merge tags for a given Value
         * 
         * @since 3.4.33
         * 
         * @return object of Email Action Model with merge tags settingsprocessed
         * 
         */
        public function process_merge_tags($data, $form_id, $sub)
        {
        }
        /**
         * Get Submissions
         * 
         * @since 3.5.8
         * 
         * @return array of submissions for a Form
         */
        public function get_submissions(\WP_REST_Request $request)
        {
        }
        /**
         * Save submissions interface settings
         *
         * Data passes a json string
         *
         * @param WP_REST_Request $request
         * @return void
         */
        public function set_submissions_settings(\WP_REST_Request $request)
        {
        }
        /**
         * Get submissions interface settings
         *
         * @param WP_REST_Request $request
         * @return array of settings
         */
        public function get_submissions_settings(\WP_REST_Request $request)
        {
        }
        /**
         * Request deletion of a collection of submissions
         *
         * Data passes as a collection of single submission entities keyed
         * under submissions
         * 
         * {"submissions": SingleSubmission[]}
         *
         * @param WP_REST_Request $request
         * @return void
         */
        public function delete_submissions(\WP_REST_Request $request)
        {
        }
        /**
         * Request restoration of a collection of submissions
         *
         * Data passes as a collection of single submission entities keyed
         * under submissions
         * 
         * {"submissions": SingleSubmission[]}
         *
         * @param WP_REST_Request $request
         * @return void
         */
        public function restore_submissions(\WP_REST_Request $request)
        {
        }
        /**
         * Request update of a single submission
         *
         * Data passes as a single submission entity keyed under submission
         * 
         * {"submission": SingleSubmission}
         *
         * @param WP_REST_Request $request
         * @return void
         */
        public function update_submission(\WP_REST_Request $request)
        {
        }
        /**
         * Handle extra request for submissions
         *
         * This is a starting proof of concept that triggers a download for the PDF submissions add-on
         * 
         * Data passes as a single submission entity keyed under submission and a Class to call the handler under handleExtra key
         * 
         * {
         *  "submission": SingleSubmission,
         *  "handleExtra": HandleExtraClassName
         * }
         * 
         * @param WP_REST_Request $request
         * @return object with string of responseType, blob of PDF download and string of blobType
         */
        public function handle_extra_submission(\WP_REST_Request $request)
        {
        }
    }
    /**
     * NF_Session Class
     *
     * @since 1.5
     */
    class NF_Session
    {
        /**
         * Holds our session data
         *
         * @var array
         * @access private
         * @since 2.9.18
         */
        private $session;
        /**
         * Session index prefix
         *
         * @var string
         * @access private
         * @since 2.9.18
         */
        private $prefix = '';
        /**
         * Get things started
         *
         * Defines our WP_Session constants, includes the necessary libraries and
         * retrieves the WP Session instance
         *
         * @since 2.9.18
         */
        public function __construct()
        {
        }
        /**
         * Setup the WP_Session instance
         *
         * @access public
         * @since 2.9.18
         * @return void
         */
        public function init()
        {
        }
        /**
         * Retrieve session ID
         *
         * @access public
         * @since 2.9.18
         * @return string Session ID
         */
        public function get_id()
        {
        }
        /**
         * Retrieve a session variable
         *
         * @access public
         * @since 2.9.18
         * @param string $key Session key
         * @return string Session variable
         */
        public function get($key)
        {
        }
        /**
         * Set a session variable
         *
         * @since 2.9.18
         * @param string $key Session key
         * @param integer $value Session variable
         * @return string Session variable
         */
        public function set($key, $value)
        {
        }
        /**
         * Delete a session variable
         *
         * @since 2.9.28
         * @param string $key
         * @return void
         */
        public function delete()
        {
        }
        /**
         * Force the cookie expiration variant time to 23 minutes
         *
         * @access public
         * @since 2.9.18
         * @param int $exp Default expiration (1 hour)
         * @return int
         */
        public function set_expiration_variant_time($exp)
        {
        }
        /**
         * Force the cookie expiration time to 24 minutes
         *
         * @access public
         * @since 2.9.18
         * @param int $exp Default expiration (1 hour)
         * @return int
         */
        public function set_expiration_time($exp)
        {
        }
    }
    abstract class NF_Telemetry_Metric
    {
        protected $repository;
        public function __construct(\NF_Telemetry_RepositoryInterface $repository)
        {
        }
        public function get()
        {
        }
        public function save($new_value)
        {
        }
    }
    class NF_Telemetry_CountMetric extends \NF_Telemetry_Metric
    {
        public function increment($increment = 1)
        {
        }
    }
    class NF_Telemetry_MaxMetric extends \NF_Telemetry_Metric
    {
        public function update($value)
        {
        }
    }
    class NF_Telemetry_MetricFactory
    {
        public static function create($metric, $option, $default = 0)
        {
        }
    }
    interface NF_Telemetry_RepositoryInterface
    {
        public function get();
        public function save($new_value);
    }
    class NF_Telemetry_MetricRepository implements \NF_Telemetry_RepositoryInterface
    {
        protected $option;
        public function __construct($option, $default = \false, $autoload = \true)
        {
        }
        public function get()
        {
        }
        public function save($new_value)
        {
        }
    }
    /**
     * Class NF_Updates_CacheCollateActions
     * 
     * This class manages the step process of running through the CacheCollateActions required update.
     * It will define an object to pull data from (if necessary) to pick back up if exited early.
     * It will run an upgrade function to alter the nf3_actions and nf3_action_meta tables.
     * Then, it will step over each form on the site, following this process:
     * - Actions that exist in the data tables but not in the cache will be deleted.
     * - Actions that exist in the cache but not in the data tables will be inserted.
     * - Actions that exist in the data tables but have an incorrect form ID will be inserted as a new ID and referenced from the cache.
     * - Actions that exist in both will be updated from the cache to ensure the data is correct.
     * After completing the above for every form on the site, it will remove the data object that manages its location.
     */
    class NF_Updates_CacheCollateActions extends \NF_Abstracts_RequiredUpdate
    {
        private $data = array();
        private $running = array();
        /**
         * Stores information about the current form being processed.
         * @var array
         */
        private $form;
        /**
         * Stores the actions for the current form being processed.
         * @var  array
         */
        private $actions;
        /**
         * Associative array of actions keyed by action id.
         * @var array
         */
        private $actions_by_id = array();
        /**
         * Non-associative array of action ids.
         * @var array
         */
        private $action_ids = array();
        /**
         * Hard limit for the number of querys we run during a single step.
         * @var integer
         */
        private $limit = 10;
        /**
         * Array of action ids that need an update.
         * @var array
         */
        private $update = array();
        /**
         * List of setting keys we don't want to save in the database.
         * @var array
         */
        private $blacklist = array('objectType', 'objectDomain', 'editActive', 'title', 'key');
        /**
         * The table names for our database queries.
         */
        private $table;
        private $meta_table;
        /**
         * Constructor
         * 
         * @param $data (Array) The data object passed in by the AJAX call.
         * @param $running (Array) The array of required updates being run.
         * 
         * @since 3.4.0
         */
        public function __construct($data = array(), $running)
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        /**
         * Setup our global variables used in other methods.
         * 
         * @since  3.4.0
         * @return void
         */
        private function setup_vars()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a required update after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * Check to see if we've locked processing.
         * If we have, then we need to run this process again.
         *
         * If we haven't locked processing, prepare to end this process.
         * 
         * @since  3.4.0
         * @return void
         */
        private function end_of_step()
        {
        }
        /**
         * If we've made any changes to our form actions, update our form cache to match.
         * 
         * @since  3.4.0
         * @return void
         */
        private function update_form_cache()
        {
        }
        /**
         * Loop over all of our actions and update our database if necessary.
         * Check each setting against $this->blacklist to make sure we want to insert that value.
         * 
         * @since  3.4.0
         * @return void
         */
        private function maybe_update_actions()
        {
        }
    }
    /**
     * Class NF_Updates_CacheCollateCleanup
     * 
     * This class manages the step process of running through the CacheCollateCleanup required update.
     * It will define an object to pull data from (if necessary) to pick back up if exited early.
     * It will then step over each table in our structure and ensure that orphan records are removed from storage.
     * It will then step over all submissions, removing any orphans.
     * It will then step over all submissions (by form), updating or removing any orphan field records.
     * After completing the above for every form on the site, it will remove the data object that manages its location.
     */
    class NF_Updates_CacheCollateCleanup extends \NF_Abstracts_RequiredUpdate
    {
        private $data = array();
        private $running = array();
        /**
         * The denominator object for calculating our steps.
         * @var Integer
         */
        private $divisor = 500;
        private $stage;
        private $stage_complete = \false;
        /**
         * Constructor
         * 
         * @param $data (Array) The data object passed in by the AJAX call.
         * @param $running (Array) The array of required updates being run.
         * 
         * @since 3.4.0
         */
        public function __construct($data = array(), $running)
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a required update after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * Function to get the number of objects in a table.
         * 
         * @param $table (String) The name of the target table.
         * 
         * @return (Int) The count of rows.
         * 
         * @since 3.4.0
         */
        public function get_total($table)
        {
        }
        /**
         * Function to perform a simple, single-step delete of orphan data.
         * 
         * @since 3.4.0
         * @updated 3.4.11
         */
        private function do_easy_delete()
        {
        }
        /**
         * Function to perform a multi-step delete of orphan data.
         * 
         * @since 3.4.0
         * @updated 3.4.11
         */
        private function do_step_delete()
        {
        }
        /**
         * Function called by array_filter to remove ALL duplicate results.
         * 
         * @param $v (Int) The number of results.
         * 
         * @return (Boolean)
         * 
         * @since 3.4.0
         */
        private function uniquify($v)
        {
        }
        /**
         * Function to remove orphan submissions from the posts and postmeta tables.
         * 
         * @since 3.4.0
         */
        private function adopt_subs()
        {
        }
        /**
         * Function to remove orphan field data that's still attached
         * to valid submissions from the postmeta table.
         * 
         * @since 3.4.0
         */
        private function adopt_fields()
        {
        }
        /**
         * Function to compress our db results into a more useful format.
         * 
         * @param $data (Array) The result to be compressed.
         * 
         * @return (Array) Associative if our data was complex.
         *                 Non-associative if our data was a single item.
         * 
         * @since 3.4.0
         */
        private function array_squash($data)
        {
        }
    }
    /**
     * Class NF_Updates_CacheCollateFields
     * 
     * This class manages the step process of running through the CacheCollateFields required update.
     * It will define an object to pull data from (if necessary) to pick back up if exited early.
     * It will run an upgrade function to alter the nf3_fields and nf3_field_meta tables.
     * Then, it will step over each form on the site, following this process:
     * - Fields that exist in the data tables but not in the cache will be deleted.
     * - Fields that exist in the cache but not in the data tables will be inserted.
     * - Fields that exist in the data tables but have an incorrect form ID will be inserted as a new ID and referenced from the cache.
     * - Fields that exist in both will be updated from the cache to ensure the data is correct.
     * After completing the above for every form on the site, it will remove the data object that manages its location.
     */
    class NF_Updates_CacheCollateFields extends \NF_Abstracts_RequiredUpdate
    {
        private $data = array();
        private $running = array();
        /**
         * Non-associatve array of field ids from the cache.
         * @var array
         */
        private $field_ids = array();
        /**
         * Associative array of field ids from the cache, using the field id as the key.
         * $fields_by_id[ field_id ] = $settings;
         * @var array
         */
        private $fields_by_id = array();
        /**
         * Non-associative array that tracks what we should we insert because it exists in our cache but not in the Fields table.
         * @var array
         */
        private $insert = array();
        /**
         * Non-associatve array that tracks field ids that should be deleted from fields DB table.
         * @var array
         */
        private $delete = array();
        /**
         * Associative array that tracks field ids that have changed.
         * $submission_updates[ old_field_id ] = new_field_id;
         * @var array
         */
        private $submission_updates = array();
        /**
         * Associatve array that tracks newly inserted fields.
         * $insert_ids[ field_id ] = field_id;
         * @var array
         */
        private $insert_ids = array();
        /**
         * Hard limit for the number of querys we run during a single step.
         * @var integer
         */
        private $limit = 10;
        /**
         * Stores information about the current form being processed.
         * @var array
         */
        private $form;
        /**
         * The table names for our database queries.
         */
        private $table;
        private $meta_table;
        /**
         * Constructor
         * 
         * @param $data (Array) The data object passed in by the AJAX call.
         * @param $running (Array) The array of required updates being run.
         * 
         * @since 3.4.0
         */
        public function __construct($data = array(), $running)
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a required update after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * Function to delete unncessary items from our existing tables.
         * 
         * @param $items (Array) The list of ids to be deleted.
         * 
         * @since 3.4.0
         */
        public function maybe_delete_fields()
        {
        }
        /**
         * Most of the methods in this class use class vars to access and store data.
         *
         * This method sets the initial state of these class vars.
         * Class vars include:
         *    $form <- reference to the form currently being processed.
         *    $field_ids <- non-associatve array of field ids from the cache.
         *    $insert <- array that tracks what we should we insert because it exists in our cache but not in the Fields table.
         *    $submission_updates <- array that tracks fields that have had their id changed.
         *    $fields_by_id <- associative array of field ids from the cache, using the field id as the key.
         *
         * If we are not running a form for the first time, 
         * we set class vars based on what we have been passed. 
         * After setting those class vars, we bail early.
         * 
         * If we are running for the first time, set have to hit the database to
         * get the information for class vars.
         *
         * We need to compare the fields in our form cache to those in the fields table.
         * Ultimately, we're trying to make sure that our fields table matches our form cache.
         * 
         * Since we're treating the cache as the truth, we want to remove fields that don't exist in the cache.
         * We also want to insert any fields that exist in the cache, but not in the fields table.
         *
         * This method doesn't perform those operations, but it sets the class vars that the appropriate
         * methods use to figure out what to add and remove.
         *
         * @since  3.4.0
         * @return void
         */
        private function setup_vars()
        {
        }
        /**
         * Our setup_vars method adds fields to the insert class var.
         * Any fields that are in this array need to be inserted into our database.
         *
         * This is the first insert/update method to run, so it doesn't check lock_process.
         * If the insert class var is empty, then we bail early.
         * 
         * @since  3.4.0
         * @return void
         */
        private function maybe_insert_fields()
        {
        }
        /**
         * If we have any duplicate field ids, we need to update any existing submissions with the new field ID.
         *
         * The $this->submission_updates array will look like:
         *
         * $this->submission_updates[ original_id ] = new_id;
         *
         * This method:
         *     Checks to see if we have any fields in our $this->submission_updates array (have a changed ID)
         *     Makes sure that processing isn't locked
         *     Loops over fields in our $this->submission_updates array
         *     Fetches submission post meta for the specific form ID and _field_OLDID
         *     Uses a SQL UPDATE statement to replace _field_OLDID with _field_NEWID
         * 
         * @since  3.4.0
         * @return void
         */
        private function maybe_update_submissions()
        {
        }
        /**
         * If we still have field_ids in our class var, then we need to update the field table.
         *
         * If lock_process is true or we have no field_ids, we bail early.
         * 
         * @since  3.4.0
         * @return void
         */
        private function maybe_update_fields()
        {
        }
        /**
         * If we've inserted any fields that have changed ids, we want to update those ids in our cache.
         * This method grabs the cache, updates any field ids, then updates the cache.
         * 
         * @since  3.4.0
         * @return void
         */
        private function update_form_cache()
        {
        }
        /**
         * After we've done our processing, but before we get to step cleanup, we need to store process information.
         *
         * This method updates our form class var so that it can be passed to the next step.
         * If we've completed this step, it calls the cleanup method.
         * 
         * @since  3.4.0
         * @return void
         */
        private function end_of_step()
        {
        }
    }
    /**
     * Class NF_Updates_CacheCollateForms
     * 
     * This class manages the step process of running through the CacheCollateForms required update.
     * It will define an object to pull data from (if necessary) to pick back up if exited early.
     * It will run an upgrade function to alter the nf3_forms and nf3_form_meta tables.
     * Then, it will step over each form on the site, following this process:
     * - New columns in the nf3_forms table will be populated with data from the cache.
     * - New and existing columns in the nf3_form_meta tables will be populated from the cache.
     * - A new record of the cache will be saved to the nf3_upgrades table (if it does not already exist).
     * After completing the above for every form on the site, it will remove the data object that manages its location.
     */
    class NF_Updates_CacheCollateForms extends \NF_Abstracts_RequiredUpdate
    {
        private $data = array();
        private $running = array();
        /**
         * Stores information about the current form being processed.
         * @var array
         */
        private $form;
        /**
         * Declare a blacklist for settings to not be inserted.
         * @var array
         */
        private $blacklist = array('title', 'objectType', 'editActive');
        /**
         * The table names for our database queries.
         */
        private $table;
        private $meta_table;
        /**
         * Constructor
         * 
         * @param $data (Array) The data object passed in by the AJAX call.
         * @param $running (Array) The array of required updates being run.
         * 
         * @since 3.4.0
         */
        public function __construct($data = array(), $running)
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a required update after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * 
         * @since  3.4.0
         * @return void
         */
        private function end_of_step()
        {
        }
        /**
         * Update our form table for the current form.
         * We have new table columns, so we want to make sure that those are populated properly.
         *
         * Also checks meta values against our $this->blacklist.
         * 
         * @since  3.4.0
         * @updated 3.4.4
         * @return [type]  [description]
         */
        private function update_form()
        {
        }
    }
    /**
     * Class NF_Updates_CacheCollateForms
     * 
     * This class manages the step process of running through the CacheCollateObjects required update.
     * It will define an object to pull data from (if necessary) to pick back up if exited early.
     * It will run an upgrade function to alter the nf3_objects and nf3_object_meta tables.
     * Then, it will step over each object in the db, following this process:
     * - Append the object_title
     * Then, it will step over each object_meta in the db, following this process:
     * - Copy over the meta_key
     * - Append the meta_value
     * After completing the above for every form on the site, it will remove the data object that manages its location.
     */
    class NF_Updates_CacheCollateObjects extends \NF_Abstracts_RequiredUpdate
    {
        private $data = array();
        private $running = array();
        /**
         * The table names for our database queries.
         */
        private $table;
        private $meta_table;
        /**
         * The row counts of our database tables.
         */
        private $table_rows = 0;
        private $meta_rows = 0;
        /**
         * The denominator object for calculating our steps.
         * @var Integer
         */
        private $divisor = 500;
        /**
         * Constructor
         * 
         * @param $data (Array) The data object passed in by the AJAX call.
         * @param $running (Array) The array of required updates being run.
         * 
         * @since 3.4.0
         */
        public function __construct($data = array(), $running)
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a required update after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * Function to manage the updating of our objects table.
         * 
         * @return Void
         * 
         * @since 3.4.0
         */
        private function maybe_update_objects()
        {
        }
        /**
         * Function to manage the updating of our object_meta table.
         * 
         * @return Void
         * 
         * @since 3.4.0
         */
        private function maybe_update_object_meta()
        {
        }
    }
    /**
     * Class NF_Updates_CacheFieldReconcilliation
     * 
     * This allows us to make sure that the data being saved to the database is in the fields table.
     */
    class NF_Updates_CacheFieldReconcilliation extends \NF_Abstracts_RequiredUpdate
    {
        private $data = array();
        private $running = array();
        /**
         * Non-associatve array of field ids from the cache.
         * @var array
         */
        private $field_ids = array();
        /**
         * columns to retrieve from meta table
         */
        private $meta_keys = array('label', 'key', 'order', 'required', 'default', 'label_pos', 'personally_identifiable');
        /**
         * The denominator object for calculating our steps.
         * @var Integer
         */
        private $divisor = 200;
        /**
         * The table names for our database queries.
         */
        private $table;
        private $meta_table;
        /**
         * Constructor
         * 
         * @param $data (Array) The data object passed in by the AJAX call.
         * @param $running (Array) The array of required updates being run.
         * 
         * @since 3.4.0
         */
        public function __construct($data = array(), $running)
        {
        }
        /**
         * Function to loop over the batch.
         * 
         * @since 3.4.0
         */
        public function process()
        {
        }
        /**
         * Function to run any setup steps necessary to begin processing.
         * 
         * @since 3.4.0
         */
        public function startup()
        {
        }
        public function get_fields_this_step()
        {
        }
        /**
         * Update field table records with data from field meta
         */
        public function update_fields()
        {
        }
        /**
         * Get meta data to use for updating 
         */
        public function get_field_meta()
        {
        }
        /**
         * Construct the query to get meta data
         * 
         * return String $meta_query
         */
        public function get_field_meta_query()
        {
        }
        /**
         * Format the data into format that helps us construct the insert/update query
         * 
         * @param Array $metadata
         * 
         * @return Array $meta_data
         */
        public function format_field_meta($metadata)
        {
        }
        /**
         * Construct field update query
         */
        public function get_update_query($field_data)
        {
        }
        /**
         * Function to cleanup any lingering temporary elements of a required update after completion.
         * 
         * @since 3.4.0
         */
        public function cleanup()
        {
        }
        /**
         * After we've done our processing, but before we get to step cleanup, we need to store process information.
         *
         * This method updates our form class var so that it can be passed to the next step.
         * If we've completed this step, it calls the cleanup method.
         * 
         * @since  3.4.0
         * @return void
         */
        private function end_of_step()
        {
        }
        /**
         * Function to compress our db results into a more useful format.
         * 
         * @param $data (Array) The result to be compressed.
         * 
         * @return (Array) Associative if our data was complex.
         *                 Non-associative if our data was a single item.
         * 
         * @since 3.0.0
         */
        private function array_squash($data)
        {
        }
    }
    /**
     * The Ninja Forms WP-CLI Command
     */
    class NF_WPCLI_NinjaFormsCommand extends \WP_CLI_Command
    {
        /**
         * Display Ninja Forms Information
         *
         * @subcommand info
         */
        function info()
        {
        }
        /**
         * Creates a Form
         *
         * ## OPTIONS
         *
         * <title>
         * : The form title.
         *
         * ## EXAMPLES
         *
         *     wp ninja-forms form "My New Form"
         *
         * @synopsis <title>
         * @subcommand form
         * @alias create-form
         */
        public function create_form($args, $assoc_args)
        {
        }
        /**
         * @subcommand list
         * @alias list-forms
         */
        public function list_forms($args, $assoc_args)
        {
        }
        /**
         * @synopsis <id>
         * @subcommand get
         * @alias get-form
         */
        public function get_form($args, $assoc_args)
        {
        }
        /**
         * Installs mock form data
         */
        public function mock()
        {
        }
        private function peeking_ninja()
        {
        }
    }
    /**
     * Adds Ninja Forms widget.
     */
    class NF_Widget extends \WP_Widget
    {
        /**
         * Register widget with WordPress.
         */
        public function __construct()
        {
        }
        /**
         * Front-end display of widget.
         *
         * @see WP_Widget::widget()
         *
         * @param array $args     Widget arguments.
         * @param array $instance Saved values from database.
         */
        public function widget($args, $instance)
        {
        }
        /**
         * Sanitize widget form values as they are saved.
         *
         * @see WP_Widget::update()
         *
         * @param array $new_instance Values just sent to be saved.
         * @param array $old_instance Previously saved values from database.
         *
         * @return array Updated safe values to be saved.
         */
        public function update($new_instance, $old_instance)
        {
        }
        /**
         * Back-end widget form.
         *
         * @see WP_Widget::form()
         *
         * @param array $instance Previously saved values from database.
         */
        public function form($instance)
        {
        }
    }
    final class NF_AddonChecker
    {
        public function __construct()
        {
        }
        public function check_plugins()
        {
        }
        public function deactivation_notice()
        {
        }
    }
    /**
     * Class NF_Tracking
     */
    final class NF_Tracking
    {
        const OPT_IN = 1;
        const OPT_OUT = 0;
        const FLAG = 'ninja_forms_opt_in';
        /**
         * NF_Tracking constructor.
         */
        public function __construct()
        {
        }
        /**
         * Check if an opt in/out action should be performed.
         *
         * @access public
         * @hook admin_init
         */
        public function maybe_opt_in()
        {
        }
        /**
         * Report that a user has opted-in.
         *
         * @param array $data Dispatch event data.
         */
        function report_optin($data = array())
        {
        }
        /**
         * Check if the current user is allowed to opt in on behalf of a site
         *
         * @return bool
         */
        private function can_opt_in()
        {
        }
        /**
         * Check if a site is opted in
         *
         * @access public
         * @return bool
         */
        public function is_opted_in()
        {
        }
        /**
         * Opt In a site for tracking
         *
         * @access private
         * @return null
         */
        public function opt_in()
        {
        }
        /**
         * Check if a site is opted out
         *
         * @access public
         * @return bool
         */
        public function is_opted_out()
        {
        }
        /**
         * Opt Out a site from tracking
         *
         * @access private
         * @return null
         */
        private function opt_out()
        {
        }
        public function check_setting($setting)
        {
        }
        public function update_setting($value)
        {
        }
    }
    /**
     * Class Ninja_Forms
     */
    final class Ninja_Forms
    {
        /**
         * @since 3.0
         */
        const VERSION = '3.8.8';
        /**
         * @since 3.4.0
         */
        const DB_VERSION = '1.4';
        const WP_MIN_VERSION = '5.0';
        /**
         * @var Ninja_Forms
         * @since 2.7
         */
        private static $instance;
        /**
         * Plugin Directory
         *
         * @since 3.0
         * @var string $dir
         */
        public static $dir = '';
        /**
         * Plugin Database Version
         *
         * This may be overwritten at a later point in this file.
         *
         * @since 3.4.0
         * @var string $db_version
         */
        public static $db_version = self::DB_VERSION;
        /**
         * Plugin URL
         *
         * @since 3.0
         * @var string $url
         */
        public static $url = '';
        /**
         * Admin Menus
         *
         * @since 3.0
         * @var array
         */
        public $menus = array();
        /**
         * AJAX Controllers
         *
         * @since 3.0
         * @var array
         */
        public $controllers = array();
        /**
         * Form Fields
         *
         * @since 3.0
         * @var array
         */
        public $fields = array();
        /**
         * Form Actions
         *
         * @since 3.0
         * @var array
         */
        public $actions = array();
        /**
         * Merge Tags
         *
         * @since 3.0
         * @var array
         */
        public $merge_tags = array();
        /**
         * Metaboxes
         *
         * @since 3.0
         * @var array
         */
        public $metaboxes = array();
        /**
         * Model Factory
         *
         * @var object
         */
        public $factory = '';
        /**
         * Logger
         *
         * @var string
         */
        protected $_logger = '';
        /**
         * Dispatcher
         *
         * @var string
         */
        protected $_dispatcher = '';
        /**
         * @var NF_Session
         */
        protected $session = '';
        /**
         * @var NF_Tracking
         */
        public $tracking;
        /**
         *
         * @var NF_Handlers_FieldsetRepeater
         */
        public $fieldsetRepeater;
        /**
         * Plugin Settings
         *
         * @since 3.0
         * @var array
         */
        protected $settings = array();
        protected $requests = array();
        protected $processes = array();
        public $routes;
        public $preview;
        public $shortcodes;
        public $add_form_modal;
        public $_eos;
        public $notices;
        public $widgets;
        public $submission_expiration_cron;
        /**
         * Main Ninja_Forms Instance
         *
         * Insures that only one instance of Ninja_Forms exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         *
         * @since 2.7
         * @static
         * @staticvar array $instance
         * @return Ninja_Forms Highlander Instance
         */
        public static function instance()
        {
        }
        public function init()
        {
        }
        public function flush_rewrite_rules()
        {
        }
        public function register_rewrite_rules()
        {
        }
        public function admin_init()
        {
        }
        function maybe_load_public_form($template)
        {
        }
        /**
         * Privacy policy suggested content for Ninja Forms
         */
        function nf_plugin_add_suggested_privacy_content()
        {
        }
        /**
         * Return the default suggested privacy policy content.
         *
         * @return string The default policy content.
         */
        function plugin_get_default_privacy_content()
        {
        }
        /**
         * NF PHP Version Whip Notice
         * If the user is on a version below PHP 7.2 then we get an instance of the
         * NF PHP Version Whip class which will add a non-dismissible admin notice.
         *
         * @return NF_Php_Version_Whip
         */
        public function nf_php_version_whip_notice()
        {
        }
        /**
         * Function to launch our various telemetry calls on admin_init.
         */
        public function nf_do_telemetry()
        {
        }
        public function maybe_hide_dashboard_items($items)
        {
        }
        public function scrub_available_actions($actions)
        {
        }
        /**
         * Call back function for the promo manager cron.
         * Grabs a fresh copy of the promotions and stores them in an option.
         *
         * @return void
         */
        public function nf_run_promotion_manager()
        {
        }
        /**
         * Listens for plugin activation and runs check to see if any
         * promotions need to be added or removed.
         *
         * @return void
         */
        public function nf_bust_promotion_cache_on_plugin_activation($plugin, $network_activation)
        {
        }
        /**
         * Build a look up table for the add-ons that have promotions.
         * TODO: maybe come up with a better name for this class.
         *
         * @return array of promotions.
         */
        public function get_promotion_addons_lookup_table()
        {
        }
        /**
         * Loops over our add-ons that have promotions and
         * runs the promotion manager class.
         *
         * @return void
         */
        public function nf_maybe_bust_promotion_cache($promo_addons, $plugin_being_activated)
        {
        }
        public function admin_notices()
        {
        }
        public function plugins_loaded()
        {
        }
        /**
         * Autoloader
         *
         * Autoload Ninja Forms classes
         *
         * @param $class_name
         */
        public function autoloader($class_name)
        {
        }
        /*
         * PUBLIC API WRAPPERS
         */
        /**
         * Form Model Factory Wrapper
         *
         * @param $id
         * @return NF_Abstracts_ModelFactory
         */
        public function form($id = '')
        {
        }
        /**
         * Logger Class Wrapper
         *
         * Example Use:
         * Ninja_Forms()->logger()->log( 'debug', "Hello, {name}!", array( 'name' => 'world' ) );
         * Ninja_Forms()->logger()->debug( "Hello, {name}!", array( 'name' => 'world' ) );
         *
         * @return string
         */
        public function logger()
        {
        }
        public function dispatcher()
        {
        }
        public function eos()
        {
        }
        public function session()
        {
        }
        public function request($action)
        {
        }
        public function background_process($action)
        {
        }
        /**
         * Get a setting
         *
         * @param string     $key
         * @param bool|false $default
         * @return bool
         */
        public function get_setting($key = '', $default = \false)
        {
        }
        /**
         * Get all the settings
         *
         * @return array
         */
        public function get_settings()
        {
        }
        /**
         * Update a setting
         *
         * @param string           $key
         * @param mixed           $value
         * @param bool|false $defer_update Defer the database update of all settings
         */
        public function update_setting($key, $value, $defer_update = \false)
        {
        }
        /**
         * Save settings to database
         *
         * @param array $settings
         */
        public function update_settings($settings = array())
        {
        }
        /**
         * Display Wrapper
         *
         * @param $form_id
         */
        public function display($form_id, $preview = \FALSE)
        {
        }
        /*
         * PRIVATE METHODS
         */
        private function sort_actions($a, $b)
        {
        }
        /**
         * Load Classes from Directory
         *
         * @param string $prefix
         * @return array
         */
        private static function load_classes($prefix = '')
        {
        }
        /*
         * STATIC METHODS
         */
        /**
         * Template
         *
         * @param string $file_name
         * @param array $data
         */
        public static function template($file_name = '', array $data = array(), $return = \FALSE)
        {
        }
        /**
         * Config
         *
         * @param $file_name
         * @return mixed
         */
        public static function config($file_name)
        {
        }
        /**
         * Activation
         */
        public function activation()
        {
        }
        /**
         * Deprecated Notice
         *
         * Example: Ninja_Forms::deprecated_hook( 'ninja_forms_old', '3.0', 'ninja_forms_new', debug_backtrace() );
         *
         * @param $deprecated
         * @param $version
         * @param null $replacement
         * @param null $backtrace
         */
        public static function deprecated_notice($deprecated, $version, $replacement = \null, $backtrace = \null)
        {
        }
        /**
         * Function to deregister already completed updates from the list of required updates.
         *
         * @since 3.3.14
         *
         * @codeCoverageIgnore WP hook only; tests in called class
         * 
         * @param $updates (Array) Our array of required updates.
         * @return $updates (Array) Our array of required updates.
         */
        public function remove_completed_updates($updates)
        {
        }
        /**
         * Function to deregister updates that have required updates that either
         * don't exist, or are malformed
         *
         * @since UPDATE_TO_LATEST version
         *
         * @codeCoverageIgnore WP hook only; tests in called class
         * 
         * @param $updates (Array) Our array of required updates.
         * @return $updates (Array) Our array of required updates.
         */
        public function remove_bad_updates($updates)
        {
        }
    }
}
namespace NinjaForms {
    class OAuth
    {
        protected static $instance;
        protected $base_url;
        protected $client_id, $client_secret;
        public static function getInstance()
        {
        }
        public static function set_base_url($base_url)
        {
        }
        protected function __construct()
        {
        }
        public function setup()
        {
        }
        public static function is_connected()
        {
        }
        public static function get_client_id()
        {
        }
        public static function get_client_secret()
        {
        }
        public static function connect_url($endpoint = 'connect')
        {
        }
        public function connect()
        {
        }
        public function disconnect()
        {
        }
        public static function generate_secret($length = 40)
        {
        }
    }
    /**
     * A blank plugin installer skin.
     */
    class Remote_Installer_Skin extends \Plugin_Installer_Skin
    {
        protected $errors;
        public function error($errors)
        {
        }
        public function get_errors()
        {
        }
        public function feedback($feedback, ...$args)
        {
        }
        public function before()
        {
        }
        public function after()
        {
        }
    }
}
namespace {
    // autoload_real.php @generated by Composer
    class ComposerAutoloaderInite9b8b4150496273fa661dc8e0462d223
    {
        private static $loader;
        public static function loadClassLoader($class)
        {
        }
        /**
         * @return \Composer\Autoload\ClassLoader
         */
        public static function getLoader()
        {
        }
    }
}
namespace Composer\Autoload {
    class ComposerStaticInite9b8b4150496273fa661dc8e0462d223
    {
        public static $prefixLengthsPsr4 = array('N' => array('NinjaForms\\NinjaForms\\' => 22, 'NinjaForms\\Includes\\' => 20, 'NinjaForms\\Blocks\\' => 18));
        public static $prefixDirsPsr4 = array('NinjaForms\\NinjaForms\\' => array(0 => __DIR__ . '/../..' . '/'), 'NinjaForms\\Includes\\' => array(0 => __DIR__ . '/../..' . '/includes'), 'NinjaForms\\Blocks\\' => array(0 => __DIR__ . '/../..' . '/blocks/views/includes'));
        public static $classMap = array('Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php');
        public static function getInitializer(\Composer\Autoload\ClassLoader $loader)
        {
        }
    }
}
namespace {
    /**
     * The main function responsible for returning The Highlander Plugin
     * Instance to functions everywhere.
     *
     * Use this function like you would a global variable, except without needing
     * to declare the global.
     *
     * Example: <?php $nf = NF_Abstracts_Extension(); ?>
     *
     * @since 3.0
     * @return Plugin Highlander Instance
     */
    function NF_Abstracts_Extension()
    {
    }
    function wp_ajax_ninja_forms_sendwp_remote_install_handler()
    {
    }
    /**
     * Return the current cache expire setting.
     *
     * @return int
     */
    function wp_session_cache_expire()
    {
    }
    /**
     * Alias of wp_session_write_close()
     */
    function wp_session_commit()
    {
    }
    /**
     * Load a JSON-encoded string into the current session.
     *
     * @param string $data
     */
    function wp_session_decode($data)
    {
    }
    /**
     * Encode the current session's data as a JSON string.
     *
     * @return string
     */
    function wp_session_encode()
    {
    }
    /**
     * Regenerate the session ID.
     *
     * @param bool $delete_old_session
     *
     * @return bool
     */
    function wp_session_regenerate_id($delete_old_session = \false)
    {
    }
    /**
     * Start new or resume existing session.
     *
     * Resumes an existing session based on a value sent by the _wp_session cookie.
     *
     * @return bool
     */
    function wp_session_start()
    {
    }
    /**
     * Return the current session status.
     *
     * @return int
     */
    function wp_session_status()
    {
    }
    /**
     * Unset all session variables.
     */
    function wp_session_unset()
    {
    }
    /**
     * Write session data and end session
     */
    function wp_session_write_close()
    {
    }
    /**
     * Clean up expired sessions by removing data and their expiration entries from
     * the WordPress options table.
     *
     * This method should never be called directly and should instead be triggered as part
     * of a scheduled task or cron job.
     */
    function wp_session_cleanup()
    {
    }
    /**
     * Register the garbage collector as a twice daily event.
     */
    function wp_session_register_garbage_collection()
    {
    }
    // class Foo_Widget
    /**
     * Register NF widget
     *
     * @see 'widgets_init'
     */
    function NF_register_widgets()
    {
    }
    /**
     * Register our step processing admin page.
     *
     * @since 2.7.6
     * @return void
     */
    function nf_register_step_processing_page()
    {
    }
    /**
     * Enqueue our step processing CSS.
     *
     * @since 2.7.6
     * @return void
     */
    function nf_step_processing_css()
    {
    }
    /**
     * Enqueue our step processing JS.
     *
     * @since 2.7.6
     * @return void
     */
    function nf_step_processing_js()
    {
    }
    /**
     * Output our step processing admin page.
     *
     * @since 2.7.6
     * @return void
     */
    function nf_output_step_processing_page()
    {
    }
    /**
     * Extract page title from given input
     *
     * @param string $title
     * @return string
     */
    function nfExtractPageTitle($title)
    {
    }
    function ninja_forms_three_table_exists()
    {
    }
    // End Class Ninja_Forms
    /**
     * The main function responsible for returning The Highlander Ninja_Forms
     * Instance to functions everywhere.
     *
     * Use this function like you would a global variable, except without needing
     * to declare the global.
     *
     * Example: <?php $nf = Ninja_Forms(); ?>
     *
     * @since 2.7
     * @return Ninja_Forms Highlander Instance
     */
    function Ninja_Forms()
    {
    }
    function ninja_forms_uninstall()
    {
    }
    // Scheduled Action Hook
    function nf_optin_update_environment_vars()
    {
    }
    /**
     * Function to register our Custom Cron Recurrences.
     *
     * @param $schedules (Array) The available cron recurrences.
     * @return (Array) The filtered cron recurrences.
     *
     */
    function nf_custom_cron_job_recurrence($schedules)
    {
    }
    // Schedule Cron Job Event
    function nf_optin_send_admin_email_cron_job()
    {
    }
    /**
     * Function called via weekly wp_cron to update our marketing feeds.
     *
     * @since 3.3.17
     */
    function nf_update_marketing_feed()
    {
    }
    /**
     * Function called by our marketing feed cron.
     *
     * @since 3.3.17
     */
    function nf_marketing_feed_cron_job()
    {
    }
}