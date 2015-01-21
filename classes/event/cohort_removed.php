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
 * The cohort_removed event.
 *
 * @package    enrol
 * @subpackage openlml
 * @copyright  2015 Frank Schütte
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace enrol_openlml\event;
defined('MOODLE_INTERNAL') || die();

class cohort_removed extends \core\event\base {
    protected function init() {
        $this->data['crud'] = 'd'; // c(reate), r(ead), u(pdate), d(elete)
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'cohort';
    }
 
    public static function get_name() {
        return get_string('eventcohort_removed', 'enrol_openlml');
    }
 
    public function get_description() {
        return "The user with id {$this->userid} removed cohort with id {$this->objectid}.";
    }
}
