<?php

namespace ApiBundle\Api\Resource\Me;

use ApiBundle\Api\ApiRequest;
use ApiBundle\Api\Resource\AbstractResource;
use Biz\Card\Service\CardService;
use Biz\Coupon\Service\CouponService;
use ApiBundle\Api\Annotation\ResponseFilter;
use Biz\Coupon\CouponException;
use Biz\Common\CommonException;

class MeCoupon extends AbstractResource
{
    public function search(ApiRequest $request)
    {
        $conditions = array(
            'userId' => $this->getCurrentUser()->getId(),
            'status' => 'receive',
            'cardType' => 'coupon',
        );

        $myCards = $this->getCardService()->searchCards(
            $conditions,
            array('createdTime' => 'DESC'),
            0,
            PHP_INT_MAX
        );

        return array_values($this->getCouponService()->findCouponsByIds(array_column($myCards, 'cardId')));
    }

    /**
     * @ResponseFilter(class="ApiBundle\Api\Resource\Coupon\CouponFilter", mode="public")
     */
    public function add(ApiRequest $request)
    {
        $user = $this->getCurrentUser();
        $token = $request->request->get('token');
        if (empty($token)) {
            throw CommonException::ERROR_PARAMETER_MISSING();
        }

        if (!$this->isPluginInstalled('coupon')) {
            throw CouponException::PLUGIN_NOT_INSTALLED();
        }
        $result = $this->getCouponBatchService()->receiveCoupon($token, $user['id']);

        if ('success' != $result['code']) {
            throw CouponException::RECEIVE_FAILED();
        }

        $coupon = $this->getCouponService()->getCoupon($result['id']);
        if (in_array($coupon['targetType'], array('course', 'classroom')) && !empty($coupon['targetId'])) {
            $type = 'course' == $coupon['targetType'] ? 'courseSet' : $coupon['targetType'];
            $this->getOCUtil()->single($coupon, array('targetId'), $type);
        }

        return $coupon;
    }

    private function getCouponBatchService()
    {
        return $this->service('CouponPlugin:Coupon:CouponBatchService');
    }

    private function getCouponService()
    {
        return $this->service('Coupon:CouponService');
    }

    private function getCardService()
    {
        return $this->service('Card:CardService');
    }
}
