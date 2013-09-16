<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Capability definitions for the Twitter search block
 *
 * @package    block
 * @subpackage twitter_search
 * @copyright  2011 onwards Kevin Hughes
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    // New standard capability 'myaddinstance'.
    'block/twitter_search:myaddinstance' => array (
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_SYSTEM,
        'archetypes'    => array (
            'user'          => CAP_ALLOW,
        ),
        'clonepermissionsfrom'  => 'moodle/my:manageblocks',
    ),

    // New standard capability 'addinstance'.
    'block/twitter_search:addinstance' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_COURSE,
        'archetypes'    => array(
            'editingteacher'    => CAP_ALLOW,
            'manager'           => CAP_ALLOW
        ),
        'clonepermissionsfrom'  => 'moodle/site:manageblocks'
    ),

);
