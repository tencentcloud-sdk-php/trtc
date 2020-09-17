<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * MCU混流布局参数
 *
 * @method integer getTemplate() 获取混流布局模板ID，0为悬浮模板(默认);1为九宫格模板;2为屏幕分享模板;3为画中画模板。
 * @method void setTemplate(integer $Template) 设置混流布局模板ID，0为悬浮模板(默认);1为九宫格模板;2为屏幕分享模板;3为画中画模板。
 * @method string getMainVideoUserId() 获取屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的用户ID。
 * @method void setMainVideoUserId(string $MainVideoUserId) 设置屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的用户ID。
 * @method integer getMainVideoStreamType() 获取屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的流类型，0为摄像头，1为屏幕分享。左侧大画面为web用户时此值填0。
 * @method void setMainVideoStreamType(integer $MainVideoStreamType) 设置屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的流类型，0为摄像头，1为屏幕分享。左侧大画面为web用户时此值填0。
 * @method SmallVideoLayoutParams getSmallVideoLayoutParams() 获取画中画模板中有效，代表小画面的布局参数。
 * @method void setSmallVideoLayoutParams(SmallVideoLayoutParams $SmallVideoLayoutParams) 设置画中画模板中有效，代表小画面的布局参数。
 * @method integer getMainVideoRightAlign() 获取屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
 * @method void setMainVideoRightAlign(integer $MainVideoRightAlign) 设置屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
 * @method array getMixVideoUids() 获取悬浮模板、九宫格、屏幕分享模板有效。设置此参数后，输出流混合此参数中包含用户的音视频，以及其他用户的纯音频。最多可设置16个用户。
 * @method void setMixVideoUids(array $MixVideoUids) 设置悬浮模板、九宫格、屏幕分享模板有效。设置此参数后，输出流混合此参数中包含用户的音视频，以及其他用户的纯音频。最多可设置16个用户。
 */
class LayoutParams extends AbstractModel
{
    /**
     * @var integer 混流布局模板ID，0为悬浮模板(默认);1为九宫格模板;2为屏幕分享模板;3为画中画模板。
     */
    public $Template;

    /**
     * @var string 屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的用户ID。
     */
    public $MainVideoUserId;

    /**
     * @var integer 屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的流类型，0为摄像头，1为屏幕分享。左侧大画面为web用户时此值填0。
     */
    public $MainVideoStreamType;

    /**
     * @var SmallVideoLayoutParams 画中画模板中有效，代表小画面的布局参数。
     */
    public $SmallVideoLayoutParams;

    /**
     * @var integer 屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
     */
    public $MainVideoRightAlign;

    /**
     * @var array 悬浮模板、九宫格、屏幕分享模板有效。设置此参数后，输出流混合此参数中包含用户的音视频，以及其他用户的纯音频。最多可设置16个用户。
     */
    public $MixVideoUids;

    /**
     * @param integer $Template 混流布局模板ID，0为悬浮模板(默认);1为九宫格模板;2为屏幕分享模板;3为画中画模板。
     * @param string $MainVideoUserId 屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的用户ID。
     * @param integer $MainVideoStreamType 屏幕分享模板、悬浮模板、画中画模板中有效，代表大画面对应的流类型，0为摄像头，1为屏幕分享。左侧大画面为web用户时此值填0。
     * @param SmallVideoLayoutParams $SmallVideoLayoutParams 画中画模板中有效，代表小画面的布局参数。
     * @param integer $MainVideoRightAlign 屏幕分享模板有效。设置为1时代表大画面居右，小画面居左布局。默认为0。
     * @param array $MixVideoUids 悬浮模板、九宫格、屏幕分享模板有效。设置此参数后，输出流混合此参数中包含用户的音视频，以及其他用户的纯音频。最多可设置16个用户。
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
        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = $param["Template"];
        }

        if (array_key_exists("MainVideoUserId",$param) and $param["MainVideoUserId"] !== null) {
            $this->MainVideoUserId = $param["MainVideoUserId"];
        }

        if (array_key_exists("MainVideoStreamType",$param) and $param["MainVideoStreamType"] !== null) {
            $this->MainVideoStreamType = $param["MainVideoStreamType"];
        }

        if (array_key_exists("SmallVideoLayoutParams",$param) and $param["SmallVideoLayoutParams"] !== null) {
            $this->SmallVideoLayoutParams = new SmallVideoLayoutParams();
            $this->SmallVideoLayoutParams->deserialize($param["SmallVideoLayoutParams"]);
        }

        if (array_key_exists("MainVideoRightAlign",$param) and $param["MainVideoRightAlign"] !== null) {
            $this->MainVideoRightAlign = $param["MainVideoRightAlign"];
        }

        if (array_key_exists("MixVideoUids",$param) and $param["MixVideoUids"] !== null) {
            $this->MixVideoUids = $param["MixVideoUids"];
        }
    }
}
