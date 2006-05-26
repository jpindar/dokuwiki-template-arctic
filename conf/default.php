<?php
/**
 * Default configuration for the arctic-template
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

$conf['sidebar']                  = 'left';                 // enable/disable sidebar
$conf['pagename']                 = 'sidebar';              // the pagename for sidebars inside namespaces
$conf['user_sidebar']             = 1;                      // let users have their own sidebar
$conf['user_sidebar_namespace']   = 'users';                // namespace to look for namespace of logged in users
$conf['group_sidebar']            = 1;                      // let groups have shared sidebars
$conf['group_sidebar_namespace']  = 'groups';               // namespace to look for groups-namespaces
$conf['namespace_sidebar']        = 1;                      // enable/disable namespace-sidebars
$conf['breadcrumbs']              = 'top';                  // were to show trace (top|sidebar|both)
$conf['sepchar']                  = '&nbsp;&middot;&nbsp;'; // string to seperate the topbar-links
$conf['wiki_actionlinks']         = 'links';                // use buttons instead of links
$conf['sidebar_order']            = 'U-G-N-M';              // define the order of the sidebar

//Setup vim: ts=2 sw=2:
?>