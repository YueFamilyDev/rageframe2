<?php
namespace addons\RfSignShoppingDay;

/**
 * Class Addon
 * @package addons\RfSignShoppingDay
 */
class AddonConfig
{
    /**
     * 配置信息
     *
     * @var array
     */
    public $info = [
        'name' => 'RfSignShoppingDay',
        'title' => '购物节',
        'brief_introduction' => '购物节签到抽奖',
        'description' => '购物节签到活动，每日可签到抽奖一次, 随机获取奖品',
        'author' => '简言',
        'version' => '1.0.0',
    ];

    /**
     * 参数配置
     *
     * @var bool
     */
    public $isSetting = true;

    /**
     * 钩子
     *
     * @var bool
     */
    public $isHook = false;

    /**
     * 小程序
     *
     * @var bool
     */
    public $isMiniProgram = false;

    /**
     * 规则管理
     *
     * @var bool
     */
    public $isRule = false;

    /**
     * 类别
     *
     * @var string
     * [
     *      'plug'      => "功能插件",
     *      'business'  => "主要业务",
     *      'customer'  => "客户关系",
     *      'activity'  => "营销及活动",
     *      'services'  => "常用服务及工具",
     *      'biz'       => "行业解决方案",
     *      'h5game'    => "H5游戏",
     *      'other'     => "其他",
     * ]
     */
    public $group = 'activity';

    /**
     * 微信接收消息类别
     *
     * @var array
     * 例如 : ['image','voice','video','shortvideo']
     */
    public $wechatMessage = [];

    /**
     * 后台菜单
     *
     * 例如
     * public $menu = [
     *  [
     *      'title' => '基本表格',
     *      'route' => 'curd-base/index',
     *      'icon' => ''
     *   ]
     * ]
     * @var array
     */
    public $menu = [
        [
            'title' => '奖品管理',
            'route' => 'award/index',
            'icon' => ''
        ],
        [
            'title' => '中奖记录',
            'route' => 'record/index',
            'icon' => ''
        ],
        [
            'title' => '用户管理',
            'route' => 'user/index',
            'icon' => ''
        ],
    ];

    /**
     * 同menu上
     *
     * @var array
     */
    public $cover = [
        [
            'title' => '首页导航',
            'route' => 'index/index',
            'icon' => ''
        ],
    ];

    /**
     * 保存在当前模块的根目录下面
     *
     * 例如 public $install = 'install.php';
     * 安装SQL,只支持php文件
     * @var string
     */
    public $install = 'install.php';
    
    /**
     * 卸载SQL
     *
     * @var string
     */
    public $uninstall = 'uninstall.php';
    
    /**
     * 更新SQL
     *
     * @var string
     */
    public $upgrade = 'upgrade.php';
}
            