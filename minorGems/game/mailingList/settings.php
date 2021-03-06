<?php

// Basic settings
// You must set these for the server to work

$databaseServer = "localhost";
$databaseUsername = "testUser";
$databasePassword = "testPassword";
$databaseName = "test";

// The URL of to the server.php script.
$fullServerURL = "http://localhost/jcr13/mailingList/server.php";


// The URL of the main, public-face website
$mainSiteURL = "http://hcsoftware.sf.net/jason-rohrer/";







// End Basic settings



// Customization settings

// Adjust these to change the way the server  works.


// Prefix to use in table names (in case more than one application is using
// the same database).  Two tables are created:  "games" and "columns".
//
// If $tableNamePrefix is "test_" then the tables will be named
// "test_games" and "test_columns".  Thus, more than one server
// installation can use the same database (or the server can share a database
// with another application that uses similar table names).
$tableNamePrefix = "mailingList_";


// mixed into hash for computing confirmation codes
// should be changed to something secret to prevent forged subscriptions
$confirmationCodeSalt = "paprika";



$enableLog = 1;

// for web-based admin access
$accessPassword = "secret";



// path to bulkEmailer api
$bulkEmailerPath = "../bulkEmailer/bulkEmailerAPI.php";



// header and footers for various pages
$header = "include( \"header.php\" );";
$footer = "include( \"footer.php\" );";



// parameters for emails that are sent out
$listName = "My Release List";


$subscriptionMessage = "A confirmation message will be sent to your email address in a few hours.";

$confirmationMessage = "Your subscription has been confirmed";

$removalMessage = "You have been removed from the mailing list.";




// number of records shown per page in the browse view
$recordsPerPage = 100;





?>