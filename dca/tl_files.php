<?php

$arrDca = &$GLOBALS['TL_DCA']['tl_files'];

/**
 * Files
 */
$arrDca['fields']['name']['save_callback'][] = array('tl_files_upload_filename_sanitizer', 'sanitizeFilename');


class tl_files_upload_filename_sanitizer
{
    /**
     * @param string $varValue
     * @param DataContainer $dc
     * @return string
     */
    public function sanitizeFilename($varValue, $dc)
    {
        if ($dc->activeRecord->type == 'folder')
        {
            return $varValue;
        }
        return \HeimrichHannot\Haste\Util\Files::sanitizeFileName($varValue);
    }
}