<?php

/* layouts/online.html.twig */
class __TwigTemplate_0ad263d363d79ff302bb0f5900ed8bf84d9d5c9f53d6176fddd96f6358bf8e0f extends Twig_Template
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
        echo "<div class=\"avoid_pagebreak\">
  <h4>";
        // line 2
        echo $this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "title", array());
        echo "</h4>

  ";
        // line 4
        echo $this->getAttribute((isset($context["module"]) ? $context["module"] : null), "content", array());
        echo "

  <div class=\"row recognitions\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "courses", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "      <div class=\"large-12 small-12 columns ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "end";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", array())) {
                echo "animated ";
                echo $this->getAttribute($context["item"], "animation", array());
            }
            echo "\">
        <div class=\"row\">
          <div class=\"large-3 medium-3 small-4 columns\">
            <img src=\"";
            // line 11
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/udemy-com.jpg");
            echo "\"alt=\"";
            echo $this->getAttribute($context["item"], "title", array());
            echo "\" class=\"ribbon\">
          </div>
          <div class=\"large-9 medium-9 small-8 columns\">
            <div class=\"recog_data\">
              <div class=\"title\">";
            // line 15
            echo $this->getAttribute($context["item"], "title", array());
            echo "</div>
              <div class=\"link\"><a href=\"";
            // line 16
            echo $this->getAttribute($context["item"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["item"], "link_name", array());
            echo "</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 23,  77 => 16,  73 => 15,  64 => 11,  50 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/*   <h4>{{ module.header.title }}</h4>*/
/* */
/*   {{ module.content }}*/
/* */
/*   <div class="row recognitions">*/
/*     {% for item in module.header.courses %}*/
/*       <div class="large-12 small-12 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}">*/
/*         <div class="row">*/
/*           <div class="large-3 medium-3 small-4 columns">*/
/*             <img src="{{ url('theme://img/udemy-com.jpg') }}"alt="{{ item.title }}" class="ribbon">*/
/*           </div>*/
/*           <div class="large-9 medium-9 small-8 columns">*/
/*             <div class="recog_data">*/
/*               <div class="title">{{ item.title }}</div>*/
/*               <div class="link"><a href="{{ item.link }}">{{ item.link_name }}</a>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
