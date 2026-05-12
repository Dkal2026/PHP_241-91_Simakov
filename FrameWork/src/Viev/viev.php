<?php
    namespace src\Viev;

    class Viev
    {
        private $templates;
        
        public function __construct(string $templates)
        {
            $this->templates = $templates;
        }

        public function renderHtml(string $templatteName, $variable = [], $code = 200)
        {
            http_response_code($code);
            extract($variable);
            include $this->templates.'/'.$templatteName;
        }
    }
?>