<?php
class Kwc_Posts_QuickWrite_Form_Component extends Kwc_Posts_Write_Form_Component
{
    public static function getSettings($param = null)
    {
        $ret = parent::getSettings($param);
        $ret['generators']['child']['component']['success'] = 'Kwc_Posts_QuickWrite_Form_Success_Component';
        return $ret;
    }
}
