<?php
/**
 * Generated stub declarations for Ninja Forms.
 * @see https://ninjaforms.com/
 * @see https://github.com/mralaminahamed/phpstan-ninja-forms-stubs
 */

/**
 * Equation Operating System Classes.
 * 
 * This class was created for the safe parsing of mathematical equations
 * in PHP.  There is a need for a way to successfully parse equations
 * in PHP that do NOT require the use of `eval`.  `eval` at its core
 * opens the system using it to so many security vulnerabilities it is oft
 * suggested /never/ to use it, and for good reason.  This class set will
 * successfully take an equation, parse it, and provide solutions to the
 * developer.  It is a safe way to evaluate expressions without putting
 * the system at risk.
 *
 * 2013/04 UPDATE:
 * - Moved to native class functions for PHP5
 * - Removed deprecated `eregi` calls to `preg_match`
 * - Updated to PHPDoc comment syntax
 * - Added Exception throwing instead of silent exits
 * - Added additional variable prefix of '$', '&' is still allowed as well
 * - Fixed small implied multiplication problem
 *
 * TODO:
 * - Add factorial support. (ie 5! = 120)
 *
 * @author Jon Lawrence <jlawrence11@gmail.com>
 * @copyright Copyright �2005-2013, Jon Lawrence
 * @license http://opensource.org/licenses/LGPL-2.1 LGPL 2.1 License
 * @package EOS
 * @version 2.0
 */
//The following are defines for thrown exceptions
/**
 * No matching Open/Close pair
 */
\define('EQEOS_E_NO_SET', 5500);
/**
 * Division by 0
 */
\define('EQEOS_E_DIV_ZERO', 5501);
/**
 * No Equation
 */
\define('EQEOS_E_NO_EQ', 5502);
/**
 * No variable replacement available
 */
\define('EQEOS_E_NO_VAR', 5503);
\define('DEBUG', \false);