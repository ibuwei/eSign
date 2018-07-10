<?php
/**
 * e签宝快捷签
 * OpenApi.php
 * @since 2018/7/10 上午10:54
 * @author lvwei <lvwei.fire8@qq.com>
 */

namespace ESign;

//定义SDK相关目录，不要随意修改
define("ESIGN_ROOT", __DIR__);
define("ESIGN_CLASS_PATH", ESIGN_ROOT . "/core/");

//调试模式，false：不打印相关日志；true、请设置日志文件目录以及读写权限
define('ESIGN_DEBUGE', true);

//日志文件目录
define("ESIGN_LOG_DIR", realpath(ESIGN_ROOT . '/../'). "/logs/");
if (ESIGN_DEBUGE && !is_dir(ESIGN_LOG_DIR)) mkdir(ESIGN_LOG_DIR, 0777);
//define("ESIGN_LOG_DIR", ESIGN_ROOT . "/logs/");
define('INC_DAT_PATH', ESIGN_ROOT .  "/comm/inc.dat");

class OpenApi
{
    function __construct()
    {
        echo "xxx1111";exit;
        //sdk类文件自动加载
        spl_autoload_register(function ($class) {
            $class_path = str_replace('tech\\', '', $class);
            echo $class_path;exit;
            $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $class_path);
            $class_file = ESIGN_ROOT . DIRECTORY_SEPARATOR . $class_path . '.php';
            //echo $class_file;
            if (is_file($class_file)) {
                require_once($class_file);
            }
        });
    }
}