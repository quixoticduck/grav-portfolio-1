<?php

/* forms/fields/hidden/hidden.html.twig */
class __TwigTemplate_5a99bd1cc329bed843fd64ff59157a1554b3d4284faebb0f8b605c235940ed3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 2
        echo "
<input data-grav-field=\"hidden\" data-grav-disabled=\"false\" type=\"hidden\" class=\"input\" name=\"";
        // line 3
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())));
        echo "\" value=\"";
        echo twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", ");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "forms/fields/hidden/hidden.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set value = (value is null ? field.default : value) %}*/
/* */
/* <input data-grav-field="hidden" data-grav-disabled="false" type="hidden" class="input" name="{{ (scope ~ field.name)|fieldName }}" value="{{ value|join(', ') }}" />*/
/* */
