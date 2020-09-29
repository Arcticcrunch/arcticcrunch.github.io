<?php

    /*
            <div class = "CostCalculatorServiceText">
            Услуга 5 (150 грн/М)
        </div>
        <div>
            <input type="range" min="1" max="100" value="1" class="CostSlider" id="costSlider5">
        </div>
    */

    // Автоматическая генерация слайдеров
    function GenerateSliders()
    {
        $class = "CostCalculatorServiceText";
        $costSliderClass = "CostSlider";
        $serviceName = "Услуга X";
        $slidersCount = 6;

        $result = "";

        for ($i=0; $i < $slidersCount; $i++)
        { 
            $result .= "<div class=\"". $class. "\">". $serviceName. "</div>";
            $result .= "<div><input type=\"range\" min=\"1\" max=\"100\" value=\"1\" class=\"". $costSliderClass. "\"></div>";
        }

        return $result;
    }

    // Определение мобильного устройства
    function DeviceType() { 
        $mobile_agent_array = array('windows nt', 'ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
        $agent = strtolower($_SERVER['HTTP_USER_AGENT']);    
        foreach ($mobile_agent_array as $value) {    
            if (strpos($agent, $value) !== false) return $value;   
        }       
        return "UNKNOWN_DEVICE"; 
    }
?>