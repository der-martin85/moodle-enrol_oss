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
 * The teacher_role_unassigned event.
 *
 * @package    enrol
 * @subpackage openlml
 * @copyright  2015 Frank Schütte
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace enrol_openlml\event;
defined('MOODLE_INTERNAL') || die();

/**
* Class teacher_role_unassigned
*
* @property-read string $other: userid
*/
class teacher_role_unassigned extends \core\event\base {
    protected function init() {
        $this->data['crud'] = 'u'; // c(reate), r(ead), u(pdate), d(elete)
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
        $this->data['objecttable'] = 'course_categories';
    }
 
    public static function get_name() {
        return get_string('eventteacher_role_unassigned', 'enrol_openlml');
    }
 
    public function get_description() {
        return "The user with id {$this->userid} unassigned {$this->other} teacher role in course {$this->objectid}.";
    }
}
