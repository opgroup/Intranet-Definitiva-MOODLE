<?php

class __Mustache_f04e70b95e56a357b25cbc8455cc5a0f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div id="nav-drawer" data-region="drawer" class="hidden-print moodle-has-zindex ';
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'closed';
        }
        $buffer .= '" aria-hidden="';
        // 'navdraweropen' section
        $value = $context->find('navdraweropen');
        $buffer .= $this->section3d743337d1ee557b470226701b73da47($context, $indent, $value);
        // 'navdraweropen' inverted section
        $value = $context->find('navdraweropen');
        if (empty($value)) {
            
            $buffer .= 'true';
        }
        $buffer .= '" tabindex="-1">
';
        if ($partial = $this->mustache->loadPartial('theme_boost/flat_navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3d743337d1ee557b470226701b73da47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'false';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'false';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
