<?php

/* error.html.twig */
class __TwigTemplate_272efd5903ccc0873b55518b8cba11cc6a9c73d5fb059c0ce1065c99793050e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default.html.twig", "error.html.twig", 1);
        $this->blocks = array(
            'body_content' => array($this, 'block_body_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_content($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"container sections-wrapper\">
    <div class=\"row\">
      <div class=\"primary col-md-12 col-sm-12 col-xs-12\">
        <section class=\"";
        // line 7
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "section_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "section_class", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array())));
        echo " section\">
          <div class=\"section-inner\">
            <h2 class=\"heading\">Error ";
        // line 9
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "http_response_code", array());
        echo "</h2>
            <div class=\"content\">";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
          </div>
        </section>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  41 => 9,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'default.html.twig' %}*/
/* */
/* {% block body_content %}*/
/*   <div class="container sections-wrapper">*/
/*     <div class="row">*/
/*       <div class="primary col-md-12 col-sm-12 col-xs-12">*/
/*         <section class="{{ page.header.section_class | default(page.slug) }} section">*/
/*           <div class="section-inner">*/
/*             <h2 class="heading">Error {{ page.header.http_response_code }}</h2>*/
/*             <div class="content">{{ page.content }}</div>*/
/*           </div>*/
/*         </section>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
