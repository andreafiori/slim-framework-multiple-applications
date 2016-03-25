<?php

namespace core\twig;

/**
 * Custom Asset Twig Extension
 *
 * @author Andrea Fiori
 */
class AssetExtension extends \Twig_Extension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            'asset' => new \Twig_Function_Method($this, 'asset')
        );
    }

    /**
     * Return the relative path to the asset directory
     *
     * @param string $string
     * @return int
     */
    public function asset($filePath)
    {
        $basePath = str_replace($_SERVER['DOCUMENT_ROOT'], '', getcwd());

        if ( !preg_match("/\/$/", $basePath) ) {
            $basePath .= '/';
        }

        $basePath .= 'assets/';

        return $basePath.$filePath;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'my_bundle';
    }
}