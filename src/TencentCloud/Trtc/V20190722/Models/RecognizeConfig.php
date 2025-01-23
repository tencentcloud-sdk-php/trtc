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
 * 语音识别使用的配置
 *
 * @method string getLanguage() 获取
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 详细说明参考：[AI智能识别计费说明](https://cloud.tencent.com/document/product/647/111976)

语音转文本不同套餐版本支持的语言如下：

**基础版**：

- "zh": 中文

- "zh-TW": 中国台湾

- "en": 英语

**标准版：**

- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.

- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).

- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**

- "zh-dialect": 中国方言

- "zh-yue": 中国粤语

- "vi": 越南语

- "ja": 日语

- "ko": 韩语

- "id": 印度尼西亚语

- "th": 泰语

- "pt": 葡萄牙语

- "tr": 土耳其语

- "ar": 阿拉伯语

- "es": 西班牙语

- "hi": 印地语

- "fr": 法语

- "ms": 马来语

- "fil": 菲律宾语

- "de": 德语

- "it": 意大利语

- "ru": 俄语

- "sv": 瑞典语

- "da": 丹麦语

- "no": 挪威语

**注意：**

如果缺少满足您需求的语言，请联系我们技术人员。

示例值：zh
 * @method void setLanguage(string $Language) 设置
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 详细说明参考：[AI智能识别计费说明](https://cloud.tencent.com/document/product/647/111976)

语音转文本不同套餐版本支持的语言如下：

**基础版**：

- "zh": 中文

- "zh-TW": 中国台湾

- "en": 英语

**标准版：**

- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.

- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).

- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**

- "zh-dialect": 中国方言

- "zh-yue": 中国粤语

- "vi": 越南语

- "ja": 日语

- "ko": 韩语

- "id": 印度尼西亚语

- "th": 泰语

- "pt": 葡萄牙语

- "tr": 土耳其语

- "ar": 阿拉伯语

- "es": 西班牙语

- "hi": 印地语

- "fr": 法语

- "ms": 马来语

- "fil": 菲律宾语

- "de": 德语

- "it": 意大利语

- "ru": 俄语

- "sv": 瑞典语

- "da": 丹麦语

- "no": 挪威语

**注意：**

如果缺少满足您需求的语言，请联系我们技术人员。

示例值：zh
 * @method array getAlternativeLanguage() 获取**发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
 * @method void setAlternativeLanguage(array $AlternativeLanguage) 设置**发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
 * @method string getModel() 获取目前已不支持
 * @method void setModel(string $Model) 设置目前已不支持
 * @method string getTranslationLanguage() 获取填写则翻译，目前支持的语言：
中文: zh
英语: en
越南语: vi
日语: ja
韩语: ko
印度尼西亚语: id
泰语: th
葡萄牙语: pt
土耳其语: tr
阿拉伯语: ar
西班牙语: es
印地语: hi
法语: fr
马来语: ms
菲律宾语: fil
德语: de
意大利语: it
俄语: ru
瑞典语: sv
挪威语: no
丹麦语: da
 * @method void setTranslationLanguage(string $TranslationLanguage) 设置填写则翻译，目前支持的语言：
中文: zh
英语: en
越南语: vi
日语: ja
韩语: ko
印度尼西亚语: id
泰语: th
葡萄牙语: pt
土耳其语: tr
阿拉伯语: ar
西班牙语: es
印地语: hi
法语: fr
马来语: ms
菲律宾语: fil
德语: de
意大利语: it
俄语: ru
瑞典语: sv
挪威语: no
丹麦语: da
 */
class RecognizeConfig extends AbstractModel
{
    /**
     * @var string 
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 详细说明参考：[AI智能识别计费说明](https://cloud.tencent.com/document/product/647/111976)

语音转文本不同套餐版本支持的语言如下：

**基础版**：

- "zh": 中文

- "zh-TW": 中国台湾

- "en": 英语

**标准版：**

- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.

- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).

- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**

- "zh-dialect": 中国方言

- "zh-yue": 中国粤语

- "vi": 越南语

- "ja": 日语

- "ko": 韩语

- "id": 印度尼西亚语

- "th": 泰语

- "pt": 葡萄牙语

- "tr": 土耳其语

- "ar": 阿拉伯语

- "es": 西班牙语

- "hi": 印地语

- "fr": 法语

- "ms": 马来语

- "fil": 菲律宾语

- "de": 德语

- "it": 意大利语

- "ru": 俄语

- "sv": 瑞典语

- "da": 丹麦语

- "no": 挪威语

**注意：**

如果缺少满足您需求的语言，请联系我们技术人员。

示例值：zh
     */
    public $Language;

    /**
     * @var array **发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
     */
    public $AlternativeLanguage;

    /**
     * @var string 目前已不支持
     * @deprecated
     */
    public $Model;

    /**
     * @var string 填写则翻译，目前支持的语言：
中文: zh
英语: en
越南语: vi
日语: ja
韩语: ko
印度尼西亚语: id
泰语: th
葡萄牙语: pt
土耳其语: tr
阿拉伯语: ar
西班牙语: es
印地语: hi
法语: fr
马来语: ms
菲律宾语: fil
德语: de
意大利语: it
俄语: ru
瑞典语: sv
挪威语: no
丹麦语: da
     * @deprecated
     */
    public $TranslationLanguage;

    /**
     * @param string $Language 
语音转文字支持识别的语言，默认是"zh" 中文

可通过购买「AI智能识别时长包」解锁或领取包月套餐体验版解锁不同语言. 详细说明参考：[AI智能识别计费说明](https://cloud.tencent.com/document/product/647/111976)

语音转文本不同套餐版本支持的语言如下：

**基础版**：

- "zh": 中文

- "zh-TW": 中国台湾

- "en": 英语

**标准版：**

- "8k_zh_large": 普方大模型引擎. 当前模型同时支持中文等语言的识别，模型参数量极大，语言模型性能增强，针对电话音频中各类场景、各类中文方言的识别准确率极大提升.

- "16k_zh_large": 普方英大模型引擎. 当前模型同时支持中文、英文、多种中文方言等语言的识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

- "16k_multi_lang": 多语种大模型引擎. 当前模型同时支持英语、日语、韩语、阿拉伯语、菲律宾语、法语、印地语、印尼语、马来语、葡萄牙语、西班牙语、泰语、土耳其语、越南语、德语的识别，可实现15个语种的自动识别(句子/段落级别).

- "16k_zh_en": 中英大模型引擎. 当前模型同时支持中文、英语识别，模型参数量极大，语言模型性能增强，针对噪声大、回音大、人声小、人声远等低质量音频的识别准确率极大提升.

**高级版：**

- "zh-dialect": 中国方言

- "zh-yue": 中国粤语

- "vi": 越南语

- "ja": 日语

- "ko": 韩语

- "id": 印度尼西亚语

- "th": 泰语

- "pt": 葡萄牙语

- "tr": 土耳其语

- "ar": 阿拉伯语

- "es": 西班牙语

- "hi": 印地语

- "fr": 法语

- "ms": 马来语

- "fil": 菲律宾语

- "de": 德语

- "it": 意大利语

- "ru": 俄语

- "sv": 瑞典语

- "da": 丹麦语

- "no": 挪威语

**注意：**

如果缺少满足您需求的语言，请联系我们技术人员。

示例值：zh
     * @param array $AlternativeLanguage **发起模糊识别为高级版能力,默认按照高级版收费,仅支持填写基础版和高级版语言.**
注意：不支持填写"zh-dialect"
     * @param string $Model 目前已不支持
     * @param string $TranslationLanguage 填写则翻译，目前支持的语言：
中文: zh
英语: en
越南语: vi
日语: ja
韩语: ko
印度尼西亚语: id
泰语: th
葡萄牙语: pt
土耳其语: tr
阿拉伯语: ar
西班牙语: es
印地语: hi
法语: fr
马来语: ms
菲律宾语: fil
德语: de
意大利语: it
俄语: ru
瑞典语: sv
挪威语: no
丹麦语: da
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("AlternativeLanguage",$param) and $param["AlternativeLanguage"] !== null) {
            $this->AlternativeLanguage = $param["AlternativeLanguage"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("TranslationLanguage",$param) and $param["TranslationLanguage"] !== null) {
            $this->TranslationLanguage = $param["TranslationLanguage"];
        }
    }
}
