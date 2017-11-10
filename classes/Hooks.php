<?php

namespace HeimrichHannot\UploadFilenameSanitizer;

use Contao\File;
use HeimrichHannot\Haste\Util\Files;
use HeimrichHannot\Haste\Util\StringUtil;

class Hooks
{
    /**
     * Rename uploaded Files
     *
     * Called throught contao postUpload Hook
     *
     * @param array $arrFiles Array containing files paths
     */
    public function sanitizeFilenames(&$arrFiles)
    {
        foreach ($arrFiles as $key => $strPath)
        {
            $objFile = new File($strPath);

            if ($objFile->exists())
            {
                $strFilename = str_replace('.' . $objFile->extension, '', $objFile->name);
                $strFolder   = str_replace($objFile->name, '', $strPath);
                $strFilename = StringUtil::convertGermanSpecialLetters($strFilename);
                $path        = $strFolder . Files::sanitizeFileName($strFilename) . '.' . $objFile->extension;
                $objFile->renameTo($path);
                if (version_compare(VERSION, '4.0', "<"))
                {
                    $objFile->close();
                }
            }

        }
    }
}