<?php
//============================================================+
// File name   : tce_httpbasic.php
// Begin       : 2010-09-10
// Last Update : 2010-09-16
//
// Description : Configuration file for HTTP Basic Auth
//
// Author: Matthias Wolf, Nicola Asuni
//
// (c) Copyright:
//               Matthias Wolf
//               Freiwillige Feuerwehr München
//               m.wolf@ffw-muenchen.de
//
//               Nicola Asuni
//               Tecnick.com S.r.l.
//               Via della Pace, 11
//               09044 Quartucciu (CA)
//               ITALY
//               www.tecnick.com
//               info@tecnick.com
//
// License:
//    Copyright (C) 2010   Matthias Wolf - Freiwillige Feuerwehr München, Nicola Asuni - Tecnick.com S.r.l.
//
//    This program is free software: you can redistribute it and/or modify
//    it under the terms of the GNU Affero General Public License as
//    published by the Free Software Foundation, either version 3 of the
//    License, or (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU Affero General Public License for more details.
//
//    You should have received a copy of the GNU Affero General Public License
//    along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
//    Additionally, you can't remove, move or hide the original TCExam logo,
//    copyrights statements and links to Tecnick.com and TCExam websites.
//
//    See LICENSE.TXT file for more information.
//============================================================+

/**
 * Configuration file for HTTP Basic Authentication
 * HTTP Basic Authentication is a procedure handled by the WebServer.
 * The server grants access to the requested resource only if username and password can be verified against a file or a plugin.
 * If support for HTTP Basic Auth is enabled, TCExam trusts this mechanism and replicates any authenticated user into the tcexam database.
 * WARNING: On logout, TCExam automatically disable the HTTP Basic Authentication. To restore the HTTP Basic Authentication the user must clear the cache of the browser.
 * @package com.tecnick.tcexam.shared.cfg
 * @author Matthias Wolf, Nicola Asuni
 * @copyright Copyright © 2010, Matthias Wolf - Freiwillige Feuerwehr München - m.wolf@ffw-muenchen.de, Nicola Asuni - Tecnick.com S.r.l. - ITALY - www.tecnick.com - info@tecnick.com
 * @license http://www.fsf.org/licensing/licenses/agpl-3.0.html GNU Affero General Public License
 * @since 2010-09-16
 */

/**
 * If true trust HTTP Basic Auth
 */
define ('K_HTTPBASIC_ENABLED', false);

/**
 * Default user level
 */
define ('K_HTTPBASIC_USER_LEVEL', 1);

/**
 * Default user group ID
 * This is the TCExam group id to which the accounts belong.
 */
define ('K_HTTPBASIC_USER_GROUP_ID', 1);

//============================================================+
// END OF FILE
//============================================================+