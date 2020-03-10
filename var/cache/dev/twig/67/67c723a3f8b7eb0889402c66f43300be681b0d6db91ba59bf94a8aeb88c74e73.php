<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main/ficheSerie.html.twig */
class __TwigTemplate_2c471413083151b8e5ba89568226c7b5854b976b98b994a8c7d3936e19b3c0e6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/ficheSerie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/ficheSerie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/ficheSerie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Page Series";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class='container'>
        <div class='jumbotron'>
            <div class=\"card text-center\"> 
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 10, $this->source); })()), "nom", [], "any", false, false, false, 10), "html", null, true);
        echo "</h5>
                    <p class=\"card-text\">Debut : ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 11, $this->source); })()), "anneeDebut", [], "any", false, false, false, 11), "Y"), "html", null, true);
        echo "</p>
                        ";
        // line 12
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 12, $this->source); })()), "anneeFin", [], "any", false, false, false, 12), null)) {
            // line 13
            echo "                            <p>Série en cours<p>
                        ";
        } else {
            // line 15
            echo "                            <p>Fin : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 15, $this->source); })()), "anneeFin", [], "any", false, false, false, 15), "Y"), "html", null, true);
            echo "</p>
                        ";
        }
        // line 17
        echo "                        <p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 17, $this->source); })()), "saisons", [], "any", false, false, false, 17), "html", null, true);
        echo " saisons </p>
                </div>            
            </div>
        </div>

        <div>
            <h2>Modifier la série ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), "html", null, true);
        echo "</h2>
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateUser"]) || array_key_exists("updateUser", $context) ? $context["updateUser"] : (function () { throw new RuntimeError('Variable "updateUser" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["updateUser"]) || array_key_exists("updateUser", $context) ? $context["updateUser"] : (function () { throw new RuntimeError('Variable "updateUser" does not exist.', 25, $this->source); })()), 'rest');
        echo "
            <select name=\"categorie\">
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 28
            echo "                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </select>
            <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("series");
        echo "\"><button type=\"submit\" class=\"btn btn-primary\">Modifier</button></a>
            ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateUser"]) || array_key_exists("updateUser", $context) ? $context["updateUser"] : (function () { throw new RuntimeError('Variable "updateUser" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33)]), "html", null, true);
        echo "\"><button class=\"btn btn-danger\">Supprimer</button></a>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/ficheSerie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 33,  159 => 32,  155 => 31,  152 => 30,  141 => 28,  137 => 27,  132 => 25,  128 => 24,  124 => 23,  114 => 17,  108 => 15,  104 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Series{% endblock %}

{% block body %}
    <div class='container'>
        <div class='jumbotron'>
            <div class=\"card text-center\"> 
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{serie.nom}}</h5>
                    <p class=\"card-text\">Debut : {{serie.anneeDebut | date('Y')}}</p>
                        {% if serie.anneeFin == NULL %}
                            <p>Série en cours<p>
                        {% else %}
                            <p>Fin : {{serie.anneeFin | date('Y')}}</p>
                        {% endif %}
                        <p>{{serie.saisons}} saisons </p>
                </div>            
            </div>
        </div>

        <div>
            <h2>Modifier la série {{serie.nom}}</h2>
            {{form_start(updateUser)}}
            {{form_rest(updateUser)}}
            <select name=\"categorie\">
                    {% for categorie in categories %}
                    <option value='{{categorie.id}}'>{{categorie.nom}}</option>
                    {% endfor %}
            </select>
            <a href=\"{{path('series')}}\"><button type=\"submit\" class=\"btn btn-primary\">Modifier</button></a>
            {{form_end(updateUser)}}
            <a href=\"{{path(\"remove\", {id: serie.id})}}\"><button class=\"btn btn-danger\">Supprimer</button></a>
        </div>
    </div>
{% endblock %}
", "main/ficheSerie.html.twig", "/Applications/MAMP/htdocs/A2/SYMFONY/symfonySeries/templates/main/ficheSerie.html.twig");
    }
}
