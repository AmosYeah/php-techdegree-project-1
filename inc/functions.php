<?php
// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array
// quotes copied from https://blog.hubspot.com/sales/famous-quotes
$quoteArray = [
    ["quote" => "The greatest glory in living lies not in never falling, but in rising every time we fall.",
    "source" => "Nelson Mandela",
    "citation" => "speech",
    "year" => 1960 ],
    ["quote" => "The way to get started is to quit talking and begin doing.",
    "source" => "Walt Disney",],
    ["quote" => "Your time is limited, so don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking.",
    "source" => "Steve Jobs",],
    ["quote" => "If life were predictable it would cease to be life, and be without flavor.",
    "source" => "Eleanor Roosevelt",],
    ["quote" => "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough.",
    "source" => "Oprah Winfrey",],
];


// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array) {
    if (isset($array)) {
        $rand = rand(0, sizeof($array)-1);
        return $array[$rand];
    } else {
        return "";
    }
}


// Create the printQuote funtion and name it printQuote
function printQuote($array) {
    $targetArray = getRandomQuote($array);
    if (isset($targetArray)) {
        $quote = $targetArray["quote"];
        $source = $targetArray["source"];

        if (isset($targetArray["citation"])) {
            $citationSpan = "<span class=\"citation\">" . $targetArray["citation"] . "</span>";
        } else {
            $citationSpan = "";
        }
        if (isset($targetArray["year"])) {
            $yearSpan = "<span class=\"year\">" . $targetArray["year"] . "</span>";
        } else {
            $yearSpan = "";
        }
        $html = <<< EOT
        <p class="quote"> $quote </p>
        <p class="source"> $source
            $citationSpan
            $yearSpan
        </p>
        EOT;
        return $html;
    }
}

// code adopted from https://stackoverflow.com/questions/5614530/generating-a-random-hex-color-code-with-php
function genRandomColor() {
    // mt_rand is similar to rand, but more random, rand() was made alias for mt_rand() since PHP 7.1
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
}
?>