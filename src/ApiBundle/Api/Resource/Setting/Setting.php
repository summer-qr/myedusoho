<?php

namespace ApiBundle\Api\Resource\Setting;

use ApiBundle\Api\Annotation\ApiConf;
use ApiBundle\Api\ApiRequest;
use ApiBundle\Api\Resource\AbstractResource;
use Biz\Common\CommonException;

class Setting extends AbstractResource
{
    /**
     * @ApiConf(isRequiredAuth=false)
     */
    public function get(ApiRequest $request, $type)
    {
        if (!in_array($type, array('site', 'wap', 'register', 'payment', 'vip', 'magic', 'cdn', 'course', 'weixinConfig', 'face', 'miniprogram'))) {
            throw CommonException::ERROR_PARAMETER();
        }

        $method = "get${type}";

        return $this->$method($request);
    }

    public function getSite($request = null)
    {
        $siteSetting = $this->getSettingService()->get('site');

        return array(
            'name' => $siteSetting['name'],
            'url' => $siteSetting['url'],
            'logo' => empty($siteSetting['logo']) ? '' : $siteSetting['url'].'/'.$siteSetting['logo'],
        );
    }

    public function getWap($request = null)
    {
        $wapSetting = $this->getSettingService()->get('wap', array('version' => 0));

        return array(
            'version' => empty($wapSetting['version']) ? array('version' => 0) : $wapSetting['version'],
        );
    }

    public function getRegister($request = null)
    {
        $registerSetting = $this->getSettingService()->get('auth', array('register_mode' => 'closed', 'email_enabled' => 'closed'));
        $registerMode = $registerSetting['register_mode'];
        $isEmailVerifyEnable = isset($registerSetting['email_enabled']) && 'opened' == $registerSetting['email_enabled'];
        $registerSetting = $this->getSettingService()->get('auth');
        $level = empty($registerSetting['register_protective']) ? 'none' : $registerSetting['register_protective'];
        $captchaEnabled = 'none' === $level ? false : true;

        return array(
            'mode' => $registerMode,
            'level' => $level,
            'captchaEnabled' => $captchaEnabled,
            'emailVerifyEnabled' => $isEmailVerifyEnable,
        );
    }

    /**
     * @return array
     * @ApiConf(isRequiredAuth=false)
     */
    public function getPayment($request = null)
    {
        $paymentSetting = $this->getSettingService()->get('payment', array());

        return array(
            'enabled' => empty($paymentSetting['enabled']) ? false : true,
            'alipayEnabled' => empty($paymentSetting['alipay_enabled']) ? false : true,
            'wxpayEnabled' => empty($paymentSetting['wxpay_enabled']) ? false : true,
            'llpayEnabled' => empty($paymentSetting['llpay_enabled']) ? false : true,
        );
    }

    public function getVip($request = null)
    {
        $vipSetting = $this->getSettingService()->get('vip', array());

        if (!empty($vipSetting['buyType'])) {
            switch ($vipSetting['buyType']) {
                case 10:
                    $buyType = 'year_and_month';
                    break;
                case 20:
                    $buyType = 'year';
                    break;
                case 30:
                    $buyType = 'month';
                    break;
                default:
                    $buyType = 'month';
                    break;
            }
        }

        return array(
            'enabled' => empty($vipSetting['enabled']) ? false : true,
            'h5Enabled' => empty($vipSetting['h5Enabled']) ? false : true,
            'buyType' => empty($buyType) ? 'month' : $buyType,
            'upgradeMinDay' => empty($vipSetting['upgrade_min_day']) ? '30' : $vipSetting['upgrade_min_day'],
            'defaultBuyYears' => empty($vipSetting['default_buy_years']) ? '1' : $vipSetting['default_buy_years'],
            'defaultBuyMonths' => empty($vipSetting['default_buy_months']) ? '30' : $vipSetting['default_buy_months'],
        );
    }

    public function getMagic($request = null)
    {
        $magicSetting = $this->getSettingService()->get('magic', array());
        $iosBuyDisable = isset($magicSetting['ios_buy_disable']) ? $magicSetting['ios_buy_disable'] : 0;
        $iosVipClose = isset($magicSetting['ios_vip_close']) ? $magicSetting['ios_vip_close'] : 0;

        return array(
            'iosBuyDisable' => $iosBuyDisable,
            'iosVipClose' => $iosVipClose,
        );
    }

    public function getCdn($request = null)
    {
        $cdn = $this->getSettingService()->get('cdn');

        return array(
            'enabled' => empty($cdn['enabled']) ? false : true,
            'defaultUrl' => empty($cdn['defaultUrl']) ? '' : $cdn['defaultUrl'],
            'userUrl' => empty($cdn['userUrl']) ? '' : $cdn['userUrl'],
            'contentUrl' => empty($cdn['contentUrl']) ? '' : $cdn['contentUrl'],
        );
    }

    public function getCourse($request = null)
    {
        $courseSetting = $this->getSettingService()->get('course', array());

        return array(
            'chapter_name' => empty($courseSetting['chapter_name']) ? '章' : $courseSetting['chapter_name'],
            'part_name' => empty($courseSetting['part_name']) ? '节' : $courseSetting['part_name'],
            'task_name' => empty($courseSetting['task_name']) ? '任务' : $courseSetting['task_name'],
            'show_student_num_enabled' => !isset($courseSetting['show_student_num_enabled']) ? '1' : $courseSetting['show_student_num_enabled'],
        );
    }

    public function getFace($request = null)
    {
        $faceSetting = $this->getSettingService()->get('face', array());
        $featureSetting = $this->getSettingService()->get('feature', array());

        $settings = array(
            'login' => array(
                'enabled' => 0,
                'app_enabled' => 0,
                'pc_enabled' => 0,
                'h5_enabled' => 0,
            ),
        );

        if (isset($featureSetting['face_enabled']) && 1 == $featureSetting['face_enabled']) {
            $settings['login']['enabled'] = isset($faceSetting['login']['enabled']) ? $faceSetting['login']['enabled'] : 0;
            $settings['login']['app_enabled'] = isset($faceSetting['login']['app_enabled']) ? $faceSetting['login']['app_enabled'] : 0;
            $settings['login']['pc_enabled'] = isset($faceSetting['login']['pc_enabled']) ? $faceSetting['login']['pc_enabled'] : 0;
            $settings['login']['h5_enabled'] = isset($faceSetting['login']['h5_enabled']) ? $faceSetting['login']['h5_enabled'] : 0;
        }

        return $settings;
    }

    public function getWeixinConfig($request = null)
    {
        $params = $request->query->all();
        if (empty($params['url'])) {
            return array();
        }
        $result = $this->container->get('web.twig.extension')->weixinConfig($params['url']);
        if (is_array($result) || empty($result)) {
            return $result;
        }

        return json_decode($result, true);
    }

    public function getMiniprogram($request = null)
    {
        $authorizations = $this->getMpService()->getAuthorization();

        return array(
            'current_version' => empty($authorizations['current_version']) ? array('version' => '0.0.0') : $authorizations['current_version'],
            'newest_version' => empty($authorizations['newest_version']) ? array('version' => '0.0.0') : $authorizations['newest_version'],
        );
    }

    /**
     * @return \Biz\System\Service\SettingService
     */
    private function getSettingService()
    {
        return $this->service('System:SettingService');
    }

    protected function getMpService()
    {
        return $this->service('Mp:MpService');
    }
}
