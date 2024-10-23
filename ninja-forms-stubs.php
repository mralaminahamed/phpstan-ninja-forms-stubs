<?php
/**
 * Generated stub declarations for Ninja Forms.
 * @see https://ninjaforms.com/
 * @see https://github.com/mralaminahamed/phpstan-ninja-forms-stubs
 */

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
class NF_Step_Processing
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
class NF_Download_All_Subs extends \NF_Step_Processing
{
    function __construct()
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
}
/**
 * Handles the output of our form, as well as interacting with its settings.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Form
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.7
*/
class NF_Form
{
    /**
     * @var form_id
     * @since 2.7
     */
    var $form_id;
    /**
     * @var settings - Form Settings
     * @since 2.7
     */
    var $settings = array();
    /**
     * @var fields - Form Fields
     * @since 2.7
     */
    var $fields = array();
    /**
     * @var fields - Fields List
     * @since 2.7
     */
    var $field_keys = array();
    /**
     * @var errors - Form errors
     * @since 2.7
     */
    var $errors = array();
    /**
     * Get things started
     * 
     * @access public
     * @since 2.7
     * @return void
     */
    public function __construct($form_id = '')
    {
    }
    /**
     * Add a form
     * 
     * @access public
     * @since 2.9
     * @return int $form_id
     */
    public function create($defaults = array())
    {
    }
    /**
     * Insert a field into our form
     * 
     * @access public
     * @since 2.9
     * @return bool()
     */
    public function insert_field($field_id)
    {
    }
    /**
     * Update our fields
     * 
     * @access public
     * @since 2.9
     * @return void
     */
    public function update_fields()
    {
    }
    /**
     * Get one of our form settings.
     * 
     * @access public
     * @since 2.7
     * @return string $setting
     */
    public function get_setting($setting, $bypass_cache = \false)
    {
    }
    /**
     * Update a form setting (this doesn't update anything in the database)
     * Changes are only applied to this object.
     * 
     * @access public
     * @since 2.8
     * @param string $setting
     * @param mixed $value
     * @return bool
     */
    public function update_setting($setting, $value)
    {
    }
    /**
     * Get all of our settings
     * 
     * @access public
     * @since 2.9
     * @return array $settings
     */
    public function get_all_settings()
    {
    }
    /**
     * Get all the submissions for this form
     * 
     * @access public
     * @since 2.7
     * @return array $sub_ids
     */
    public function get_subs($args = array())
    {
    }
    /**
     * Return a count of the submissions this form has had
     * 
     * @access public
     * @param array $args
     * @since 2.7
     * @return int $count
     */
    public function sub_count($args = array())
    {
    }
    /**
     * Delete this form
     * 
     * @access public
     * @since 2.9
     */
    public function delete()
    {
    }
    /**
     * Delete the cached form object (transient)
     *
     * @access public
     * @since 2.9.17
     */
    public function dump_cache()
    {
    }
    /**
     * Deprecated wrapper for dump_cache()
     *
     * @access public
     * @since 2.9.12
     */
    public function dumpCache()
    {
    }
}
/**
 * Handles adding and removing forms.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Form
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.9
*/
class NF_Forms
{
    /**
     * Store our array of form ids
     * 
     * @since 2.9
     */
    var $forms = array();
    /**
     * Get things started
     * 
     * @access public
     * @since 2.9
     * @return void
     */
    public function __construct()
    {
    }
    /**
     * Get all forms
     * 
     * @access public
     * @since 2.9
     * @return array $forms
     */
    public function get_all($show_new = \false)
    {
    }
    /**
     * Delete a form if it is created and not saved within 24 hrs.
     * 
     * @access public
     * @since 2.9
     * @return void
     */
    public function maybe_delete($form_id)
    {
    }
    /**
     * Update cached forms
     * 
     * @access public
     * @since 2.9
     * @return void
     */
    public function update_cache($debug = \false, $show_new = \false)
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
class NF_Notices
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
 * NF_Notices_MP Class
 *
 * Extends NF_Notices to check for 20 or more fields in a single form and if multi-part forms is not installed before throwing an admin notice.
 *
 * @since 2.9
 */
class NF_Notices_MP extends \NF_Notices
{
    // Basic actions to run
    public function __construct()
    {
    }
    // Function to do all the special checks before running the notice
    public function special_parameters($admin_notices)
    {
    }
    // Ignore function that gets ran at admin init to ensure any messages that were dismissed get marked
    public function admin_notice_ignore()
    {
    }
}
/**
 * NF_Notices_SP Class
 *
 * Extends NF_Notices to check for 40 or more fields in a single form and if multi-part forms is not installed before throwing an admin notice.
 *
 * @since 2.9
 */
class NF_Notices_SP extends \NF_Notices
{
    // Basic actions to run
    public function __construct()
    {
    }
    // Function to do all the special checks before running the notice
    public function special_parameters($admin_notices)
    {
    }
    // Ignore function that gets ran at admin init to ensure any messages that were dismissed get marked
    public function admin_notice_ignore()
    {
    }
}
/**
 * Class for notification types.
 * This is the parent class. it should be extended by specific notification types
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Notifications
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.8
*/
abstract class NF_Notification_Base_Type
{
    /**
     * Get things rolling
     *
     * @since 2.8
     */
    function __construct()
    {
    }
    /**
     * Processing function
     *
     * @access public
     * @since 2.8
     * @return false
     */
    public function process($id)
    {
    }
    /**
     * Output admin edit screen
     *
     * @access public
     * @since 2.8
     * @return false
     */
    public function edit_screen($id = '')
    {
    }
    /**
     * Save admin edit screen
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function save_admin($id = '', $data)
    {
    }
    /**
     * Explode our settings by ` and extract each value.
     * Check to see if the setting is a field; if it is, assign the value.
     * Run shortcodes and return the result.
     *
     * @access public
     * @since 2.8
     * @return array $setting
     */
    public function process_setting($id, $setting, $html = 1)
    {
    }
}
/**
 * Class for our email notification type.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Notifications
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.8
*/
class NF_Notification_Email extends \NF_Notification_Base_Type
{
    /**
     * Get things rolling
     */
    function __construct()
    {
    }
    /**
     * Output our edit screen
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function edit_screen($id = '')
    {
    }
    /**
     * Get our input value labels
     *
     * @access public
     * @since 2.8
     * @return string $label
     */
    public function get_value($id, $meta_key, $form_id)
    {
    }
    /**
     * Process our Email notification
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function process($id)
    {
    }
    public function flatten_array_recursive($glue = ',', array $array = array())
    {
    }
    /**
     * Explode our settings by ` and extract each value.
     * Check to see if the setting is a field; if it is, assign the value.
     * Run shortcodes and return the result.
     *
     * @access public
     * @since 2.8
     * @return array $setting
     */
    public function process_setting($id, $setting, $html = 0)
    {
    }
}
/**
 * Class for our redirect notification type.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Notifications
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.8
*/
class NF_Notification_Redirect extends \NF_Notification_Base_Type
{
    /**
     * Get things rolling
     */
    function __construct()
    {
    }
    /**
     * Output our edit screen
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function edit_screen($id = '')
    {
    }
    /**
     * Process our Redirect notification
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function process($id)
    {
    }
}
/**
 * Class for our success message notification type.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Notifications
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.8
*/
class NF_Notification_Success_Message extends \NF_Notification_Base_Type
{
    /**
     * Get things rolling
     */
    function __construct()
    {
    }
    /**
     * Output our edit screen
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function edit_screen($id = '')
    {
    }
    /**
     * Process our Success Message notification
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function process($id)
    {
    }
}
/**
 * Notification
 * 
 * Single notification object.
 * This object lets us call it like: Ninja_Forms()->notification( 33 )->methods()
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Notifications
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.8
*/
class NF_Notification
{
    /**
     * @var notification id
     */
    var $id = '';
    /**
     * @var type
     */
    var $type = '';
    /**
     * @var active
     * Holds a boolean value.
     */
    var $active = '';
    /**
     * @var form_id
     * Holds the id of our form.
     */
    var $form_id = '';
    /**
     * Get things rolling
     * 
     * @since 2.8
     * @return void
     */
    function __construct($id)
    {
    }
    /**
     * Ouptut our admin screen
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function edit_screen()
    {
    }
    /**
     * Delete our notification
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function delete()
    {
    }
    /**
     * Activate our notification
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function activate()
    {
    }
    /**
     * Deactivate our notification
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function deactivate()
    {
    }
    /**
     * Duplicate our notification
     *
     * @access public
     * @since 2.8
     * @return int $n_id
     */
    public function duplicate()
    {
    }
    /**
     * Run our notification processing function
     * 
     * @access public
     * @since 2.8
     * @return void
     */
    public function process()
    {
    }
    /**
     * Get a notification setting
     * 
     * @access public
     * @since 2.8
     * @return string $meta_value
     */
    public function get_setting($meta_key)
    {
    }
    /**
     * Update a notification setting
     * 
     * @access public
     * @since 2.8
     * @return bool
     */
    public function update_setting($meta_key, $meta_value)
    {
    }
    /**
     * Get our notification type name
     * 
     * @access public
     * @since 2.9
     * @return string $name
     */
    public function type_name()
    {
    }
}
/************************** CREATE A PACKAGE CLASS *****************************
 *******************************************************************************
 * Create a new list table package that extends the core WP_List_Table class.
 * WP_List_Table contains most of the framework for generating the table, but we
 * need to define and override some methods so that our data can be displayed
 * exactly the way we need it to be.
 *
 * To display this example on a page, you will first need to instantiate the class,
 * then call $yourInstance->prepare_items() to handle any data manipulation, then
 * finally call $yourInstance->display() to render the table to the page.
 *
 * Our theme for this list table is going to be movies.
 */
class NF_Notifications_List_Table extends \WP_List_Table
{
    /**
     * @var form_id
     */
    var $form_id = '';
    /** ************************************************************************
     * REQUIRED. Set up a constructor that references the parent constructor. We
     * use the parent reference to set some default configs.
     ***************************************************************************/
    function __construct()
    {
    }
    /** ************************************************************************
     * Recommended. This method is called when the parent class can't find a method
     * specifically build for a given column. Generally, it's recommended to include
     * one method for each column you want to render, keeping your package class
     * neat and organized. For example, if the class needs to process a column
     * named 'title', it would first see if a method named $this->column_title()
     * exists - if it does, that method will be used. If it doesn't, this one will
     * be used. Generally, you should try to use custom column methods as much as
     * possible.
     *
     * Since we have defined a column_title() method later on, this method doesn't
     * need to concern itself with any column with a name of 'title'. Instead, it
     * needs to handle everything else.
     *
     * For more detailed insight into how columns are handled, take a look at
     * WP_List_Table::single_row_columns()
     *
     * @param array $item A singular item (one full row's worth of data)
     * @param array $column_name The name/slug of the column to be processed
     * @return string Text or HTML to be placed inside the column <td>
     **************************************************************************/
    public function column_default($item, $column_name)
    {
    }
    /** ************************************************************************
     * Recommended. This is a custom column method and is responsible for what
     * is rendered in any column with a name/slug of 'title'. Every time the class
     * needs to render a column, it first looks for a method named
     * column_{$column_title} - if it exists, that method is run. If it doesn't
     * exist, column_default() is called instead.
     *
     * This example also illustrates how to implement rollover actions. Actions
     * should be an associative array formatted as 'slug'=>'link html' - and you
     * will need to generate the URLs yourself. You could even ensure the links
     *
     *
     * @see WP_List_Table::::single_row_columns()
     * @param array $item A singular item (one full row's worth of data)
     * @return string Text to be placed inside the column <td> (movie title only)
     **************************************************************************/
    public function column_name($item)
    {
    }
    /** ************************************************************************
     * REQUIRED if displaying checkboxes or using bulk actions! The 'cb' column
     * is given special treatment when columns are processed. It ALWAYS needs to
     * have it's own method.
     *
     * @see WP_List_Table::::single_row_columns()
     * @param array $item A singular item (one full row's worth of data)
     * @return string Text to be placed inside the column <td> (movie title only)
     **************************************************************************/
    public function column_cb($item)
    {
    }
    /** ************************************************************************
     * REQUIRED! This method dictates the table's columns and titles. This should
     * return an array where the key is the column slug (and class) and the value
     * is the column's title text. If you need a checkbox for bulk actions, refer
     * to the $columns array below.
     *
     * The 'cb' column is treated differently than the rest. If including a checkbox
     * column in your table you must create a column_cb() method. If you don't need
     * bulk actions or checkboxes, simply leave the 'cb' entry out of your array.
     *
     * @see WP_List_Table::::single_row_columns()
     * @return array An associative array containing column information: 'slugs'=>'Visible Titles'
     **************************************************************************/
    public function get_columns()
    {
    }
    /** ************************************************************************
     * Optional. If you want one or more columns to be sortable (ASC/DESC toggle),
     * you will need to register it here. This should return an array where the
     * key is the column that needs to be sortable, and the value is db column to
     * sort by. Often, the key and value will be the same, but this is not always
     * the case (as the value is a column name from the database, not the list table).
     *
     * This method merely defines which columns should be sortable and makes them
     * clickable - it does not handle the actual sorting. You still need to detect
     * the ORDERBY and ORDER querystring variables within prepare_items() and sort
     * your data accordingly (usually by modifying your query).
     *
     * @return array An associative array containing all the columns that should be sortable: 'slugs'=>array('data_values',bool)
     **************************************************************************/
    public function get_sortable_columns()
    {
    }
    /** ************************************************************************
     * Optional. If you need to include bulk actions in your list table, this is
     * the place to define them. Bulk actions are an associative array in the format
     * 'slug'=>'Visible Title'
     *
     * If this method returns an empty value, no bulk action will be rendered. If
     * you specify any bulk actions, the bulk actions box will be rendered with
     * the table automatically on display().
     *
     * Also note that list tables are not automatically wrapped in <form> elements,
     * so you will need to create those manually in order for bulk actions to function.
     *
     * @return array An associative array containing all the bulk actions: 'slugs'=>'Visible Titles'
     **************************************************************************/
    public function get_bulk_actions()
    {
    }
    public function extra_tablenav($which)
    {
    }
    /**
     * Generates content for a single row of the table
     *
     * @since 3.1.0
     * @access protected
     *
     * @param object $item The current item
     */
    function single_row($item)
    {
    }
    /** ************************************************************************
     * REQUIRED! This is where you prepare your data for display. This method will
     * usually be used to query the database, sort and filter the data, and generally
     * get it ready to be displayed. At a minimum, we should set $this->items and
     * $this->set_pagination_args(), although the following properties and methods
     * are frequently interacted with here...
     *
     * @global WPDB $wpdb
     * @uses $this->_column_headers
     * @uses $this->items
     * @uses $this->get_columns()
     * @uses $this->get_sortable_columns()
     * @uses $this->get_pagenum()
     * @uses $this->set_pagination_args()
     **************************************************************************/
    public function prepare_items()
    {
    }
}
/**
 * Main Notifications Class
 *
 * Adds our notifications to the form edit page.
 * Gets notification types
 * Listens for ajax commands to delete/activate/deactivate notifications
 * Listens for bulk actions from the notifications admin page
 * Adds notification types processing to the appropriate action hook
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Notifications
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.8
*/
class NF_Notifications
{
    /**
     * Get things rolling
     *
     * @access public
     *
     * @since 2.8
     */
    function __construct()
    {
    }
    /**
     * Register our setting tab.
     *
     * @access public
     *
     * @since 2.8
     * @return void
     */
    public function register_tab()
    {
    }
    /**
     * Enqueue JS
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function add_js()
    {
    }
    /**
     * Enqueue CSS
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function add_css()
    {
    }
    /**
     * Output our notifications admin.
     *
     * @access public
     *
     * @since 2.8
     * @return void
     */
    public function output_admin()
    {
    }
    /**
     * Save our notifications admin.
     *
     * @access public
     *
     * @since 2.8
     * @return void
     */
    public function save_admin($form_id, $data)
    {
    }
    /**
     * Get our registered notification types
     *
     * @access public
     * @since 2.8
     * @return array $types
     */
    public function get_types()
    {
    }
    /**
     * Delete a notification.
     * Hooked into the ajax action for nf_delete_notification
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function delete_notification()
    {
    }
    /**
     * Activate a notification.
     * Hooked into the ajax action for nf_activate_notification
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function activate_notification()
    {
    }
    /**
     * Deactivate a notification.
     * Hooked into the ajax action for nf_deactivate_notification
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function deactivate_notification()
    {
    }
    /**
     * Duplicate our notification
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function duplicate_notification()
    {
    }
    /**
     * Create a new notification
     *
     * @access public
     * @since 2.8
     * @return int $n_id
     */
    public function create($form_id = '')
    {
    }
    /**
     * Handle bulk actions
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function bulk_actions()
    {
    }
    /**
     * Output our tinyMCE field buttons
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function tinymce_buttons($context)
    {
    }
    /**
     * Loop through our notifications and add their processing functions to the appropriate hook.
     *
     * @access public
     * @since 2.8
     * @return void
     */
    public function notification_processing()
    {
    }
}
/**
 * Registration class. Responsible for handling registration of fields, notifications, and sidebars
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Register
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       3.0
*/
class NF_Register
{
    /**
     * Function that registers a notification type
     * 
     * @access public
     * @param string $slug - Notification type slug. Must be unique.
     * @param string $classname - Name of the class that should be used for the notification type.
     * @since 3.0
     * @return void
     */
    public function notification_type($slug, $nicename, $classname)
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
/**
 * Submission.
 * This class handles storing, retrieving, editing a submission.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Submissions
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.7
*/
class NF_Sub
{
    /**
     * @var $sub_id store our sub id
     */
    var $sub_id;
    /**
     * @var $seq_num store our sequential number
     */
    var $seq_num;
    /**
     * @var $form_id store our form_id
     */
    var $form_id;
    /**
     * @var $fields store our user values
     */
    var $fields;
    /**
     * @var $action store the action that created this sub
     */
    var $action;
    /**
     * @var $user_id store the user ID for this submission
     */
    var $user_id;
    /**
     * @var $meta store our non-field meta
     */
    var $meta;
    /**
     * @var $date_submitted store our submitted date
     */
    var $date_submitted;
    /**
     * @var $date_modified store our modified date
     */
    var $date_modified;
    /**
     * Get things started
     *
     * @access public
     * @since 2.7
     * @return void/
     */
    public function __construct($sub_id)
    {
    }
    private function retrieve_fields()
    {
    }
    /**
     * Update our form id
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_form_id($form_id)
    {
    }
    /**
     * Update our action
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_action($action)
    {
    }
    /**
     * Update our sequential id
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_seq_num($seq_num)
    {
    }
    /**
     * Update our user id
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_user_id($user_id)
    {
    }
    /**
     * Update our date submitted
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_date_submitted($date)
    {
    }
    /**
     * Update our date modified
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_date_modified($date)
    {
    }
    /**
     * Add a meta value to our submission.
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function add_meta($meta_key, $value)
    {
    }
    /**
     * Update a meta value.
     * Wrapper for add_field().
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_meta($meta_key, $value)
    {
    }
    /**
     * Delete a meta value.
     *
     * @access public
     * @since 2.9
     * @return bool
     */
    public function delete_meta($meta_key, $value = '')
    {
    }
    /**
     * Add a field value to our submission.
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function add_field($field_id, $value)
    {
    }
    /**
     * Update a field value
     *
     * @access public
     * @since 2.7
     * @return bool
     */
    public function update_field($field_id, $value)
    {
    }
    /**
     * Get a meta value from our submission by meta key
     *
     * @access public
     * @since 2.7
     * @return array|bool
     */
    public function get_meta($meta_key)
    {
    }
    /**
     * Get a field value from our submission by field id
     *
     * @access public
     * @since 2.7
     * @return array|bool
     */
    public function get_field($field_id)
    {
    }
    /**
     * Get a submission from the database, returning all the field data.
     *
     * @access public
     * @since 2.7
     * @return array $sub
     */
    public function get_all_fields()
    {
    }
    /**
     * Get a submission sequential ID by the post ID.
     * This function puts together the prefix, sequential number, and postfix
     *
     * @access public
     * @since 2.7
     * @return string $seq_num
     */
    public function get_seq_num()
    {
    }
    /**
     * Export our current submission.
     *
     * @access public
     * @param array $sub_ids
     * @param bool @return
     * @since 2.7
     * @return void
     */
    public function export($return = \false)
    {
    }
    /**
     * Delete this submission
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function delete()
    {
    }
}
/**
 * Submission CPT.
 * This class adds our submission CPT and handles displaying submissions in the wp-admin.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Submissions
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.7
 */
class NF_Subs_CPT
{
    var $form_id;
    var $screen_options;
    var $filename;
    /**
     * Get things started
     *
     * @access public
     * @since 2.7
     * @return void
     */
    function __construct()
    {
    }
    /**
     * Register our submission CPT
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function register_cpt()
    {
    }
    /**
     * Populate our fields var with all the fields. This keeps us from needing to ping the database later.
     *
     * @access public
     * @since 2.7
     */
    public function setup_fields()
    {
    }
    /**
     * Add our submissions submenu
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function add_submenu()
    {
    }
    /**
     * Enqueue our submissions JS file.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function load_js()
    {
    }
    /**
     * Enqueue our submissions CSS file.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function load_css()
    {
    }
    /**
     * Modify the columns of our submissions table.
     *
     * @access public
     * @since 2.7
     * @return array $cols
     */
    public function change_columns($cols)
    {
    }
    /**
     * Make our columns sortable
     *
     * @access public
     * @since 2.7
     * @return array
     */
    public function sortable_columns()
    {
    }
    /**
     * Actually sort our columns
     *
     * @access public
     * @since 2.7
     * @return array $vars
     */
    public function sort_columns($vars)
    {
    }
    /**
     * Add our custom column data
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function custom_columns($column, $sub_id)
    {
    }
    /**
     * Add our submission filters
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function add_filters()
    {
    }
    /**
     * Filter our submission list by form_id
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function table_filter($query)
    {
    }
    /**
     * Filter our search
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function search($pieces)
    {
    }
    /**
     * Filter our bulk updated/trashed messages so that it uses "submission" rather than "post"
     *
     * @access public
     * @since 2.7
     * @return array $bulk_messages
     */
    public function updated_messages_filter($bulk_messages, $bulk_counts)
    {
    }
    /**
     * Filter our updated/trashed post messages
     *
     * @access public
     * @since 2.7
     * @return array $messages
     */
    function post_updated_messages($messages)
    {
    }
    /**
     * Remove the 'edit' bulk action
     *
     * @access public
     * @since 2.7
     * @return array $actions
     */
    public function remove_bulk_edit($actions)
    {
    }
    /**
     * Add our "export" bulk action
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function bulk_admin_footer()
    {
    }
    /**
     * jQuery that hides some of our post-related page items.
     * Also adds the active class to All and Trash links, and changes those
     * links to match the current filter.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function jquery_remove_counts()
    {
    }
    /**
     * Filter our post counts for the submission listing page
     *
     * @access public
     * @since 2.7
     * @return int $count
     */
    public function count_posts($count, $post_type, $perm)
    {
    }
    /**
     * Add our field editing metabox to the CPT editing page.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function add_metaboxes()
    {
    }
    /**
     * Output our field editing metabox to the CPT editing page.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function edit_sub_metabox($post)
    {
    }
    /**
     * Output our field editing metabox to the CPT editing page.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function save_sub_metabox($post)
    {
    }
    /**
     * Save our submission user values
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function save_sub($sub_id, $post)
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
     * Save our hidden columns per form id.
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function hide_columns()
    {
    }
    /**
     * Add custom screen options
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function output_screen_options($status, $args)
    {
    }
    /**
     * Listen for exporting subs
     *
     * @access public
     * @since 2.7.3
     * @return void
     */
    public function export_listen()
    {
    }
    /**
     * Filter user capabilities
     *
     * @access public
     * @since 2.7.7
     * @return void
     */
    public function cap_filter($allcaps, $cap, $args)
    {
    }
}
/**
 * Submissions.
 * This class handles creating and exporting submissions.
 *
 * @package     Ninja Forms
 * @subpackage  Classes/Submissions
 * @copyright   Copyright (c) 2014, WPNINJAS
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.7
*/
class NF_Subs
{
    /**
     * Get things started
     * 
     * @access public
     * @since 2.7
     * @return void/
     */
    public function __construct()
    {
    }
    /**
     * Create a submission.
     * 
     * @access public
     * @since 2.7
     * @return int $sub_id
     */
    public function create($form_id = '')
    {
    }
    /**
     * Get submissions based on specific critera.
     * 
     * @since 2.7
     * @param array $args
     * @return array $sub_ids
     */
    public function get($args = array())
    {
    }
    /**
     * Export submissions.
     * 
     * @access public
     * @param array $sub_ids
     * @param bool @return
     * @since 2.7
     * @return void
     */
    public function export($sub_ids = '', $return = \false)
    {
    }
}
// uncomment this line for testing
//set_site_transient( 'update_plugins', null );
/**
 * Allows plugins to use their own update API.
 *
 * @author Pippin Williamson
 * @version 1.6
 */
class EDD_SL_Plugin_Updater
{
    private $api_url = '';
    private $api_data = array();
    private $name = '';
    private $slug = '';
    /**
     * Class constructor.
     *
     * @uses plugin_basename()
     * @uses hook()
     *
     * @param string  $_api_url     The URL pointing to the custom API endpoint.
     * @param string  $_plugin_file Path to the plugin file.
     * @param array   $_api_data    Optional data to send with API calls.
     * @return void
     */
    function __construct($_api_url, $_plugin_file, $_api_data = \null)
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
    function check_update($_transient_data)
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
    function plugins_api_filter($_data, $_action = '', $_args = \null)
    {
    }
    /**
     * Disable SSL verification in order to prevent download update failures
     *
     * @param array   $args
     * @param string  $url
     * @return object $array
     */
    function http_request_args($args, $url)
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
     * @return false||object
     */
    private function api_request($_action, $_data)
    {
    }
    public function show_changelog()
    {
    }
}
class NF_WP_Editor_Ajax
{
    /*
     * AJAX Call Used to Generate the WP Editor
     */
    public static function output_js($field_id = '', $editors = array())
    {
    }
    /*
     * Used to retrieve the javascript settings that the editor generates
     */
    private static $mce_settings = array();
    private static $qt_settings = array();
    public static function quicktags_settings($qtInit, $editor_id)
    {
    }
    public static function tiny_mce_before_init($mceInit, $editor_id)
    {
    }
    /*
     * Code copied from _WP_Editors class (modified a little)
     */
    private static function get_qt_init($editor_id)
    {
    }
    private static function get_mce_init($editor_id)
    {
    }
    private static function _parse_init($init)
    {
    }
}
/**
* Class NF_Upgrade_Handler
*/
class NF_UpgradeHandler
{
    static $instance;
    public $upgrades;
    private $page;
    public static function instance()
    {
    }
    public function __construct()
    {
    }
    public function register_upgrades()
    {
    }
    private function compare_upgrade_priority($a, $b)
    {
    }
    public function ajax_response()
    {
    }
    /*
     * UTILITY METHODS
     */
    public function getUpgradeByName($name)
    {
    }
    public function getNextUpgrade($current_upgrade)
    {
    }
}
/**
 * Class NF_Upgrade
 *
 * The Upgrade class should be extended by all upgrades to be used by the Upgrade Handler.
 */
abstract class NF_Upgrade
{
    /**
     * @var name
     *
     * The name is the unique identifier for the upgrade.
     */
    public $name;
    /**
     * @var priority
     *
     * The priority determines the oder in which the upgrades are run.
     * Priorities are compared as version numbers that corresponds to when they were introduced.
     */
    public $priority;
    /**
     * @var decription
     *
     * The description will be displayed for the user in the Upgrade Handler admin screen.
     */
    public $description;
    /**
     * @var total_steps
     *
     * The total number of steps that need to be processed.
     */
    public $total_steps;
    /**
     * @var args
     *
     * The args variable is passes between calls.
     */
    public $args = array();
    /**
     * @var errors
     *
     * The errors property is used to store errors for the Upgrade Handler to reference.
     */
    public $errors = array();
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Loading
     *
     * The loading method is used to setup the upgrade and is called by the Upgrade Handler.
     */
    abstract function loading();
    /**
     * Step
     *
     * @param $step
     *
     * The step method will be called by the parent _step method.
     */
    public abstract function step($step);
    /**
     * Complete
     *
     * The complete method will be called by the Upgrade Handler when all steps are complete.
     */
    public abstract function complete();
    /**
     * Is Complete
     *
     * The isComplete method checks to see if the upgrade has already been completed.
     */
    public abstract function isComplete();
    /**
     * _Step
     *
     * @param $step
     *
     * The _step method is called by the Upgrade Handler and is a middleman for step.
     */
    public function _step($step)
    {
    }
    /**
     * Before Step
     *
     * @param $step
     *
     * The _beforeStep method is called by the _step method before calling the extended step method.
     */
    public function _beforeStep($step)
    {
    }
    /**
     * After Step
     *
     * @param $step
     *
     * The _afterStep method is called by the _step method after calling the extended step method.
     */
    public function _afterStep($step)
    {
    }
    /**
     * Get Last Step
     *
     * Gets the last step processed from the wp_options table.
     *
     * @return mixed
     */
    public function getLastStep()
    {
    }
    /**
     * Set Last Step
     *
     * Updates the value in the wp_options table with the last step processed.
     *
     * @param $step
     */
    public function setLastStep($step)
    {
    }
}
class NF_Convert_Forms_Reset
{
    public function __construct()
    {
    }
    public function register_submenu()
    {
    }
    public function display()
    {
    }
    public function process()
    {
    }
    public function register_advanced_settings($advanced_settings)
    {
    }
    public function display_advanced_settings()
    {
    }
}
final class NF_Upgrade_Forms extends \NF_Upgrade
{
    public $name = 'forms';
    public $priority = '2.9.0';
    public $description = 'Form settings and information needs to be transferred to a new forms database. This new storage method will make it much easier effecient to interact with forms.';
    public $completed_forms = array();
    public $args = array();
    public $errors = array();
    public function loading()
    {
    }
    public function _beforeStep($step)
    {
    }
    public function step($step)
    {
    }
    public function _afterStep($step)
    {
    }
    public function complete()
    {
    }
    public function isComplete()
    {
    }
    /*
     * CONVERSION METHODS
     */
    public function update_form_settings($form_id)
    {
    }
}
final class NF_Upgrade_Notifications extends \NF_Upgrade
{
    public $name = 'notifications';
    public $priority = '2.9.2';
    public $description = 'An update is necessary for the new Emails & Actions tab to function properly. This new section gives the user much more control over what happens when a form is submitted.';
    public $completed_forms = array();
    public $args = array();
    public $errors = array();
    public function loading()
    {
    }
    public function _beforeStep($step)
    {
    }
    public function step($step)
    {
    }
    public function complete()
    {
    }
    public function isComplete()
    {
    }
    /*
     * PRIVATE METHODS
     */
    private function removeOldEmailSettings()
    {
    }
    private function getFormCount()
    {
    }
    private function getAllForms()
    {
    }
    private function replace_shortcodes($text)
    {
    }
}
final class NF_Upgrade_Submissions extends \NF_Upgrade
{
    public $name = 'submissions';
    public $priority = '2.7';
    public $description = 'The new submission database allows submissions to be stored and retrieved more efficiently. It also allows for much better submission searching.';
    public $args = array();
    public $errors = array();
    public function loading()
    {
    }
    public function _beforeStep($step)
    {
    }
    public function step($step)
    {
    }
    public function _afterStep($step)
    {
    }
    public function complete()
    {
    }
    public function isComplete()
    {
    }
    /*
     * PRIVATE METHODS
     */
    private function getOldSubs($begin = '', $count = '')
    {
    }
    private function countOldSubs()
    {
    }
    public function convert($sub, $num)
    {
    }
}
final class NF_Upgrade_Database_Migrations extends \NF_Upgrade
{
    public $name = 'database_migrations';
    public $priority = "0.0.1";
    public $description = 'The database needs to be updated to support the new version.';
    public $args = array();
    public $errors = array();
    public function loading()
    {
    }
    public function step($step)
    {
    }
    public function complete()
    {
    }
    public function isComplete()
    {
    }
    /*
     * PRIVATE METHODS
     */
    private function createObjectTable()
    {
    }
    private function existsObjectTable()
    {
    }
    private function createObjectMetaTable()
    {
    }
    private function existsObjectMetaTable()
    {
    }
    private function createObjectRelationshipsTable()
    {
    }
    private function existsObjectRelationshipsTable()
    {
    }
}
final class NF_Upgrade_Email_Settings extends \NF_Upgrade
{
    public $name = 'email_settings';
    public $priority = '2.9.3';
    public $description = 'Email settings need to be transferred to a new storage method.';
    public $args = array();
    public $errors = array();
    public function loading()
    {
    }
    public function step($step)
    {
    }
    public function complete()
    {
    }
    public function isComplete()
    {
    }
    /*
     * PRIVATE METHODS
     */
    private function changeEmailFav()
    {
    }
    private function getFormCount()
    {
    }
    private function getAllForms()
    {
    }
    private function removeOldEmailSettings($form_id = '')
    {
    }
    function removeOldEmailSendTo($form_id)
    {
    }
}
//if ( ! defined( 'ABSPATH' ) ) exit;
class NF_UpgradeHandlerPage
{
    public $slug = 'nf-upgrade-handler';
    public function __construct()
    {
    }
    public function register()
    {
    }
    public function display()
    {
    }
    public function scripts()
    {
    }
    public function styles()
    {
    }
    public function show_upgrade_notices()
    {
    }
}
/**
 * NF_Welcome Class
 *
 * A general class for About and Credits page.
 *
 * @since 1.4
 */
class NF_Welcome
{
    /**
     * @var string The capability users should have to view the page
     */
    public $minimum_capability = 'manage_options';
    public $display_version = \NF_PLUGIN_VERSION;
    public $header_text;
    public $header_desc;
    /**
     * Get things started
     *
     * @since 1.4
     */
    public function __construct()
    {
    }
    /**
     * Register the Dashboard Pages which are later hidden but these pages
     * are used to render the Welcome and Credits pages.
     *
     * @access public
     * @since 1.4
     * @return void
     */
    public function admin_menus()
    {
    }
    /**
     * Hide Individual Dashboard Pages
     *
     * @access public
     * @since 1.4
     * @return void
     */
    public function admin_head()
    {
    }
    /**
     * Navigation tabs
     *
     * @access public
     * @since 1.9
     * @return void
     */
    public function tabs()
    {
    }
    /**
     * Render About Screen
     *
     * @access public
     * @since 1.4
     * @return void
     */
    public function about_screen()
    {
    }
    /**
     * Render Changelog Screen
     *
     * @access public
     * @since 2.0.3
     * @return void
     */
    public function changelog_screen()
    {
    }
    /**
     * Render Getting Started Screen
     *
     * @access public
     * @since 1.9
     * @return void
     */
    public function getting_started_screen()
    {
    }
    /**
     * Render Credits Screen
     *
     * @access public
     * @since 1.4
     * @return void
     */
    public function credits_screen()
    {
    }
    /**
     * Parse the NF readme.txt file
     *
     * @since 2.0.3
     * @return string $readme HTML formatted readme file
     */
    public function parse_readme()
    {
    }
    /**
     * Render Contributors List
     *
     * @since 1.4
     * @uses NF_Welcome::get_contributors()
     * @return string $contributor_list HTML formatted list of all the contributors for NF
     */
    public function contributors()
    {
    }
    /**
     * Retreive list of contributors from GitHub.
     *
     * @access public
     * @since 1.4
     * @return array $contributors List of contributors
     */
    public function get_contributors()
    {
    }
    /**
     * Sends user to the Welcome page on first activation of NF as well as each
     * time NF is upgraded to a new version
     *
     * @access public
     * @since 1.4
     * @global $nf_options Array of all the NF Options
     * @return void
     */
    public function welcome()
    {
    }
}
/*
 *
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
    /*
     *
     * Define our class variables
     */
    public $product_nice_name = '';
    public $product_name = '';
    public $version = '';
    public $store_url = 'https://ninjaforms.com';
    public $file = '';
    public $author = '';
    public $error = '';
    /*
     *
     * Constructor function
     *
     * @since 2.2.47
     * @return void
     */
    function __construct($product_name, $version, $author, $file, $slug = '')
    {
    }
    // function constructor
    /*
     *
     * Function that adds the license entry fields to the license tab.
     *
     * @since 2.2.47
     * @return void
     */
    function add_license_fields()
    {
    }
    // function add_license_fields
    /*
     *
     * Function that activates the license for this product
     *
     * @since 2.2.47
     * @return void
     */
    function check_license($data)
    {
    }
    // function check_license
    /*
     *
     * Function that activates our license
     *
     * @since 2.2.47
     * @return void
     */
    function activate_license($data)
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
    /*
     *
     * Function that runs all of our auto-update functionality
     *
     * @since 2.2.47
     * @return void
     */
    function auto_update()
    {
    }
    // function auto_update
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
     * Output our field for entering and deactivating a license.
     * 
     * @access public
     * @since 2.9
     * @return void
     */
    public function output_field($form_id, $data, $field)
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
}
/**
 * NF_System_Status Class
 */
class NF_System_Status
{
    /**
     * Initializes the class
     */
    public function __construct()
    {
    }
    /**
     * Handles output of the reports page in admin.
     */
    public function ninja_forms_register_tab_system_status()
    {
    }
}
/**
 * This Ninja Forms Loading Class is used to interact with Ninja Forms as it loads form data.
 * It is based upon the WordPress Error API.
 *
 * Contains the Ninja_Forms_Loading class
 *
 */
/**
 * Ninja Forms Loading class.
 *
 * Class used to interact with form processing.
 * This class stores all data related to the form submission, including data from the Ninja Form mySQL table.
 * It can also be used to report processing errors and/or processing success messages.
 *
 * Form Data Methods:
 *		get_form_ID() - Used to retrieve the form ID of the form being processed.
 *		get_user_ID() - Used to retrieve the User ID if the user was logged in.
 *		get_action() - Used to retrieve the action currently being performed. ('submit', 'save', 'edit_sub').
 *		set_action('action') - Used to set the action currently being performed. ('submit', 'save', 'edit_sub').
 *
 * Submitted Values Methods:
 *		get_all_fields() - Returns an array of all the user submitted fields in the form of array('field_ID' => 'user value').
 *		get_field_value('field_ID') - Used to access the submitted data by field_ID.
 *		update_field_value('field_ID', 'new_value') - Used to change the value submitted by the user. If the field does not exist, it will be created.
 *		remove_field_value('field_ID') - Used to delete values submitted by the user.
 *		get_field_settings('field_ID') - Used to get all of the back-end data related to the field (type, label, required, show_help, etc.).
 *		get_field_setting( 'field_ID', 'setting_ID' ) - Used to retrieve a specific field setting.
 *		update_field_setting( 'field_ID', 'setting_ID', 'value' ) - Used to temporarily update a piece of back-end data related to the field. This is NOT permanent and will only affect the current form processing.
 *		update_field_settings('field_ID', $data) - Used to temporarily update the back-end data related to the field. This is NOT permanent and will only affect the current form processing.
 *
 * Extra Fields Methods (These are fields that begin with an _ and aren't Ninja Forms Fields )
 * 		get_all_extras() - Returns an array of all extra form inputs.
 *		get_extra_value('name') - Used to access the value of an extra field.
 *		update_extra_value('name', 'new_value') - Used to update an extra value.
 *		remove_extra_value('name') - Used to delete the extra value from the processing variable.
 *
 * Form Settings Methods (Please note that the changes made with these methods only affect the current process and DO NOT permanently change these settings):
 *		get_all_form_settings() - Used to get all of the settings of the form currently being processed.
 *		get_form_setting('setting_ID') - Used to retrieve a form setting from the form currently being processed.
 *		update_form_setting('setting_ID', 'new_value') - Used to change the value of a form setting using its unique ID. If the setting does not exist, it will be created.
 *		remove_form_setting('setting_ID') - Used to remove a form setting by its unique ID.
 *
 * Error Reporting Methods:
 *		get_all_errors() - Used to get an array of all error messages in the format: array('unique_id' => array('error_msg' => 'Error Message', 'display_location' => 'Display Location')).
 *			An empty array is returned if no errors are found.
 *		get_error('unique_id') - Used to get a specific error message by its unique ID.
 *		get_errors_by_location('location') - Used to retrieve an array of error messages with a given display location.
 *		add_error('unique_ID', 'Error Message', 'display_location') - Used to add an error message. The optional 'display_location' tells the display page where to show this error.
 *			Possible examples include a valid field_ID or 'general'. If this value is not included, the latter will be assumed and  will place this error at the beginning of the form.
 *		remove_error('unique_ID') - Used to remove an error message.
 *		remove_all_errors() - Used to remove all currently set error messages.
 *
 * Success Reporting Methods:
 *		get_all_success_msgs() - Used to get an array of all success messages in the format: array('unique_ID' => 'Success Message').
 *		get_success_msg('unique_ID') - Used to get a specific success message.
 *		add_success_msg('unique_ID', 'Success Message') - Used to add a success message.
 *		remove_success_msg('unique_ID') - Used to remove a success message.
 *		remove_all_success_msgs() - Used to remove all currently set success messages.
 *
 * Calculation Methods:
 *		get_calc( name or id, return array ) - Used to get the value of the specified calculation field. Unless bool(false) is sent, returns an array including all of the fields that contributed to the value.
 *		get_calc_fields(calc_id) - Used to get an array of the fields that contributed to the calculation. This array includes a field_id and calculation value.
 *		get_calc_total( return array ) - Used to get the final value of the "Payment Total" if it exists. Unless bool(false) is sent, returns an array including all of the fields that contributed to the value and are marked with calc_option.
 *		get_calc_sub_total( return array ) - Used to get the value of the "Payment Subtotal" if it exists. Unless bool(false) is sent, returns an array including all of the fields that contributed to the value and are marked with calc_option.
 *		get_calc_tax_rate() - Used to get the value of the "Tax" field if it exists.
 *		get_calc_tax_total() - Used to get the total amount of tax if the tax field is set.	
 *
 * User Information Methods:
 *		get_user_info() - Used to get an array of the user's information. Requires that the appropriate "User Information" fields be used.
 *
 * Credit Card Information Methods:
 *		get_credit_card() - Used to get an array of the user's credit card information.
 */
class Ninja_Forms_Loading
{
    /**
     *
     * Stores the data accessed by the other parts of the class.
     * All response messages will be stored in this value.
     *
     * @var array
     * @access private
     */
    var $data = array();
    /**
     * Constructor - Sets up the form ID.
     *
     * If the form_ID parameter is empty then nothing will be done.
     *
     */
    function __construct($form_ID = '')
    {
    }
    /**
     * 
     * Function to add the field data to $this->data['fields'].
     *
     * @since 2.3.9
     * @return void.
     */
    function setup_field_data()
    {
    }
    function setup_form_data()
    {
    }
    /**
     * Submitted Values Methods:
     *
     **/
    /**
     * Retrieve the form ID of the form currently being processed.
     *
     */
    function get_form_ID()
    {
    }
    /**
     * Retrieve the User ID of the form currently being processed.
     *
     */
    function get_user_ID()
    {
    }
    /**
     * Set the User ID of the form currently being processed.
     *
     */
    function set_user_ID($user_id)
    {
    }
    /**
     * Retrieve all the user submitted form data.
     *
     */
    function get_all_fields()
    {
    }
    /**
     * Retrieve user submitted form data by field ID.
     *
     */
    function get_field_value($field_ID = '')
    {
    }
    /**
     * Change the value of a field.
     *
     */
    function update_field_value($field_ID = '', $new_value = '')
    {
    }
    /**
     * Remove a field and its value from the user submissions.
     *
     */
    function remove_field_value($field_ID = '')
    {
    }
    /**
     * Retrieve field data by field ID. This data includes all of the information entered in the admin back-end.
     *
     */
    function get_field_settings($field_ID = '')
    {
    }
    /**
     * Retrieve a specific piece of field setting data.
     *
     * @since 2.2.45
     * @return $value or bool(false)
     */
    function get_field_setting($field_id = '', $setting_id = '')
    {
    }
    /**
     * Update field data by field ID. This data includes all of the informatoin entered into the admin back-end. (Please note that the changes made with these methods only affect the current process and DO NOT permanently change these settings):
     *
     */
    function update_field_settings($field_ID = '', $new_value = '')
    {
    }
    /**
     *
     * Update a specific piece of field setting data by giving the field id and setting id.
     *
     * @since 2.2.45
     * @return void or bool(false)
     */
    function update_field_setting($field_id = '', $setting_id = '', $value = '')
    {
    }
    /**
     * Extra Form Values Methods
     *
     **/
    /**
     * Retrieve all the extra submitted form data.
     *
     */
    function get_all_extras()
    {
    }
    /**
     * Retrieve user submitted form data by field ID.
     *
     */
    function get_extra_value($name = '')
    {
    }
    /**
     * Change the value of a field.
     *
     */
    function update_extra_value($name = '', $new_value = '')
    {
    }
    /**
     * Remove a field and its value from the user submissions.
     *
     */
    function remove_extra_value($name = '')
    {
    }
    /**
     * Form Settings Methods (Please note that the changes made with these methods only affect the current process and DO NOT permanently change these settings):
     *
     **/
    /**
     * Retrieve all the settings for the form currently being processed.
     *
     */
    function get_all_form_settings()
    {
    }
    /**
     * Retrieve a form setting value by its unique ID.
     *
     */
    function get_form_setting($setting_ID)
    {
    }
    /**
     * Update a form setting value by its unique ID.
     *
     */
    function update_form_setting($setting_ID, $new_value = '')
    {
    }
    /**
     * Remove a form setting value by its unique ID.
     *
     */
    function remove_form_setting($setting_ID, $new_value = '')
    {
    }
    /**
     * Error Reporting Methods:
     *
     **/
    /**
     * Retrieve all error messages.
     *
     */
    function get_all_errors()
    {
    }
    /**
     * Retrieve an error message and location by its unique ID.
     *
     */
    function get_error($error_ID = '')
    {
    }
    /**
     * Retrieve an array of error_IDs and messages by display location.
     *
     */
    function get_errors_by_location($error_location = '')
    {
    }
    /**
     * Add an error message.
     *
     */
    function add_error($error_ID, $error_msg, $error_location = 'general')
    {
    }
    /**
     * Remove an error message by its unique ID.
     *
     */
    function remove_error($error_ID = '')
    {
    }
    /**
     * Remove all set error messages.
     *
     */
    function remove_all_errors()
    {
    }
    /**
     * Success Reporting Methods:
     *
     **/
    /**
     * Retrieve all success messages.
     *
     */
    function get_all_success_msgs()
    {
    }
    /**
     * Retrieve a success message by unique ID.
     *
     */
    function get_success_msg($success_ID = '')
    {
    }
    /**
     * Add a success message.
     *
     */
    function add_success_msg($success_ID, $success_msg)
    {
    }
    /**
     * Remove a success message by its unique ID.
     *
     */
    function remove_success_msg($success_ID = '')
    {
    }
    /**
     * Remove all success messages
     *
     */
    function remove_all_success_msgs()
    {
    }
    /**
     * Function that returns an array of user information fields.
     *
     * @since 2.2.30
     * @returns array $user_info
     */
    function get_user_info()
    {
    }
    /**
     * Function that returns the value of a calculation field and optionally the fields that contributed to that value.
     *
     * @since 2.2.30
     * @returns $calc
     */
    function get_calc($name, $array = \true)
    {
    }
    /**
     * Function that returns the "total" field value if it exists.
     *
     * @since 2.2.30
     * @returns array $total
     */
    function get_calc_total($array = \true, $add_tax = \true)
    {
    }
    /**
     * Function that returns the "sub total" field value if it exists.
     *
     * @since 2.2.30
     * @returns array $sub_total
     */
    function get_calc_sub_total($array = \true)
    {
    }
    /**
     * Function that returns the total amount of tax if the tax_rate field exists in the form.
     *
     * @since 2.2.30
     * @returns int $tax_total
     */
    function get_calc_tax_total()
    {
    }
    /**
     * Function that returns tax_rate if the field exists in the form.
     *
     * @since 2.2.30
     * @returns string $tax_rate;
     */
    function get_calc_tax_rate()
    {
    }
    /**
     * Function that returns an array of field IDs and calc_values that contributed to the given calc id.
     *
     * @since 2.2.30
     * @returns array $calc_array
     */
    function get_calc_fields($calc_id = '')
    {
    }
    /**
     * Function that returns an array of field IDs and calc_values that contributed to the given calc id.
     *
     * @since 2.2.37
     * @returns array $credit_card
     */
    function get_credit_card()
    {
    }
    /**
     * Function that gets the current URL of the page, including querystring.
     *
     * @since 2.2.47
     * @return $url string
     */
    function get_current_url()
    {
    }
}
/**
 * This Ninja Forms Processing Class is used to interact with Ninja Forms as it processes form data.
 * It is based upon the WordPress Error API.
 *
 * Contains the Ninja_Forms_Processing class
 *
 */
/**
 * Ninja Forms Processing class.
 *
 * Class used to interact with form processing.
 * This class stores all data related to the form submission, including data from the Ninja Form mySQL table.
 * It can also be used to report processing errors and/or processing success messages.
 *
 * Form Data Methods:
 *		get_form_ID() - Used to retrieve the form ID of the form being processed.
 *		get_user_ID() - Used to retrieve the User ID if the user was logged in.
 *		get_action() - Used to retrieve the action currently being performed. ('submit', 'save', 'edit_sub').
 *		set_action('action') - Used to set the action currently being performed. ('submit', 'save', 'edit_sub').
 *
 * Submitted Values Methods:
 *		get_all_fields() - Returns an array of all the fields within a form. The return is array('field_ID' => 'user value').
 *		get_submitted_fields() - Returns an array of just the fields that the user has submitted. The return is array('field_ID' => 'user_value').
 *		get_field_value('field_ID') - Used to access the submitted data by field_ID.
 *		update_field_value('field_ID', 'new_value') - Used to change the value submitted by the user. If the field does not exist, it will be created.
 *		remove_field_value('field_ID') - Used to delete values submitted by the user.
 *		get_field_settings('field_ID') - Used to get all of the back-end data related to the field (type, label, required, show_help, etc.).
 *		get_field_setting( 'field_ID', 'setting_ID' ) - Used to retrieve a specific field setting.
 *		update_field_setting( 'field_ID', 'setting_ID', 'value' ) - Used to temporarily update a piece of back-end data related to the field. This is NOT permanent and will only affect the current form processing.
 *		update_field_settings('field_ID', $data) - Used to temporarily update the back-end data related to the field. This is NOT permanent and will only affect the current form processing.
 *
 * Extra Fields Methods (These are fields that begin with an _ and aren't Ninja Forms Fields )
 * 		get_all_extras() - Returns an array of all extra form inputs.
 *		get_extra_value('name') - Used to access the value of an extra field.
 *		update_extra_value('name', 'new_value') - Used to update an extra value.
 *		remove_extra_value('name') - Used to delete the extra value from the processing variable.
 *
 * Form Settings Methods (Please note that the changes made with these methods only affect the current process and DO NOT permanently change these settings):
 *		get_all_form_settings() - Used to get all of the settings of the form currently being processed.
 *		get_form_setting('setting_ID') - Used to retrieve a form setting from the form currently being processed.
 *		update_form_setting('setting_ID', 'new_value') - Used to change the value of a form setting using its unique ID. If the setting does not exist, it will be created.
 *		remove_form_setting('setting_ID') - Used to remove a form setting by its unique ID.
 *
 * Error Reporting Methods:
 *		get_all_errors() - Used to get an array of all error messages in the format: array('unique_id' => array('error_msg' => 'Error Message', 'display_location' => 'Display Location')).
 *			An empty array is returned if no errors are found.
 *		get_error('unique_id') - Used to get a specific error message by its unique ID.
 *		get_errors_by_location('location') - Used to retrieve an array of error messages with a given display location.
 *		add_error('unique_ID', 'Error Message', 'display_location') - Used to add an error message. The optional 'display_location' tells the display page where to show this error.
 *			Possible examples include a valid field_ID or 'general'. If this value is not included, the latter will be assumed and  will place this error at the beginning of the form.
 *		remove_error('unique_ID') - Used to remove an error message.
 *		remove_all_errors() - Used to remove all currently set error messages.
 *
 * Success Reporting Methods:
 *		get_all_success_msgs() - Used to get an array of all success messages in the format: array('unique_ID' => 'Success Message').
 *		get_success_msg('unique_ID') - Used to get a specific success message.
 *		add_success_msg('unique_ID', 'Success Message') - Used to add a success message.
 *		remove_success_msg('unique_ID') - Used to remove a success message.
 *		remove_all_success_msgs() - Used to remove all currently set success messages.
 *
 * Calculation Methods:
 *		get_calc( name or id, return array ) - Used to get the value of the specified calculation field. Unless bool(false) is sent, returns an array including all of the fields that contributed to the value.
 *		get_calc_fields(calc_id) - Used to get an array of the fields that contributed to the calculation. This array includes a field_id and calculation value.
 *		get_calc_total( return array ) - Used to get the final value of the "Payment Total" if it exists. Unless bool(false) is sent, returns an array including all of the fields that contributed to the value and are marked with calc_option.
 *		get_calc_sub_total( return array ) - Used to get the value of the "Payment Subtotal" if it exists. Unless bool(false) is sent, returns an array including all of the fields that contributed to the value and are marked with calc_option.
 *		get_calc_tax_rate() - Used to get the value of the "Tax" field if it exists.
 *		get_calc_tax_total() - Used to get the total amount of tax if the tax field is set.	
 *
 * User Information Methods:
 *		get_user_info() - Used to get an array of the user's information. Requires that the appropriate "User Information" fields be used.
 *
 * Credit Card Information Methods:
 *		get_credit_card() - Used to get an array of the user's credit card information.
 */
class Ninja_Forms_Processing
{
    /**
     *
     * Stores the data accessed by the other parts of the class.
     * All response messages will be stored in this value.
     *
     * @var array
     * @access private
     */
    var $data = array();
    /**
     * Constructor - Sets up the form ID.
     *
     * If the form_ID parameter is empty then nothing will be done.
     *
     */
    function __construct($form_ID = '')
    {
    }
    /**
     * Add the submitted vars to $this->data['fields'].
     * Also runs any functions registered to the field's pre_process hook.
     *
     *
     */
    function setup_submitted_vars()
    {
    }
    // Submitted Vars function
    /**
     * Submitted Values Methods:
     *
     **/
    /**
     * Retrieve the form ID of the form currently being processed.
     *
     */
    function get_form_ID()
    {
    }
    /**
     * Retrieve the User ID of the form currently being processed.
     *
     */
    function get_user_ID()
    {
    }
    /**
     * Set the User ID of the form currently being processed.
     *
     */
    function set_user_ID($user_id)
    {
    }
    /**
     * Retrieve the action currently being performed.
     *
     */
    function get_action()
    {
    }
    /**
     * Set the action currently being performed.
     *
     */
    function set_action($action)
    {
    }
    /**
     * Retrieve all the fields attached to a form.
     *
     */
    function get_all_fields()
    {
    }
    /**
     * Retrieve all the user submitted form data.
     *
     */
    function get_all_submitted_fields()
    {
    }
    /**
     * Retrieve user submitted form data by field ID.
     *
     */
    function get_field_value($field_ID = '')
    {
    }
    /**
     * Change the value of a field.
     *
     */
    function update_field_value($field_ID = '', $new_value = '')
    {
    }
    /**
     * Remove a field and its value from the user submissions.
     *
     */
    function remove_field_value($field_ID = '')
    {
    }
    /**
     * Retrieve field data by field ID. This data includes all of the information entered in the admin back-end.
     *
     */
    function get_field_settings($field_ID = '')
    {
    }
    /**
     * Retrieve a specific piece of field setting data.
     *
     * @since 2.2.45
     * @return $value or bool(false)
     */
    function get_field_setting($field_id = '', $setting_id = '')
    {
    }
    /**
     * Update field data by field ID. This data includes all of the informatoin entered into the admin back-end. (Please note that the changes made with these methods only affect the current process and DO NOT permanently change these settings):
     *
     */
    function update_field_settings($field_ID = '', $new_value = '')
    {
    }
    /**
     *
     * Update a specific piece of field setting data by giving the field id and setting id.
     *
     * @since 2.2.45
     * @return void or bool(false)
     */
    function update_field_setting($field_id = '', $setting_id = '', $value = '')
    {
    }
    /**
     * Extra Form Values Methods
     *
     **/
    /**
     * Retrieve all the extra submitted form data.
     *
     */
    function get_all_extras()
    {
    }
    /**
     * Retrieve user submitted form data by field ID.
     *
     */
    function get_extra_value($name = '')
    {
    }
    /**
     * Change the value of a field.
     *
     */
    function update_extra_value($name = '', $new_value = '')
    {
    }
    /**
     * Remove a field and its value from the user submissions.
     *
     */
    function remove_extra_value($name = '')
    {
    }
    /**
     * Form Settings Methods (Please note that the changes made with these methods only affect the current process and DO NOT permanently change these settings):
     *
     **/
    /**
     * Retrieve all the settings for the form currently being processed.
     *
     */
    function get_all_form_settings()
    {
    }
    /**
     * Retrieve a form setting value by its unique ID.
     *
     */
    function get_form_setting($setting_ID)
    {
    }
    /**
     * Update a form setting value by its unique ID.
     *
     */
    function update_form_setting($setting_ID, $new_value = '')
    {
    }
    /**
     * Remove a form setting value by its unique ID.
     *
     */
    function remove_form_setting($setting_ID, $new_value = '')
    {
    }
    /**
     * Error Reporting Methods:
     *
     **/
    /**
     * Retrieve all error messages.
     *
     */
    function get_all_errors()
    {
    }
    /**
     * Retrieve an error message and location by its unique ID.
     *
     */
    function get_error($error_ID = '')
    {
    }
    /**
     * Retrieve an array of error_IDs and messages by display location.
     *
     */
    function get_errors_by_location($error_location = '')
    {
    }
    /**
     * Add an error message.
     *
     */
    function add_error($error_ID, $error_msg, $error_location = 'general')
    {
    }
    /**
     * Remove an error message by its unique ID.
     *
     */
    function remove_error($error_ID = '')
    {
    }
    /**
     * Remove all set error messages.
     *
     */
    function remove_all_errors()
    {
    }
    /**
     * Success Reporting Methods:
     *
     **/
    /**
     * Retrieve all success messages.
     *
     */
    function get_all_success_msgs()
    {
    }
    /**
     * Retrieve a success message by unique ID.
     *
     */
    function get_success_msg($success_ID = '')
    {
    }
    /**
     * Add a success message.
     *
     */
    function add_success_msg($success_ID, $success_msg)
    {
    }
    /**
     * Remove a success message by its unique ID.
     *
     */
    function remove_success_msg($success_ID = '')
    {
    }
    /**
     * Remove all success messages
     *
     */
    function remove_all_success_msgs()
    {
    }
    /**
     * Function that returns an array of user information fields.
     *
     * @since 2.2.30
     * @returns array $user_info
     */
    function get_user_info()
    {
    }
    /**
     * Function that returns the value of a calculation field and optionally the fields that contributed to that value.
     *
     * @since 2.2.30
     * @returns $calc
     */
    function get_calc($name, $array = \true)
    {
    }
    /**
     * Function that returns the "total" field value if it exists.
     *
     * @since 2.2.30
     * @returns array $total
     */
    function get_calc_total($array = \true, $add_tax = \true)
    {
    }
    /**
     * Function that returns the "sub total" field value if it exists.
     *
     * @since 2.2.30
     * @returns array $sub_total
     */
    function get_calc_sub_total($array = \true)
    {
    }
    /**
     * Function that returns the total amount of tax if the tax_rate field exists in the form.
     *
     * @since 2.2.30
     * @returns int $tax_total
     */
    function get_calc_tax_total()
    {
    }
    /**
     * Function that returns tax_rate if the field exists in the form.
     *
     * @since 2.2.30
     * @returns string $tax_rate;
     */
    function get_calc_tax_rate()
    {
    }
    /**
     * Function that returns an array of field IDs and calc_values that contributed to the given calc id.
     *
     * @since 2.2.30
     * @returns array $calc_array
     */
    function get_calc_fields($calc_id = '')
    {
    }
    /**
     * Function that returns an array of field IDs and calc_values that contributed to the given calc id.
     *
     * @since 2.2.37
     * @returns array $credit_card
     */
    function get_credit_card()
    {
    }
    /**
     * Function that gets the current URL of the page, including querystring.
     *
     * @since 2.2.47
     * @return $url string
     */
    function get_current_url()
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
 * @version 2.0
 */
class eqEOS
{
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
    protected $ST = array('^');
    protected $ST1 = array('/', '*', '%');
    protected $ST2 = array('+', '-');
    //Allowed functions
    protected $FNC = array('sin', 'cos', 'tan', 'csc', 'sec', 'cot');
    /**#@-*/
    /**
     * Construct method
     *
     * Will initiate the class.  If variable given, will assign to
     * internal variable to solve with this::solveIF() without needing
     * additional input.  Initializing with a variable is not suggested.
     *
     * @see eqEOS::solveIF()
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
     * Sets the internal variable $this->postFix for the eqEOS::solvePF()
     * function to use.
     *
     * @link http://en.wikipedia.org/wiki/Infix_notation Infix Notation
     * @link http://en.wikipedia.org/wiki/Reverse_Polish_notation Reverse Polish Notation
     * @param String $infix A standard notation equation
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
     * the RPN array stored in the class from eqEOS::in2post(), can take
     * an array input to solve as well, though default action is prefered.
     *
     * @link http://en.wikipedia.org/wiki/Reverse_Polish_notation Postix Notation
     * @param Array $pfArray RPN formatted array. Optional.
     * @return Float Result of the operation.
     */
    public function solvePF($pfArray = \null)
    {
    }
    //end function solvePF
    /**
     * Solve Infix (Standard) Notation Equation
     *
     * Will take a standard equation with optional variables and solve it. Variables
     * must begin with '&' will expand to allow variables to begin with '$' (TODO)
     * The variable array must be in the format of 'variable' => value. If
     * variable array is scalar (ie 5), all variables will be replaced with it.
     *
     * @param String $infix Standard Equation to solve
     * @param String|Array $vArray Variable replacement
     * @return Float Solved equation
     */
    function solveIF($infix, $vArray = \null)
    {
    }
    //end function solveIF
}
//end class 'eqEOS'
// fun class that requires the GD libraries to give visual output to the user
/* extends the eqEOS class so that it doesn't need to create it as a private var 
   - and it extends the functionality of that class */
/**
 * Equation Graph
 *
 * Fun class that requires the GD libraries to give visual output of an
 * equation to the user.  Extends the eqEOS class.
 *
 * @author Jon Lawrence <jlawrence11@gmail.com>
 * @copyright Copyright �2005-2013 Jon Lawrence
 * @license http://opensource.org/licenses/LGPL-2.1 LGPL 2.1 License
 * @package Math
 * @subpackage EOS
 * @version 2.0
 */
class eqGraph extends \eqEOS
{
    private $width;
    private $height;
    //GD Image reference
    private $image;
    /**
     * Constructor
     *
     * Sets up the Graph class with an image width and height defaults to
     * 640x480
     *
     * @param Integer $width Image width
     * @param Integer $height Image height
     */
    public function __construct($width = 640, $height = 480)
    {
    }
    //end function eqGraph
    /**
     * Create GD Graph Image
     *
     * Creates a GD image based on the equation given with the parameters that are set
     *
     * @param String $eq Equation to use.  Needs variable in equation to create graph, all variables are interpreted as 'x'
     * @param Integer $xLow Lower x-bound for graph
     * @param Integer $xHigh Upper x-bound for graph
     * @param Float $xStep Stepping points while solving, the lower, the better precision. Slow if lower than .01
     * @param Boolean $xyGrid Draw gridlines?
     * @param Boolean $yGuess Guess the upper/lower yBounds?
     * @param Integer $yLow Lower y-bound
     * @param Integer $yHigh Upper y-bound
     * @return Null
     */
    public function graph($eq, $xLow, $xHigh, $xStep, $xyGrid = \false, $yGuess = \true, $yLow = \false, $yHigh = \false)
    {
    }
    //end function 'graph'
    /**
     * Sends JPG to browser
     *
     * Sends a JPG image with proper header to output
     */
    public function outJPG()
    {
    }
    /**
     * Sends PNG to browser
     *
     * Sends a PNG image with proper header to output
     */
    function outPNG()
    {
    }
    /**
     * Output GD Image
     *
     * Will give the developer the GD resource for the graph that
     * can be used to store the graph to the FS or other media
     *
     * @return Resource GD Image Resource
     */
    public function getImage()
    {
    }
    /**
     * Output GD Image
     *
     * Alias for eqGraph::getImage()
     *
     * @return Resource GD Image resource
     */
    public function outGD()
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
    public function offsetUnset($offset)
    {
    }
}
/*
* MODIFICATIONS
*
* - Remove `set_cooke()` from constructor
* - Give `set_cookie()` public access
* - Manually call `set_cookie()` on form submission
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
     *
     * IMPORTANT: Made public
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
    /**
     * Checks if is valid md5 string
     *
     * @param string $md5
     * @return int
     */
    protected function is_valid_md5($md5 = '')
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
    public function count()
    {
    }
}
/**
 * Basic Stack Class
 *
 * Created for use with eqEOS. May eventually be replaced with native
 * PHP functions `array_pop()`, `array_push()`, and `end()`
 *
 * @author Jon Lawrence <jlawrence11@gmail.com>
 * @copyright Copyright �2005-2013 Jon Lawrence
 * @license http://opensource.org/licenses/LGPL-2.1 LGPL 2.1 License
 * @package eos.class.php
 * @version 2.0
 */
class phpStack
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
     * @param Mixed Element to add
     */
    public function poke($data)
    {
    }
    /**
     * Push
     *
     * Alias of {@see phpStack::poke()}
     * Adds element to the stack
     *
     * @param Mixed Element to add
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
 * Adds Ninja Forms widget.
 */
class Ninja_Forms_Widget extends \WP_Widget
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
class Ninja_Forms
{
    /**
     * @var Ninja_Forms
     * @since 2.7
     */
    private static $instance;
    /**
     * @var registered_notification_types
     */
    var $notification_types = array();
    /**
     * Main Ninja_Forms Instance
     *
     * Insures that only one instance of Ninja_Forms exists in memory at any one
     * time. Also prevents needing to define globals all over the place.
     *
     * @since 2.7
     * @static
     * @staticvar array $instance
     * @return The highlander Ninja_Forms
     */
    public static function instance()
    {
    }
    /**
     * Run all of our plugin stuff on init.
     * This allows filters and actions to be used by third-party classes.
     *
     * @since 2.7
     * @return void
     */
    public function init()
    {
    }
    /**
     * Run all of our plugin stuff on admin init.
     *
     * @since 2.7.4
     * @return void
     */
    public function admin_init()
    {
    }
    /**
     * Run some admin stuff on admin_notices hook.
     *
     * @since 2.9
     * @return void
     */
    public function admin_notice()
    {
    }
    /**
     * Throw error on object clone
     *
     * The whole idea of the singleton design pattern is that there is a single
     * object therefore, we don't want the object to be cloned.
     *
     * @since 2.7
     * @access protected
     * @return void
     */
    public function __clone()
    {
    }
    /**
     * Disable unserializing of the class
     *
     * @since 2.7
     * @access protected
     * @return void
     */
    public function __wakeup()
    {
    }
    /**
     * Function that acts as a wrapper for our individual notification objects.
     * It checks to see if an object exists for this notification id.
     * If it does, it returns that object. Otherwise, it creates a new one and returns it.
     *
     * @access public
     * @param int $n_id
     * @since 2.8
     * @return object self::$instance->$n_var
     */
    public function notification($n_id = '')
    {
    }
    /**
     * Function that acts as a wrapper for our individual sub objects.
     * It checks to see if an object exists for this sub id.
     * If it does, it returns that object. Otherwise, it creates a new one and returns it.
     *
     * @access public
     * @param int $sub_id
     * @since 2.7
     * @return object self::$instance->$sub_var
     */
    public function sub($sub_id = '')
    {
    }
    /**
     * Function that acts as a wrapper for our subs_var - NF_Subs() class.
     * It doesn't set a sub_id and can be used to interact with methods that affect mulitple submissions
     *
     * @access public
     * @since 2.7
     * @return object self::$instance->subs_var
     */
    public function subs()
    {
    }
    /**
     * Function that acts as a wrapper for our form_var - NF_Form() class.
     * It sets the form_id and then returns the instance, which is now using the
     * proper form id
     *
     * @access public
     * @param int $form_id
     * @since 2.9.11
     * @return object self::$instance->form_var
     */
    public function form($form_id = '')
    {
    }
    /**
     * Function that acts as a wrapper for our forms_var - NF_Form() class.
     *
     * @access public
     * @since 2.9
     * @return object self::$instance->forms_var
     */
    public function forms($form_id = '')
    {
    }
    /**
     * Setup plugin constants
     *
     * @access private
     * @since 2.7
     * @return void
     */
    private function setup_constants()
    {
    }
    /**
     * Include our Class files
     *
     * @access private
     * @since 2.7
     * @return void
     */
    private function includes()
    {
    }
    /**
     * Load our language files
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function load_lang()
    {
    }
    /**
     * Update our version number if necessary
     *
     * @access public
     * @since 2.7
     * @return void
     */
    public function update_version_number()
    {
    }
    /**
     * Set Ninja_Forms()->session variable used for storing items in transient variables
     *
     * @access public
     * @since 2.7
     * @return string $t_id;
     */
    public function set_transient_id()
    {
    }
    /**
     * Get our plugin settings.
     *
     * @access public
     * @since 2.9
     * @return array $settings
     */
    public function get_plugin_settings()
    {
    }
    /**
     * Refresh our plugin settings if we update the ninja_forms_settings option
     *
     * @access public
     * @since 2.9
     * @return void
     */
    public function refresh_plugin_settings()
    {
    }
    /**
     * Register our admin scripts so that they can be enqueued later.
     * @since  2.9.25
     * @return void
     */
    public function register_admin_scripts()
    {
    }
}
class NF_THREE_Submenu
{
    /**
     * (required) The slug name for the parent menu (or the file name of a standard WordPress admin page)
     *
     * @var string
     */
    public $parent_slug = 'ninja-forms';
    /**
     * (required) The text to be displayed in the title tags of the page when the menu is selected
     *
     * @var string
     */
    public $page_title = 'Ninja Forms THREE';
    /**
     * (required) The on-screen name text for the menu
     *
     * @var string
     */
    public $menu_title = 'Ninja Forms THREE';
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
    public $menu_slug = 'ninja-forms-three';
    /**
     * (optional) The function that displays the page content for the menu page.
     *
     * @var string
     */
    public $function = 'display';
    public $priority = 9001;
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
    /**
     * Display the menu page.
     */
    public function display()
    {
    }
    public function upgrade_check()
    {
    }
    private function respond($response = array())
    {
    }
}
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
class NF_AJAX_Controllers_Form extends \NF_Abstracts_Controller
{
    public function __construct()
    {
    }
    public function save()
    {
    }
    public function delete()
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
    protected function populate_field_merge_tags($fields, $field_merge_tags)
    {
    }
    protected function populate_calcs_merge_tags($calcs, $calcs_merge_tags)
    {
    }
    protected function validate_fields()
    {
    }
    protected function validate_field($field, $data)
    {
    }
    protected function process_fields()
    {
    }
    protected function process_field($field, $data)
    {
    }
    protected function run_actions()
    {
    }
    protected function run_actions_preview()
    {
    }
    protected function maybe_halt($action_id)
    {
    }
    protected function sort_form_actions($a, $b)
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
    protected $_image = '';
    /**
     * @var array
     */
    protected $_tags = array();
    /**
     * @var string
     */
    protected $_timing = 'normal';
    /**
     * @var int
     */
    protected $_priority = '10';
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
abstract class NF_Abstracts_Field
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
    protected $_settings_all_fields = array('key', 'label', 'label_pos', 'required', 'placeholder', 'default', 'classes', 'input_limit_set', 'manual_key', 'disable_input', 'admin_label', 'help', 'description');
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
class LogLevel
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
interface LoggerInterface
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
abstract class NF_Abstracts_Logger implements \LoggerInterface
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
    public function body_class($classes)
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
    public function __construct()
    {
    }
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
    public function __construct($table_name, $flag)
    {
    }
    public function _run()
    {
    }
    protected abstract function run();
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
     */
    public function import_form($import, $id = \FALSE, $is_conversion = \FALSE)
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
    public function get_subs($where = array(), $fresh = \FALSE)
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
    public function body_class($classes)
    {
    }
    /**
     * Display the menu page.
     */
    public abstract function display();
}
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
    protected $_settings = array('disable_browser_autocomplete', 'mask', 'custom_mask');
    public function __construct()
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
     */
    public function __construct()
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
    protected $_timing = 'normal';
    /**
     * @var int
     */
    protected $_priority = 10;
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
    protected $_timing = 'late';
    /**
     * @var int
     */
    protected $_priority = 10;
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
    protected $_timing = 'late';
    /**
     * @var int
     */
    protected $_priority = 10;
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
final class NF_Actions_Save extends \NF_Abstracts_Action
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
    protected $_timing = 'late';
    /**
     * @var int
     */
    protected $_priority = '-1';
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
    protected $_timing = 'late';
    /**
     * @var int
     */
    protected $_priority = 10;
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
class NF_Admin_CPT_DownloadAllSubmissions extends \NF_Step_Processing
{
    function __construct()
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
    public function post_row_actions($actions)
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
    public function add_meta_boxes($post_type, $post)
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
    /*
     * PRIVATE METHODS
     */
    private function not_found_message()
    {
    }
}
final class NF_Admin_Menus_AddNew extends \NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';
    public $page_title = 'Add New';
    public $menu_slug = 'admin.php?page=ninja-forms&form_id=new';
    public $priority = 2;
    public function __construct()
    {
    }
    public function display()
    {
    }
}
final class NF_Admin_Menus_Addons extends \NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';
    public $page_title = 'Add-Ons';
    public $priority = 13;
    public function __construct()
    {
    }
    public function display()
    {
    }
}
final class NF_Admin_Menus_AllForms extends \NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';
    public $page_title = 'All Forms';
    public $menu_slug = 'admin.php?page=ninja-forms';
    public $priority = 1;
    public function __construct()
    {
    }
    public function display()
    {
    }
}
final class NF_Admin_Menus_Divider extends \NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';
    public $page_title = '';
    public $menu_title = '<span style="display:block;margin:1px 0 1px -5px;padding:0;height:1px;line-height:1px;background:#CCCCCC;"></span>';
    public $menu_slug = '#';
    public $priority = 9001;
    public function __construct()
    {
    }
    public function display()
    {
    }
}
final class NF_Admin_Menus_Forms extends \NF_Abstracts_Menu
{
    public $page_title = 'Forms';
    public $menu_slug = 'ninja-forms';
    public $icon_url = 'dashicons-feedback';
    public $position = '35.1337';
    public function __construct()
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
    private function import_from_template()
    {
    }
    private function _enqueue_the_things($form_id)
    {
    }
    private function _localize_form_data($form_id)
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
    protected function setting_group_priority($a, $b)
    {
    }
}
final class NF_Admin_Menus_ImportExport extends \NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';
    public $page_title = 'Import / Export';
    public function __construct()
    {
    }
    public function import_form_listener()
    {
    }
    public function export_form_listener()
    {
    }
    public function import_fields_listener()
    {
    }
    public function export_fields_listener()
    {
    }
    public function display()
    {
    }
    public function add_meta_boxes()
    {
    }
    public function template_import_forms()
    {
    }
    public function template_export_forms()
    {
    }
    public function template_import_favorite_fields()
    {
    }
    public function template_export_favorite_fields()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Backwards Compatibility
    |--------------------------------------------------------------------------
    */
    public function import_fields_backwards_compatibility($field)
    {
    }
    private function upload_error_check($file)
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
    public $priority = 9002;
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
    public $page_title = 'Settings';
    public $priority = 11;
    protected $_prefix = 'ninja_forms';
    public function __construct()
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
    public $menu_slug = 'edit.php?post_type=nf_sub';
    /**
     * @var null
     */
    public $function = \NULL;
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Display
     */
    public function display()
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
    /*
     * PRIVATE METHODS
     */
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
}
final class NF_Admin_Menus_SystemStatus extends \NF_Abstracts_Submenu
{
    public $parent_slug = 'ninja-forms';
    public $page_title = 'Get Help';
    public $priority = 12;
    public function __construct()
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
    public function __construct()
    {
    }
    public function migrate()
    {
    }
    public function nuke($areYouSure = \FALSE, $areYouReallySure = \FALSE)
    {
    }
}
class NF_Database_Migrations_ActionMeta extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_Actions extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_FieldMeta extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_Fields extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_FormMeta extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_Forms extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_ObjectMeta extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_Objects extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
    {
    }
}
class NF_Database_Migrations_Relationships extends \NF_Abstracts_Migration
{
    public function __construct()
    {
    }
    public function run()
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
    protected $_columns = array('title', 'key', 'type', 'active', 'created_at');
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
    protected $_columns = array('title', 'key', 'created_at');
    protected $_fields;
    protected static $imported_form_id;
    public function __construct($db, $id = '')
    {
    }
    public function delete()
    {
    }
    public static function get_next_sub_seq($form_id)
    {
    }
    public static function import(array $import, $id = '', $is_conversion)
    {
    }
    public static function import_admin_notice()
    {
    }
    public static function duplicate($form_id)
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
    protected $_columns = array('type', 'created_at');
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
final class NF_Database_Models_Submission
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
    public function __construct($id = '', $form_id = '')
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
    public function find($form_id, array $where = array())
    {
    }
    /**
     * Delete Submission
     */
    public function delete()
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
}
/**
 * Class NF_Display_Preview
 */
final class NF_Display_Preview
{
    protected $form_id = '';
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
     * @return string
     */
    function template_include()
    {
    }
}
final class NF_Display_Render
{
    protected static $loaded_templates = array('app-layout', 'app-before-form', 'app-after-form', 'app-before-fields', 'app-after-fields', 'app-before-field', 'app-after-field', 'form-layout', 'form-hp', 'field-layout', 'field-before', 'field-after', 'fields-wrap', 'fields-wrap-no-label', 'fields-wrap-no-container', 'fields-label', 'fields-error', 'form-error', 'field-input-limit');
    protected static $use_test_values = \FALSE;
    public static function localize($form_id)
    {
    }
    public static function localize_preview($form_id)
    {
    }
    public static function enqueue_scripts($form_id)
    {
    }
    protected static function load_template($file_name = '')
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
    protected static function form_uses_recaptcha($form_id)
    {
    }
    protected static function form_uses_datepicker($form_id)
    {
    }
    protected static function form_uses_inputmask($form_id)
    {
    }
    protected static function form_uses_rte($form_id)
    {
    }
    protected static function form_uses_helptext($form_id)
    {
    }
    protected static function form_uses_starrating($form_id)
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
    protected $_settings = array('checkbox_default_value', 'checked_calc_value', 'unchecked_calc_value');
    protected $_settings_exclude = array('default', 'placeholder', 'input_limit_set');
    public function __construct()
    {
    }
    public function admin_form_element($id, $value)
    {
    }
    public function custom_columns($value, $field)
    {
    }
    public function filter_merge_tag_value($value, $field)
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
 * Class NF_Fields_CreditCard
 */
class NF_Fields_CreditCard extends \NF_Abstracts_Field
{
    protected $_name = 'creditcard';
    protected $_type = 'creditcard';
    protected $_section = 'pricing';
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
    protected $_settings = array('date_default', 'date_format');
    protected $_settings_exclude = array('default', 'placeholder', 'input_limit_set', 'disable_input');
    public function __construct()
    {
    }
    public function process($field, $data)
    {
    }
    private function get_format($format)
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
    public function __construct()
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
 * Class NF_Fields_ListState
 */
class NF_Fields_ListState extends \NF_Abstracts_List
{
    protected $_name = 'liststate';
    protected $_type = 'liststate';
    protected $_nicename = 'State';
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
    public function filter_options($field)
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
    public function __construct()
    {
    }
    public function admin_form_element($id, $value)
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
    protected $_section = 'pricing';
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
    public function filter_required_setting_preview($field)
    {
    }
    public function merge_tag_value($value, $field)
    {
    }
}
/**
 * Class NF_Fields_ProductQuantity
 */
class NF_Fields_Quantity extends \NF_Fields_Number
{
    protected $_name = 'quantity';
    protected $_section = 'pricing';
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
 * Class NF_Fields_CreditCard
 */
class NF_Fields_Recaptcha extends \NF_Abstracts_Field
{
    protected $_name = 'recaptcha';
    protected $_type = 'recaptcha';
    protected $_section = 'misc';
    protected $_icon = 'filter';
    protected $_templates = 'recaptcha';
    protected $_test_value = '';
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
 * Class NF_Field_Shipping
 */
class NF_Fields_Shipping extends \NF_Abstracts_Input
{
    protected $_name = 'shipping';
    protected $_section = 'pricing';
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
    protected $_settings_only = array('label', 'label_pos', 'default', 'required', 'classes');
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
}
/**
 * Class NF_Field_Total
 */
class NF_Fields_Total extends \NF_Abstracts_Input
{
    protected $_name = 'total';
    protected $_section = 'pricing';
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
class Parser
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
class Stack
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
    public function set_merge_tags($key, $value)
    {
    }
}
/**
 * Class NF_MergeTags_Fields
 */
final class NF_MergeTags_Fields extends \NF_Abstracts_MergeTags
{
    protected $id = 'fields';
    public function __construct()
    {
    }
    public function __call($name, $arguments)
    {
    }
    public function all_fields()
    {
    }
    public function all_field_plain()
    {
    }
    public function add_field($field)
    {
    }
}
/**
 * Class NF_MergeTags_Form
 */
final class NF_MergeTags_Form extends \NF_Abstracts_MergeTags
{
    protected $id = 'form';
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
}
/**
 * Class NF_MergeTags_Post
 */
final class NF_MergeTags_Post extends \NF_Abstracts_MergeTags
{
    protected $id = 'post';
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
}
/**
 * Class NF_MergeTags_QueryStrings
 */
final class NF_MergeTags_QueryStrings extends \NF_Abstracts_MergeTags
{
    protected $id = 'querystrings';
    public function __construct()
    {
    }
    public function __call($name, $arguments)
    {
    }
    public function set_merge_tags($key, $value)
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
    protected function system_date()
    {
    }
    protected function system_ip()
    {
    }
    protected function admin_email()
    {
    }
}
/**
 * Class NF_MergeTags_User
 */
final class NF_MergeTags_User extends \NF_Abstracts_MergeTags
{
    protected $id = 'user';
    public function __construct()
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
interface NF_Conversion
{
    public function run();
}
final class NF_Conversion_Calculations implements \NF_Conversion
{
    private $operations = array('add' => '+', 'subtract' => '-', 'multiply' => '*', 'divide' => '/');
    private $form = array();
    public function __construct($form_data)
    {
    }
    public function run()
    {
    }
    private function reduce_operations($eq, $calc)
    {
    }
    private function reduce_auto_total($eq, $field)
    {
    }
    private function merge_tag($field)
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
     * Register the Admin Notice for asking users to opt in to tracking
     *
     * @access public
     * @hook nf_admin_notices
     * @param array $notices
     * @return array $notices
     */
    public function admin_notice($notices)
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
     * @access private
     * @return bool
     */
    private function is_opted_in()
    {
    }
    private function is_freemius_opted_in()
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
     * Get the Opt In URL
     *
     * @access private
     * @param string $url
     * @return string $url
     */
    private function get_opt_in_url($url)
    {
    }
    /**
     * Check if a site is opted out
     *
     * @access private
     * @return bool
     */
    private function is_opted_out()
    {
    }
    private function is_freemius_opted_out()
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
    /**
     * Get the Opt Out URL
     *
     * @access private
     * @param string $url
     * @return string $url
     */
    private function get_opt_out_url($url)
    {
    }
}
final class NF_VersionSwitcher
{
    public function __construct()
    {
    }
    public function ajax_check()
    {
    }
    public function version_bypass_check()
    {
    }
    public function listener()
    {
    }
    public function admin_bar_menu($wp_admin_bar)
    {
    }
}
/**
 * Hooks NF actions, when present in the $_GET superglobal. Every nf_action
 * present in $_GET is called using WordPress's do_action function. These
 * functions are called on init.
 *
 * @since 2.7
 * @return void
*/
function nf_get_actions()
{
}
/**
 * Hooks NF actions, when present in the $_POST superglobal. Every nf_action
 * present in $_POST is called using WordPress's do_action function. These
 * functions are called on init.
 *
 * @since 2.7
 * @return void
*/
function nf_post_actions()
{
}
/*
 *
 * Function that checks to see if the new defined files from version 2.2.30 are present. If they aren't, add them.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_defined_fields_check()
{
}
function ninja_forms_activation($network_wide)
{
}
/**
 * Outputs a notice if the user attempts a network activation of the plugin.
 *
 * @since 2.7
 * @return void
 */
function nf_network_activation_error()
{
}
/**
 * Add our network activation error to the admin_notice hook.
 *
 * @since 2.7
 * @return void
 */
function nf_add_network_activation_error()
{
}
/*
 * Check to see if a form exists.
 *
 * @since 2.3.3
 * @return bool
 */
function ninja_forms_starter_form_exists()
{
}
/*
 * Add a starter form. Return the ID.
 *
 * @since 2.3.3
 * @returns int
 */
function ninja_forms_add_starter_form()
{
}
/*
 * Get the preview page title
 *
 * @since 2.5.2
 * @returns string
 */
function ninja_forms_get_preview_page_title()
{
}
function ninja_forms_add_menu()
{
}
/**
 * Add our submenu pages
 * 
 * @since 2.7
 * @return void
 */
function nf_add_submenus()
{
}
function ninja_forms_admin()
{
}
function ninja_forms_get_current_tab()
{
}
function ninja_forms_date_to_datepicker($date)
{
}
function str_putcsv($array, $delimiter = ',', $enclosure = '"', $terminator = "\n")
{
}
function ninja_forms_save_metabox_state()
{
}
/**
 * When a field settings metabox is expanded, return a JSON element containing the field settings HTML
 * 
 * @since 2.9
 * @return false;
 */
function nf_output_field_settings_html()
{
}
/**
 * Save our admin fields page.
 * 
 * @since 2.9
 * @return false;
 */
function nf_admin_save_builder()
{
}
function ninja_forms_new_field()
{
}
function ninja_forms_remove_field()
{
}
function ninja_forms_add_list_options()
{
}
function ninja_forms_insert_fav()
{
}
function ninja_forms_insert_def()
{
}
function ninja_forms_add_fav()
{
}
function ninja_forms_add_def()
{
}
function ninja_forms_remove_fav()
{
}
function ninja_forms_remove_def()
{
}
function ninja_forms_side_sortable()
{
}
function ninja_forms_delete_sub($sub_id = '')
{
}
function ninja_forms_array_merge_recursive()
{
}
function ninja_forms_import_list_options()
{
}
/*
 *
 * Function that outputs a list of terms so that the user can exclude terms from a list selector.
 *
 * @since 2.2.51
 * @return void
 */
function ninja_forms_list_terms_checkboxes($field_id = '', $tax_name = '')
{
}
/*
 *
 * Function that outputs a calculation row
 *
 * @since 2.2.28
 * @returns void
 */
function ninja_forms_add_calc_row()
{
}
/**
 * 
 * Covert a multi-line CSV string into a 2d array. Follows RFC 4180, allows
 * "cells with ""escaped delimiters""" && multi-line enclosed cells
 * It assumes the CSV file is properly formatted, and doesn't check for errors
 * in CSV format.
 * @param string $str The CSV string
 * @param string $d The delimiter between values
 * @param string $e The enclosing character
 * @param bool $crlf Set to true if your CSV file should return carriage return
 * 						and line feed (CRLF should be returned according to RFC 4180
 * @return array 
 */
function ninja_forms_csv_explode($str, $d = ',', $e = '"', $crlf = \TRUE)
{
}
function ninja_forms_load_screen_options_tab()
{
}
function ninja_forms_display_screen_options($content)
{
}
function ninja_forms_update_screen_options()
{
}
function nf_register_edit_autocomplete_off()
{
}
function nf_field_autocomplete_off($field_id, $field_data)
{
}
/*
 *
 * Function used to output calcluation options on each field editing section on the back-end.
 *
 * @since 2.2.28
 * @returns void
 */
function ninja_forms_edit_field_calc($field_id, $field_data)
{
}
function ninja_forms_register_edit_field_custom_class()
{
}
function ninja_forms_edit_field_custom_class($field_id, $field_data)
{
}
function ninja_forms_register_edit_field_desc()
{
}
function ninja_forms_edit_field_desc($field_id, $field_data)
{
}
function ninja_forms_edit_field($field_id, $new = \false)
{
}
function ninja_forms_edit_field_el_output($field_id, $type, $label = '', $name = '', $value = '', $width = 'wide', $options = '', $class = '', $desc = '', $label_class = '')
{
}
function ninja_forms_register_edit_field_help()
{
}
function ninja_forms_edit_field_help($field_id, $field_data)
{
}
//add_action('ninja_forms_edit_field_after_registered', 'ninja_forms_edit_field_hr', 10);
function ninja_forms_edit_field_hr($field_id)
{
}
/**
 * Function that adds a character and word limit option to textboxes and textareas.
 *
 * @since 2.4.3
 * @return void
 */
function ninja_forms_edit_field_input_limit($field_id, $field_data)
{
}
function ninja_forms_register_edit_field_label()
{
}
function ninja_forms_edit_field_label($field_id, $field_data)
{
}
function ninja_forms_register_edit_field_label_pos()
{
}
function ninja_forms_edit_field_label_pos($field_id, $field_data)
{
}
function ninja_forms_edit_field_output_li($field_id, $new = \false)
{
}
function ninja_forms_edit_field_close_li($field_id)
{
}
function nf_output_registered_field_settings($field_id, $data = array())
{
}
function nf_test($field_id, $field_data)
{
}
function ninja_forms_edit_field_list_term($field_id, $field_data)
{
}
function ninja_forms_register_edit_field_placeholder()
{
}
function ninja_forms_edit_field_placeholder($field_id)
{
}
function ninja_forms_edit_field_remove_button($field_id)
{
}
function ninja_forms_register_edit_field_required()
{
}
function ninja_forms_field_required($field_id, $field_data)
{
}
function nf_edit_field_req($field_id, $field_data)
{
}
//add_action( 'ninja_forms_edit_field_before_ul', 'ninja_forms_edit_field_save_button' );
function ninja_forms_edit_field_save_button($form_id)
{
}
/*
 *
 * Function used to output the submission sorting option on the backend.
 *
 * @since 2.9
 * @returns void
 */
function nf_edit_field_sort_numeric($field_id, $field_data)
{
}
/*
 *
 * Function used to output our admin label option on the backend.
 *
 * @since 2.9
 * @returns void
 */
function nf_edit_field_admin_label($field_id, $field_data)
{
}
/*
 *
 * Function that adds the address group dropdown to the user information field items.
 *
 * @since 2.2.37
 * @returns void
 */
function ninja_forms_user_info_fields_groups($field_id, $field_data)
{
}
function ninja_forms_preview_form()
{
}
function ninja_forms_preview_link($form_id = '', $echo = \true)
{
}
/**
 * Notices page to house all of the admin notices for Core
 *
 * Can be simply used be adding another line into the nf_admin_notices() function
 *
 * The class NF_Notices in notices-class.php can be extended to create more advanced notices to include triggered events
 *
 * @since 2.9
 */
function nf_admin_notices($notices)
{
}
function ninja_forms_output_tab_metabox($form_id = '', $slug, $metabox)
{
}
function ninja_forms_register_tab_addons()
{
}
function ninja_forms_tab_addons()
{
}
function ninja_forms_save_addons($data)
{
}
//add_action('init', 'ninja_forms_register_tab_impexp_backup');
function ninja_forms_register_tab_impexp_backup()
{
}
function ninja_forms_tab_impexp_backup()
{
}
function ninja_forms_save_impexp_backup($data)
{
}
function ninja_forms_register_tab_impexp_fields()
{
}
function ninja_forms_register_imp_fav_fields_metabox()
{
}
function ninja_forms_register_exp_fav_fields_metabox()
{
}
function ninja_forms_save_impexp_fields($data)
{
}
function ninja_forms_register_tab_impexp_forms()
{
}
function ninja_forms_register_imp_forms_metabox()
{
}
function ninja_forms_register_exp_forms_metabox()
{
}
/*
 *
 * Function that returns a serialized string containing the form for export.
 *
 * @since 2.2.42
 * @returns $form_row string
 */
function ninja_forms_serialize_form($form_id)
{
}
function ninja_forms_export_form($form_id)
{
}
function ninja_forms_save_impexp_forms($data)
{
}
function ninja_forms_calc_after_import_form($form)
{
}
//add_action('init', 'ninja_forms_register_tab_impexp_subs');
function ninja_forms_register_tab_impexp_subs()
{
}
function ninja_forms_tab_impexp_subs()
{
}
function ninja_forms_register_tab_general_settings()
{
}
function ninja_forms_register_general_settings_metabox()
{
}
function nf_delete_on_uninstall_prompt()
{
}
function ninja_forms_save_general_settings($data)
{
}
function ninja_forms_register_tab_label_settings()
{
}
function ninja_forms_register_label_settings_metabox()
{
}
function ninja_forms_save_label_settings($data)
{
}
function ninja_forms_register_tab_license_settings()
{
}
function ninja_forms_register_license_settings_metabox()
{
}
/**
 * Output a save button so that we can call it: "Save & Activate"
 * 
 * @since 2.9
 * @return void
 */
function nf_license_settings_save_button()
{
}
/**
 * Output a message letting the user know that they don't have any extensions with licenses activated.
 * 
 * @since 2.9
 * @return void
 */
function nf_license_settings_no_licenses_notice()
{
}
function ninja_forms_save_license_settings($data)
{
}
function ninja_forms_edit_field_output_ul($form_id)
{
}
function ninja_forms_register_empty_rte()
{
}
function ninja_forms_empty_rte()
{
}
function ninja_forms_register_tab_field_settings()
{
}
function ninja_forms_tab_field_settings()
{
}
/**
 * Listen for a new form action and create one if necessary.
 * 
 * @since 2.9
 * @return void
 */
function nf_create_form_listen()
{
}
function ninja_forms_register_field_settings_help()
{
}
function ninja_forms_help_field_settings()
{
}
//add_action('admin_init', 'ninja_forms_register_sidebar_def_fields');
function ninja_forms_register_sidebar_def_fields()
{
}
function ninja_forms_sidebar_def_fields()
{
}
function ninja_forms_register_sidebar_fav_fields()
{
}
function ninja_forms_sidebar_fav_fields()
{
}
function ninja_forms_register_sidebar_layout_fields()
{
}
/*
 *
 * Function that adds our payment sidebar.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_register_sidebar_payment_fields()
{
}
function ninja_forms_sidebar_payment_fields()
{
}
function ninja_forms_register_sidebar_post_fields()
{
}
function ninja_forms_register_sidebar_template_fields()
{
}
/*
 *
 * Function that adds our user info sidebar.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_register_sidebar_user_info_fields()
{
}
function ninja_forms_sidebar_user_info_fields()
{
}
function ninja_forms_register_form_export()
{
}
function ninja_forms_register_form_duplicate()
{
}
function ninja_forms_register_tab_form_list()
{
}
function ninja_forms_tab_form_list()
{
}
function ninja_forms_save_form_list($data)
{
}
function ninja_forms_register_tab_form_preview()
{
}
function ninja_forms_register_tab_form_settings()
{
}
function ninja_forms_register_form_settings_basic_metabox()
{
}
function ninja_forms_save_form_settings($form_id, $data)
{
}
// add_action( 'init', 'ninja_forms_register_form_settings_help' );
function ninja_forms_register_form_settings_help()
{
}
function ninja_forms_help_form_settings()
{
}
/**
 * Display the Debug/Status page
 *
 * @author 		Patrick Rauland
 * @category 	Admin
 * @since     	2.2.50
 */
function ninja_forms_tab_system_status()
{
}
/* Adds a box to the main column on the Post and Page edit screens */
function ninja_forms_add_custom_box()
{
}
/* Prints the box content */
function ninja_forms_inner_custom_box()
{
}
/* When the post is saved, saves our custom data */
function ninja_forms_save_postdata($post_id)
{
}
//ninja_forms_register_help_screen_tab('test-help', $args);
function ninja_forms_help_screen_test()
{
}
//ninja_forms_register_screen_option('tabs', $args);
function ninja_forms_screen_option_tabs()
{
}
function ninja_forms_save_screen_option_tabs()
{
}
function ninja_forms_admin_save()
{
}
//Load up our WP Ninja Custom Form JS files.
function ninja_forms_admin_css()
{
}
function ninja_forms_add_class($classes)
{
}
function ninja_forms_admin_js()
{
}
function ninja_forms_sidebar_display_fields($slug)
{
}
function ninja_forms_sidebar_sorter($array, $sequence)
{
}
function ninja_forms_display_sidebars($data)
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
function ninja_forms_display_tabs()
{
}
function NF_UpgradeHandler()
{
}
/**
 * DEPRECATED - Display Upgrade Notices
 *
 * @since 2.7
 * @return void
*/
function nf_show_upgrade_notices()
{
}
//add_action( 'admin_notices', 'nf_show_upgrade_notices' );
/**
 * Triggers all upgrade functions
 *
 * This function is usually triggered via AJAX
 *
 * @since 2.7
 * @return void
*/
function nf_trigger_upgrades()
{
}
/**
 * Upgrades for Ninja Forms v2.7 and Submission Custom Post Type.
 *
 * @since 2.7
 * @return void
 */
function nf_v27_upgrade_subs_to_cpt()
{
}
/**
 * Keep our upgrade notice closed.
 *
 * @since 2.7
 * @return void
 */
function nf_dismiss_upgrade_notice()
{
}
/**
 * Clearing out the old email favourite field and replacing it with the new version.
 *
 * @since 2.8.4
 * @return void
 */
function nf_clear_old_favs()
{
}
/**
 * Remove old email "send to" settings from form fiels.
 *
 * @since 2.8.4
 * @return void
 */
function nf_remove_old_email_settings($form_id = '')
{
}
/**
 * Removes old email settings form a single form.
 *
 * @since 2.8.4
 * @return void
 */
function nf_remove_old_email_send_to($form_id)
{
}
/**
 * Remove the old copy of our email defined field and replace it.
 *
 * @since 2.8.4
 * @return void
 */
function nf_change_email_fav()
{
}
/**
 * Fix a serialized array error with the state dropdown favourite field
 * 
 * @since 2.8.4
 * @return void
 */
function nf_change_state_dropdown_fav()
{
}
/**
 * Check our option to see if we've updated all of our forms.
 * If we haven't, loop through all of our forms and see if any need to be updated.
 *
 * @since 2.9
 * @return void
 */
function nf_29_update_all_form_settings_check()
{
}
/**
 * Render Upgrades Screen
 *
 * @since 2.7
 * @return void
*/
function nf_upgrades_screen()
{
}
// Begin Form Interaction Functions
function ninja_forms_insert_field($form_id, $args = array())
{
}
function ninja_forms_get_form_ids_by_post_id($post_id)
{
}
function ninja_forms_get_form_by_sub_id($sub_id)
{
}
// The ninja_forms_delete_form( $form_id ) function is in includes/deprecated.php
// Begin Field Interaction Functions
function ninja_forms_get_field_by_id($field_id)
{
}
function ninja_forms_get_fields_by_form_id($form_id, $orderby = 'ORDER BY `order` ASC')
{
}
function ninja_forms_get_all_fields()
{
}
function ninja_forms_update_field($args)
{
}
function ninja_forms_delete_field($field_id)
{
}
// Begin Favorite Fields Interaction Functions
function ninja_forms_get_fav_by_id($fav_id)
{
}
function ninja_forms_delete_fav_by_id($fav_id)
{
}
function ninja_forms_get_all_favs()
{
}
// Begin Defined Fields Functions
function ninja_forms_get_def_by_id($def_id)
{
}
function ninja_forms_get_all_defs()
{
}
function ninja_forms_addslashes_deep($value)
{
}
function utf8_encode_recursive($input)
{
}
function ninja_forms_str_replace_deep($search, $replace, $subject)
{
}
function ninja_forms_html_entity_decode_deep($value, $flag = \ENT_COMPAT)
{
}
function ninja_forms_htmlspecialchars_deep($value)
{
}
function ninja_forms_stripslashes_deep($value)
{
}
function ninja_forms_esc_html_deep($value)
{
}
function nf_wp_kses_post_deep($value)
{
}
function ninja_forms_strip_tags_deep($value)
{
}
function ninja_forms_json_response()
{
}
/*
 *
 * Function that sets up our transient variable.
 *
 * @since 2.2.45
 * @return void
 */
function ninja_forms_set_transient()
{
}
/*
 *
 * Function that deletes our cache variable
 *
 * @since 2.2.45
 * @return void
 */
function ninja_forms_delete_transient()
{
}
/**
 * Get a count of submissions for a form
 *
 * @since 2.7
 * @param int $post_id
 * @return int $count
 */
function nf_get_sub_count($form_id, $post_status = 'publish')
{
}
/**
 * Get an array of our fields by form ID.
 * The returned array has the field_ID as the key.
 *
 * @since 2.7
 * @param int $form_id
 * @return array $tmp_array
 */
function nf_get_fields_by_form_id($form_id, $orderby = 'ORDER BY `order` ASC')
{
}
/**
 * Deprecated as of version 2.7.
 */
// Hook into our new save sub filter to add any deprecated filters
function nf_old_save_sub_filter($user_value, $field_id)
{
}
// Hook into our new nf_save_sub action and add any actions hooked into our old action hooks.
function nf_old_save_sub_action($sub_id)
{
}
// Hook into our new submissions CSV filename filter.
function nf_old_subs_csv_filename($filename)
{
}
// Hook into our new submissions CSV label filter.
function nf_old_subs_csv_label($label, $field_id)
{
}
// Hook into our new submissions CSV label array filter.
function nf_old_subs_csv_label_array($label_array, $sub_ids)
{
}
// Hook into our new submissions CSV pre_value filter.
function nf_old_subs_csv_pre_value($user_value, $field_id)
{
}
// Hook into our new submissions CSV value filter.
function nf_old_subs_csv_value($user_value, $field_id)
{
}
// Hook into our new submissions CSV value array filter.
function nf_old_subs_csv_value_array($values_array, $sub_ids)
{
}
// Hook into our new CSV BOM filter
function nf_old_subs_csv_bom($bom)
{
}
// Hook into our new CSV delimiter filter
function nf_old_subs_csv_delimiter($delimiter)
{
}
// Hook into our new CSV enclosure filter
function nf_old_subs_csv_enclosure($enclosure)
{
}
// Hook into our new CSV terminator filter
function nf_old_subs_csv_terminator($terminator)
{
}
// Hook into our new Submissions table row-actions filter
function nf_old_subs_table_row_actions_filter($actions, $sub_id, $form_id)
{
}
/**
 * ninja_forms_get_subs() has been deprecated in favour of Ninja_Forms()->subs()->get( $args ) or Ninja_Forms()->form( 23 )->get_subs( $args )
 * You can also use WordPress queries ,since this is a custom post type.
 * 
 * @since 2.7
 */
function ninja_forms_get_subs($args = array())
{
}
/**
 * ninja_forms_get_sub_count() has been deprecated in favour of Ninja_Forms()->form( 23 )->sub_count or nf_get_sub_count()
 * Function that returns a count of the number of submissions.
 *
 * @since 2.7
 */
function ninja_forms_get_sub_count($args = array())
{
}
/**
 * ninja_forms_get_sub_by_id( $sub_id ) has been deprecated in favour of Ninja_Forms()->sub( 23 );
 * 
 * @since 2.7
 */
function ninja_forms_get_sub_by_id($sub_id)
{
}
/**
 * ninja_forms_get_all_subs() has been deprecated in favour of Ninja_Forms()->subs()->get();
 * 
 * @since 2.7
 */
function ninja_forms_get_all_subs($form_id = '')
{
}
/**
 * ninja_forms_insert_sub() has been deprecated in favour of Ninja_Forms()->subs()->create( $form_id );
 * Because submissions are now a CPT, this function will only return false. 
 * Please replace any instances of this function with the replacement.
 * 
 * @since 2.7
 */
function ninja_forms_insert_sub($args)
{
}
/**
 * ninja_forms_update_sub() has been deprecated in favour of Ninja_Forms()->sub( 23 )->update_field( id, value );
 * Because submissions are now a CPT, this function will only return false. 
 * Please replace any instances of this function with the replacement.
 * 
 * @since 2.7
 */
function ninja_forms_update_sub($args)
{
}
/**
 * ninja_forms_export_subs_to_csv() has been deprecated in favour of Ninja_Forms()->subs()->export( sub_ids, return );
 * or Ninja_Forms()->sub( 23 )->export( return );
 * Please replace any instances of this function with the replacement.
 * 
 * @since 2.7
 */
function ninja_forms_export_subs_to_csv($sub_ids = '', $return = \false)
{
}
function ninja_forms_implode_r($glue, $pieces)
{
}
/**
 * Get the csv delimiter
 * 
 * @return string
 */
function ninja_forms_get_csv_delimiter()
{
}
/**
 * Get the csv enclosure
 * 
 * @return string
 */
function ninja_forms_get_csv_enclosure()
{
}
/**
 * Get the csv delimiter
 * 
 * @return string
 */
function ninja_forms_get_csv_terminator()
{
}
/**
 * Wrapper for nf_save_sub()
 */
function ninja_forms_save_sub()
{
}
function nf_change_all_forms_filter($cap)
{
}
function nf_change_admin_menu_filter($cap)
{
}
/** 
 * Deprecated as of version 2.8 
 */
// The admin_mailto setting has been deprecated. Because users may have used this setting to modify who receives the admin email,
// we need to make sure that it is backwards compatible.
function nf_clear_admin_mailto()
{
}
function nf_modify_admin_mailto($setting, $setting_name, $id)
{
}
function ninja_forms_register_filter_email_add_fields()
{
}
function ninja_forms_filter_email_add_fields($message)
{
}
function ninja_forms_register_email_admin()
{
}
function ninja_forms_email_admin()
{
}
function ninja_forms_register_email_user()
{
}
function ninja_forms_email_user()
{
}
function nf_csv_attachment($sub_id)
{
}
// Move any attachments that exist for our "admin" and "user" emails.
function nf_modify_attachments($files, $n_id)
{
}
// Deprecate old "add all fields" filters
function nf_deprecate_all_fields_email_field_label($value, $field_id)
{
}
function nf_deprecate_all_fields_email_field_value($value, $field_id)
{
}
function nf_deprecate_all_fields_email_table($value, $form_id)
{
}
// Deprecate our old success message filter
function nf_deprecate_success_message_filter($message, $n_id)
{
}
// Remove any references to "admin email" from our imported forms.
function nf_deprecate_form_import($form)
{
}
// Remove any references to "user email" from our imported forms.
function nf_deprecate_field_import($data)
{
}
/** 
 * Deprecated as of version 2.9
 *
 */
/**
 * Get an array of form settings by form ID
 *
 * @since 2.7
 * @param int $form_id
 * @return array $form['data']
 */
function nf_get_form_settings($form_id)
{
}
/**
 * Return form data
 * 
 * @since 1.0
 * @param int $form_id
 * @return array $form
 */
function ninja_forms_get_form_by_id($form_id)
{
}
/**
 * Get a form by field id
 * 
 * @since 1.0
 * @param int $field_id
 * @param array $form
 */
function ninja_forms_get_form_by_field_id($field_id)
{
}
/**
 * Delete a form
 *
 * @since 1.0
 */
function ninja_forms_delete_form($form_id = '')
{
}
function ninja_forms_get_all_forms($debug = \false)
{
}
/**
 * Return our form count
 *
 * @since 2.8
 * @return int $count
 */
function nf_get_form_count()
{
}
/**
 * Old update form function.
 * 
 * @since 1.0
 * @return void
 */
function ninja_forms_update_form($args)
{
}
/*
 *
 * Function that adds a calc filter class to the field if appropriate.
 *
 * @since 2.4
 * @return void
 */
function ninja_forms_calc_listen_field_class($form_id)
{
}
/**
 * Function that resets the field values to default if the form has been submitted.
 *
 * @since 2.5
 * @return void
 */
function nf_clear_complete($form_id)
{
}
/*
 *
 * Function that filters default values, replacing defined strings with the approparite values.
 *
 * @since 2.4
 * @return $data
 */
function ninja_forms_default_value_filter($data, $field_id)
{
}
/**
 * Outputs the HTML of the description content if it is set to display.
 *
**/
// add_action( 'init', 'ninja_forms_init_field_desc' );
// function ninja_forms_init_field_desc() {
// 	add_action( 'ninja_forms_display_before_field', 'ninja_forms_add_field_desc', 10, 2 );
// }
function ninja_forms_add_field_desc($field_id, $data)
{
}
function ninja_forms_display_field_desc($field_id, $data)
{
}
function ninja_forms_register_display_fields()
{
}
function ninja_forms_display_fields($form_id)
{
}
/**
 * The next two functions are used to get CSS class names based upon field settings.
 *
**/
function ninja_forms_get_field_wrap_class($field_id, $form_id = '')
{
}
function ninja_forms_get_field_class($field_id, $form_id = '')
{
}
function ninja_forms_register_field_processing_error()
{
}
function ninja_forms_display_field_processing_error($field_id)
{
}
function ninja_forms_register_display_field_type()
{
}
function ninja_forms_display_field_type($field_id, $data)
{
}
/**
 * Outputs the HTML of the help icon if it is set to display.
 *
**/
function ninja_forms_display_field_help($field_id, $data)
{
}
function ninja_forms_inside_label_hidden($field_id, $data)
{
}
/**
 * Outputs the HTML of the field label if it is set to display.
 * Also outputs the required symbol if it is set.
**/
function ninja_forms_display_field_label($field_id, $data)
{
}
function ninja_forms_display_label_inside($data, $field_id)
{
}
function ninja_forms_field_filter_populate_term($data, $field_id)
{
}
/*
 * Used to restore the progress of a user.
 * If the global processing variable $ninja_forms_processing is set, filter the default_value for each field.
 *
 */
function ninja_forms_filter_restore_progress($data, $field_id)
{
}
function ninja_forms_register_display_close_form_tag()
{
}
function ninja_forms_display_close_form_tag($form_id)
{
}
/*
 * Function that checks to see if we are processing a submission
 *
 * @since 2.6.2
 * @return void
 */
function nf_check_post()
{
}
/*
 *
 * Function that checks to see if session variables have been set that indicate we are on a success page.
 * If we are, intialize the global processing class for access to the form's settings and user values.
 *
 * @since 2.2.45
 * @return void
 */
function ninja_forms_session_class_setup()
{
}
/*
 *
 * Function that clears any transient values that have been stored in cache for this user.
 *
 * @since 2.2.45
 * @return void
 */
function ninja_forms_clear_transient()
{
}
function ninja_forms_page_append_check()
{
}
function ninja_forms_append_to_page($content)
{
}
/**
 * Main function used to display a Ninja Form.
 * ninja_forms_display_form() can be called anywhere on in a WordPress template.
 * By default it's called by the ninja_forms_append_to_page() function in the main ninja_forms.php file.
 *
**/
function ninja_forms_display_form($form_id = '')
{
}
/*
 *
 * Function that outputs an opening <div> tag for wrapping fields.
 *
 * @since 2.2.17
 * @return void
 */
function ninja_forms_display_open_fields_wrap($form_id)
{
}
/*
 *
 * Function that outputs a closing </div> tag for wrapping fields.
 *
 * @since 2.2.17
 * @returns void
 */
function ninja_forms_display_close_fields_wrap($form_id)
{
}
function ninja_forms_display_open_cont($form_id)
{
}
function ninja_forms_display_close_cont($form_id)
{
}
function ninja_forms_register_display_form_title()
{
}
function ninja_forms_display_form_title($form_id)
{
}
function ninja_forms_register_display_form_visibility()
{
}
function ninja_forms_display_form_visibility($display, $form_id)
{
}
function ninja_forms_register_display_open_form_wrap()
{
}
function ninja_forms_display_open_form_wrap($form_id)
{
}
function ninja_forms_display_close_form_wrap($form_id)
{
}
function ninja_forms_register_display_hidden_fields()
{
}
function ninja_forms_display_hidden_fields($form_id)
{
}
/**
 * Output our honeypot field
 * @since  2.9.22
 * @param  int  $form_id
 * @return void
 */
function ninja_forms_display_honeypot($form_id)
{
}
/*
 * Insert a nonce field into our form
 *
 * @since 2.6.1
 * @return void
 */
function nf_form_nonce($form_id)
{
}
/**
 * Adds our not logged-in message if the user is not logged-in and the form requires the user to be logged-in.
 *
 * @since 2.9
 * @return void
 */
function nf_not_logged_in_msg($form_id)
{
}
function ninja_forms_register_display_open_form_tag()
{
}
function ninja_forms_display_open_form_tag($form_id)
{
}
/**
 * Outputs the HTML for the ajax processing div. Only used when submitting via ajax.
 *
**/
function ninja_forms_display_process_message($form_id)
{
}
function ninja_forms_register_display_req_items()
{
}
function ninja_forms_display_req_items($form_id)
{
}
/*
 * Outputs the HTML for displaying success messages or error messages set to display at location 'general'
 *
 */
function ninja_forms_display_response_message($form_id)
{
}
/**
 * Function that checks the current sub count and updates the loading class if neccesary.
 * @param  $string $form_id
 * @since 2.5
 * @return void
 */
function nf_check_sub_limit($form_id)
{
}
/**
 * Function that filters the display variable and returns false if sub limit has been reached.
 * @param  bool $display
 * @param  string $form_id
 * @since 2.5
 * @return string $display
 */
function nf_sub_limit_display_filter($display, $form_id)
{
}
/**
 * Function that echoes the sub limit reached message if necessary.
 * @param  string $form_id
 * @since 2.5
 * @return void
 */
function nf_sub_limit_display_msg($form_id)
{
}
function ninja_forms_register_fields_post_process()
{
}
function ninja_forms_fields_post_process()
{
}
function ninja_forms_register_fields_pre_process()
{
}
function ninja_forms_fields_pre_process()
{
}
function ninja_forms_register_fields_process()
{
}
function ninja_forms_fields_process($form_id)
{
}
function ninja_forms_register_filter_msgs()
{
}
function ninja_forms_filter_msgs()
{
}
/**
 * Make sure that our honeypot wasn't filled in.
 */
function nf_check_honeypot()
{
}
function ninja_forms_post_process()
{
}
function ninja_forms_setup_processing_class($form_id = '')
{
}
function ninja_forms_pre_process()
{
}
function ninja_forms_process()
{
}
function ninja_forms_req_fields_process()
{
}
function nf_save_sub()
{
}
function ninja_forms_filter_term_ids_for_name($val, $field_id)
{
}
function ninja_forms_filter_term_ids_for_name_sub_td($val, $field_id, $sub_id)
{
}
function ninja_forms_pre_process_populate_term($form_id)
{
}
function ninja_forms_display_js($form_id, $local_vars = '')
{
}
function ninja_forms_display_css()
{
}
/**
 * Update form settings to the new storage system when the form is viewed for the first time.
 *
 * @since 2.9
 * @return void
 */
function nf_29_update_form_settings($form_id)
{
}
/**
 * Check our option to see if we've updated all of our form settings.
 * If we haven't, then update the form currently being viewed.
 * 
 * @since 2.9
 * @return void
 */
function nf_29_update_form_settings_check($form_id)
{
}
function ninja_forms_register_common_field_type_groups()
{
}
/**
 * Function to register a new field for calculations
 *
 * @since 2.2.28
 * @return void
 */
function ninja_forms_register_field_calc()
{
}
/**
 * Function that filters the field LI label on the edit field back-end.
 *
 * @since 2.2.28
 * @return $li_label
 */
function ninja_forms_calc_edit_label_filter($li_label, $field_id)
{
}
/**
 * Function that outputs the edit options for our calculation field
 *
 * @since 2.2.28
 * @return void
 */
function ninja_forms_field_calc_edit($field_id, $data)
{
}
function nf_field_calc_advanced_settings($field_id, $data)
{
}
/**
 * Function that outputs the display for our calculation field
 *
 * @since 2.2.28
 * @return void
 */
function ninja_forms_field_calc_display($field_id, $data, $form_id = '')
{
}
/**
 * Function to output specific calculation options for a given field
 *
 * @param int $field_id - ID of the field being edited.
 * @param array $c - Array containing the data.
 * @param int $x - Index for this row of the calc array.
 * @since 2.2.28
 * @returns void
 */
function ninja_forms_output_field_calc_row($field_id, $c = array(), $x = 0)
{
}
/**
 * Function that runs during pre_processing and calcuates the value of this field.
 *
 * @since 2.2.30
 * @return void
 */
function ninja_forms_field_calc_pre_process()
{
}
function ninja_forms_calc_check_load()
{
}
function ninja_forms_calc_field_loop($field_id, $calc_eq = '', $result = '')
{
}
/**
 * Function that filters the list options span and adds the appropriate listener class if there is a calc needed for the field.
 *
 * @since 2.2.28
 * @return $class
 */
function ninja_forms_calc_filter_list_options_span($class, $field_id)
{
}
/**
 * Function that takes two variables and our calculation string operator and returns the result.
 *
 * @since 2.2.28
 * @return int value
 */
function ninja_forms_calc_evaluate($op, $value1, $value2)
{
}
/**
 * Function that returns the calculation value of a field given by field_id if it is to be included in the auto total.
 *
 * @since 2.2.30
 * @return calc_value
 */
function ninja_forms_field_calc_value($field_id, $field_value = '', $calc_method = 'auto')
{
}
function ninja_forms_register_field_checkbox()
{
}
//Checkbox Display Function
function ninja_forms_field_checkbox_display($field_id, $data, $form_id = '')
{
}
//Checkbox Pre-Processing Function
function ninja_forms_field_checkbox_pre_process($field_id, $user_value)
{
}
//Checkbox Validation Function
function ninja_forms_field_checkbox_validation($field_id, $user_value)
{
}
/**
 * Edit submission value output function
 *
 * @since 2.7
 * @return void
 */
function nf_field_checkbox_edit_sub_value($field_id, $user_value)
{
}
/*
 * Function to register a new field for user's country
 *
 * @since 2.2.28
 * @returns void
 */
function ninja_forms_register_field_country()
{
}
/*
 * Function to display our country field on the front-end.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_field_country_display($field_id, $data, $form_id = '')
{
}
/*
 *
 * Function that filters the hidden field output by display that identifies the field type.
 * This is a work around and will need to be removed once proper field registration is in place.
 *
 * @since 2.2.30
 * @returns string $field_type
 */
function ninja_forms_field_country_type_filter($field_type, $field_id)
{
}
/*
 * Function to register a new field for user's country
 *
 * @since 2.2.37
 * @returns void
 */
function ninja_forms_register_field_credit_card()
{
}
/*
 * Function to display our credit_card field on the front-end.
 *
 * @since 2.2.37
 * @returns void
 */
function ninja_forms_field_credit_card_display($field_id, $data, $form_id = '')
{
}
/*
 *
 * Function that filters the display script field data so that the mask is included for the expires field.
 *
 * @since 2.2.37
 * @returns array $data
 */
function ninja_forms_field_credit_card_expire_filter($data, $field_id)
{
}
function ninja_forms_register_field_desc()
{
}
function ninja_forms_field_desc_display($field_id, $data, $form_id = '')
{
}
/*
 *
 * Function that adds the $data['default_value'] to the $ninja_forms_processing.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_field_desc_pre_process($field_id, $user_value)
{
}
function my_custom_field_register()
{
}
function ninja_forms_register_field_hiddenbox()
{
}
function ninja_forms_field_hidden_edit($field_id, $data)
{
}
function ninja_forms_field_hidden_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_hidden_edit_sub($field_id, $data)
{
}
function ninja_forms_register_field_honeypot()
{
}
function ninja_forms_field_honeypot_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_honeypot_pre_process($field_id, $user_value)
{
}
function ninja_forms_register_field_hr()
{
}
function ninja_forms_field_hr_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_register_field_list()
{
}
function ninja_forms_display_list_type($field_id, $data)
{
}
function ninja_forms_field_list_add_value($field_id, $x, $conditional, $name, $id, $current = '', $field_data = '')
{
}
function ninja_forms_field_list_edit($field_id, $data)
{
}
function ninja_forms_field_list_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_list_option_output($field_id, $x, $option = '', $hidden = '')
{
}
function ninja_forms_field_filter_list_wrap_class($field_wrap_class, $field_id)
{
}
// Add a filter to change the current field_value to the "selected" list elements on form load, if any exist.
function ninja_forms_field_filter_list_data($form_id)
{
}
/**
 * Edit submission value output function
 *
 * @since 2.7
 * @return void
 */
function nf_field_list_edit_sub_value($field_id, $user_value, $field)
{
}
/**
 * Output our user value on the sub table
 *
 * @since 2.7
 * @return void
 */
function nf_field_list_sub_table_value($field_id, $user_value)
{
}
function ninja_forms_register_field_number()
{
}
function ninja_forms_field_number_edit($field_id, $data)
{
}
function ninja_forms_field_number_display($field_id, $data, $form_id = '')
{
}
//add_action('init', 'ninja_forms_register_field_organizer');
function ninja_forms_register_field_organizer()
{
}
function ninja_forms_register_field_profile_pass()
{
}
function ninja_forms_field_profile_pass_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_profile_pass_pre_process($field_id, $user_value)
{
}
function ninja_forms_field_profile_add_open_wrapper($field_id, $data)
{
}
function ninja_forms_field_profile_add_close_wrapper($field_id, $data)
{
}
function ninja_forms_register_field_rating()
{
}
function ninja_forms_field_rating_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_rating_pre_process($field_id, $user_value)
{
}
function ninja_forms_register_field_recaptcha()
{
}
function ninja_forms_field_recaptcha_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_recaptcha_pre_process($field_id, $user_value)
{
}
/**
 * Function that actually processes our recaptcha. Runs on a later priority than the field pre_process function
 * @since  2.9.27
 * @param  int  $form_id
 * @return void
 */
function nf_field_recaptcha_pre_process($form_id)
{
}
function ninja_forms_register_field_spam()
{
}
function ninja_forms_field_spam_edit($field_id, $data)
{
}
function ninja_forms_field_spam_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_spam_pre_process($field_id, $user_value)
{
}
function ninja_forms_register_field_submit()
{
}
function ninja_forms_field_submit_display($field_id, $data, $form_id = '')
{
}
/*
 * Function to register a new field for payment tax
 *
 * @since 2.2.28
 * @returns void
 */
function ninja_forms_register_field_tax()
{
}
/*
 * Function to display our tax field on the front-end.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_field_tax_display($field_id, $data, $form_id = '')
{
}
/*
 *
 * Function that runs when our field is saved to make sure that a % is in the tax rate box.
 *
 * @since 2.2.30
 * @returns void
 */
function ninja_forms_field_tax_save($form_id, $data)
{
}
function ninja_forms_register_field_textarea()
{
}
function ninja_forms_field_textarea_display($field_id, $data, $form_id = '')
{
}
/**
 * Edit submission value output function
 *
 * @since 2.7
 * @return void
 */
function nf_field_textarea_edit_sub_value($field_id, $user_value)
{
}
/**
 * Make sure we strip nested script tags from our values
 *
 * @since  2.9.19
 * @return  void
 */
function nf_field_textarea_pre_process($field_id, $user_value)
{
}
function ninja_forms_register_field_textbox()
{
}
function nf_field_text_edit_default_value($field_id, $data)
{
}
function nf_field_text_edit_input_mask($field_id, $data)
{
}
function ninja_forms_field_text_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_text_pre_process($field_id, $user_value)
{
}
/**
 * Edit submission value output function
 *
 * @since 2.7
 * @return void
 */
function nf_field_text_edit_sub_value($field_id, $user_value)
{
}
/**
 * Output the value that shows up in the submissions table
 *
 * @since 2.7
 * @return void
 */
function nf_field_text_sub_table_value($field_id, $user_value)
{
}
function ninja_forms_register_field_timed_submit()
{
}
function ninja_forms_field_timed_submit_display($field_id, $data, $form_id = '')
{
}
function ninja_forms_field_timed_submit_pre_process($field_id, $user_value)
{
}
/*
 *
 * Function that checks to see if we've properly removed the old "From Email" setting and replaced it with "From Name" and "From Email."
 *
 * @since 2.3
 * @return void
 */
function ninja_forms_check_email_from_name()
{
}
/*
 *
 * Function that looks at our "Email From" setting and breaks it up into "Name" and "Email."
 *
 * @since 2.3
 * @return $tmp_array array
 */
function ninja_forms_split_email_from($email_from)
{
}
function ninja_forms_return_echo($function_name)
{
}
function ninja_forms_random_string($length = 10)
{
}
function ninja_forms_remove_from_array($arr, $key, $val, $within = \FALSE)
{
}
function ninja_forms_letters_to_numbers($size)
{
}
function ninja_forms_subval_sort($a, $subkey)
{
}
/**
 * Takes a field ID and returns the admin label if it exists and the label if it does not.
 *
 * @since 2.8
 * @param int $field_id
 * @return string $label
 */
function nf_get_field_admin_label($field_id, $form_id = '')
{
}
/**
 * Return the begin date with an added 00:00:00.
 * Checks for the current date format setting and tries to respect it.
 *
 * @since 2.7
 * @param string $begin_date
 * @return string $begin_date
 */
function nf_get_begin_date($begin_date)
{
}
/**
 * Return the end date with an added 23:59:59.
 * Checks for the current date format setting and tries to respect it.
 *
 * @since 2.7
 * @param string $end_date
 * @return string $end_date
 */
function nf_get_end_date($end_date)
{
}
/**
 * Checks whether function is disabled.
 *
 * @since 2.7
 *
 * @param string  $function Name of the function.
 * @return bool Whether or not function is disabled.
 */
function nf_is_func_disabled($function)
{
}
/**
 * Acts as a wrapper/alias for nf_get_objects_by_type that is specific to notifications.
 *
 * @since 2.8
 * @return array $notifications
 */
function nf_get_all_notifications()
{
}
/**
 * Acts as a wrapper/alias for nf_get_object_children that is specific to notifications.
 *
 * @since 2.8
 * @param string $form_id
 * @return array $notifications
 */
function nf_get_notifications_by_form_id($form_id, $full_data = \true)
{
}
/**
 * Acts as a wrapper/alias for nf_get_object_meta
 *
 * @since 2.8
 * @param string $id
 * @return array $notification
 */
function nf_get_notification_by_id($notification_id)
{
}
/**
 * Insert a notification into the database.
 *
 * Calls nf_insert_object()
 * Calls nf_add_relationship()
 * Calls nf_update_object_meta()
 *
 * @since 2.8
 * @param int $form_id
 * @return int $n_id
 */
function nf_insert_notification($form_id = '')
{
}
/**
 * Delete a notification.
 *
 * Acts as a wrapper/alias for nf_delete_object
 *
 * @since 2.8
 * @param int $n_id
 * @return void
 */
function nf_delete_notification($n_id)
{
}
/**
 * Function that gets a piece of object meta
 *
 * @since 2.8
 * @param string $object_id
 * @param string $meta_key
 * @return var $meta_value
 */
function nf_get_object_meta_value($object_id, $meta_key)
{
}
/**
 * Function that gets children objects by type and parent id
 *
 * @since 2.8
 * @param string $parent_id
 * @param string $type
 * @return array $children
 */
function nf_get_object_children($object_id, $child_type = '', $full_data = \true, $include_forms = \true)
{
}
/**
 * Function that updates a piece of object meta
 *
 * @since 3.0
 * @param string $object_id
 * @param string $meta_key
 * @param string $meta_value
 * @return string $meta_id
 */
function nf_update_object_meta($object_id, $meta_key, $meta_value)
{
}
/**
 * Function that gets all the meta values attached to a given object.
 *
 * @since 2.8
 * @param string $object
 * @return array $settings
 */
function nf_get_object_meta($object_id)
{
}
/**
 * Insert an object.
 *
 * @since 3.0
 * @param string $type
 * @return int $object_id
 */
function nf_insert_object($type, $id = \NULL)
{
}
/**
 * Delete an object. Also removes all of the objectmeta attached to the object and any references to it in the relationship table.
 *
 * @since 2.8
 * @param int $object_id
 * @return bool
 */
function nf_delete_object($object_id)
{
}
/**
 * Create a relationship between two objects
 *
 * @since 2.8
 * @param int $child_id
 * @param string child_type
 * @param int $parent_id
 * @param string $parent_type
 * @return void
 */
function nf_add_relationship($child_id, $child_type, $parent_id, $parent_type)
{
}
/**
 * Get an object's parent
 *
 * @since 2.8
 * @param int $child_id
 * @return int $parent_id
 */
function nf_get_object_parent($child_id)
{
}
/**
 * Get an object's type
 *
 * @since 2.8.6
 * @param $object_id
 * @return string $return
 */
function nf_get_object_type($object_id)
{
}
/*
 * Get User IP
 *
 * Returns the IP address of the current visitor
 *
 * @since 2.8
 * @return string $ip User's IP address
 */
function nf_get_ip()
{
}
/**
 * Function that gets all objects of a given type.
 *
 * @since 2.8
 * @return array $results
 */
function nf_get_objects_by_type($object_type)
{
}
/**
 * Add filters so that users given the ability to see the "All Forms" table and the add new form page
 * can add new fields and delete forms.
 *
 * @since 2.8.6
 * @return void
 */
function nf_add_permissions_filters($cap)
{
}
function nf_admin_footer_text($footer_text)
{
}
/*
 * Import a serialized ninja form
 *
 * @since unknown
 * @returns int
 */
function ninja_forms_import_form($file)
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
function nf_get_settings()
{
}
function ninja_forms_register_field($slug, $args = array())
{
}
function ninja_forms_register_field_type_group($slug, $args)
{
}
function ninja_forms_register_tab($slug, $args)
{
}
function ninja_forms_register_sidebar($slug, $args)
{
}
function ninja_forms_register_sidebar_option($slug, $args)
{
}
function ninja_forms_register_sidebar_options($args)
{
}
function ninja_forms_field_edit($slug)
{
}
//Screen option registration function
function ninja_forms_register_screen_option($id, $args)
{
}
//Help tab registration function
function ninja_forms_register_help_screen_tab($id, $args)
{
}
//Tab - Metaboxes Registration function
function ninja_forms_register_tab_metabox($args = array())
{
}
//Register Tab Metabox Options
function ninja_forms_register_tab_metabox_options($args = array())
{
}
function ninja_forms_replyto_change()
{
}
function ninja_forms_shortcode($atts)
{
}
function ninja_forms_field_shortcode($atts)
{
}
function ninja_forms_sub_date_shortcode($atts)
{
}
function ninja_forms_pre_process_shortcode($content)
{
}
/**
 * Parse the [nf_sub_seq_num] shortcode
 * 
 * @since 2.8.4
 * @return string $setting
 */
function nf_parse_sub_seq_num_shortcode($setting, $setting_name = '', $id = '')
{
}
/**
 * Shortcode for ninja_forms_all_fields
 *
 * @since 2.8
 * @return string $content
 */
function nf_all_fields_shortcode($atts, $content = '')
{
}
/**
 * Parse our [ninja_forms_field] shortcode, just incase the shortcode parser screwed up.
 *
 * @since 2.8.4
 * @return content
 */
function nf_parse_fields_shortcode($content)
{
}
/**
 * Shortcode for ninja_forms_all_fields
 *
 * @since 2.8
 * @return string sub_limit_number
 */
function ninja_forms_display_sub_limit_number_shortcode($atts)
{
}
/**
 * Shortcode for ninja_forms_display_sub_number
 *
 * @since 2.8
 * @return int nf_get_sub_count()
 * @see nf_get_sub_count()
 */
function ninja_forms_display_sub_number_shortcode($atts)
{
}
/**
 * Shortcode for ninja_forms_display_sub_number_remaining
 *
 * @since 2.8
 * @return int
 * @see nf_get_sub_count()
 */
function ninja_forms_display_sub_number_remaining_shortcode($atts)
{
}
// End Class
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
 * @return object The Highlander Ninja_Forms Instance
 */
function Ninja_Forms()
{
}
function nf_aff_link($link)
{
}
function nfThreeUpgrade_GetSerializedForm()
{
}
function nfThreeUpgrade_GetSerializedFields()
{
}
function ninja_forms_three_submenu()
{
}
function ninja_forms_three_admin_notice()
{
}
function ninja_forms_konami()
{
}
function ninja_forms_three_calc_check()
{
}
function ninja_forms_three_addons_version_check()
{
}
function ninja_forms_three_addons_check()
{
}
function ninja_forms_uninstall()
{
}
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
function ninja_forms_conversion_calculations($form_data)
{
}
function ninja_forms_ajax_migrate_database()
{
}
function ninja_forms_ajax_import_form()
{
}
function ninja_forms_ajax_import_fields()
{
}
function ninja_forms_three_table_exists()
{
}
function ninja_forms_activation_deprecated($network_wide)
{
}