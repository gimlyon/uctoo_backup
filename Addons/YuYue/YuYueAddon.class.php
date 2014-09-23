<?php

namespace Addons\YuYue;
use Common\Controller\Addon;

/**
 * 预约插件
 * @author 淡然
 * QQ 9585216
 */

    class YuYueAddon extends Addon{

        public $info = array(
            'name'=>'YuYue',
            'title'=>'预约',
            'description'=>'预约活动或服务项目。可设置多项目多门店。',
            'status'=>1,
            'author'=>'淡然',
            'version'=>'1.0',
            'has_adminlist'=>1,
            'type'=>1         
        );

	public function install() {
		$install_sql = './Addons/YuYue/install.sql';
		if (file_exists ( $install_sql )) {
			execute_sql_file ( $install_sql );
		}
		return true;
	}
	public function uninstall() {
		$uninstall_sql = './Addons/YuYue/uninstall.sql';
		if (file_exists ( $uninstall_sql )) {
			execute_sql_file ( $uninstall_sql );
		}
		return true;
	}

        //实现的weixin钩子方法
        public function weixin($param){

        }

    }