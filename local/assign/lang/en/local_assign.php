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
 * Extends the assign class to include custom strings in the recipient email
 *
 * @package    local
 * @subpackage assign
 * @author     Russell England <russell.england@catalyst-eu.net>
 * @copyright  Catalyst IT Ltd 2013 <http://catalyst-eu.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 *
 */

$string['pluginname'] = 'Local assign customisations';
$string['submissionreceipttext'] = 'You have submitted an
assignment submission for \'{$a->assignment}\'

You can see the status of your assignment submission:

    {$a->url}

Student name : {$a->studentname}

Student id : {$a->studentid}

Submission status : {$a->submissionstatus}

Due date : {$a->duedate}

Time remaining : {$a->timeremaining}

Last modified : {$a->lastmodified}

File submissions : filessubmitted';
$string['submissionreceipthtml'] = 'You have submitted an
assignment submission for \'<i>{$a->assignment}</i>\'<br /><br />
You can see the status of your <a href="{$a->url}">assignment submission</a>.<br /><br />

Student name : {$a->studentname}<br />
Student id : {$a->studentid}<br />
Submission status : {$a->submissionstatus}<br />
Due date : {$a->duedate}<br />
Time remaining : {$a->timeremaining}<br />
Last modified : {$a->lastmodified}<br />
File submissions : {$a->filessubmitted}<br />';
