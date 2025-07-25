<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RemoveUser请求参数结构体
 *
 * @method integer getSdkAppId() 获取TRTC的SDKAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置TRTC的SDKAppId。
 * @method integer getRoomId() 获取房间号。
 * @method void setRoomId(integer $RoomId) 设置房间号。
 * @method array getUserIds() 获取要移出的用户列表，最多10个。
 * @method void setUserIds(array $UserIds) 设置要移出的用户列表，最多10个。
 */
class RemoveUserRequest extends AbstractModel
{
    /**
     * @var integer TRTC的SDKAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 房间号。
     */
    public $RoomId;

    /**
     * @var array 要移出的用户列表，最多10个。
     */
    public $UserIds;

    /**
     * @param integer $SdkAppId TRTC的SDKAppId。
     * @param integer $RoomId 房间号。
     * @param array $UserIds 要移出的用户列表，最多10个。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserIds",$param) and $param["UserIds"] !== null) {
            $this->UserIds = $param["UserIds"];
        }
    }
}
