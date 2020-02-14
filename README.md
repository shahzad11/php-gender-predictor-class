
# PHP Baby Gender Predictor Class
This class can predict gender of the baby coming into world. The prediction is based on Ancient chinese prediction algorithm and its accuracy rate is around 98%.

This library is straight forward and takes two inputs and predicts if the pregnant woman will have a baby boy or baby girl. Let's checkout, how to use this application.

## Gender Predictor Usage Example
You can [download](https://github.com/shahzad11/php-gender-predictor-class/archive/master.zip) this library. Its shipped with `example.php` which explains everything. However, for your reference, here is the code and how you can use it in your application.

```sh

include_once("gender-prediction-class.php");

$gender=new genderPrediction(31, 'february');
echo $gender->predictGender();

```


## Checkout My Other Libraries on Github

Here are few more PHP libraries programmed by me, have a look if you need it.

| Site Name | URL |
| ------ | ------ |
| Cybersource API | https://github.com/shahzad11/cybersource-api |
| Authorize.net API (SIM) Wrapper Class | https://github.com/shahzad11/Authorize.net-SIM-Wrapper |
| MySql CRUD | https://github.com/shahzad11/Mysql-CRUD |
