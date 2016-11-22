<?php

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['postUpload'][] = array('HeimrichHannot\UploadFilenameSanitizer\Hooks', 'sanitizeFilenames');