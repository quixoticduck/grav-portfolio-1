<?php

/* default.html.twig */
class __TwigTemplate_86fa4199a554f63669273fc36502a0ce3191e3973b5375473e0019177dece74d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'head_meta' => array($this, 'block_head_meta'),
            'head_title' => array($this, 'block_head_title'),
            'head_css' => array($this, 'block_head_css'),
            'head_css_extra' => array($this, 'block_head_css_extra'),
            'head_js' => array($this, 'block_head_js'),
            'body' => array($this, 'block_body'),
            'body_header' => array($this, 'block_body_header'),
            'body_content' => array($this, 'block_body_content'),
            'body_footer' => array($this, 'block_body_footer'),
            'body_js' => array($this, 'block_body_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 53
        echo "  </head>

  ";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "    ";
        $this->displayBlock('body_header', $context, $blocks);
        // line 78
        echo "
    ";
        // line 79
        $this->displayBlock('body_content', $context, $blocks);
        // line 93
        echo "
    ";
        // line 94
        $this->displayBlock('body_footer', $context, $blocks);
        // line 101
        echo "
    ";
        // line 102
        $this->displayBlock('body_js', $context, $blocks);
        // line 120
        echo "  </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "      ";
        $this->displayBlock('head_meta', $context, $blocks);
        // line 16
        echo "
      ";
        // line 17
        $this->displayBlock('head_title', $context, $blocks);
        // line 20
        echo "
      <link rel=\"canonical\" href=\"";
        // line 21
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "\" />
      <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/assets/images/favicon.ico\" />

      ";
        // line 24
        $this->displayBlock('head_css', $context, $blocks);
        // line 41
        echo "
      ";
        // line 42
        $this->displayBlock('head_css_extra', $context, $blocks);
        // line 43
        echo "
      ";
        // line 44
        $this->displayBlock('head_js', $context, $blocks);
        // line 52
        echo "    ";
    }

    // line 5
    public function block_head_meta($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "metadata", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["meta"]) {
            // line 10
            echo "          <meta ";
            if ($this->getAttribute($context["meta"], "name", array())) {
                echo "name=\"";
                echo $this->getAttribute($context["meta"], "name", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "http_equiv", array())) {
                echo "http-equiv=\"";
                echo $this->getAttribute($context["meta"], "http_equiv", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "charset", array())) {
                echo "charset=\"";
                echo $this->getAttribute($context["meta"], "charset", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "property", array())) {
                echo "property=\"";
                echo $this->getAttribute($context["meta"], "property", array());
                echo "\" ";
            }
            if ($this->getAttribute($context["meta"], "content", array())) {
                echo "content=\"";
                echo $this->getAttribute($context["meta"], "content", array());
                echo "\" ";
            }
            echo "/>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['meta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array());
        echo "\" />
      ";
    }

    // line 17
    public function block_head_title($context, array $blocks = array())
    {
        // line 18
        echo "        <title>";
        if (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array()) && (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array()) != (isset($context["base_url"]) ? $context["base_url"] : null)) || ("error" == $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "template", array()))))) {
            echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
      ";
    }

    // line 24
    public function block_head_css($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/plugins/bootstrap/css/bootstrap.min.css", 1 => 106), "method");
        // line 26
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/plugins/font-awesome/css/font-awesome.css", 1 => 105), "method");
        // line 27
        echo "
        ";
        // line 28
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array())) {
            // line 29
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "http://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css", 1 => 104), "method");
            // line 30
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.css", 1 => 103), "method");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        ";
        // line 33
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/css/styles.css", 1 => 102), "method");
        // line 34
        echo "
        ";
        // line 36
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic", 1 => 101), "method");
        // line 37
        echo "        ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addCss", array(0 => "http://fonts.googleapis.com/css?family=Montserrat:400,700", 1 => 100), "method");
        // line 38
        echo "
        ";
        // line 39
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "css", array(), "method");
        echo "
      ";
    }

    // line 42
    public function block_head_css_extra($context, array $blocks = array())
    {
    }

    // line 44
    public function block_head_js($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        // line 46
        echo "        ";
        // line 47
        echo "        ";
        if (((($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getBrowser", array()) == "msie") && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) >= 8)) && ($this->getAttribute((isset($context["browser"]) ? $context["browser"] : null), "getVersion", array()) <= 9))) {
            // line 48
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "method");
            // line 49
            echo "          ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "addJs", array(0 => "https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"), "method");
            // line 50
            echo "        ";
        }
        // line 51
        echo "      ";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        echo "<body id=\"page-top\" class=\"index\">";
    }

    // line 56
    public function block_body_header($context, array $blocks = array())
    {
        // line 57
        echo "      <header class=\"header\">
        <div class=\"container\">
          ";
        // line 59
        $context["profile_image"] = (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array()), "avatar_url", array())) ? ($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array()), "avatar_url", array())) : ((("http://gravatar.com/avatar/" . $this->env->getExtension('GravTwigExtension')->md5Filter($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "email", array()))) . "?s=180")));
        // line 60
        echo "          <img class=\"profile-image img-responsive pull-left img-circle\" src=\"";
        echo (isset($context["profile_image"]) ? $context["profile_image"] : null);
        echo "\" alt=\"";
        echo (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array()))) : ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array())));
        echo "\" height=\"180\" />

          <div class=\"profile-content pull-left\">
            <h1 class=\"name\">";
        // line 63
        echo (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array(), "any", false, true), "name", array()), $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array()))) : ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author", array()), "name", array())));
        echo "</h1>
            <h2 class=\"desc\">";
        // line 64
        echo (($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array(), "any", false, true), "desc", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "profile", array(), "any", false, true), "desc", array()), $this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array()))) : ($this->getAttribute($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "metadata", array()), "description", array())));
        echo "</h2>

            ";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "networks", array()))) {
            // line 67
            echo "              <ul class=\"social list-inline\">
                ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "networks", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["network"]) {
                // line 69
                echo "                  <li class=\"";
                if (($context["network"] == twig_last($this->env, $this->getAttribute($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "social", array()), "networks", array())))) {
                    echo "last-item";
                }
                echo "\"><a href=\"";
                echo $this->getAttribute($context["network"], "url", array());
                echo "\"><i class=\"fa fa-";
                echo $this->getAttribute($context["network"], "icon", array());
                echo "\"></i>";
                echo $this->getAttribute($context["network"], "title", array());
                echo "</a></li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['network'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "              </ul>
            ";
        }
        // line 73
        echo "          </div>
          <a class=\"btn btn-cta-primary pull-right\" href=\"";
        // line 74
        echo (($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "contact_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "contact_url", array()), (isset($context["base_url"]) ? $context["base_url"] : null))) : ((isset($context["base_url"]) ? $context["base_url"] : null)));
        echo "\"><i class=\"fa fa-paper-plane\"></i> Contact Me</a>
        </div>
      </header>
    ";
    }

    // line 79
    public function block_body_content($context, array $blocks = array())
    {
        // line 80
        echo "      <div class=\"container sections-wrapper\">
        <div class=\"row\">
          <div class=\"primary col-md-12 col-sm-12 col-xs-12\">
            <section class=\"";
        // line 83
        echo (($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "section_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array(), "any", false, true), "section_class", array()), $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array()))) : ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slug", array())));
        echo " section\">
              <div class=\"section-inner\">
                <h2 class=\"heading\">";
        // line 85
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h2>
                <div class=\"content\">";
        // line 86
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "</div>
              </div>
            </section>
          </div>
        </div>
      </div>
    ";
    }

    // line 94
    public function block_body_footer($context, array $blocks = array())
    {
        // line 95
        echo "      <footer class=\"footer\">
        <div class=\"container text-center\">
          <small class=\"copyright\">Copyright &copy; ";
        // line 97
        echo twig_date_format_filter($this->env, "NOW", "Y");
        echo " ";
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo " | Design: <a href=\"http://themes.3rdwavemedia.com\">3rd Wave Media</a> | Grav Theme: <a href=\"https://nunopress.com\">NunoPress LLC</a></small>
        </div>
      </footer>
    ";
    }

    // line 102
    public function block_body_js($context, array $blocks = array())
    {
        // line 103
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/plugins/jquery-1.11.1.min.js", 1 => 106), "method");
        // line 104
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/plugins/jquery-migrate-1.2.1.min.js", 1 => 105), "method");
        // line 105
        echo "      ";
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/plugins/bootstrap/js/bootstrap.min.js", 1 => 104), "method");
        // line 106
        echo "
      ";
        // line 107
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "rss_feed", array())) {
            // line 108
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/plugins/jquery-rss/dist/jquery.rss.min.js", 1 => 103), "method");
            // line 109
            echo "      ";
        }
        // line 110
        echo "
      ";
        // line 111
        if ($this->getAttribute((isset($context["theme_config"]) ? $context["theme_config"] : null), "github", array())) {
            // line 112
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "http://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js", 1 => 102), "method");
            // line 113
            echo "        ";
            $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.js", 1 => 101), "method");
            // line 114
            echo "      ";
        }
        // line 115
        echo "
      ";
        // line 116
        $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "add", array(0 => "theme://assets/js/main.js", 1 => 100), "method");
        // line 117
        echo "
      ";
        // line 118
        echo $this->getAttribute((isset($context["assets"]) ? $context["assets"] : null), "js", array(), "method");
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  413 => 118,  410 => 117,  408 => 116,  405 => 115,  402 => 114,  399 => 113,  396 => 112,  394 => 111,  391 => 110,  388 => 109,  385 => 108,  383 => 107,  380 => 106,  377 => 105,  374 => 104,  371 => 103,  368 => 102,  358 => 97,  354 => 95,  351 => 94,  340 => 86,  336 => 85,  331 => 83,  326 => 80,  323 => 79,  315 => 74,  312 => 73,  308 => 71,  291 => 69,  287 => 68,  284 => 67,  282 => 66,  277 => 64,  273 => 63,  264 => 60,  262 => 59,  258 => 57,  255 => 56,  249 => 55,  245 => 51,  242 => 50,  239 => 49,  236 => 48,  233 => 47,  231 => 46,  229 => 45,  226 => 44,  221 => 42,  215 => 39,  212 => 38,  209 => 37,  206 => 36,  203 => 34,  201 => 33,  198 => 32,  195 => 31,  192 => 30,  189 => 29,  187 => 28,  184 => 27,  181 => 26,  178 => 25,  175 => 24,  164 => 18,  161 => 17,  155 => 14,  151 => 12,  118 => 10,  114 => 9,  109 => 6,  106 => 5,  102 => 52,  100 => 44,  97 => 43,  95 => 42,  92 => 41,  90 => 24,  85 => 22,  81 => 21,  78 => 20,  76 => 17,  73 => 16,  70 => 5,  67 => 4,  61 => 120,  59 => 102,  56 => 101,  54 => 94,  51 => 93,  49 => 79,  46 => 78,  43 => 56,  41 => 55,  37 => 53,  35 => 4,  30 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     {% block head %}*/
/*       {% block head_meta %}*/
/*         <meta charset="utf-8" />*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* */
/*         {% for meta in page.metadata %}*/
/*           <meta {% if meta.name %}name="{{ meta.name }}" {% endif %}{% if meta.http_equiv %}http-equiv="{{ meta.http_equiv }}" {% endif %}{% if meta.charset %}charset="{{ meta.charset }}" {% endif %}{% if meta.property %}property="{{ meta.property }}" {% endif %}{% if meta.content %}content="{{ meta.content }}" {% endif %}/>*/
/*         {% endfor %}*/
/* */
/*         <meta name="viewport" content="width=device-width, initial-scale=1" />*/
/*         <meta name="description" content="{{ site.metadata.description }}" />*/
/*       {% endblock %}*/
/* */
/*       {% block head_title %}*/
/*         <title>{% if page.header.title and (page.url != base_url or 'error' == page.template) %}{{ page.header.title }} | {% endif %}{{ site.title }}</title>*/
/*       {% endblock %}*/
/* */
/*       <link rel="canonical" href="{{ page.url(true) }}" />*/
/*       <link rel="shortcut icon" href="{{ theme_url }}/assets/images/favicon.ico" />*/
/* */
/*       {% block head_css %}*/
/*         {% do assets.add('theme://assets/plugins/bootstrap/css/bootstrap.min.css', 106) %}*/
/*         {% do assets.add('theme://assets/plugins/font-awesome/css/font-awesome.css', 105) %}*/
/* */
/*         {% if theme_config.github %}*/
/*           {% do assets.add('http://cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css', 104) %}*/
/*           {% do assets.add('http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.css', 103) %}*/
/*         {% endif %}*/
/* */
/*         {% do assets.add('theme://assets/css/styles.css', 102) %}*/
/* */
/*         {# Webfonts #}*/
/*         {% do assets.addCss('http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic', 101) %}*/
/*         {% do assets.addCss('http://fonts.googleapis.com/css?family=Montserrat:400,700', 100) %}*/
/* */
/*         {{ assets.css() }}*/
/*       {% endblock %}*/
/* */
/*       {% block head_css_extra %}{% endblock %}*/
/* */
/*       {% block head_js %}*/
/*         {# HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries #}*/
/*         {# WARNING: Respond.js doesn't work if you view the page via file:// #}*/
/*         {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}*/
/*           {% do assets.addJs('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') %}*/
/*           {% do assets.addJs('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') %}*/
/*         {% endif %}*/
/*       {% endblock %}*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   {% block body %}<body id="page-top" class="index">{% endblock %}*/
/*     {% block body_header %}*/
/*       <header class="header">*/
/*         <div class="container">*/
/*           {% set profile_image = (theme_config.profile.avatar_url) ?: 'http://gravatar.com/avatar/' ~ site.author.email | md5 ~ '?s=180' %}*/
/*           <img class="profile-image img-responsive pull-left img-circle" src="{{ profile_image }}" alt="{{ theme_config.profile.name | default(site.author.name) }}" height="180" />*/
/* */
/*           <div class="profile-content pull-left">*/
/*             <h1 class="name">{{ theme_config.profile.name | default(site.author.name) }}</h1>*/
/*             <h2 class="desc">{{ theme_config.profile.desc | default(site.metadata.description) }}</h2>*/
/* */
/*             {% if theme_config.social.networks | length %}*/
/*               <ul class="social list-inline">*/
/*                 {% for network in theme_config.social.networks %}*/
/*                   <li class="{% if network == theme_config.social.networks | last %}last-item{% endif %}"><a href="{{ network.url }}"><i class="fa fa-{{ network.icon }}"></i>{{ network.title }}</a></li>*/
/*                 {% endfor %}*/
/*               </ul>*/
/*             {% endif %}*/
/*           </div>*/
/*           <a class="btn btn-cta-primary pull-right" href="{{ theme_config.contact_url | default(base_url) }}"><i class="fa fa-paper-plane"></i> Contact Me</a>*/
/*         </div>*/
/*       </header>*/
/*     {% endblock %}*/
/* */
/*     {% block body_content %}*/
/*       <div class="container sections-wrapper">*/
/*         <div class="row">*/
/*           <div class="primary col-md-12 col-sm-12 col-xs-12">*/
/*             <section class="{{ page.header.section_class | default(page.slug) }} section">*/
/*               <div class="section-inner">*/
/*                 <h2 class="heading">{{ page.title }}</h2>*/
/*                 <div class="content">{{ page.content }}</div>*/
/*               </div>*/
/*             </section>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endblock %}*/
/* */
/*     {% block body_footer %}*/
/*       <footer class="footer">*/
/*         <div class="container text-center">*/
/*           <small class="copyright">Copyright &copy; {{ 'NOW' | date('Y') }} {{ site.title }} | Design: <a href="http://themes.3rdwavemedia.com">3rd Wave Media</a> | Grav Theme: <a href="https://nunopress.com">NunoPress LLC</a></small>*/
/*         </div>*/
/*       </footer>*/
/*     {% endblock %}*/
/* */
/*     {% block body_js %}*/
/*       {% do assets.add('theme://assets/plugins/jquery-1.11.1.min.js', 106) %}*/
/*       {% do assets.add('theme://assets/plugins/jquery-migrate-1.2.1.min.js', 105) %}*/
/*       {% do assets.add('theme://assets/plugins/bootstrap/js/bootstrap.min.js', 104) %}*/
/* */
/*       {% if theme_config.rss_feed %}*/
/*         {% do assets.add('theme://assets/plugins/jquery-rss/dist/jquery.rss.min.js', 103) %}*/
/*       {% endif %}*/
/* */
/*       {% if theme_config.github %}*/
/*         {% do assets.add('http://cdnjs.cloudflare.com/ajax/libs/mustache.js/0.7.2/mustache.min.js', 102) %}*/
/*         {% do assets.add('http://caseyscarborough.github.io/github-activity/github-activity-0.1.0.min.js', 101) %}*/
/*       {% endif %}*/
/* */
/*       {% do assets.add('theme://assets/js/main.js', 100) %}*/
/* */
/*       {{ assets.js() }}*/
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
