<?php

/* layouts/courses.html.twig */
class __TwigTemplate_49c00f0f78ade8e490ffdaa96728cb471fbc2a30b56ffb10348feac7d35b54af extends Twig_Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["module"]) ? $context["module"] : null), "header", array()), "online_courses", array()));
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
            echo $this->env->getExtension('GravTwigExtension')->urlFunc("theme://img/ms-logo.png");
            echo "\" width=\"100\" alt=\"";
            echo $this->getAttribute($context["item"], "title", array());
            echo "\" class=\"ribbon\">
          </div>
          <div class=\"large-9 medium-9 small-8 columns\">
            <div class=\"recog_data\">
              <div class=\"title\">";
            // line 15
            echo $this->getAttribute($context["item"], "title", array());
            echo "</div>
              <div class=\"desc\">";
            // line 16
            echo $this->getAttribute($context["item"], "desc", array());
            echo "</div>
              <div class=\"place\">";
            // line 17
            echo $this->getAttribute($context["item"], "place", array());
            echo "</div>
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
        return "layouts/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  81 => 17,  77 => 16,  73 => 15,  64 => 11,  50 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="avoid_pagebreak">*/
/*   <h4>{{ module.header.title }}</h4>*/
/* */
/*   {{ module.content }}*/
/* */
/*   <div class="row recognitions">*/
/*     {% for item in module.header.online_courses %}*/
/*       <div class="large-12 small-12 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}">*/
/*         <div class="row">*/
/*           <div class="large-3 medium-3 small-4 columns">*/
/*             <img src="{{ url('theme://img/ms-logo.png') }}" width="100" alt="{{ item.title }}" class="ribbon">*/
/*           </div>*/
/*           <div class="large-9 medium-9 small-8 columns">*/
/*             <div class="recog_data">*/
/*               <div class="title">{{ item.title }}</div>*/
/*               <div class="desc">{{ item.desc }}</div>*/
/*               <div class="place">{{ item.place }}</div>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
