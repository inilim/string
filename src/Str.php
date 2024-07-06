<?php

namespace Inilim\String;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  string after(string $subject, string $search) 
 * @method  static  string after(string $subject, string $search) 
 * @param \Inilim\String\Method\after
 * 
 * @method  string afterLast(string $subject, string $search) 
 * @method  static  string afterLast(string $subject, string $search) 
 * @param \Inilim\String\Method\afterLast
 * 
 * @method  string apa(string $value) 
 * @method  static  string apa(string $value) 
 * @param \Inilim\String\Method\apa
 * 
 * @method  string ascii(string $value, string $language = 'en') 
 * @method  static  string ascii(string $value, string $language = 'en') 
 * @param \Inilim\String\Method\ascii
 * 
 * @method  string before(string $subject, string $search) 
 * @method  static  string before(string $subject, string $search) 
 * @param \Inilim\String\Method\before
 * 
 * @method  string beforeLast(string $subject, string $search) 
 * @method  static  string beforeLast(string $subject, string $search) 
 * @param \Inilim\String\Method\beforeLast
 * 
 * @method  string between(string $subject, string $from, string $to) 
 * @method  static  string between(string $subject, string $from, string $to) 
 * @param \Inilim\String\Method\between
 * 
 * @method  string betweenFirst(string $subject, string $from, string $to) 
 * @method  static  string betweenFirst(string $subject, string $from, string $to) 
 * @param \Inilim\String\Method\betweenFirst
 * 
 * @method  string camel(string $value) 
 * @method  static  string camel(string $value) 
 * @param \Inilim\String\Method\camel
 * 
 * @method  string|false charAt(string $subject, int $index) 
 * @method  static  string|false charAt(string $subject, int $index) 
 * @param \Inilim\String\Method\charAt
 * 
 * @method  bool contains(string $haystack, string|iterable<string> $needles, bool $ignore_case = false) 
 * @method  static  bool contains(string $haystack, string|iterable<string> $needles, bool $ignore_case = false) 
 * @param \Inilim\String\Method\contains
 * 
 * @method  bool containsAll(string $haystack, iterable<string> $needles, bool $ignore_case = false) 
 * @method  static  bool containsAll(string $haystack, iterable<string> $needles, bool $ignore_case = false) 
 * @param \Inilim\String\Method\containsAll
 * 
 * @method  string convertCase(string $string, int $mode = mb_case_fold, null|string $encoding = 'UTF-8') 
 * @method  static  string convertCase(string $string, int $mode = mb_case_fold, null|string $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\convertCase
 * 
 * @method  void createRandomStringsNormally() 
 * @method  static  void createRandomStringsNormally() 
 * @param \Inilim\String\Method\createRandomStringsNormally
 * 
 * @method  void createRandomStringsUsing(callable|null $factory = null) 
 * @method  static  void createRandomStringsUsing(callable|null $factory = null) 
 * @param \Inilim\String\Method\createRandomStringsUsing
 * 
 * @method  void createRandomStringsUsingSequence(array $sequence, callable|null $when_missing = null) 
 * @method  static  void createRandomStringsUsingSequence(array $sequence, callable|null $when_missing = null) 
 * @param \Inilim\String\Method\createRandomStringsUsingSequence
 * 
 * @method  bool endsWith(string $haystack, string|iterable<string> $needles) 
 * @method  static  bool endsWith(string $haystack, string|iterable<string> $needles) 
 * @param \Inilim\String\Method\endsWith
 * 
 * @method   name() 
 * @method  static   name() 
 * @param \Inilim\String\Method\example
 * 
 * @method  null|string excerpt(string $text, string $phrase = '', array $options = []) 
 * @method  static  null|string excerpt(string $text, string $phrase = '', array $options = []) 
 * @param \Inilim\String\Method\excerpt
 * 
 * @method  string finish(string $value, string $cap) 
 * @method  static  string finish(string $value, string $cap) 
 * @param \Inilim\String\Method\finish
 * 
 * @method  string|false fromBase64(string $string, bool $strict = false) 
 * @method  static  string|false fromBase64(string $string, bool $strict = false) 
 * @param \Inilim\String\Method\fromBase64
 * 
 * @method  int getCountSegmentsPath(string $path) 
 * @method  static  int getCountSegmentsPath(string $path) 
 * @param \Inilim\String\Method\getCountSegmentsPath
 * 
 * @method  null|string getSegmentPath(string $path, int $segment) 
 * @method  static  null|string getSegmentPath(string $path, int $segment) 
 * @param \Inilim\String\Method\getSegmentPath
 * 
 * @method  string[]|array{} getSegmentsPath(string $path) 
 * @method  static  string[]|array{} getSegmentsPath(string $path) 
 * @param \Inilim\String\Method\getSegmentsPath
 * 
 * @method  string[] getURLProtocolsAsArray() 
 * @method  static  string[] getURLProtocolsAsArray() 
 * @param \Inilim\String\Method\getURLProtocolsAsArray
 * 
 * @method  string getURLProtocolsAsString() 
 * @method  static  string getURLProtocolsAsString() 
 * @param \Inilim\String\Method\getURLProtocolsAsString
 * 
 * @method  string headline(string $value) 
 * @method  static  string headline(string $value) 
 * @param \Inilim\String\Method\headline
 * 
 * @method  bool is(string|iterable<string> $pattern, string $value) 
 * @method  static  bool is(string|iterable<string> $pattern, string $value) 
 * @param \Inilim\String\Method\is
 * 
 * @method  bool isAscii(string $value) 
 * @method  static  bool isAscii(string $value) 
 * @param \Inilim\String\Method\isAscii
 * 
 * @method  bool isJson(string $value) 
 * @method  static  bool isJson(string $value) 
 * @param \Inilim\String\Method\isJson
 * 
 * @method  bool isMatch(string|iterable<string> $pattern, string $value) 
 * @method  static  bool isMatch(string|iterable<string> $pattern, string $value) 
 * @param \Inilim\String\Method\isMatch
 * 
 * @method  bool isMobile(string $useragent) 
 * @method  static  bool isMobile(string $useragent) 
 * @param \Inilim\String\Method\isMobile
 * 
 * @method  bool isUrl(mixed $value, array $protocols = []) 
 * @method  static  bool isUrl(mixed $value, array $protocols = []) 
 * @param \Inilim\String\Method\isUrl
 * 
 * @method  bool isUuid(mixed $value) 
 * @method  static  bool isUuid(mixed $value) 
 * @param \Inilim\String\Method\isUuid
 * 
 * @method  string kebab(string $value) 
 * @method  static  string kebab(string $value) 
 * @param \Inilim\String\Method\kebab
 * 
 * @method  string firstLower(string $string) 
 * @method  static  string firstLower(string $string) 
 * @param \Inilim\String\Method\lcfirst
 * 
 * @method  string lcfirst(string $string) 
 * @method  static  string lcfirst(string $string) 
 * @param \Inilim\String\Method\lcfirst
 * 
 * @method  int length(string $value, string|null $encoding = 'UTF-8') 
 * @method  static  int length(string $value, string|null $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\length
 * 
 * @method  string limit(string $value, int $limit = 100, string $end = '...') 
 * @method  static  string limit(string $value, int $limit = 100, string $end = '...') 
 * @param \Inilim\String\Method\limit
 * 
 * @method  string lower(string $value) 
 * @method  static  string lower(string $value) 
 * @param \Inilim\String\Method\lower
 * 
 * @method  string ltrim(string $value, null|string $charlist = null) 
 * @method  static  string ltrim(string $value, null|string $charlist = null) 
 * @param \Inilim\String\Method\ltrim
 * 
 * @method  string mask(string $string, string $character, int $index, int|null $length = null, string $encoding = 'UTF-8') 
 * @method  static  string mask(string $string, string $character, int $index, int|null $length = null, string $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\mask
 * 
 * @method  array matchAll(string $pattern, string $subject) 
 * @method  static  array matchAll(string $pattern, string $subject) 
 * @param \Inilim\String\Method\matchAll
 * 
 * @method  string match(string $pattern, string $subject) 
 * @method  static  string match(string $pattern, string $subject) 
 * @param \Inilim\String\Method\match_
 * 
 * @method  string numbers(string $value) 
 * @method  static  string numbers(string $value) 
 * @param \Inilim\String\Method\numbers
 * 
 * @method  string padBoth(string $value, int $length, string $pad = ' ') 
 * @method  static  string padBoth(string $value, int $length, string $pad = ' ') 
 * @param \Inilim\String\Method\padBoth
 * 
 * @method  string padLeft(string $value, int $length, string $pad = ' ') 
 * @method  static  string padLeft(string $value, int $length, string $pad = ' ') 
 * @param \Inilim\String\Method\padLeft
 * 
 * @method  string padRight(string $value, int $length, string $pad = ' ') 
 * @method  static  string padRight(string $value, int $length, string $pad = ' ') 
 * @param \Inilim\String\Method\padRight
 * 
 * @method  array<int, string|null> parseCallback(string $callback, string|null $default = null) 
 * @method  static  array<int, string|null> parseCallback(string $callback, string|null $default = null) 
 * @param \Inilim\String\Method\parseCallback
 * 
 * @method  array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string} parseURL(string $url) 
 * @method  static  array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string} parseURL(string $url) 
 * @param \Inilim\String\Method\parseURL
 * 
 * @method  string password(int $length = 32, bool $letters = true, bool $numbers = true, bool $symbols = true, bool $spaces = false) 
 * @method  static  string password(int $length = 32, bool $letters = true, bool $numbers = true, bool $symbols = true, bool $spaces = false) 
 * @param \Inilim\String\Method\password
 * 
 * @method  string platformNewLines(string $s) 
 * @method  static  string platformNewLines(string $s) 
 * @param \Inilim\String\Method\platformNewLines
 * 
 * @method  int|false position(string $haystack, string $needle, int $offset = 0, string|null $encoding = 'UTF-8') 
 * @method  static  int|false position(string $haystack, string $needle, int $offset = 0, string|null $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\position
 * 
 * @method  array{snake_cache:array,camel_cache:array,studly_cache:array,random_string_factory:callable|null} property() 
 * @method  static  array{snake_cache:array,camel_cache:array,studly_cache:array,random_string_factory:callable|null} property() 
 * @param \Inilim\String\Method\property
 * 
 * @method  string random(int $length = 16) 
 * @method  static  string random(int $length = 16) 
 * @param \Inilim\String\Method\random
 * 
 * @method  string repeat(string $string, int $times) 
 * @method  static  string repeat(string $string, int $times) 
 * @param \Inilim\String\Method\repeat
 * 
 * @method  string|string[] replace(string|string[] $search, string|string[] $replace, string|string[] $subject, bool $case_sensitive = true) 
 * @method  static  string|string[] replace(string|string[] $search, string|string[] $replace, string|string[] $subject, bool $case_sensitive = true) 
 * @param \Inilim\String\Method\replace
 * 
 * @method  string replaceArray(string $search, string[] $replace, string $subject) 
 * @method  static  string replaceArray(string $search, string[] $replace, string $subject) 
 * @param \Inilim\String\Method\replaceArray
 * 
 * @method  string replaceEnd(string $search, string $replace, string $subject) 
 * @method  static  string replaceEnd(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\replaceEnd
 * 
 * @method  string replaceFirst(string $search, string $replace, string $subject) 
 * @method  static  string replaceFirst(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\replaceFirst
 * 
 * @method  string replaceLast(string $search, string $replace, string $subject) 
 * @method  static  string replaceLast(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\replaceLast
 * 
 * @method  string|string[]|null replaceMatches(string $pattern, \Closure|string $replace, array|string $subject, int $limit = -1) 
 * @method  static  string|string[]|null replaceMatches(string $pattern, \Closure|string $replace, array|string $subject, int $limit = -1) 
 * @param \Inilim\String\Method\replaceMatches
 * 
 * @method  string replaceStart(string $search, string $replace, string $subject) 
 * @method  static  string replaceStart(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\replaceStart
 * 
 * @method  string reverse(string $value) 
 * @method  static  string reverse(string $value) 
 * @param \Inilim\String\Method\reverse
 * 
 * @method  string rtrim(string $value, null|string $charlist = null) 
 * @method  static  string rtrim(string $value, null|string $charlist = null) 
 * @param \Inilim\String\Method\rtrim
 * 
 * @method  string slug(string $title, string $separator = '-', string|null $language = 'en', array<string, string> $dictionary = []) 
 * @method  static  string slug(string $title, string $separator = '-', string|null $language = 'en', array<string, string> $dictionary = []) 
 * @param \Inilim\String\Method\slug
 * 
 * @method  string snake(string $value, string $delimiter = '_') 
 * @method  static  string snake(string $value, string $delimiter = '_') 
 * @param \Inilim\String\Method\snake
 * 
 * @method  string squish(string $value) 
 * @method  static  string squish(string $value) 
 * @param \Inilim\String\Method\squish
 * 
 * @method  string start(string $value, string $prefix) 
 * @method  static  string start(string $value, string $prefix) 
 * @param \Inilim\String\Method\start
 * 
 * @method  bool startsWith(string $haystack, string|iterable<string> $needles) 
 * @method  static  bool startsWith(string $haystack, string|iterable<string> $needles) 
 * @param \Inilim\String\Method\startsWith
 * 
 * @method  string studly(string $value) 
 * @method  static  string studly(string $value) 
 * @param \Inilim\String\Method\studly
 * 
 * @method  string substr(string $string, int $start, int|null $length = null, string $encoding = 'UTF-8') 
 * @method  static  string substr(string $string, int $start, int|null $length = null, string $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\substr
 * 
 * @method  int substrCount(string $haystack, string $needle, int $offset = 0, int|null $length = null) 
 * @method  static  int substrCount(string $haystack, string $needle, int $offset = 0, int|null $length = null) 
 * @param \Inilim\String\Method\substrCount
 * 
 * @method  string|string[] substrReplace(string|string[] $string, string|string[] $replace, int|int[] $offset = 0, int|int[]|null $length = null) 
 * @method  static  string|string[] substrReplace(string|string[] $string, string|string[] $replace, int|int[] $offset = 0, int|int[]|null $length = null) 
 * @param \Inilim\String\Method\substrReplace
 * 
 * @method  string swap(array $map, string $subject) 
 * @method  static  string swap(array $map, string $subject) 
 * @param \Inilim\String\Method\swap
 * 
 * @method  string take(string $string, int $limit) 
 * @method  static  string take(string $string, int $limit) 
 * @param \Inilim\String\Method\take
 * 
 * @method  string title(string $value) 
 * @method  static  string title(string $value) 
 * @param \Inilim\String\Method\title
 * 
 * @method  string toBase64(string $string) 
 * @method  static  string toBase64(string $string) 
 * @param \Inilim\String\Method\toBase64
 * 
 * @method  string toStringOr(mixed $value, string $fallback) 
 * @method  static  string toStringOr(mixed $value, string $fallback) 
 * @param \Inilim\String\Method\toStringOr
 * 
 * @method  string|false The named key or false. translatePhpUrlConstantToKey(int $constant) 
 * @method  static  string|false The named key or false. translatePhpUrlConstantToKey(int $constant) 
 * @param \Inilim\String\Method\translatePhpUrlConstantToKey
 * 
 * @method  string transliterate(string $string, string|null $unknown = '?', bool|null $strict = false) 
 * @method  static  string transliterate(string $string, string|null $unknown = '?', bool|null $strict = false) 
 * @param \Inilim\String\Method\transliterate
 * 
 * @method  string trim(string $value, null|string $charlist = null) 
 * @method  static  string trim(string $value, null|string $charlist = null) 
 * @param \Inilim\String\Method\trim
 * 
 * @method  string firstUpper(string $string) 
 * @method  static  string firstUpper(string $string) 
 * @param \Inilim\String\Method\ucfirst
 * 
 * @method  string ucfirst(string $string) 
 * @method  static  string ucfirst(string $string) 
 * @param \Inilim\String\Method\ucfirst
 * 
 * @method  string[] ucsplit(string $string) 
 * @method  static  string[] ucsplit(string $string) 
 * @param \Inilim\String\Method\ucsplit
 * 
 * @method  string unixNewLines(string $s) 
 * @method  static  string unixNewLines(string $s) 
 * @param \Inilim\String\Method\unixNewLines
 * 
 * @method  string unwrap(string $value, string $before, string|null $after = null) 
 * @method  static  string unwrap(string $value, string $before, string|null $after = null) 
 * @param \Inilim\String\Method\unwrap
 * 
 * @method  string upper(string $value) 
 * @method  static  string upper(string $value) 
 * @param \Inilim\String\Method\upper
 * 
 * @method  int wordCount(string $string, string|null $characters = null) 
 * @method  static  int wordCount(string $string, string|null $characters = null) 
 * @param \Inilim\String\Method\wordCount
 * 
 * @method  string wordWrap(string $string, int $characters = 75, string $break = "\n", bool $cut_long_words = false) 
 * @method  static  string wordWrap(string $string, int $characters = 75, string $break = "\n", bool $cut_long_words = false) 
 * @param \Inilim\String\Method\wordWrap
 * 
 * @method  string words(string $value, int $words = 100, string $end = '...') 
 * @method  static  string words(string $value, int $words = 100, string $end = '...') 
 * @param \Inilim\String\Method\words
 * 
 * @method  string wrap(string $value, string $before, string|null $after = null) 
 * @method  static  string wrap(string $value, string $before, string|null $after = null) 
 * @param \Inilim\String\Method\wrap
 * 
 */
class Str extends LazyMethodAbstract
{
    protected const PATH_TO_DIR = __DIR__ . '/Method';
    protected const NAMESPACE = 'Inilim\String\Method';
    protected const ALIAS = [
        'match'      => 'match_',
        'firstUpper' => 'ucfirst',
        'firstLower' => 'lcfirst',
    ];
}
