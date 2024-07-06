<?php

namespace Inilim\String;

use Inilim\LazyMethod\LazyMethodAbstract;

/**
 * @method  string after(string $subject, string $search) 
 * @method  static  string after(string $subject, string $search) 
 * @param \Inilim\String\Method\After
 * 
 * @method  string afterLast(string $subject, string $search) 
 * @method  static  string afterLast(string $subject, string $search) 
 * @param \Inilim\String\Method\AfterLast
 * 
 * @method  string apa(string $value) 
 * @method  static  string apa(string $value) 
 * @param \Inilim\String\Method\Apa
 * 
 * @method  string ascii(string $value, string $language = 'en') 
 * @method  static  string ascii(string $value, string $language = 'en') 
 * @param \Inilim\String\Method\Ascii
 * 
 * @method  string before(string $subject, string $search) 
 * @method  static  string before(string $subject, string $search) 
 * @param \Inilim\String\Method\Before
 * 
 * @method  string beforeLast(string $subject, string $search) 
 * @method  static  string beforeLast(string $subject, string $search) 
 * @param \Inilim\String\Method\BeforeLast
 * 
 * @method  string between(string $subject, string $from, string $to) 
 * @method  static  string between(string $subject, string $from, string $to) 
 * @param \Inilim\String\Method\Between
 * 
 * @method  string betweenFirst(string $subject, string $from, string $to) 
 * @method  static  string betweenFirst(string $subject, string $from, string $to) 
 * @param \Inilim\String\Method\BetweenFirst
 * 
 * @method  string camel(string $value) 
 * @method  static  string camel(string $value) 
 * @param \Inilim\String\Method\Camel
 * 
 * @method  string|false charAt(string $subject, int $index) 
 * @method  static  string|false charAt(string $subject, int $index) 
 * @param \Inilim\String\Method\CharAt
 * 
 * @method  bool contains(string $haystack, string|iterable<string> $needles, bool $ignore_case = false) 
 * @method  static  bool contains(string $haystack, string|iterable<string> $needles, bool $ignore_case = false) 
 * @param \Inilim\String\Method\Contains
 * 
 * @method  bool containsAll(string $haystack, iterable<string> $needles, bool $ignore_case = false) 
 * @method  static  bool containsAll(string $haystack, iterable<string> $needles, bool $ignore_case = false) 
 * @param \Inilim\String\Method\ContainsAll
 * 
 * @method  string convertCase(string $string, int $mode = mb_case_fold, null|string $encoding = 'UTF-8') 
 * @method  static  string convertCase(string $string, int $mode = mb_case_fold, null|string $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\ConvertCase
 * 
 * @method  void createRandomStringsNormally() 
 * @method  static  void createRandomStringsNormally() 
 * @param \Inilim\String\Method\CreateRandomStringsNormally
 * 
 * @method  void createRandomStringsUsing(callable|null $factory = null) 
 * @method  static  void createRandomStringsUsing(callable|null $factory = null) 
 * @param \Inilim\String\Method\CreateRandomStringsUsing
 * 
 * @method  void createRandomStringsUsingSequence(array $sequence, callable|null $when_missing = null) 
 * @method  static  void createRandomStringsUsingSequence(array $sequence, callable|null $when_missing = null) 
 * @param \Inilim\String\Method\CreateRandomStringsUsingSequence
 * 
 * @method  bool endsWith(string $haystack, string|iterable<string> $needles) 
 * @method  static  bool endsWith(string $haystack, string|iterable<string> $needles) 
 * @param \Inilim\String\Method\EndsWith
 * 
 * @method  null|string excerpt(string $text, string $phrase = '', array $options = []) 
 * @method  static  null|string excerpt(string $text, string $phrase = '', array $options = []) 
 * @param \Inilim\String\Method\Excerpt
 * 
 * @method  string finish(string $value, string $cap) 
 * @method  static  string finish(string $value, string $cap) 
 * @param \Inilim\String\Method\Finish
 * 
 * @method  string|false fromBase64(string $string, bool $strict = false) 
 * @method  static  string|false fromBase64(string $string, bool $strict = false) 
 * @param \Inilim\String\Method\FromBase64
 * 
 * @method  int getCountSegmentsPath(string $path) 
 * @method  static  int getCountSegmentsPath(string $path) 
 * @param \Inilim\String\Method\GetCountSegmentsPath
 * 
 * @method  null|string getSegmentPath(string $path, int $segment) 
 * @method  static  null|string getSegmentPath(string $path, int $segment) 
 * @param \Inilim\String\Method\GetSegmentPath
 * 
 * @method  string[]|array{} getSegmentsPath(string $path) 
 * @method  static  string[]|array{} getSegmentsPath(string $path) 
 * @param \Inilim\String\Method\GetSegmentsPath
 * 
 * @method  string[] getURLProtocolsAsArray() 
 * @method  static  string[] getURLProtocolsAsArray() 
 * @param \Inilim\String\Method\GetURLProtocolsAsArray
 * 
 * @method  string getURLProtocolsAsString() 
 * @method  static  string getURLProtocolsAsString() 
 * @param \Inilim\String\Method\GetURLProtocolsAsString
 * 
 * @method  string headline(string $value) 
 * @method  static  string headline(string $value) 
 * @param \Inilim\String\Method\Headline
 * 
 * @method  bool is(string|iterable<string> $pattern, string $value) 
 * @method  static  bool is(string|iterable<string> $pattern, string $value) 
 * @param \Inilim\String\Method\Is
 * 
 * @method  bool isAscii(string $value) 
 * @method  static  bool isAscii(string $value) 
 * @param \Inilim\String\Method\IsAscii
 * 
 * @method  bool isJson(string $value) 
 * @method  static  bool isJson(string $value) 
 * @param \Inilim\String\Method\IsJson
 * 
 * @method  bool isMatch(string|iterable<string> $pattern, string $value) 
 * @method  static  bool isMatch(string|iterable<string> $pattern, string $value) 
 * @param \Inilim\String\Method\IsMatch
 * 
 * @method  bool isMobile(string $useragent) 
 * @method  static  bool isMobile(string $useragent) 
 * @param \Inilim\String\Method\IsMobile
 * 
 * @method  bool isUrl(mixed $value, array $protocols = []) 
 * @method  static  bool isUrl(mixed $value, array $protocols = []) 
 * @param \Inilim\String\Method\IsUrl
 * 
 * @method  bool isUuid(mixed $value) 
 * @method  static  bool isUuid(mixed $value) 
 * @param \Inilim\String\Method\IsUuid
 * 
 * @method  string kebab(string $value) 
 * @method  static  string kebab(string $value) 
 * @param \Inilim\String\Method\Kebab
 * 
 * @method  string firstLower(string $string) 
 * @method  static  string firstLower(string $string) 
 * @param \Inilim\String\Method\Lcfirst
 * 
 * @method  string lcfirst(string $string) 
 * @method  static  string lcfirst(string $string) 
 * @param \Inilim\String\Method\Lcfirst
 * 
 * @method  int length(string $value, string|null $encoding = 'UTF-8') 
 * @method  static  int length(string $value, string|null $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\Length
 * 
 * @method  string limit(string $value, int $limit = 100, string $end = '...') 
 * @method  static  string limit(string $value, int $limit = 100, string $end = '...') 
 * @param \Inilim\String\Method\Limit
 * 
 * @method  string lower(string $value) 
 * @method  static  string lower(string $value) 
 * @param \Inilim\String\Method\Lower
 * 
 * @method  string ltrim(string $value, null|string $charlist = null) 
 * @method  static  string ltrim(string $value, null|string $charlist = null) 
 * @param \Inilim\String\Method\Ltrim
 * 
 * @method  string mask(string $string, string $character, int $index, int|null $length = null, string $encoding = 'UTF-8') 
 * @method  static  string mask(string $string, string $character, int $index, int|null $length = null, string $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\Mask
 * 
 * @method  array matchAll(string $pattern, string $subject) 
 * @method  static  array matchAll(string $pattern, string $subject) 
 * @param \Inilim\String\Method\MatchAll
 * 
 * @method  string match(string $pattern, string $subject) 
 * @method  static  string match(string $pattern, string $subject) 
 * @param \Inilim\String\Method\Match_
 * 
 * @method  string numbers(string $value) 
 * @method  static  string numbers(string $value) 
 * @param \Inilim\String\Method\Numbers
 * 
 * @method  string padBoth(string $value, int $length, string $pad = ' ') 
 * @method  static  string padBoth(string $value, int $length, string $pad = ' ') 
 * @param \Inilim\String\Method\PadBoth
 * 
 * @method  string padLeft(string $value, int $length, string $pad = ' ') 
 * @method  static  string padLeft(string $value, int $length, string $pad = ' ') 
 * @param \Inilim\String\Method\PadLeft
 * 
 * @method  string padRight(string $value, int $length, string $pad = ' ') 
 * @method  static  string padRight(string $value, int $length, string $pad = ' ') 
 * @param \Inilim\String\Method\PadRight
 * 
 * @method  array parseCallback(string $callback, string|null $default = null) 
 * @method  static  array parseCallback(string $callback, string|null $default = null) 
 * @param \Inilim\String\Method\ParseCallback
 * 
 * @method  array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string} parseURL(string $url) 
 * @method  static  array{protocol:null|string,domain:null|string,port:null|int,login:null|string,password:null|string,path:null|string,query:null|string,anchor:null|string} parseURL(string $url) 
 * @param \Inilim\String\Method\ParseURL
 * 
 * @method  string password(int $length = 32, bool $letters = true, bool $numbers = true, bool $symbols = true, bool $spaces = false) 
 * @method  static  string password(int $length = 32, bool $letters = true, bool $numbers = true, bool $symbols = true, bool $spaces = false) 
 * @param \Inilim\String\Method\Password
 * 
 * @method  string platformNewLines(string $s) 
 * @method  static  string platformNewLines(string $s) 
 * @param \Inilim\String\Method\PlatformNewLines
 * 
 * @method  int|false position(string $haystack, string $needle, int $offset = 0, string|null $encoding = 'UTF-8') 
 * @method  static  int|false position(string $haystack, string $needle, int $offset = 0, string|null $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\Position
 * 
 * @method  string random(int $length = 16) 
 * @method  static  string random(int $length = 16) 
 * @param \Inilim\String\Method\Random
 * 
 * @method  string repeat(string $string, int $times) 
 * @method  static  string repeat(string $string, int $times) 
 * @param \Inilim\String\Method\Repeat
 * 
 * @method  string|string[] replace(string|string[] $search, string|string[] $replace, string|string[] $subject, bool $case_sensitive = true) 
 * @method  static  string|string[] replace(string|string[] $search, string|string[] $replace, string|string[] $subject, bool $case_sensitive = true) 
 * @param \Inilim\String\Method\Replace
 * 
 * @method  string replaceArray(string $search, string[] $replace, string $subject) 
 * @method  static  string replaceArray(string $search, string[] $replace, string $subject) 
 * @param \Inilim\String\Method\ReplaceArray
 * 
 * @method  string replaceEnd(string $search, string $replace, string $subject) 
 * @method  static  string replaceEnd(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\ReplaceEnd
 * 
 * @method  string replaceFirst(string $search, string $replace, string $subject) 
 * @method  static  string replaceFirst(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\ReplaceFirst
 * 
 * @method  string replaceLast(string $search, string $replace, string $subject) 
 * @method  static  string replaceLast(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\ReplaceLast
 * 
 * @method  string|string[]|null replaceMatches(string $pattern, \Closure|string $replace, array|string $subject, int $limit = -1) 
 * @method  static  string|string[]|null replaceMatches(string $pattern, \Closure|string $replace, array|string $subject, int $limit = -1) 
 * @param \Inilim\String\Method\ReplaceMatches
 * 
 * @method  string replaceStart(string $search, string $replace, string $subject) 
 * @method  static  string replaceStart(string $search, string $replace, string $subject) 
 * @param \Inilim\String\Method\ReplaceStart
 * 
 * @method  string reverse(string $value) 
 * @method  static  string reverse(string $value) 
 * @param \Inilim\String\Method\Reverse
 * 
 * @method  string rtrim(string $value, null|string $charlist = null) 
 * @method  static  string rtrim(string $value, null|string $charlist = null) 
 * @param \Inilim\String\Method\Rtrim
 * 
 * @method  string slug(string $title, string $separator = '-', string|null $language = 'en', array<string, string> $dictionary = []) 
 * @method  static  string slug(string $title, string $separator = '-', string|null $language = 'en', array<string, string> $dictionary = []) 
 * @param \Inilim\String\Method\Slug
 * 
 * @method  string snake(string $value, string $delimiter = '_') 
 * @method  static  string snake(string $value, string $delimiter = '_') 
 * @param \Inilim\String\Method\Snake
 * 
 * @method  string squish(string $value) 
 * @method  static  string squish(string $value) 
 * @param \Inilim\String\Method\Squish
 * 
 * @method  string start(string $value, string $prefix) 
 * @method  static  string start(string $value, string $prefix) 
 * @param \Inilim\String\Method\Start
 * 
 * @method  bool startsWith(string $haystack, string|iterable<string> $needles) 
 * @method  static  bool startsWith(string $haystack, string|iterable<string> $needles) 
 * @param \Inilim\String\Method\StartsWith
 * 
 * @method  string studly(string $value) 
 * @method  static  string studly(string $value) 
 * @param \Inilim\String\Method\Studly
 * 
 * @method  string substr(string $string, int $start, int|null $length = null, string $encoding = 'UTF-8') 
 * @method  static  string substr(string $string, int $start, int|null $length = null, string $encoding = 'UTF-8') 
 * @param \Inilim\String\Method\Substr
 * 
 * @method  int substrCount(string $haystack, string $needle, int $offset = 0, int|null $length = null) 
 * @method  static  int substrCount(string $haystack, string $needle, int $offset = 0, int|null $length = null) 
 * @param \Inilim\String\Method\SubstrCount
 * 
 * @method  string|string[] substrReplace(string|string[] $string, string|string[] $replace, int|int[] $offset = 0, int|int[]|null $length = null) 
 * @method  static  string|string[] substrReplace(string|string[] $string, string|string[] $replace, int|int[] $offset = 0, int|int[]|null $length = null) 
 * @param \Inilim\String\Method\SubstrReplace
 * 
 * @method  string swap(array $map, string $subject) 
 * @method  static  string swap(array $map, string $subject) 
 * @param \Inilim\String\Method\Swap
 * 
 * @method  string take(string $string, int $limit) 
 * @method  static  string take(string $string, int $limit) 
 * @param \Inilim\String\Method\Take
 * 
 * @method  string title(string $value) 
 * @method  static  string title(string $value) 
 * @param \Inilim\String\Method\Title
 * 
 * @method  string toBase64(string $string) 
 * @method  static  string toBase64(string $string) 
 * @param \Inilim\String\Method\ToBase64
 * 
 * @method  string toStringOr(mixed $value, string $fallback) 
 * @method  static  string toStringOr(mixed $value, string $fallback) 
 * @param \Inilim\String\Method\ToStringOr
 * 
 * @method  string|false The named key or false. translatePhpUrlConstantToKey(int $constant) 
 * @method  static  string|false The named key or false. translatePhpUrlConstantToKey(int $constant) 
 * @param \Inilim\String\Method\TranslatePhpUrlConstantToKey
 * 
 * @method  string transliterate(string $string, string|null $unknown = '?', bool|null $strict = false) 
 * @method  static  string transliterate(string $string, string|null $unknown = '?', bool|null $strict = false) 
 * @param \Inilim\String\Method\Transliterate
 * 
 * @method  string trim(string $value, null|string $charlist = null) 
 * @method  static  string trim(string $value, null|string $charlist = null) 
 * @param \Inilim\String\Method\Trim
 * 
 * @method  string firstUpper(string $string) 
 * @method  static  string firstUpper(string $string) 
 * @param \Inilim\String\Method\Ucfirst
 * 
 * @method  string ucfirst(string $string) 
 * @method  static  string ucfirst(string $string) 
 * @param \Inilim\String\Method\Ucfirst
 * 
 * @method  string[] ucsplit(string $string) 
 * @method  static  string[] ucsplit(string $string) 
 * @param \Inilim\String\Method\Ucsplit
 * 
 * @method  string unixNewLines(string $s) 
 * @method  static  string unixNewLines(string $s) 
 * @param \Inilim\String\Method\UnixNewLines
 * 
 * @method  string unwrap(string $value, string $before, string|null $after = null) 
 * @method  static  string unwrap(string $value, string $before, string|null $after = null) 
 * @param \Inilim\String\Method\Unwrap
 * 
 * @method  string upper(string $value) 
 * @method  static  string upper(string $value) 
 * @param \Inilim\String\Method\Upper
 * 
 * @method  int wordCount(string $string, string|null $characters = null) 
 * @method  static  int wordCount(string $string, string|null $characters = null) 
 * @param \Inilim\String\Method\WordCount
 * 
 * @method  string wordWrap(string $string, int $characters = 75, string $break = "\n", bool $cut_long_words = false) 
 * @method  static  string wordWrap(string $string, int $characters = 75, string $break = "\n", bool $cut_long_words = false) 
 * @param \Inilim\String\Method\WordWrap
 * 
 * @method  string words(string $value, int $words = 100, string $end = '...') 
 * @method  static  string words(string $value, int $words = 100, string $end = '...') 
 * @param \Inilim\String\Method\Words
 * 
 * @method  string wrap(string $value, string $before, string|null $after = null) 
 * @method  static  string wrap(string $value, string $before, string|null $after = null) 
 * @param \Inilim\String\Method\Wrap
 * 
 */
class Str extends LazyMethodAbstract
{
    protected const PATH_TO_DIR = __DIR__ . '/Method';
    protected const NAMESPACE = 'Inilim\String\Method';
    protected const ALIAS = [
        'match'      => 'Match_',
        'firstUpper' => 'Ucfirst',
        'firstLower' => 'Lcfirst',
    ];
}
