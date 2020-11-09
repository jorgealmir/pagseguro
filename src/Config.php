<?php

namespace Src;

/**
 * Description of Config
 *
 * @author Jorge
 */
class Config 
{
    const SANBOX = true;
    
    const SANDBOX_EMAIL = "jorgealmirmartins@gmail.com";
    const PRODUCTION_EMAIL = "jorgealmirmartins@gmail.com";
    
    const SANDBOX_TOKEN = "52BF948A7A664B8599D1BFB63FE1871A";
    const PRODUCTION_TOKEN = "xxxxx";
    
    const SANBOX_SESSIONS = "https://ws.sandbox.pagseguro.uol.com.br/v2/sessions";
    const PRODUCTION_SESSIONS = "https://ws.pagseguro.uol.com.br/v2/sessions";
    
    public static function getAuthentication(): array 
    {
        if (Config::SANBOX === true) {
            return [
                "email" => Config::SANDBOX_EMAIL,
                "token" => Config::SANDBOX_TOKEN
            ];
        } else {
            return [
                "email" => Config::PRODUCTION_EMAIL,
                "token" => Config::PRODUCTION_TOKEN
            ];
        }
    }
    
    public static function getUrlSessions(): string 
    {
        return (Config::SANBOX === true) ? Config::SANBOX_SESSIONS : Config::PRODUCTION_SESSIONS;
    }
}
