RongCloud Server PHP SDK for  Laravel 5
======

集成融云服务端最新SDK在 Laravel 5 的composer包。


## 安装

```
composer require qiaweicom/rongcloud 

```




## 使用

如果你是使用的laravel 5.5以上版本可以直接利用composer安装即可。

```
composer require qiaweicom/rongcloud 
```

如果使用laravel5.4及以下版本需要你手动设置laravel到服务提供列表中。



找到 `config/app.php` 配置文件中，key为 `providers` 的数组，在数组中添加服务提供者。

```php
    'providers' => [
        // ...
        QiaWeiCom\RongCloud\Providers\RongCloudServiceProvider::class,
    ]
```



运行 `php artisan vendor:publish` 命令，发布配置文件到你的项目中。

修改配置文件 `config/rong_cloud.php` 中的配置好appey,appSecret。

## Examples

### get token

```php
	 public function getToken()
        {
            $rongCouldAppKey = config('rong_cloud.appKey');
            $rongCouldAppSecret = config('rong_cloud.appSecret');
            $RongCloud = new RongCloud($rongCouldAppKey, $rongCouldAppSecret);
    
            echo ("\n***************** user **************\n");
            // 获取 Token 方法
            $result = $RongCloud->user()->getToken('userId1', 'username', 'http://www.rongcloud.cn/images/logo.png');
            echo "getToken    ";
            print_r($result);
            echo "\n";
        }
```

更多使用方法，请参考融云API文档：http://www.rongcloud.cn/docs/server.html 或者参考 安装包里面的 `example.php`.
