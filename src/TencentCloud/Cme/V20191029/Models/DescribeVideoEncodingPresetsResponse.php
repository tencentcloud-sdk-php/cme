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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoEncodingPresets返回参数结构体
 *
 * @method integer getTotalCount() 获取符合条件的编码配置总个数。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的编码配置总个数。
 * @method array getVideoEncodingPresetSet() 获取视频编码配置信息。
 * @method void setVideoEncodingPresetSet(array $VideoEncodingPresetSet) 设置视频编码配置信息。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVideoEncodingPresetsResponse extends AbstractModel
{
    /**
     * @var integer 符合条件的编码配置总个数。
     */
    public $TotalCount;

    /**
     * @var array 视频编码配置信息。
     */
    public $VideoEncodingPresetSet;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 符合条件的编码配置总个数。
     * @param array $VideoEncodingPresetSet 视频编码配置信息。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("VideoEncodingPresetSet",$param) and $param["VideoEncodingPresetSet"] !== null) {
            $this->VideoEncodingPresetSet = [];
            foreach ($param["VideoEncodingPresetSet"] as $key => $value){
                $obj = new VideoEncodingPreset();
                $obj->deserialize($value);
                array_push($this->VideoEncodingPresetSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
