<?php

require __DIR__ . '/vendor/autoload.php';

use Inilim\Dump\Dump;
use Inilim\ParseLazyMethod\ParseClassAndMethod;
use Inilim\ParseLazyMethod\ResultParseClass;
use Inilim\ParseLazyMethod\FormationMethodAnnotation;

use Inilim\String\Str;

// php parser
use PhpParser\Error;
use PhpParser\ParserFactory;
use PhpParser\Node\Stmt\Class_;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\NodeFinder;

// ------------------------------------------------------------------
// 
// ------------------------------------------------------------------

Dump::init();

// ------------------------------------------------------------------
// 
// ------------------------------------------------------------------


$file_doc = __DIR__ . '/autodoc.txt';

$ref_class = new \ReflectionClass(Str::class);
$ALIAS = $ref_class->getConstant('ALIAS');
$NAMESPACE = $ref_class->getConstant('NAMESPACE');
$NAMESPACE = '\\' . \trim($NAMESPACE, '\\');
unset($ref_class);
$count_alias = \array_count_values($ALIAS);
$flip_alias = \array_flip($ALIAS);

$parser = (new ParserFactory())->createForHostVersion();
$traverser = new NodeTraverser;
$traverser->addVisitor(new NameResolver);
$node_finder = new NodeFinder;
$s = new ParseClassAndMethod;
$fa = new FormationMethodAnnotation;

$files = \glob(__DIR__ . '\src\Method\*.php');

\file_put_contents($file_doc, '');

// ------------------------------------------------------------------
// 
// ------------------------------------------------------------------


$docs = [];
foreach ($files as $file) {

    $filename = \pathinfo($file, \PATHINFO_FILENAME);

    // ------------------------------------------------------------------
    // исключить файлы
    // ------------------------------------------------------------------

    if (\in_array($filename, ['Example', 'Property'])) {
        continue;
    }

    // ------------------------------------------------------------------
    // 
    // ------------------------------------------------------------------

    $param = '@param ' . $NAMESPACE . '\\' . $filename;

    // ------------------------------------------------------------------
    // 
    // ------------------------------------------------------------------


    // d($file);
    // $file = $files[77];
    $code = \file_get_contents($file);

    try {
        $ast = $parser->parse($code);
    } catch (Error $e) {
        \de([
            $e->getMessage(),
            '$e' => $e
        ]);
    }

    // ------------------------------------------------------------------
    // 
    // ------------------------------------------------------------------

    $ast   = $traverser->traverse($ast);
    $class = $node_finder->findFirstInstanceOf($ast, Class_::class);

    if ($class === null) {
        \de([
            'класс не найден',
            '$file' => $file,
        ]);
    }

    // ------------------------------------------------------------------
    // 
    // ------------------------------------------------------------------

    try {
        $res = $s->__invoke($class, '__invoke');
    } catch (\Exception $e) {
        \de([
            'метод не найден',
            '$file' => $file,
            '$e'    => $e,
        ]);
    }

    // ------------------------------------------------------------------
    // Алиасы
    // ------------------------------------------------------------------

    if (\in_array($res->method_original, $ALIAS)) {

        if ($count_alias[$res->method_original] > 1) {
            // ------------------------------------------------------------------
            // если один метод под несколькоми именами
            // ------------------------------------------------------------------

            $tm = \array_filter($ALIAS, fn ($m) => $m === $res->method_original);
            $tm = \array_keys($tm);

            foreach ($tm as $item) {
                $t = new ResultParseClass(
                    method: $item,
                    method_original: $res->method_original,
                    return_type: $res->return_type,
                    args: $res->args,
                    annotations_class: $res->annotations_class,
                    comments_class: $res->comments_class,
                    comments_method: $res->comments_method,
                    annotations_method: $res->annotations_method,
                );
                $docs[] = $fa->__invoke($t);
                $docs[] = $fa->__invoke($t, static: true);
                $docs[] = $param;
                $docs[] = '';
            }
        } else {

            $t = new ResultParseClass(
                method: $flip_alias[$res->method_original],
                method_original: $res->method_original,
                return_type: $res->return_type,
                args: $res->args,
                annotations_class: $res->annotations_class,
                comments_class: $res->comments_class,
                comments_method: $res->comments_method,
                annotations_method: $res->annotations_method,
            );
            $docs[] = $fa->__invoke($t);
            $docs[] = $fa->__invoke($t, static: true);
            $docs[] = $param;
            $docs[] = '';
        }
    }

    // ------------------------------------------------------------------
    // исключить методы (они же имена классов)
    // ------------------------------------------------------------------

    if (\in_array($res->method_original, ['Match_'])) {
        continue;
    }

    // ------------------------------------------------------------------
    // 
    // ------------------------------------------------------------------

    $docs[] = $fa->__invoke($res);
    $docs[] = $fa->__invoke($res, static: true);
    $docs[] = $param;
    $docs[] = '';
}

// ------------------------------------------------------------------
// 
// ------------------------------------------------------------------


$docs = \array_map(function ($doc) {
    return ' * ' . $doc;
}, $docs);

$docs = '/**' . PHP_EOL . \implode(PHP_EOL, $docs) . PHP_EOL . ' */';

\file_put_contents($file_doc, $docs, \FILE_APPEND);
de($docs);
