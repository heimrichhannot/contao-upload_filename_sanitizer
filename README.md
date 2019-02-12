# Upload Filename sanitizer

## This module is abandoned. For Contao 4 use this bundle instead: [contao-filename-sanitizer-bundle](https://github.com/heimrichhannot/contao-filename-sanitizer-bundle)

A simple module for sanitizing filenames (when uploading them in the file manager) and folders (when creating them in the file manager). The sanitizing contains the following steps:

1. German Umlauts are transformed to their non-umlaut representation (ä -> ae, Ä -> Ae, ß -> ss, ...).
2. All characters which are not a-z, A-Z, - (hyphen) or _ (underscore) are replaced by - (hyphen).
3. Multiple consecutive hyphens are replaced reduced to a single hyphen.
4. Leading and trailing hyphens are removed.
