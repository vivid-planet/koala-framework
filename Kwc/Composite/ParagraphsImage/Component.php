<?php
class Kwc_Composite_ParagraphsImage_Component extends Kwc_Abstract_Composite_Component
{
    public static function getSettings($param = null)
    {
        $ret = array_merge(parent::getSettings($param), array(
            'componentName'     => 'ParagraphsImage',
            'componentIcon'     => new Kwf_Asset('page_white_picture')
        ));
        $ret['assetsAdmin']['dep'][] = 'KwfTabPanel';
        $ret['generators']['child']['component']['paragraphs'] = 'Kwc_Paragraphs_Component';
        $ret['generators']['child']['component']['image'] = 'Kwc_Basic_Image_Enlarge_Component';
        return $ret;
    }

    public function getTemplateVars(Kwf_Component_Renderer_Abstract $renderer)
    {
        $return = parent::getTemplateVars($renderer);
        return $return;
    }
}
