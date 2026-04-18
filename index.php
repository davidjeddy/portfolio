<?php
/**
 * Load config and base index.
 */
try {
	require_once "./config.php";
	require_once SITEROOT."/index.php";
} catch (PDOException $e) {
    print $e->getMessage()." Config Error 1";
    exit;
}