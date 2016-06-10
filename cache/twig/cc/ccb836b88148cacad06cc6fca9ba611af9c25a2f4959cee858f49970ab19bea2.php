<?php

/* partials/header.html.twig */
class __TwigTemplate_714b339e06b70085333174e385c0b54eaa1530e191263c0bbbb361b007ad3d30 extends Twig_Template
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
        echo "<div id=\"header\">
    <div class=\"row\">
        <div class=\"large-4 columns\">
            ";
        // line 4
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array())) {
            // line 5
            echo "                <h2>";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
            echo "</h2>
            ";
        }
        // line 6
        echo "   
            ";
        // line 7
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array())) {
            // line 8
            echo "                <h6 class=\"light\">";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "</h6>
            ";
        }
        // line 10
        echo "            <img class=\"profile-pic\" src=\"";
        echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/profile-pic.jpg");
        echo "\">
        </div>
        <div class=\"large-4 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Address:
                </div>
                <div class=\"small-8 columns border-left light2 \">
                    <ul class=\"no-bullet\">
                        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "address", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "                            <li>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                    </ul>
                </div>
            </div>
        </div>
        <div class=\"large-4 columns\">
            <div class=\"row\">
                <div class=\"small-4 columns light2 italic\">
                    Contact:
                </div>
                <div class=\"small-8 columns border-left light2\">
                    <ul class=\"no-bullet\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "contact", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 34
            echo "                            <li>";
            echo $this->getAttribute($context["item"], "line", array());
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 36,  86 => 34,  82 => 33,  69 => 22,  60 => 20,  56 => 19,  43 => 10,  37 => 8,  35 => 7,  32 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="row">*/
/*         <div class="large-4 columns">*/
/*             {% if site.title %}*/
/*                 <h2>{{ site.title }}</h2>*/
/*             {% endif %}   */
/*             {% if site.description %}*/
/*                 <h6 class="light">{{ site.description }}</h6>*/
/*             {% endif %}*/
/*             <img class="profile-pic" src="{{ url('theme://img/profile-pic.jpg') }}">*/
/*         </div>*/
/*         <div class="large-4 columns">*/
/*             <div class="row">*/
/*                 <div class="small-4 columns light2 italic">*/
/*                     Address:*/
/*                 </div>*/
/*                 <div class="small-8 columns border-left light2 ">*/
/*                     <ul class="no-bullet">*/
/*                         {% for item in site.address %}*/
/*                             <li>{{ item.line }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="large-4 columns">*/
/*             <div class="row">*/
/*                 <div class="small-4 columns light2 italic">*/
/*                     Contact:*/
/*                 </div>*/
/*                 <div class="small-8 columns border-left light2">*/
/*                     <ul class="no-bullet">*/
/*                         {% for item in site.contact %}*/
/*                             <li>{{ item.line }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
