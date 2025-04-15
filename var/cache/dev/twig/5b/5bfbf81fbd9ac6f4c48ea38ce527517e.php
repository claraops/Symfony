<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* muscic/index.html.twig */
class __TwigTemplate_e6d342d005b5191fbadb0539e9024f73 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "muscic/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "muscic/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "muscic/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Library - Musiques disponibles";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"music-library-wrapper\">
    <!-- En-tête avec image de fond -->
    <div class=\"library-header\">
        <div class=\"header-content\">
            <h1>Bibliothèque Musicale</h1>
            <p class=\"lead\">Découvrez toutes vos musiques en un seul endroit</p>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"library-actions\">
            <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_muscic_new");
        yield "\" class=\"add-music-btn\">
                <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une musique
            </a>
            <div class=\"search-container\">
                <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher par titre, artiste...\">
                <i class=\"fas fa-search search-icon\"></i>
            </div>
        </div>

        <div class=\"music-table-container\">
            <table class=\"music-table\">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Artiste</th>
                        <th>Catégorie</th>
                        <th>Tags</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["musicsList"]) || array_key_exists("musicsList", $context) ? $context["musicsList"] : (function () { throw new RuntimeError('Variable "musicsList" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["music"]) {
            // line 39
            yield "                    <tr>
                        <td class=\"music-title\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["music"], "name", [], "any", false, false, false, 40), "html", null, true);
            yield "</td>
                        <td class=\"music-artist\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["music"], "auteur", [], "any", false, false, false, 41), "html", null, true);
            yield "</td>
                        <td>
                            <span class=\"category-badge\">
                                ";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["music"], "category", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            yield "
                            </span>
                        </td>
                        <td class=\"tags-container\">
                            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["music"], "tags", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 49
                yield "                            <span class=\"music-tag\">
                                ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 50), "html", null, true);
                yield "
                            </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                        </td>
                        <td class=\"actions\">
                            <button class=\"action-btn play-btn\" title=\"Écouter\">
                                <i class=\"fas fa-play\"></i>
                            </button>
                            <button class=\"action-btn edit-btn\" title=\"Modifier\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </button>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['music'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        yield "                </tbody>
            </table>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "muscic/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  193 => 64,  177 => 53,  168 => 50,  165 => 49,  161 => 48,  154 => 44,  148 => 41,  144 => 40,  141 => 39,  137 => 38,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Library - Musiques disponibles{% endblock %}

{% block body %}
<div class=\"music-library-wrapper\">
    <!-- En-tête avec image de fond -->
    <div class=\"library-header\">
        <div class=\"header-content\">
            <h1>Bibliothèque Musicale</h1>
            <p class=\"lead\">Découvrez toutes vos musiques en un seul endroit</p>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"library-actions\">
            <a href=\"{{ path('app_muscic_new') }}\" class=\"add-music-btn\">
                <i class=\"fas fa-plus-circle me-2\"></i>Ajouter une musique
            </a>
            <div class=\"search-container\">
                <input type=\"text\" class=\"search-input\" placeholder=\"Rechercher par titre, artiste...\">
                <i class=\"fas fa-search search-icon\"></i>
            </div>
        </div>

        <div class=\"music-table-container\">
            <table class=\"music-table\">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Artiste</th>
                        <th>Catégorie</th>
                        <th>Tags</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for music in musicsList %}
                    <tr>
                        <td class=\"music-title\">{{ music.name }}</td>
                        <td class=\"music-artist\">{{ music.auteur }}</td>
                        <td>
                            <span class=\"category-badge\">
                                {{ music.category.name }}
                            </span>
                        </td>
                        <td class=\"tags-container\">
                            {% for tag in music.tags %}
                            <span class=\"music-tag\">
                                {{ tag.name }}
                            </span>
                            {% endfor %}
                        </td>
                        <td class=\"actions\">
                            <button class=\"action-btn play-btn\" title=\"Écouter\">
                                <i class=\"fas fa-play\"></i>
                            </button>
                            <button class=\"action-btn edit-btn\" title=\"Modifier\">
                                <i class=\"fas fa-pencil-alt\"></i>
                            </button>
                        </td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}", "muscic/index.html.twig", "/var/www/templates/muscic/index.html.twig");
    }
}
