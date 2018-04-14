<?php
// classe para verificação se sua aplicação está ativa
namespace CodeBot;


class WebHook
{
    public function check(string $token)
    {
        $hubMode = filter_input(INPUT_GET, 'hub_mode');
        $hubVerifyToken = filter_input(INPUT_GET, 'hub_verify_token');

        if($hubMode === 'subscribe' && $hubVerifyToken === $token) {
            return filter_input(INPUT_GET, 'hub_challenge');
        }
        return false;
    }
    
}