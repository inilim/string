<?php

namespace Inilim\String;

use Closure;
use voku\helper\ASCII;

class Str
{
    /**
     * The cache of snake-cased words.
     *
     * @var array
     */
    // protected $snake_cache = [];

    /**
     * The cache of camel-cased words.
     *
     * @var array
     */
    // protected $camel_cache = [];

    /**
     * The cache of studly-cased words.
     *
     * @var array
     */
    // protected $studly_cache = [];

    /**
     * The callback that should be used to generate random strings.
     *
     * @var callable|null
     */
    protected $random_string_factory;

    /**
     * Remove all whitespace from both ends of a string.
     *
     * @param  string  $value
     * @param  string|null  $charlist
     * @return string
     */
    public function trim($value, $charlist = null)
    {
        if ($charlist === null) {
            return \preg_replace('~^[\s\x{FEFF}\x{200B}\x{200E}]+|[\s\x{FEFF}\x{200B}\x{200E}]+$~u', '', $value) ?? \trim($value);
        }

        return \trim($value, $charlist);
    }

    /**
     * Remove all whitespace from the beginning of a string.
     *
     * @param  string  $value
     * @param  string|null  $charlist
     * @return string
     */
    public function ltrim($value, $charlist = null)
    {
        if ($charlist === null) {
            return \preg_replace('~^[\s\x{FEFF}\x{200B}\x{200E}]+~u', '', $value) ?? \ltrim($value);
        }

        return \ltrim($value, $charlist);
    }

    /**
     * Remove all whitespace from the end of a string.
     *
     * @param  string  $value
     * @param  string|null  $charlist
     * @return string
     */
    public function rtrim($value, $charlist = null)
    {
        if ($charlist === null) {
            return \preg_replace('~[\s\x{FEFF}\x{200B}\x{200E}]+$~u', '', $value) ?? \rtrim($value);
        }

        return \rtrim($value, $charlist);
    }

    /**
     * Return the remainder of a string after the first occurrence of a given value.
     */
    public function after(string $subject, string $search): string
    {
        return $search === '' ? $subject : \array_reverse(\explode($search, $subject, 2))[0];
    }

    /**
     * Return the remainder of a string after the last occurrence of a given value.
     */
    public function afterLast(string $subject, string $search): string
    {
        if ($search === '') return $subject;

        $position = \strrpos($subject, $search);

        if ($position === false) return $subject;

        return \substr($subject, $position + \strlen($search));
    }

    /**
     * Transliterate a UTF-8 value to ASCII.
     */
    public function ascii(string $value, string $language = 'en'): string
    {
        return ASCII::to_ascii($value, $language);
    }

    /**
     * Transliterate a string to its closest ASCII representation.
     */
    public function transliterate(string $string, string|null $unknown = '?', bool|null $strict = false): string
    {
        return ASCII::to_transliterate($string, $unknown, $strict);
    }

    /**
     * Get the portion of a string before the first occurrence of a given value.
     */
    public function before(string $subject, string $search): string
    {
        if ($search === '') return $subject;

        $result = \strstr($subject, $search, true);

        return $result === false ? $subject : $result;
    }

    /**
     * Get the portion of a string before the last occurrence of a given value.
     */
    public function beforeLast(string $subject, string $search): string
    {
        if ($search === '') return $subject;
        $pos = \mb_strrpos($subject, $search);

        if ($pos === false) return $subject;
        return $this->substr($subject, 0, $pos);
    }

    /**
     * Get the portion of a string between two given values.
     */
    public function between(string $subject, string $from, string $to): string
    {
        if ($from === '' || $to === '') return $subject;

        return $this->beforeLast($this->after($subject, $from), $to);
    }

    /**
     * Get the smallest possible portion of a string between two given values.
     */
    public function betweenFirst(string $subject, string $from, string $to): string
    {
        if ($from === '' || $to === '') {
            return $subject;
        }

        return $this->before($this->after($subject, $from), $to);
    }

    /**
     * Convert a value to camel case.
     */
    public function camel(string $value): string
    {
        // if (isset($this->camel_cache[$value])) {
        // return $this->camel_cache[$value];
        // }

        // return $this->camel_cache[$value] = \lcfirst($this->studly($value));
        return \lcfirst($this->studly($value));
    }

    /**
     * Get the character at the specified index.
     */
    public function charAt(string $subject, int $index): string|false
    {
        $length = \mb_strlen($subject);

        if ($index < 0 ? $index < -$length : $index > $length - 1) {
            return false;
        }

        return \mb_substr($subject, $index, 1);
    }

    /**
     * Determine if a given string contains a given substring.
     * @param  string|iterable<string>  $needles
     */
    public function contains(string $haystack, string|iterable $needles, bool $ignore_case = false): bool
    {
        if ($ignore_case) $haystack = \mb_strtolower($haystack);

        if (!\is_iterable($needles)) $needles = (array) $needles;

        foreach ($needles as $needle) {
            if ($ignore_case) $needle = \mb_strtolower($needle);

            if ($needle !== '' && \str_contains($haystack, $needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Determine if a given string contains all array values.
     * @param  iterable<string>  $needles
     */
    public function containsAll(string $haystack, iterable $needles, bool $ignore_case = false): bool
    {
        foreach ($needles as $needle) {
            if (!$this->contains($haystack, $needle, $ignore_case)) {
                return false;
            }
        }

        return true;
    }

    /**
     * Convert the case of a string.
     */
    public function convertCase(string $string, int $mode = \MB_CASE_FOLD, ?string $encoding = 'UTF-8'): string
    {
        return \mb_convert_case($string, $mode, $encoding);
    }

    /**
     * Determine if a given string ends with a given substring.
     *
     * @param  string|iterable<string>  $needles
     */
    public function endsWith(string $haystack, string|iterable $needles): bool
    {
        if (!\is_iterable($needles)) $needles = (array) $needles;

        foreach ($needles as $needle) {
            if ((string) $needle !== '' && \str_ends_with($haystack, $needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Cap a string with a single instance of a given value.
     */
    public function finish(string $value, string $cap): string
    {
        $quoted = \preg_quote($cap, '/');

        return \preg_replace('/(?:' . $quoted . ')+$/u', '', $value) . $cap;
    }

    /**
     * Wrap the string with the given strings.
     */
    public function wrap(string $value, string $before, string|null $after = null): string
    {
        return $before . $value . ($after ??= $before);
    }

    /**
     * Unwrap the string with the given strings.
     */
    public function unwrap(string $value, string $before, string|null $after = null): string
    {
        if ($this->startsWith($value, $before)) {
            $value = $this->substr($value, $this->length($before));
        }

        if ($this->endsWith($value, $after ??= $before)) {
            $value = $this->substr($value, 0, -$this->length($after));
        }

        return $value;
    }

    /**
     * Determine if a given string matches a given pattern.
     *
     * @param  string|iterable<string>  $pattern
     */
    public function is(string|iterable $pattern, string $value): bool
    {
        if (!\is_iterable($pattern)) $pattern = [$pattern];

        foreach ($pattern as $pattern) {
            $pattern = (string) $pattern;

            // If the given value is an exact match we can of course return true right
            // from the beginning. Otherwise, we will translate asterisks and do an
            // actual pattern match against the two strings to see if they match.
            if ($pattern === $value) return true;

            $pattern = \preg_quote($pattern, '#');

            // Asterisks are translated into zero-or-more regular expression wildcards
            // to make it convenient to check if the strings starts with the given
            // pattern such as "library/*", making any string check convenient.
            $pattern = \str_replace('\*', '.*', $pattern);

            if (\preg_match('#^' . $pattern . '\z#u', $value) === 1) return true;
        }

        return false;
    }

    /**
     * Determine if a given string is 7 bit ASCII.
     */
    public function isAscii(string $value): bool
    {
        return ASCII::is_ascii($value);
    }

    /**
     * Determine if a given value is a valid URL.
     *
     * @param  mixed  $value
     */
    public function isUrl($value, array $protocols = []): bool
    {
        if (!\is_string($value)) return false;

        $protocol_list = empty($protocols)
            ? 'aaa|aaas|about|acap|acct|acd|acr|adiumxtra|adt|afp|afs|aim|amss|android|appdata|apt|ark|attachment|aw|barion|beshare|bitcoin|bitcoincash|blob|bolo|browserext|calculator|callto|cap|cast|casts|chrome|chrome-extension|cid|coap|coap\+tcp|coap\+ws|coaps|coaps\+tcp|coaps\+ws|com-eventbrite-attendee|content|conti|crid|cvs|dab|data|dav|diaspora|dict|did|dis|dlna-playcontainer|dlna-playsingle|dns|dntp|dpp|drm|drop|dtn|dvb|ed2k|elsi|example|facetime|fax|feed|feedready|file|filesystem|finger|first-run-pen-experience|fish|fm|ftp|fuchsia-pkg|geo|gg|git|gizmoproject|go|gopher|graph|gtalk|h323|ham|hcap|hcp|http|https|hxxp|hxxps|hydrazone|iax|icap|icon|im|imap|info|iotdisco|ipn|ipp|ipps|irc|irc6|ircs|iris|iris\.beep|iris\.lwz|iris\.xpc|iris\.xpcs|isostore|itms|jabber|jar|jms|keyparc|lastfm|ldap|ldaps|leaptofrogans|lorawan|lvlt|magnet|mailserver|mailto|maps|market|message|mid|mms|modem|mongodb|moz|ms-access|ms-browser-extension|ms-calculator|ms-drive-to|ms-enrollment|ms-excel|ms-eyecontrolspeech|ms-gamebarservices|ms-gamingoverlay|ms-getoffice|ms-help|ms-infopath|ms-inputapp|ms-lockscreencomponent-config|ms-media-stream-id|ms-mixedrealitycapture|ms-mobileplans|ms-officeapp|ms-people|ms-project|ms-powerpoint|ms-publisher|ms-restoretabcompanion|ms-screenclip|ms-screensketch|ms-search|ms-search-repair|ms-secondary-screen-controller|ms-secondary-screen-setup|ms-settings|ms-settings-airplanemode|ms-settings-bluetooth|ms-settings-camera|ms-settings-cellular|ms-settings-cloudstorage|ms-settings-connectabledevices|ms-settings-displays-topology|ms-settings-emailandaccounts|ms-settings-language|ms-settings-location|ms-settings-lock|ms-settings-nfctransactions|ms-settings-notifications|ms-settings-power|ms-settings-privacy|ms-settings-proximity|ms-settings-screenrotation|ms-settings-wifi|ms-settings-workplace|ms-spd|ms-sttoverlay|ms-transit-to|ms-useractivityset|ms-virtualtouchpad|ms-visio|ms-walk-to|ms-whiteboard|ms-whiteboard-cmd|ms-word|msnim|msrp|msrps|mss|mtqp|mumble|mupdate|mvn|news|nfs|ni|nih|nntp|notes|ocf|oid|onenote|onenote-cmd|opaquelocktoken|openpgp4fpr|pack|palm|paparazzi|payto|pkcs11|platform|pop|pres|prospero|proxy|pwid|psyc|pttp|qb|query|redis|rediss|reload|res|resource|rmi|rsync|rtmfp|rtmp|rtsp|rtsps|rtspu|s3|secondlife|service|session|sftp|sgn|shttp|sieve|simpleledger|sip|sips|skype|smb|sms|smtp|snews|snmp|soap\.beep|soap\.beeps|soldat|spiffe|spotify|ssh|steam|stun|stuns|submit|svn|tag|teamspeak|tel|teliaeid|telnet|tftp|tg|things|thismessage|tip|tn3270|tool|ts3server|turn|turns|tv|udp|unreal|urn|ut2004|v-event|vemmi|ventrilo|videotex|vnc|view-source|wais|webcal|wpid|ws|wss|wtai|wyciwyg|xcon|xcon-userid|xfire|xmlrpc\.beep|xmlrpc\.beeps|xmpp|xri|ymsgr|z39\.50|z39\.50r|z39\.50s'
            : \implode('|', $protocols);

        /*
         * This pattern is derived from Symfony\Component\Validator\Constraints\UrlValidator (5.0.7).
         *
         * (c) Fabien Potencier <fabien@symfony.com> http://symfony.com
         */
        $pattern = '~^
            (LARAVEL_PROTOCOLS)://                                 # protocol
            (((?:[\_\.\pL\pN-]|%[0-9A-Fa-f]{2})+:)?((?:[\_\.\pL\pN-]|%[0-9A-Fa-f]{2})+)@)?  # basic auth
            (
                ([\pL\pN\pS\-\_\.])+(\.?([\pL\pN]|xn\-\-[\pL\pN-]+)+\.?) # a domain name
                    |                                                 # or
                \d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}                    # an IP address
                    |                                                 # or
                \[
                    (?:(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){6})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:::(?:(?:(?:[0-9a-f]{1,4})):){5})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){4})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,1}(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){3})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,2}(?:(?:[0-9a-f]{1,4})))?::(?:(?:(?:[0-9a-f]{1,4})):){2})(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,3}(?:(?:[0-9a-f]{1,4})))?::(?:(?:[0-9a-f]{1,4})):)(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,4}(?:(?:[0-9a-f]{1,4})))?::)(?:(?:(?:(?:(?:[0-9a-f]{1,4})):(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9]))\.){3}(?:(?:25[0-5]|(?:[1-9]|1[0-9]|2[0-4])?[0-9])))))))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,5}(?:(?:[0-9a-f]{1,4})))?::)(?:(?:[0-9a-f]{1,4})))|(?:(?:(?:(?:(?:(?:[0-9a-f]{1,4})):){0,6}(?:(?:[0-9a-f]{1,4})))?::))))
                \]  # an IPv6 address
            )
            (:[0-9]+)?                              # a port (optional)
            (?:/ (?:[\pL\pN\-._\~!$&\'()*+,;=:@]|%[0-9A-Fa-f]{2})* )*          # a path
            (?:\? (?:[\pL\pN\-._\~!$&\'\[\]()*+,;=:@/?]|%[0-9A-Fa-f]{2})* )?   # a query (optional)
            (?:\# (?:[\pL\pN\-._\~!$&\'()*+,;=:@/?]|%[0-9A-Fa-f]{2})* )?       # a fragment (optional)
        $~ixu';

        return \preg_match(\str_replace('LARAVEL_PROTOCOLS', $protocol_list, $pattern), $value) > 0;
    }

    /**
     * Determine if a given value is a valid UUID.
     *
     * @param  mixed  $value
     */
    public function isUuid($value): bool
    {
        if (!\is_string($value)) return false;
        return \preg_match('/^[\da-f]{8}-[\da-f]{4}-[\da-f]{4}-[\da-f]{4}-[\da-f]{12}$/iD', $value) > 0;
    }

    /**
     * Determine if a given value is a valid ULID.
     *
     * @param  mixed  $value
     * @return bool
     */
    // public function isUlid($value)
    // {
    //     if (!\is_string($value)) {
    //         return false;
    //     }

    //     return Ulid::isValid($value);
    // }

    /**
     * Convert a string to kebab case.
     */
    public function kebab(string $value): string
    {
        return $this->snake($value, '-');
    }

    /**
     * Return the length of the given string.
     */
    public function length(string $value, string|null $encoding = 'UTF-8'): int
    {
        return \mb_strlen($value, $encoding);
    }

    /**
     * Limit the number of characters in a string.
     */
    public function limit(string $value, int $limit = 100, string $end = '...'): string
    {
        if (\mb_strwidth($value, 'UTF-8') <= $limit) {
            return $value;
        }

        return \rtrim(\mb_strimwidth($value, 0, $limit, '', 'UTF-8')) . $end;
    }

    /**
     * Convert the given string to lower-case.
     */
    public function lower(string $value): string
    {
        return \mb_strtolower($value, 'UTF-8');
    }

    /**
     * Limit the number of words in a string.
     */
    public function words(string $value, int $words = 100, string $end = '...'): string
    {
        \preg_match('/^\s*+(?:\S++\s*+){1,' . $words . '}/u', $value, $matches);

        if (!isset($matches[0]) || $this->length($value) === $this->length($matches[0])) {
            return $value;
        }

        return \rtrim($matches[0]) . $end;
    }

    /**
     * Masks a portion of a string with a repeated character.
     */
    public function mask(string $string, string $character, int $index, int|null $length = null, string $encoding = 'UTF-8'): string
    {
        if ($character === '') return $string;

        $segment = \mb_substr($string, $index, $length, $encoding);

        if ($segment === '') return $string;

        $strlen = \mb_strlen($string, $encoding);
        $startIndex = $index;

        if ($index < 0) {
            $startIndex = $index < -$strlen ? 0 : $strlen + $index;
        }

        $start      = \mb_substr($string, 0, $startIndex, $encoding);
        $segmentLen = \mb_strlen($segment, $encoding);
        $end        = \mb_substr($string, $startIndex + $segmentLen);

        return $start . \str_repeat(\mb_substr($character, 0, 1, $encoding), $segmentLen) . $end;
    }

    /**
     * Get the string matching the given pattern.
     */
    public function match(string $pattern, string $subject): string
    {
        \preg_match($pattern, $subject, $matches);

        if (!$matches) return '';

        return $matches[1] ?? $matches[0];
    }

    /**
     * Determine if a given string matches a given pattern.
     * @param  string|iterable<string>  $pattern
     */
    public function isMatch(string|iterable $pattern, string $value): bool
    {
        if (!\is_iterable($pattern)) $pattern = [$pattern];

        foreach ($pattern as $pattern) {
            $pattern = (string) $pattern;

            if (\preg_match($pattern, $value) === 1) return true;
        }

        return false;
    }

    /**
     * Pad both sides of a string with another.
     */
    public function padBoth(string $value, int $length, string $pad = ' '): string
    {
        if (\function_exists('mb_str_pad')) {
            return \mb_str_pad($value, $length, $pad, \STR_PAD_BOTH);
        }

        $short = \max(0, $length - \mb_strlen($value));
        $shortLeft = \floor($short / 2);
        $shortRight = \ceil($short / 2);

        return \mb_substr(\str_repeat($pad, $shortLeft), 0, $shortLeft) .
            $value .
            \mb_substr(\str_repeat($pad, $shortRight), 0, $shortRight);
    }

    /**
     * Pad the left side of a string with another.
     */
    public function padLeft(string $value, int $length, string $pad = ' '): string
    {
        if (\function_exists('mb_str_pad')) {
            return \mb_str_pad($value, $length, $pad, \STR_PAD_LEFT);
        }

        $short = \max(0, $length - \mb_strlen($value));

        return \mb_substr(\str_repeat($pad, $short), 0, $short) . $value;
    }

    /**
     * Pad the right side of a string with another.
     */
    public function padRight(string $value, int $length, string $pad = ' '): string
    {
        if (\function_exists('mb_str_pad')) {
            return \mb_str_pad($value, $length, $pad, \STR_PAD_RIGHT);
        }

        $short = \max(0, $length - \mb_strlen($value));

        return $value . \mb_substr(\str_repeat($pad, $short), 0, $short);
    }

    /**
     * Parse a Class[@]method style callback into class and method.
     * @return array<int, string|null>
     */
    public function parseCallback(string $callback, string|null $default = null): array
    {
        if ($this->contains($callback, "@anonymous\0")) {
            if ($this->substrCount($callback, '@') > 1) {
                return [
                    $this->beforeLast($callback, '@'),
                    $this->afterLast($callback, '@'),
                ];
            }

            return [$callback, $default];
        }

        return $this->contains($callback, '@') ? \explode('@', $callback, 2) : [$callback, $default];
    }

    /**
     * Find the multi-byte safe position of the first occurrence of a given substring in a string.
     */
    public function position(string $haystack, string $needle, int $offset = 0, string|null $encoding = 'UTF-8'): int|false
    {
        return \mb_strpos($haystack, $needle, $offset, $encoding);
    }

    /**
     * Generate a more truly "random" alpha-numeric string.
     */
    public function random(int $length = 16): string
    {
        return ($this->random_string_factory ?? function ($length) {
            $string = '';

            while (($len = \strlen($string)) < $length) {
                $size = $length - $len;

                $bytesSize = (int) \ceil($size / 3) * 3;

                $bytes = \random_bytes($bytesSize);

                $string .= \substr(\str_replace(['/', '+', '='], '', \base64_encode($bytes)), 0, $size);
            }

            return $string;
        })($length);
    }

    /**
     * Set the callable that will be used to generate random strings.
     */
    public function createRandomStringsUsing(callable|null $factory = null): void
    {
        $this->random_string_factory = $factory;
    }

    /**
     * Set the sequence that will be used to generate random strings.
     */
    public function createRandomStringsUsingSequence(array $sequence, callable|null $when_missing = null): void
    {
        $next = 0;

        $when_missing ??= function ($length) use (&$next) {
            $factory_cache = $this->random_string_factory;

            $this->random_string_factory = null;

            $random_string = $this->random($length);

            $this->random_string_factory = $factory_cache;

            $next++;

            return $random_string;
        };

        $this->createRandomStringsUsing(function ($length) use (&$next, $sequence, $when_missing) {
            if (\array_key_exists($next, $sequence)) {
                return $sequence[$next++];
            }

            return $when_missing($length);
        });
    }

    /**
     * Indicate that random strings should be created normally and not using a custom factory.
     */
    public function createRandomStringsNormally(): void
    {
        $this->random_string_factory = null;
    }

    /**
     * Repeat the given string.
     */
    public function repeat(string $string, int $times): string
    {
        return \str_repeat($string, $times);
    }

    /**
     * Replace the first occurrence of a given value in the string.
     */
    public function replaceFirst(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        $position = \strpos($subject, $search);

        if ($position !== false) {
            return \substr_replace($subject, $replace, $position, \strlen($search));
        }

        return $subject;
    }

    /**
     * Replace the first occurrence of the given value if it appears at the start of the string.
     */
    public function replaceStart(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        if ($this->startsWith($subject, $search)) {
            return $this->replaceFirst($search, $replace, $subject);
        }

        return $subject;
    }

    /**
     * Replace the last occurrence of a given value in the string.
     */
    public function replaceLast(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        $position = \strrpos($subject, $search);

        if ($position !== false) {
            return \substr_replace($subject, $replace, $position, \strlen($search));
        }

        return $subject;
    }

    /**
     * Replace the last occurrence of a given value if it appears at the end of the string.
     */
    public function replaceEnd(string $search, string $replace, string $subject): string
    {
        if ($search === '') return $subject;

        if ($this->endsWith($subject, $search)) {
            return $this->replaceLast($search, $replace, $subject);
        }

        return $subject;
    }

    /**
     * Replace the patterns matching the given regular expression.
     * @return string|string[]|null
     */
    public function replaceMatches(string $pattern, Closure|string $replace, array|string $subject, int $limit = -1): string|array|null
    {
        if ($replace instanceof Closure) {
            return \preg_replace_callback($pattern, $replace, $subject, $limit);
        }

        return \preg_replace($pattern, $replace, $subject, $limit);
    }

    /**
     * Replace a given value in the string sequentially with an array. |
     * 
     * $string = 'The event will take place between ? and ?'; |
     * $replaced = Str::replaceArray('?', ['8:30', '9:00'], $string); |
     *
     * @param  string[] $replace
     */
    public function replaceArray(string $search, array $replace, string $subject): string
    {
        // if ($replace instanceof \Traversable) {
        //     $replace = collect($replace)->all();
        // }

        $segments = \explode($search, $subject);
        $result = \array_shift($segments);

        foreach ($segments as $segment) {
            $result .= $this->toStringOr(\array_shift($replace) ?? $search, $search) . $segment;
        }

        return $result;
    }

    /**
     * Reverse the given string.
     */
    public function reverse(string $value): string
    {
        return \implode(\array_reverse(\mb_str_split($value)));
    }

    /**
     * Begin a string with a single instance of a given value.
     */
    public function start(string $value, string $prefix): string
    {
        $quoted = \preg_quote($prefix, '/');

        return $prefix . \preg_replace('/^(?:' . $quoted . ')+/u', '', $value);
    }

    /**
     * Convert the given string to upper-case.
     */
    public function upper(string $value): string
    {
        return \mb_strtoupper($value, 'UTF-8');
    }

    /**
     * Convert the given string to proper case.
     */
    public function title(string $value): string
    {
        return \mb_convert_case($value, \MB_CASE_TITLE, 'UTF-8');
    }

    /**
     * Convert the given string to proper case for each word.
     */
    public function headline(string $value): string
    {
        $parts = \explode(' ', $value);

        $parts = \sizeof($parts) > 1
            ? \array_map([$this::class, 'title'], $parts)
            : \array_map([$this::class, 'title'], $this->ucsplit(\implode('_', $parts)));

        $collapsed = $this->replace(['-', '_', ' '], '_', \implode('_', $parts));

        return \implode(' ', \array_filter(\explode('_', $collapsed)));
    }

    /**
     * Replace the given value in the given string.
     * @param  string|string[]  $search
     * @param  string|string[]  $replace
     * @param  string|string[]  $subject
     * @return string|string[]
     */
    public function replace(string|array $search, string|array $replace, string|array $subject, bool $case_sensitive = true): string|array
    {
        return $case_sensitive
            ? \str_replace($search, $replace, $subject)
            : \str_ireplace($search, $replace, $subject);
    }

    /**
     * Convert the given string to APA-style title case.
     *
     * See: https://apastyle.apa.org/style-grammar-guidelines/capitalization/title-case
     */
    public function apa(string $value): string
    {
        $minorWords = [
            'and', 'as', 'but', 'for', 'if', 'nor', 'or', 'so', 'yet', 'a', 'an',
            'the', 'at', 'by', 'for', 'in', 'of', 'off', 'on', 'per', 'to', 'up', 'via',
        ];

        $endPunctuation = ['.', '!', '?', ':', '—', ','];

        $words = \preg_split('/\s+/', $value, -1, \PREG_SPLIT_NO_EMPTY);

        $words[0] = \ucfirst(\mb_strtolower($words[0]));

        for ($i = 0; $i < \sizeof($words); $i++) {
            $lowercaseWord = \mb_strtolower($words[$i]);

            if (\str_contains($lowercaseWord, '-')) {
                $hyphenatedWords = \explode('-', $lowercaseWord);

                $hyphenatedWords = \array_map(function ($part) use ($minorWords) {
                    return (\in_array($part, $minorWords) && \mb_strlen($part) <= 3) ? $part : \ucfirst($part);
                }, $hyphenatedWords);

                $words[$i] = \implode('-', $hyphenatedWords);
            } else {
                if (
                    \in_array($lowercaseWord, $minorWords) &&
                    \mb_strlen($lowercaseWord) <= 3 &&
                    !($i === 0 || \in_array(\mb_substr($words[$i - 1], -1), $endPunctuation))
                ) {
                    $words[$i] = $lowercaseWord;
                } else {
                    $words[$i] = \ucfirst($lowercaseWord);
                }
            }
        }

        return \implode(' ', $words);
    }

    /**
     * Generate a URL friendly "slug" from a given string.
     * @param  array<string, string>  $dictionary
     */
    public function slug(string $title, string $separator = '-', string|null $language = 'en', array $dictionary = ['@' => 'at']): string
    {
        $title = $language ? $this->ascii($title, $language) : $title;

        // Convert all dashes/underscores into separator
        $flip = $separator === '-' ? '_' : '-';

        $title = \preg_replace('![' . \preg_quote($flip) . ']+!u', $separator, $title);

        // Replace dictionary words
        foreach ($dictionary as $key => $value) {
            $dictionary[$key] = $separator . $value . $separator;
        }

        $title = \str_replace(\array_keys($dictionary), \array_values($dictionary), $title);

        // Remove all characters that are not the separator, letters, numbers, or whitespace
        $title = \preg_replace('![^' . \preg_quote($separator) . '\pL\pN\s]+!u', '', $this->lower($title));

        // Replace all separator characters and whitespace by a single separator
        $title = \preg_replace('![' . \preg_quote($separator) . '\s]+!u', $separator, $title);

        return \trim($title, $separator);
    }

    /**
     * Convert a string to snake case.
     */
    public function snake(string $value, string $delimiter = '_'): string
    {
        // $key = $value;

        // if (isset($this->snake_cache[$key][$delimiter])) {
        // return $this->snake_cache[$key][$delimiter];
        // }

        if (!\ctype_lower($value)) {
            $value = \preg_replace('/\s+/u', '', \ucwords($value));

            $value = $this->lower(\preg_replace('/(.)(?=[A-Z])/u', '$1' . $delimiter, $value));
        }

        // return $this->snake_cache[$key][$delimiter] = $value;
        return $value;
    }

    /**
     * Remove all "extra" blank space from the given string.
     */
    public function squish(string $value): string
    {
        return \preg_replace('~(\s|\x{3164}|\x{1160})+~u', ' ', $this->trim($value));
    }

    /**
     * Determine if a given string starts with a given substring.
     * @param  string|iterable<string>  $needles
     */
    public function startsWith(string $haystack, string|iterable $needles): bool
    {
        if (!\is_iterable($needles)) $needles = [$needles];

        foreach ($needles as $needle) {
            if ((string) $needle !== '' && \str_starts_with($haystack, $needle)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Convert a value to studly caps case.
     */
    public function studly(string $value): string
    {
        // $key = $value;

        // if (isset($this->studly_cache[$key])) return $this->studly_cache[$key];

        $words = \explode(' ', $this->replace(['-', '_'], ' ', $value));

        $studly_words = \array_map(fn ($word) => $this->ucfirst($word), $words);

        // return $this->studly_cache[$key] = \implode($studly_words);
        return \implode($studly_words);
    }

    /**
     * Returns the portion of the string specified by the start and length parameters.
     */
    public function substr(string $string, int $start, int|null $length = null, string $encoding = 'UTF-8'): string
    {
        return \mb_substr($string, $start, $length, $encoding);
    }

    /**
     * Returns the number of substring occurrences.
     */
    public function substrCount(string $haystack, string $needle, int $offset = 0, int|null $length = null): int
    {
        if ($length !== null) {
            return \substr_count($haystack, $needle, $offset, $length);
        }

        return \substr_count($haystack, $needle, $offset);
    }

    /**
     * Replace text within a portion of a string.
     * @param  string|string[]  $string
     * @param  string|string[]  $replace
     * @param  int|int[]  $offset
     * @param  int|int[]|null  $length
     * @return string|string[]
     */
    public function substrReplace(string|array $string, string|array $replace, int|array $offset = 0, int|array|null $length = null): string|array
    {
        if ($length === null) $length = \strlen($string);

        return \substr_replace($string, $replace, $offset, $length);
    }

    /**
     * Swap multiple keywords in a string with other keywords.
     */
    public function swap(array $map, string $subject): string
    {
        return \strtr($subject, $map);
    }

    /**
     * Take the first or last {$limit} characters of a string.
     */
    public function take(string $string, int $limit): string
    {
        if ($limit < 0) {
            return $this->substr($string, $limit);
        }

        return $this->substr($string, 0, $limit);
    }

    /**
     * Make a string's first character lowercase.
     */
    public function lcfirst(string $string): string
    {
        return $this->lower($this->substr($string, 0, 1)) . $this->substr($string, 1);
    }

    /**
     * Make a string's first character uppercase.
     */
    public function ucfirst(string $string): string
    {
        return $this->upper($this->substr($string, 0, 1)) . $this->substr($string, 1);
    }

    /**
     * Split a string into pieces by uppercase characters.
     * @return string[]
     */
    public function ucsplit(string $string): array
    {
        return \preg_split('/(?=\p{Lu})/u', $string, -1, \PREG_SPLIT_NO_EMPTY);
    }

    /**
     * Get the number of words a string contains.
     */
    public function wordCount(string $string, string|null $characters = null): int
    {
        return \str_word_count($string, 0, $characters);
    }

    /**
     * Wrap a string to a given number of characters.
     */
    public function wordWrap(string $string, int $characters = 75, string $break = "\n", bool $cut_long_words = false): string
    {
        return \wordwrap($string, $characters, $break, $cut_long_words);
    }

    /**
     * Remove all strings from the casing caches.
     */
    // public function flushCache(): void
    // {
    // $this->snake_cache  = [];
    // $this->camel_cache  = [];
    // $this->studly_cache = [];
    // }

    /**
     * Remove the given string(s) if it exists at the end of the haystack.
     *
     * @param  string|array  $needle
     */
    function chopEnd(string $subject, $needle): string
    {
        foreach ((array) $needle as $n) {
            if (\str_ends_with($subject, $n)) {
                return \substr($subject, 0, -\strlen($n));
            }
        }

        return $subject;
    }

    /**
     * Remove the given string(s) if it exists at the start of the haystack.
     *
     * @param  string|array  $needle
     */
    function chopStart(string $subject, $needle): string
    {
        foreach ((array) $needle as $n) {
            if (\str_starts_with($subject, $n)) {
                return \substr($subject, \strlen($n));
            }
        }

        return $subject;
    }

    /**
     * Convert the given value to a string or return the given fallback on failure.
     * @param  mixed  $value
     */
    private function toStringOr($value, string $fallback): string
    {
        try {
            return (string) $value;
        } catch (\Throwable $e) {
            return $fallback;
        }
    }
}
