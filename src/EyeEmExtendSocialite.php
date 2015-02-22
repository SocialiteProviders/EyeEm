<?php
namespace SocialiteProviders\EyeEm;

use SocialiteProviders\Manager\SocialiteWasCalled;

class EyeEmExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('eyeem', __NAMESPACE__.'\Provider');
    }
}
