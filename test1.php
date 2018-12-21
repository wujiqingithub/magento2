<?php
/**
 * Created by PhpStorm.
 * User: aprilwu
 * Date: 2018/8/25
 * Time: 10:39 PM
 */

/*error_reporting(E_ALL | E_STRICT);  //trust us on this line for now
echo $foo;
echo "Done","\n";*/

/*error_reporting(E_PARSE );  //trust us on this line for now
echo $foo;
echo "Done","\n";*/

class A
{
    public function test()
    {
        echo "Hello PHP — weep for me.","\n";
    }
}


//Before moving on, let’s revisit out SHOW ALL THE ERRORS code snippet and add the error_reporting call.
//error_reporting(E_ALL | E_STRICT);
//ini_set('log_errors','1'); //PHP will write the error message to a log file.
//ini_set('error_log','/tmp/my-custom-php-error-log.log'); //the file to log the error
//ini_set('display_errors', '1'); //We’ve effectively told PHP to ignore all PHP Notice errors (and a slew of others)



/*function ourMagicErrorHandler($error_level, $error_string, $error_file, $error_line, $error_context)
{
    echo "An error happened but we're not going to say which one","\n";
    //return true;
    return false;
}*/

/*function ourMagicErrorHandler($error_level, $error_string, $error_file, $error_line, $error_context)
{
    echo $error_string,"\n";
    echo "on line ", $error_line, "\n";
    echo "in file ", $error_file, "\n";
    exit(1);
    // return false;
}

set_error_handler('ourMagicErrorHandler');

error_reporting(E_ALL | E_STRICT);  //trust us on this line for now
echo A::test();
echo $foo;
echo "Done","\n";*/


// Exception
/*function ourMagicExceptionHandler($e)
{
    echo 'Someone threw an exception (type: <code>' .
        get_class($e) . '</code>) and no one caught it.';
    return true;
}
set_exception_handler('ourMagicExceptionHandler');
throw new Exception("Foo");
echo "Done";*/