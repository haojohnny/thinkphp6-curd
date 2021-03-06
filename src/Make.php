<?php
// +--
// | https://github.com/haojohnny
// | @Author: Johnny
// | Date: 2019-07-05 10:00
// | Remark:
// |

namespace Haojohnny\Tp6Curd;

use think\console\command\Make as MakeAbstract;
use think\console\Output;
use think\console\Input;

class Make extends MakeAbstract
{
    protected $type;

    /**
     * 获取模板
     * @return string
     */
    protected function getStub()
    {
        $path = __DIR__.DIRECTORY_SEPARATOR.'Stubs'.DIRECTORY_SEPARATOR.$this->type.'.stub';
        return file_get_contents($path);
    }

    /**
     * 获取类命名空间
     * @param string $appNamespace
     * @return string
     */
    protected function getNamespace($appNamespace): string
    {
        return parent::getNamespace($appNamespace).'\\'.$this->type;
    }

    /**
     * @param Input $input
     * @param Output $output
     */
    public function executeBuild(Input $input, Output $output)
    {
        parent::execute($input, $output);
    }
}