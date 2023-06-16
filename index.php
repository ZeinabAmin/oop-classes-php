<?php

use Classes\Session;

require_once "classes/Request.php";
require_once "classes/Session.php";
require_once "classes/Database.php";
require_once "classes/models/User.php";
require_once "classes/validation/validationrule.php";
require_once "classes/validation/String.php";
require_once "classes/validation/Numeric.php";
require_once "classes/validation/Required.php";
require_once "classes/validation/validator.php";

$request = new Request;
$session1 = new Session;
$session2 = new Session;
echo "<br>";
// echo $request->get('id');
if ($request->getHas('id')) {
    echo $request->get('id');
}
echo "<br>";
if ($request->postHas('submit')) {
    // echo $request->get('id');
    // echo "shaghal";
    $name = $request->post('name');
    $email = $request->post('email');

    $validator = new Validator;
    $validator->validate("name", $name, ['required', 'str']);
    //$validator->validate("age",33,['required']);
    if ($validator->checkError()) {
        $user = new User();
        $user->insert("name,email", "'$name','$email'");
    } else {
        print_r($validator->getErrors());
    }
}
echo "<br>";
// var_dump($request->get());//array
// print_r(); //dont print null 
// var_dump() //print null
// if($SERVER[request_method]==post){}
// if($request->method()=='post'){}
echo "<br>";
// $session1->set("name","Ali");
// echo "<br>";
// print_r($session1->getAll());
// echo "<br>";
// print_r($session1->getKey("name"));
// echo "<br>";
// print_r($session1->unset("name"));
echo "<br>";
// $session1->set("islogin",true);
// echo "<br>";
// print_r($session1->getkey('islogin'));
print_r($session1->getAll());

//////////////////////////////////////////////////////
$mai = new User();
var_dump($mai->insert("name,email", "'mai','mai@gmail.com'")); //bool(true)
$mai->delete(2);
$mai->update("name='hana',email='hana@gmail.com'", 3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="name" id="">
        <br>
        <input type="text" name="email" id="">
        <br>
        <button type="submit" name="submit">Add</button>
    </form>
</body>

</html>