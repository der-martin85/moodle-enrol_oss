moodle-enrol_openlml
====================

enrolment plugin for moodle from 2.x to autoenrol in
conjunction with the open linux Musterlösungplugin enrol_openlml.

This module superseedes the module enrol_lml(Moodle 1.x).
It is supposed to work with the

Linux Musterlösung(paedML) Ba-Wü Germany

and with the

Open Linux Musterlösung(openLML) http://www.linuxmuster.net

servers.

It is crafted for their LDAP structure.

It needs the auth_ldap module working to get the users authenticated
through LDAP and enrols those users to courses depending on the
field $course->idnumber.

Dependencies
------------
This module needs the Auth-Plugin auth_ldap and the enrolment plugin
enrol_cohort to be active to work properly.

Cron-Job
--------
This module is processed by cron on an hourly basis, as is enrol_cohort
equally.

The module auth_ldap is not automatically processed by cron. You can
either set up a job yourself as described in

/auth/ldap/cli/sync_user.php

or you include auth_ldap in the hourly job. For this to work you must
use the patch for auth_ldap:

cd <moodledir>/auth/ldap

patch <../../enrol/openlml/auth_ldap.patch

The patch adds a cron() method to the auth_ldap plugin that is
executed once an hour.

Changelog
---------
2013-09-13
fixed new parameter in enrol_cohort_sync in moodle 2.5.x

2012-10-24
course->idnumber is a unique key, so make
 course->idnumber unique by prepending 'shortname:'.
prefix_teacher_members is now a comma separated list.

2012-10-19
Fixed course sortorder,
removed unnecessary setting,
fixed spelling error authldap,
added upgrade.php from previous version,
fixed install.php,
fixed cron patch for auth_ldap to run once an hour.

2012-10-10
Added code to automatically update city value from global defaultcity
in moodle users database.

Hildesheim, Germany
Frank Schütte,2012(fschuett@gymnasium-himmelsthuer.de)
