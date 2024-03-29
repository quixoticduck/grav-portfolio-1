<?php

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_4c67adbbd4180b4f2d793288d9293778912b392a08e9ae3fc91fffa446fb7cbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkboxes/checkboxes.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["originalValue"] = (isset($context["value"]) ? $context["value"] : null);
        // line 4
        $context["value"] = (((null === (isset($context["value"]) ? $context["value"] : null))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 5
        if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys") && $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()))) {
            // line 6
            $context["value"] = twig_array_merge($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array()), (isset($context["value"]) ? $context["value"] : null));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-keys=\"";
        // line 11
        echo ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ("true") : ("false"));
        echo "\"
    data-grav-field-name=\"";
        // line 12
        echo $this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()));
        echo "\"
";
    }

    // line 15
    public function block_input($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "options", array()));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            echo "
        ";
            // line 18
            $context["id"] = (((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . "-") . $context["key"]);
            // line 19
            echo "        ";
            $context["name"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ($context["key"]) : ((isset($context["id"]) ? $context["id"] : null)));
            // line 20
            echo "        ";
            $context["val"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ("1") : ($context["key"]));
            // line 21
            echo "        ";
            $context["checked"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "use", array()) == "keys")) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : null), $context["key"], array(), "array")) : (twig_in_filter($context["key"], (isset($context["value"]) ? $context["value"] : null))));
            // line 22
            echo "
        <span class=\"checkboxes\">
            <input type=\"checkbox\"
                   id=\"";
            // line 25
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null));
            echo "\"
                   value=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["val"]) ? $context["val"] : null));
            echo "\"
                   name=\"";
            // line 27
            echo ((($this->env->getExtension('GravTwigExtension')->fieldNameFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array())) . "[") . (isset($context["name"]) ? $context["name"] : null)) . "]");
            echo "\"
                   ";
            // line 28
            if ((isset($context["checked"]) ? $context["checked"] : null)) {
                echo "checked=\"checked\"";
            }
            // line 29
            echo "                   ";
            if ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array())) {
                echo "required=\"required\"";
            }
            // line 30
            echo "            >
            <label style=\"display: inline\" for=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate($context["text"]));
            echo "</label>
        </span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 31,  105 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  84 => 25,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  68 => 18,  65 => 17,  60 => 16,  57 => 15,  51 => 12,  47 => 11,  42 => 10,  39 => 9,  35 => 1,  32 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set originalValue = value %}*/
/* {% set value = (value is null ? field.default : value) %}*/
/* {% if field.use == 'keys' and field.default %}*/
/*     {% set value = field.default|merge(value) %}*/
/* {% endif %}*/
/* */
/* {% block global_attributes %}*/
/*     {{ parent() }}*/
/*     data-grav-keys="{{ field.use == 'keys' ? 'true' : 'false' }}"*/
/*     data-grav-field-name="{{ field.name|fieldName }}"*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     {% for key, text in field.options %}*/
/* */
/*         {% set id = field.id|default(field.name) ~ '-' ~ key %}*/
/*         {% set name = field.use == 'keys' ? key : id %}*/
/*         {% set val = field.use == 'keys' ? '1' : key %}*/
/*         {% set checked = (field.use == 'keys' ? value[key] : key in value) %}*/
/* */
/*         <span class="checkboxes">*/
/*             <input type="checkbox"*/
/*                    id="{{ id|e }}"*/
/*                    value="{{ val|e }}"*/
/*                    name="{{ field.name|fieldName ~ '[' ~ name ~ ']' }}"*/
/*                    {% if checked %}checked="checked"{% endif %}*/
/*                    {% if field.validate.required %}required="required"{% endif %}*/
/*             >*/
/*             <label style="display: inline" for="{{ id|e }}">{{ text|t|e }}</label>*/
/*         </span>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
