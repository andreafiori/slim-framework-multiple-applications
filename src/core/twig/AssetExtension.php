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
     * @return string
     */
    public function asset($filePath)
    {
        $currentPath = str_replace(
            'src/core/twig',
            '',
            preg_replace('/^' . preg_quote($_SERVER['DOCUMENT_ROOT'], '/') . '/', '', __DIR__)
        );

        if ( !preg_match("/\/$/", $currentPath) ) {
            $currentPath .= '/';
        }

        $currentPath .= 'public/assets/';

        return $currentPath.$filePath;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'asset';
    }
}