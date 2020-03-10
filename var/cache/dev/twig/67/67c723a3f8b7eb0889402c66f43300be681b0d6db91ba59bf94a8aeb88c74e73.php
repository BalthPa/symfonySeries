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

                        ";
        // line 19
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 19, $this->source); })()), "affiche", [], "any", false, false, false, 19))) {
            // line 20
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/images/" . twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 20, $this->source); })()), "affiche", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" style=\"height:18rem\"/>
                        ";
        }
        // line 22
        echo "                </div>            
            </div>
        </div>

        <div>
            <h2>Modifier la série ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</h2>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateSerie"]) || array_key_exists("updateSerie", $context) ? $context["updateSerie"] : (function () { throw new RuntimeError('Variable "updateSerie" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["updateSerie"]) || array_key_exists("updateSerie", $context) ? $context["updateSerie"] : (function () { throw new RuntimeError('Variable "updateSerie" does not exist.', 29, $this->source); })()), 'rest');
        echo "
            <select name=\"categorie\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 32
            echo "                    <option value='";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nom", [], "any", false, false, false, 32), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </select>
            <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("series");
        echo "\"><button type=\"submit\" class=\"btn btn-primary\">Modifier</button></a>
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["updateSerie"]) || array_key_exists("updateSerie", $context) ? $context["updateSerie"] : (function () { throw new RuntimeError('Variable "updateSerie" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
            <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("removeSerie", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["serie"]) || array_key_exists("serie", $context) ? $context["serie"] : (function () { throw new RuntimeError('Variable "serie" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
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
        return array (  174 => 37,  170 => 36,  166 => 35,  163 => 34,  152 => 32,  148 => 31,  143 => 29,  139 => 28,  135 => 27,  128 => 22,  122 => 20,  120 => 19,  114 => 17,  108 => 15,  104 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

                        {% if serie.affiche is not null %}
                            <img src=\"{{ asset('assets/images/' ~ serie.affiche) }}\" style=\"height:18rem\"/>
                        {% endif %}
                </div>            
            </div>
        </div>

        <div>
            <h2>Modifier la série {{serie.nom}}</h2>
            {{form_start(updateSerie)}}
            {{form_rest(updateSerie)}}
            <select name=\"categorie\">
                    {% for categorie in categories %}
                    <option value='{{categorie.id}}'>{{categorie.nom}}</option>
                    {% endfor %}
            </select>
            <a href=\"{{path('series')}}\"><button type=\"submit\" class=\"btn btn-primary\">Modifier</button></a>
            {{form_end(updateSerie)}}
            <a href=\"{{path(\"removeSerie\", {id: serie.id})}}\"><button class=\"btn btn-danger\">Supprimer</button></a>
        </div>
    </div>
{% endblock %}
", "main/ficheSerie.html.twig", "/Applications/MAMP/htdocs/A2/SYMFONY/symfonySeries/templates/main/ficheSerie.html.twig");
    }
}
