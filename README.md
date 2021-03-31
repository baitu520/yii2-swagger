<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii2 Swagger Extension</h1>
    <br>
</p>

[![version](https://img.shields.io/packagist/v/light/yii2-swagger.svg?style=flat-square)](https://packagist.org/packages/light/yii2-swagger)
[![Download](https://img.shields.io/packagist/dt/light/yii2-swagger.svg?style=flat-square)](https://packagist.org/packages/light/yii2-swagger)
[![Issues](https://img.shields.io/github/issues/lichunqiang/yii2-swagger.svg?style=flat-square)](https://github.com/lichunqiang/yii2-swagger/issues)

[swagger-php](https://github.com/zircote/swagger-php) integration with yii2.


Integration [swagger-ui](https://github.com/swagger-api/swagger-ui) with [swagger-php](https://github.com/zircote/swagger-php).


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist baitu/yii2-swagger "*" --dev
```

or add

```
"baitu/yii2-swagger": "~1.0.4"
```

to the require section of your `composer.json` file.


Usage
-----

Configure two action as below:

```
public function actions()
{
    return [
        //The document preview addesss:http://api.yourhost.com/site/doc
        'doc' => [
            'class' => 'baitu\swagger\SwaggerAction',
            'restUrl' => \yii\helpers\Url::to(['/site/api'], true),
        ],
        //The resultUrl action.
        'api' => [
            'class' => 'baitu\swagger\SwaggerApiAction',
            //The scan directories, you should use real path there.
            'scanDir' => [
                Yii::getAlias('@api/modules/v1/swagger'),
                Yii::getAlias('@api/modules/v1/controllers'),
                Yii::getAlias('@api/modules/v1/models'),
                Yii::getAlias('@api/models'),
            ],
            //The security key
            'api_key' => 'balbalbal',
        ],
    ];
}
```
