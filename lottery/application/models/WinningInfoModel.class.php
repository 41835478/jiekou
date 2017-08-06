<?php
/**
 * 文件说明
 *
 * @filename    WinningInfoModel.class.php
 * @author      zouzehua<zzh787272581@163.com>
 * @version     0.1.0
 * @since       0.1.0 11/22/15 oomusou: 新增getLatest3Posts()
 * @time        2016/7/3 18:01
 */

namespace Yboard;


class WinningInfoModel extends CommonModel {
    public function __construct($options = null) {
        $this->_table = 'lty_winning_info';
        $this->_pk    = 'wl_id';
        parent::__construct($options);
    }
}