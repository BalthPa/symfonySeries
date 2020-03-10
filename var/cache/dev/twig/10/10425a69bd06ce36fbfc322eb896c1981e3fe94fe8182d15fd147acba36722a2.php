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

/* main/series.html.twig */
class __TwigTemplate_7acda0ea829580fad059bb86681162712694eb70b3559ac47117432d0fbc6f7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/series.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/series.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/series.html.twig", 1);
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
            <h2>Liste séries<h2>
            ";
        // line 9
        if (0 === twig_compare(twig_length_filter($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 9, $this->source); })())), 0)) {
            // line 10
            echo "                <h4>Il n'y a aucune série enregistré</h4>
            ";
        } else {
            // line 12
            echo "                <h4>Il y a ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 12, $this->source); })())), "html", null, true);
            echo " séries enregistré</h4>
            ";
        }
        // line 14
        echo "
            <ul class=\"list-group\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["series"]) || array_key_exists("series", $context) ? $context["series"] : (function () { throw new RuntimeError('Variable "series" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 17
            echo "                    <div class=\"card text-center\"> 
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Debut : ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "anneeDebut", [], "any", false, false, false, 20), "Y"), "html", null, true);
            echo "</p>

                            ";
            // line 22
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["serie"], "anneeFin", [], "any", false, false, false, 22), null)) {
                // line 23
                echo "                                <p>Série en cours<p>
                            ";
            } else {
                // line 25
                echo "                                <p>Fin : ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "anneeFin", [], "any", false, false, false, 25), "Y"), "html", null, true);
                echo "</p>
                            ";
            }
            // line 27
            echo "
                            <p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "saisons", [], "any", false, false, false, 28), "html", null, true);
            echo " saisons </p>
                            

                            <a href=\"serie/fiche/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"btn btn-primary\">Fiche Série</a>
                        </div>            
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </ul>
        </div>


        <div class='jumbotron'>
            <h2>Ajouter une série</h2>
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addSeries"]) || array_key_exists("addSeries", $context) ? $context["addSeries"] : (function () { throw new RuntimeError('Variable "addSeries" does not exist.', 41, $this->source); })()), 'form_start');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["addSeries"]) || array_key_exists("addSeries", $context) ? $context["addSeries"] : (function () { throw new RuntimeError('Variable "addSeries" does not exist.', 42, $this->source); })()), 'rest');
        echo "
                <select name=\"categorie\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 45
            echo "                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 45), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter tâche</button>
            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["addSeries"]) || array_key_exists("addSeries", $context) ? $context["addSeries"] : (function () { throw new RuntimeError('Variable "addSeries" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/series.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 49,  189 => 47,  178 => 45,  174 => 44,  169 => 42,  165 => 41,  157 => 35,  147 => 31,  141 => 28,  138 => 27,  132 => 25,  128 => 23,  126 => 22,  121 => 20,  117 => 19,  113 => 17,  109 => 16,  105 => 14,  99 => 12,  95 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page Series{% endblock %}

{% block body %}
    <div class='container'>
        <div class='jumbotron'>
            <h2>Liste séries<h2>
            {% if series|length == 0%}
                <h4>Il n'y a aucune série enregistré</h4>
            {% else %}
                <h4>Il y a {{series|length}} séries enregistré</h4>
            {% endif %}

            <ul class=\"list-group\">
                {% for serie in series %}
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
                            

                            <a href=\"serie/fiche/{{serie.id}}\" class=\"btn btn-primary\">Fiche Série</a>
                        </div>            
                    </div>
                {% endfor %}
            </ul>
        </div>


        <div class='jumbotron'>
            <h2>Ajouter une série</h2>
            {{form_start(addSeries)}}
            {{form_rest(addSeries)}}
                <select name=\"categorie\">
                    {% for categorie in categories %}
                    <option value='{{categorie.id}}'>{{categorie.nom}}</option>
                    {% endfor %}
                </select>
            <button type=\"submit\" class=\"btn btn-primary\">Ajouter tâche</button>
            {{form_end(addSeries)}}
        </div>
    </div>
{% endblock %}
", "main/series.html.twig", "/Applications/MAMP/htdocs/A2/SYMFONY/symfonySeries/templates/main/series.html.twig");
    }
}
