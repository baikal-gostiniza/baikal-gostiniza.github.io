<?php

/*
 * Provides file functions.
 */

class Twig_Extensions_Extension_File extends Twig_Extension
{

    /**
     * Returns a list of filters to add to the existing list.
     *
     * @return array An array of filters
     */
    public function getFilters()
    {
        return array(
            'mtime' => new Twig_Filter_Function('Twig_Extensions_Extension_File::mtimeFilter'),
        );
    }


    public static function mtimeFilter($file)
    {
        if (file_exists($file) === false) {
            throw new Exception(sprintf('File %s could not be found.', $file));
        }

        return $formatter->format($date->getTimestamp());
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'intl';
    }
}
