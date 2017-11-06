<?php
/**
 * DokuWiki EpnSmartLink Plugin
 * @date 29.10.2017
 * @author Vidschofelix <vidschofelix@gmx.com>
 */

if(!defined('DOKU_INC')) die();

class action_plugin_epnsmartlink extends DokuWiki_Admin_Plugin
{
    /**
     * registers ajax hook
     * @param Doku_Event_Handler $controller
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('AJAX_CALL_UNKNOWN', 'BEFORE', $this, '_get_conf');
    }

    /**
     * handles conf ajax requests
     * @param Doku_Event $event
     * @param            $param
     */
    public function _get_conf(Doku_Event $event, $param)
    {
        if ($event->data !== 'epnsmartlink_getconf') {
            return;
        }

        $event->stopPropagation();
        $event->preventDefault();

        $epnUrl = $this->getConf('epn-smart-url');
        if (!$this->getConf('epn-smart-enable') || !$this->isValidJsUrl($epnUrl)) {
            return;
        }

        $campaign = $this->getCampaign();

        $data = array(
            'url'      => $epnUrl,
            'campaign' => $campaign
        );

        $json = new JSON();

        header('Content-Type: application/json');
        echo $json->encode($data);
    }

    /**
     * @param string $epnUrl
     * @return bool
     */
    protected function isValidJsUrl($epnUrl)
    {
        if (substr($epnUrl, -3) === '.js') {
            return true;
        }

        return false;
    }

    protected function getCampaign()
    {
        //if support is on, return for 5% dev-campaign
        if ($this->getConf('epn-smart-support') && (rand(1, 100) <= 5 )) {
            return 5338205943;
        }

        return $this->getConf('epn-smart-campaign');
    }
}
