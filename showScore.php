<?php
/**
 * showScore
 * 
 * Zeigt nur den Benis eines Users an.
 * 
 * @author    RundesBalli <webspam@rundesballi.com>
 * @copyright 2019 RundesBalli
 * @version   2.0
 * @license   MIT-License
 * @see       https://github.com/RundesBalli/pr0gramm-apiCall
 * @see       https://github.com/RundesBalli/pr0gramm-showScore
 */

/**
 * Username dessen Benis angezeigt werden soll.
 * 
 * Beispielwert: RundesBalli
 * 
 * @var string
 */
$username = "";

/**
 * Einbinden des apiCalls
 * https://github.com/RundesBalli/pr0gramm-apiCall
 * 
 * Beispielwert: /pfad/zum/apiCall.php
 * 
 * @param string
 */
require_once("");

/**
 * Holen des Scores und Ausgeben ebendieses.
 */
$response = apiCall("https://pr0gramm.com/api/profile/info/?name=".$username);
header("Content-Type: text/plain");
echo $response['user']['score'];
?>
