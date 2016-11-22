<?php

$arrDca = &$GLOBALS['TL_DCA']['tl_files'];

/**
 * Files
 */
$arrDca['fields']['name']['save_callback'][] = array('tl_files_upload_filename_sanitizer', 'sanitizeFilename');

class tl_files_upload_filename_sanitizer
{
    public function sanitizeFilename($varValue)
    {
        return \HeimrichHannot\Haste\Util\Files::sanitizeFileName($varValue);
    }
}