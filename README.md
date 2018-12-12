# Laravel GeoHash

Laravel GeoHash LBS地理位置距离计算方法geohash，将一个经纬度信息，转换成一个可以排序，可以比较的字符串编码，用于高效搜索

### 安装方法 ###

```php
composer require youthage/laravel-geohash
```

### 配置方法 ###

app.php 配置如下：

providers中添加

```php
Geohash\GeoHashProvider::class,
```

aliases中添加

```php
'GeoHash' => \Geohash\GeoHashFacade::class,
```

### 使用方法 ###


```php
<?php

namespace App\Http\Controllers;

use GeoHash;
class IndexController extends Controller
{
    public function index()
    {
        // 参数：纬度，经度，长度（可选，默认为最长）
        $geo = GeoHash::encode("69.3252", "136.2345", 9);
        echo $geo;
        
        list($lat, $lng) = GeoHash::decode($geo);
        echo $lat, ', ', $lng;
    }
}

```

