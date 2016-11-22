<?php

namespace HeimrichHannot\UploadFilenameSanitizer;

use HeimrichHannot\Haste\Util\Files;

class Hooks
{
    public function sanitizeFilenames($arrFiles)
    {
        foreach ($arrFiles as $strPath)
        {
            $objFile = new \File($strPath);

            if ($objFile->exists())
            {
                $strFilename = str_replace('.' . $objFile->extension, '', $objFile->name);
                $strFolder = str_replace($objFile->name, '', $strPath);

                $objFile->renameTo($strFolder . Files::sanitizeFileName($strFilename) . '.' . $objFile->extension);
                $objFile->close();
            }

        }
    }
}