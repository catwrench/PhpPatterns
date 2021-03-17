<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 1:50 下午
 */

namespace App\PhpPatterns\action\Mediator;

use App\Exceptions\BusinessException;

class HouseMediator implements MediatorInterface
{
    //租客列表
    public $tenants;
    //房东列表
    public $landlords;

    //添加租客
    public function addTenant(Tenant $tenant, House $house)
    {
        $id = $tenant->getId();
        if (!isset($this->tenants[$id])) {
            $this->tenants[$id]['tenant'] = $tenant;
            $this->tenants[$id]['house_id'] = $house->getId();
        }
    }

    //添加房东
    public function addLandlord(Landlord $landlord, House $house)
    {
        $id = $landlord->getId();
        if (!isset($this->landlords[$id])) {
            $this->landlords[$id]['landlord'] = $landlord;
            $this->landlords[$id]['house_id'] = $house->getId();
        }
    }

    //租房
    public function rent(Tenant $tenant)
    {
        //获取租客意向房屋
        $tenantInfo = $this->getTenant($tenant->getId());
        //通过访问获取房东
        $landlordInfo = $this->getLandloadByHouse($tenantInfo['house_id']);

        return '通过中介 '.$landlordInfo['landlord']->doSomething($tenant);
    }

    //获取租客
    private function getTenant(string $id)
    {
        if (isset($this->tenants[$id])) {
            return $this->tenants[$id];
        } else {
            throw new BusinessException(1000, ['params' => '租客未注册']);
        }
    }

    //获取房东
    private function getLandlord(string $id)
    {
        if (isset($this->landlords[$id])) {
            return $this->landlords[$id];
        } else {
            throw new BusinessException(1000, ['params' => '房东未注册']);
        }
    }

    //通过房屋查询绑定的房东
    private function getLandloadByHouse(string $houseId)
    {
        foreach ($this->landlords as $id => $landlord) {
            if ($landlord['house_id'] == $houseId) {
                return $landlord;
            }
        }
        throw new BusinessException(1000, ['params' => '未查到绑定房屋的房东']);
    }
}
