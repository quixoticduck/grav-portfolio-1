<?php

/* forms/fields/columns/columns.html.twig */
class __TwigTemplate_2a60e19d0fc284ba9472255f49fb21d464c603ae99ecaaa238fc8e58f95f975b extends Twig_Template
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
        echo "<div class=\"form-columns grid pure-g\">
";
        // line 2
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 3
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
            // line 4
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["field"], "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 5
                echo "    ";
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/column/column.html.twig"), "forms/fields/columns/columns.html.twig", 5)->display(array_merge($context, array("cols" => (isset($context["cols"]) ? $context["cols"] : null))));
                // line 6
                echo "    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 8
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "forms/fields/columns/columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  48 => 6,  45 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-columns grid pure-g">*/
/* {% if field.fields %}*/
/*     {% set cols = field.fields|length %}*/
/*     {% for field in field.fields %}*/
/*     {% include ["forms/fields/#{field.type}/#{field.type}.html.twig", 'forms/fields/column/column.html.twig'] with {'cols':cols}  %}*/
/*     {% endfor %}*/
/* {% endif %}*/
/* </div>*/
/* */
/* */
