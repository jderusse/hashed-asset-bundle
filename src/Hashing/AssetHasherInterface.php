<?php

namespace Incenteev\HashedAssetBundle\Hashing;

interface AssetHasherInterface
{
    public function computeHash($path);
}
