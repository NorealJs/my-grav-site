<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* macros/macros.html.twig */
class __TwigTemplate_585f0c63532690311dd8242ced6ece2a extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class]->getChecker();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    private ?MacroNamespace $macroNamespace = null;

    public function getMacroNamespace(): MacroNamespace
    {
        return $this->macroNamespace ??= new MacroNamespace($this, [
            "nav_loop" => new \Twig\TwigMacro("nav_loop", function ($page = null, ...$varargs): string|Markup {
                // line 1
                $macros = $this->macros;
                $context = [
                    "page" => $page,
                    "varargs" => $varargs,
                ] + $this->env->getGlobals();

                $blocks = [];

                return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 2
                    yield "  ";
                    $macros["͜macros"] = $this->getMacroNamespace();
                    // line 3
                    yield "  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "children", [], "any", false, false, true, 3), "visible", [], "any", false, false, true, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                        // line 4
                        yield "    ";
                        $context["active_page"] = ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "active", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["p"], "activeChild", [], "any", false, false, true, 4)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) ? ("active") : (""));
                        // line 5
                        yield "    ";
                        $context["has_children"] = ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "children", [], "any", false, false, true, 5), "visible", [], "any", false, false, true, 5), "count", [], "any", false, false, true, 5), 5, $this->source) > 0);
                        // line 6
                        yield "    <li";
                        if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield " class=\"has-children\"";
                        }
                        yield ">
      <a href=\"";
                        // line 7
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "url", [], "any", false, false, true, 7), 7, $this->source), "html", null, true), 7, $this->source);
                        yield "\" class=\"";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(($context["active_page"] ?? null), 7, $this->source), "html", null, true), 7, $this->source);
                        yield "\">
        ";
                        // line 8
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "header", [], "any", false, false, true, 8), "menu_icon", [], "any", false, false, true, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield "<i class=\"";
                            yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed($this->env->getFilter('fa_icon')->getCallable()($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "header", [], "any", false, false, true, 8), "menu_icon", [], "any", false, false, true, 8), 8, $this->source)), 8, $this->source), "html", null, true), 8, $this->source);
                            yield "\" aria-hidden=\"true\"></i>";
                        }
                        // line 9
                        yield "        ";
                        yield (string) $this->sandbox->ensureToStringAllowed($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "menu", [], "any", false, false, true, 9), 9, $this->source), "html", null, true), 9, $this->source);
                        yield "
      </a>
      ";
                        // line 11
                        if ((($tmp = ($context["has_children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 12
                            yield "      <ul>
        ";
                            // line 13
                            yield (string) $macros["͜macros"]->call("nav_loop", [$context["p"]], $context, 13, $this->getSourceContext());
                            yield "
      </ul>
      ";
                        }
                        // line 16
                        yield "    </li>
  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent);
                    $context += $_parent;
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
            }, ["page" => false], false),
        ]);
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "macros/macros.html.twig";
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
        return array (  114 => 16,  108 => 13,  105 => 12,  103 => 11,  97 => 9,  91 => 8,  85 => 7,  78 => 6,  75 => 5,  72 => 4,  67 => 3,  64 => 2,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro nav_loop(page) %}
  {% import _self as macros %}
  {% for p in page.children.visible %}
    {% set active_page = (p.active or p.activeChild) ? \x27active\x27 : \x27\x27 %}
    {% set has_children = p.children.visible.count > 0 %}
    <li{% if has_children %} class=\"has-children\"{% endif %}>
      <a href=\"{{ p.url }}\" class=\"{{ active_page }}\">
        {% if p.header.menu_icon %}<i class=\"{{ p.header.menu_icon|fa_icon }}\" aria-hidden=\"true\"></i>{% endif %}
        {{ p.menu }}
      </a>
      {% if has_children %}
      <ul>
        {{ macros.nav_loop(p) }}
      </ul>
      {% endif %}
    </li>
  {% endfor %}
{% endmacro %}
", "macros/macros.html.twig", "C:\\laragon\\www\\LARAGON_WORKSPACE\\grav\\user\\themes\\quark2\\templates\\macros\\macros.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["macro" => 1, "import" => 2, "for" => 3, "set" => 4, "if" => 6];
        static $filters = ["escape" => 7, "fa_icon" => 8];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "macro", 1 => "import", 2 => "for", 3 => "set", 4 => "if"],
                [0 => "escape", 1 => "fa_icon"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
