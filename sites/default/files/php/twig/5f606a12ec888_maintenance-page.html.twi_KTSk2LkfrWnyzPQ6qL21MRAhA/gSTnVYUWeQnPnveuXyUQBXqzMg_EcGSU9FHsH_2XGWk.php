<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/bootstrap/templates/system/maintenance-page.html.twig */
class __TwigTemplate_466369c63cab8c3847612a049055ad3ee77de5f50f986186e5f99e1c538a54bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 12, "block" => 15, "if" => 53];
        $filters = ["escape" => 50, "clean_class" => 20, "t" => 29];
        $functions = ["create_attribute" => 13, "path" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['escape', 'clean_class', 't'],
                ['create_attribute', 'path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 12
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 13
        $context["navbar_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 48
        echo "
";
        // line 50
        echo "<main role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
  <div class=\"row\">
    <section class=\"col-sm-12\">
      ";
        // line 53
        if (($context["title"] ?? null)) {
            // line 54
            echo "        <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h1>
      ";
        }
        // line 56
        echo "
      ";
        // line 58
        echo "      ";
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "    </section>
  </div>
</main>
";
    }

    // line 15
    public function block_navbar($context, array $blocks = [])
    {
        // line 17
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 19
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 20
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 23
        echo "<header ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
  <div class=\"";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"row\">
      <section class=\"col-sm-12\">
        <div class=\"navbar-header\">
          ";
        // line 28
        if (($context["logo"] ?? null)) {
            // line 29
            echo "            <a class=\"logo navbar-btn pull-left\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
            echo "\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" rel=\"home\">
              <img src=\"";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logo"] ?? null)), "html", null, true);
            echo "\" alt=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
            echo "\" />
            </a>
          ";
        }
        // line 33
        echo "
          ";
        // line 34
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 35
            echo "              ";
            if (($context["site_name"] ?? null)) {
                // line 36
                echo "                 <a class=\"name navbar-brand\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
                echo "\" title=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null)), "html", null, true);
                echo "</a>
              ";
            }
            // line 38
            echo "              ";
            if (($context["site_slogan"] ?? null)) {
                // line 39
                echo "                  <p class=\"navbar-text\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null)), "html", null, true);
                echo "</p>
              ";
            }
            // line 41
            echo "          ";
        }
        // line 42
        echo "        </div>
      </section>
    </div>
  </div>
</header>
";
    }

    // line 58
    public function block_content($context, array $blocks = [])
    {
        // line 59
        echo "        <a id=\"main-content\"></a>
        ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/system/maintenance-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 60,  172 => 59,  169 => 58,  160 => 42,  157 => 41,  151 => 39,  148 => 38,  138 => 36,  135 => 35,  133 => 34,  130 => 33,  122 => 30,  115 => 29,  113 => 28,  106 => 24,  101 => 23,  99 => 20,  98 => 19,  97 => 17,  94 => 15,  87 => 62,  84 => 58,  81 => 56,  75 => 54,  73 => 53,  66 => 50,  63 => 48,  61 => 15,  59 => 13,  57 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/bootstrap/templates/system/maintenance-page.html.twig", "C:\\wamp64\\www\\drupal\\themes\\bootstrap\\templates\\system\\maintenance-page.html.twig");
    }
}
