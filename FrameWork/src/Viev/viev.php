<?php
    namespace src\Viev;

    class Viev
    {
        private $templates;
        private $extraVars = [];
        
        public function __construct(string $templates)
        {
            $this->templates = $templates;
        }
        public function setVar(string $name, $value): void
        {
            $this->extraVars[$name] = $value;
        }
        public function renderHtml(string $templatteName, $variable = [], $code = 200, $title = 'Мой блог')
        {
            http_response_code($code);
            extract($this->extraVars);
            extract($variable);
            ob_start();
            include $this->templates.'/'.$templatteName;
            $buffer = ob_get_contents();
            ob_end_clean();
            echo $buffer;
        }
    }
?>