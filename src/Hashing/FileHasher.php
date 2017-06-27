<?php

namespace Incenteev\HashedAssetBundle\Hashing;

final class FileHasher implements AssetHasherInterface
{
    private $webRoot;

    public function __construct($webRoot)
    {
        $this->webRoot = $webRoot;
    }
    public function computeHash($path)
    {
        $fullPath = $this->webRoot.'/'.ltrim($path, '/');

        if (!is_file($fullPath)) {
            return '';
        }

        return substr(sha1_file($fullPath), 0, 7);
    }
}
