<?php

namespace Incenteev\HashedAssetBundle\CacheWarmer;

use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

class AssetFinder
{
    private $webRoot;

    public function __construct($webRoot)
    {
        $this->webRoot = $webRoot;
    }

    public function getAssetPaths()
    {
        $finder = (new Finder())->files()
            ->in($this->webRoot);

        /** @var SplFileInfo $file */
        foreach ($finder as $file) {
            yield $file->getRelativePathname();
        }
    }
}
