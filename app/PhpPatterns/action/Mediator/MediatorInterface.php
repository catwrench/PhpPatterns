<?php
/**
 * Created by PhpStorm.
 * User: yw
 * Date: 2021/3/17
 * Time: 1:18 下午
 */

namespace App\PhpPatterns\action\Mediator;

/**
 * 房屋中介接口，定义了房东注册，租客注册，租房三个方法
 */
interface MediatorInterface
{
    //添加租客,意向房屋
    public function addTenant(Tenant $tenant, House $house);

    //添加房东，要出租的房屋
    public function addLandlord(Landlord $landlord, House $house);

    //租房
    public function rent(Tenant $tenant);
}
