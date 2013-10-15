<?php
    class Templater {
        private $template;
        function __construct($template = null) {
            if (isset($template))
                $this->load($template);
        }

        /* this function loads the template file */
        public function load($template) {
            if (!is_file($template))
                throw new Exception("File not found: $template");
            elseif (!is_readable($template))
                throw new IOException("Could not access file: $template");
            else
                $this->template = $template;
        }

        public function set($var, $content) {
            $this->$var = $content;
        }

        public function publish($output = true) {
            ob_start();
            require $this->template;
            $content = ob_get_clean();
            if ($output)
                print $content;
        }

        public function parse() {
            ob_start();
            require $this->template;
            $content = ob_get_clean();
            return $content;
        }
    }
?>

