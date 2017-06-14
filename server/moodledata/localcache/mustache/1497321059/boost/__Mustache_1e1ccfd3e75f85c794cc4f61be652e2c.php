<?php

class __Mustache_1e1ccfd3e75f85c794cc4f61be652e2c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';
        $blocksContext = array();

        $buffer .= $indent . '<div class="course-info-container" id="course-info-container-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="hidden-sm-up hidden-tablet hidden-phone">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/progress-chart')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <h4 class="h5"><a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('fullnamedisplay'), $context);
        $buffer .= $value;
        $buffer .= '</a></h4>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="hidden-sm-down hidden-tablet hidden-desktop">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/progress-chart')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '        <h4 class="h5"><a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('fullnamedisplay'), $context);
        $buffer .= $value;
        $buffer .= '</a></h4>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="hidden-xs-down hidden-md-up visible-tablet">
';
        $buffer .= $indent . '        <div class="media">
';
        $buffer .= $indent . '            <div class="media-left">
';
        $buffer .= $indent . '                <div class="media-object">
';
        if ($partial = $this->mustache->loadPartial('block_myoverview/progress-chart')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="media-body">
';
        $buffer .= $indent . '                <h4 class="h5"><a href="';
        $value = $this->resolveValue($context->find('viewurl'), $context);
        $buffer .= call_user_func($this->mustache->getEscape(), $value);
        $buffer .= '">';
        $value = $this->resolveValue($context->find('fullnamedisplay'), $context);
        $buffer .= $value;
        $buffer .= '</a></h4>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <p class="text-muted">
';
        $buffer .= $indent . '        ';
        // 'shortentext' section
        $value = $context->find('shortentext');
        $buffer .= $this->section7f2a40358cde54879488e76c36d95529($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </p>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7f2a40358cde54879488e76c36d95529(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
        $blocksContext = array();
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 140, {{{summary}}}';
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
                
                $buffer .= ' 140, ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= $value;
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
